"use strict";

var chatUserImgEle = document.getElementById("chatUserImg");
var chatGroupImgEle = document.getElementById("chatGroupImg");
var chatUserNameEle = document.getElementById("chatUserName");
var profileUserNameEle = document.getElementById("profileUserName");
var messageUser;
var chatWrapper = document.getElementById("chat-wrapper");

function fetchData(url) {
  return {
    sortedData: [],
    filterData: [],
    initialize() {
      fetch(url)
        .then((response) => {
          if (!response.ok) {
            throw new Error("Network response was not ok");
          }
          return response.json();
        })
        .then((data) => {
          this.sortedData = data;
          this.filterData = data;
        })
        .catch((error) => {
          console.error("There was a problem with the fetch operation:", error);
        });
    },
    searchData(query) {
      this.sortedData = this.filterData.filter((item) => {
        if (item.name) {
          return item.name.toLowerCase().includes(query.toLowerCase());
        } else {

          return item.contacts.some((contact) =>
            contact.name.toLowerCase().includes(query.toLowerCase())
          );
        }
      });
    },
    openChat(name, type, image = null) {
      openChatPage(name, type, image);
    },
  };
}

function fetchContactData() {
  return {
    first_name: "",
    last_name: "",
    sortedData: [],
    filterData: [],
    error: null,
    initialize() {
      fetch("assets/json/contacts.json")
        .then((response) => {
          if (!response.ok) {
            throw new Error("Network response was not ok");
          }
          return response.json();
        })
        .then((data) => {
          this.sortedData = data;
          this.filterData = data;
          this.$dispatch("contactdata", this.sortedData);
        })
        .catch((error) => {
          console.error("There was a problem with the fetch operation:", error);
        });
    },

    addContact() {
      if (this.first_name !== "" && this.last_name !== "") {
        // Construct the new contact object
        const newContact = {
          name: `${this.first_name} ${this.last_name}`,
          image: "assets/images/user/user-dummy.jpg", // Replace with the actual image path
        };

        // Find the appropriate group to add the new contact
        const firstLetter = newContact.name.charAt(0).toUpperCase();
        const groupIndex = this.sortedData.findIndex(
          (group) => group.title === firstLetter
        );
        if (groupIndex !== -1) {
          this.sortedData[groupIndex].contacts.push(newContact);
        } else {
          // If the group for the first letter doesn't exist, create it
          this.sortedData.push({
            title: firstLetter,
            contacts: [newContact],
          });
        }

        // Reset input fields and error message
        this.first_name = "";
        this.last_name = "";
        this.error = null;

        // hide modal
        var modalCloseBtn = document
          .getElementById("createNewContactModal")
          ?.querySelector("button[data-bs-dismiss='modal']");
        modalCloseBtn.click();

        // Dispatch event to update chat interface
        this.$dispatch('contactAddedcontact', { updatedData: this.sortedData });

        // show toast
        const toastLiveExample = document.getElementById("liveToast");
        const toastBootstrap =
          bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastBootstrap.show();
      } else {
        this.error = "First name or Last name are required";
      }
    },
    searchData(query) {
      this.sortedData = this.filterData.filter((item) => {
        if (item.name) {
          return item.name.toLowerCase().includes(query.toLowerCase());
        } else {
          return item.contacts.some((contact) =>
            contact.name.toLowerCase().includes(query.toLowerCase())
          );
        }
      });
    },
    removeContact(title, name) {
      let group = this.sortedData.find(group => group.title === title);
      if (group) {
          group.contacts = group.contacts.filter(contact => contact.name !== name);
      }
      return this.sortedData;
  },
    openChat(name, type, image = null) {
      openChatPage(name, type, image);
    },
    editContact(contact) {
      // Set edit mode for the clicked contact
      this.sortedData.forEach(group => {
        group.contacts.forEach(c => {
          c.editMode = (c === contact);
          c.newName = c.name; // Initialize newName with current name
        });
      });
    },

    saveEditedContact(contact) {
      if (contact.newName.trim() !== '') {
        contact.name = contact.newName.trim();
        contact.editMode = false;
      }
    },
  };
}

function fetchChatData() {
  return {
    first_name: "",
    last_name: "",
    sortedData: [],
    filterData: [],
    error: null,
    initialize() {
      if(this.sortedData.length == 0)
        fetch("assets/json/chat.json")
          .then((response) => {
            if (!response.ok) {
              throw new Error("Network response was not ok");
            }
            return response.json();
          })
          .then((data) => {
            this.sortedData = data;
            this.filterData = data;

            this.$dispatch('chatdata' , this.sortedData)
          })
          .catch((error) => {
            console.error("There was a problem with the fetch operation:", error);
          });
        else {
          this.filterData = this.sortedData;
        }
    },
    addContact() {
      if (this.first_name !== "" && this.last_name !== "") {
        const newContact = {
          id: `contact-${this.sortedData.length + 1}`,
          type: "chat",
          name: `${this.first_name} ${this.last_name}`,
          image: "assets/images/user/user-dummy.jpg",
          status: "online"
        };

        this.sortedData.push(newContact);

        this.filterData = this.sortedData; // Update filterData
        this.first_name = "";
        this.last_name = "";
        this.error = null;

        // Hide modal
        var modalCloseBtn = document
          .getElementById("createNewChatModal")
          ?.querySelector("button[data-bs-dismiss='modal']");
        modalCloseBtn.click();

        // Show toast
        const toastLiveExample = document.getElementById("liveToast");
        const toastBootstrap =
          bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastBootstrap.show();

        // Dispatch event to update chat interface
        this.$dispatch('contactAdded', { updatedData: this.sortedData });

      } else {
        this.error = "First name or Last name are required";
      }
    },
    searchData(query) {
      this.sortedData = this.filterData.filter((item) => {
        if (item.name) {
          return item.name.toLowerCase().includes(query.toLowerCase());
        } else {
          return item.contacts.some((contact) =>
            contact.name.toLowerCase().includes(query.toLowerCase())
          );
        }
      });
    },
    openChat(name, type, image = null) {
      openChatPage(name, type, image);
    },
  };
}

function fetchCallData() {
  return {
    first_name: "",
    last_name: "",
    sortedData: [],
    filterData: [],
    error: null,
    initialize() {
      if(this.sortedData.length == 0)
        fetch("assets/json/calls.json")
          .then((response) => {
            if (!response.ok) {
              throw new Error("Network response was not ok");
            }
            return response.json();
          })
          .then((data) => {
            this.sortedData = data;
            this.filterData = data;

            this.$dispatch('calldata' , this.sortedData)
          })
          .catch((error) => {
            console.error("There was a problem with the fetch operation:", error);
          });
        else {
          this.filterData = this.sortedData;
        }
    },
    addContact() {
      if (this.first_name !== "" && this.last_name !== "") {
        const newContact = {
          name: `${this.first_name} ${this.last_name}`,
          image: "assets/images/user/user-dummy.jpg",
         timestamp: "Yesterday, 10:03AM",
        action: "Video Call",
        type: ["recieved", "incoming"]
        };

        this.sortedData.unshift(newContact);

        this.initialize();
        this.first_name = "";
        this.last_name = "";
        this.error = null;

        // Hide modal
        var modalCloseBtn = document
          .getElementById("createNewCallModal")
          ?.querySelector("button[data-bs-dismiss='modal']");
        modalCloseBtn.click();

        // Show toast
        const toastLiveExample = document.getElementById("liveToast");
        const toastBootstrap =
          bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastBootstrap.show();

        this.$dispatch('callAdded', { updatedData: this.sortedData });

      } else {
        this.error = "First name or Last name are required";
      }
    },
    searchData(query) {
      this.sortedData = this.filterData.filter((item) => {
        if (item.name) {
          return item.name.toLowerCase().includes(query.toLowerCase());
        } else {
          return item.contacts.some((contact) =>
            contact.name.toLowerCase().includes(query.toLowerCase())
          );
        }
      });
    },
    openChat(name, type, image = null) {
      openChatPage(name, type, image);
    },
  };
}

function fetchMessages() {
  return {
    sortedData: [],
    filterData: [],
    message: "",
    initialize() {
      fetch("assets/json/messages.json")
        .then((response) => {
          if (!response.ok) {
            throw new Error("Network response was not ok");
          }
          return response.json();
        })
        .then((data) => {
          this.sortedData = data;
          this.filterData = data;
        })
        .catch((error) => {
          console.error("There was a problem with the fetch operation:", error);
        });
        this.showReplyCard;
    },

    showReplyCard:false,
    replyText:'',
    showMsgReply  :false,


 ReplyChat(content) {
  console.log(content , "reply contact");
  document.getElementsByClassName("replyCard")[0].classList.remove("d-none");
  if (content) {
    this.showReplyCard = true;
    this.replyText = content;
  }else {
    this.showReplyCard = true;
    this.replyText = "Images"
  }

  var replyElement = document.querySelector('.reply');
  if (replyElement) {
      replyElement.innerHTML = this.replyText;
  }else{
    replyElement.innerHTML = "Images"
  }

},
    sendMessage() {
      if (this.message != "" && this.replyText == "") {
        const messageData = {
          id: this.sortedData.length + 1,
          messageType: "outgoing-message",
          content: this.message,
          time: getCurrentTime(),
          user: {
            avatar: "assets/images/user/user-5.png",
            name: "Bella Cote",
          },
        };
        this.sortedData.push(messageData);
        this.message = "";

        scrollEl();
      }else if (this.replyText != "" && this.message != "") {
        this.showReplyCard = true;
        this.showMsgReply = true;
        const messageData = {
          id: this.sortedData.length + 1,
          messageType: "outgoing-message",
          content: this.message,
          time: getCurrentTime(),
          user: {
            avatar: "assets/images/user/user-5.png",
            name: "Bella Cote",
          },
          replyText: this.replyText
        };

        this.sortedData.push(messageData);
        this.message = "";
        document.getElementsByClassName("replyCard")[0].classList.add("d-none");

        scrollEl();
      }
    },
    deleteMessage(id) {
      const index = this.sortedData.findIndex((item) => item.id === id);
      if (index !== -1) {
        this.sortedData.splice(index, 1);
      }
    },
  };
}

function scrollEl() {
  setTimeout(function () {
    var chatWrapper = document
        .getElementById("chat-wrapper")
        .querySelector(".chat-body .simplebar-content-wrapper"),
      chatInner = document.getElementsByClassName("messages")[0]
        ? document
            .getElementById("chat-wrapper")
            .getElementsByClassName("messages")[0].scrollHeight -
          window.innerHeight +
          335
        : 0;
    chatInner &&
      chatWrapper.scrollTo({
        top: chatInner,
        behavior: "smooth",
      });
  }, 200);
}

function getCurrentTime() {
  const now = new Date();
  let hours = now.getHours();
  let minutes = now.getMinutes();
  let ampm = hours >= 12 ? "PM" : "AM";

  hours = hours % 12;
  hours = hours ? hours : 12; // Convert midnight (0 hours) to 12 AM

  // Add leading zero to minutes if necessary
  minutes = minutes < 10 ? "0" + minutes : minutes;

  const currentTime = hours + ":" + minutes + " " + ampm;
  return currentTime;
}

function showClass() {
  chatWrapper.classList.remove("show");
}

function init() {
  scrollEl();
}

function openChatPage(name, type, image) {
  chatUserNameEle.innerHTML = name;
  profileUserNameEle.innerHTML = name;
  localStorage.setItem("chatType", type);
  window.dispatchEvent(new CustomEvent('type', { detail: { type: type , name: name} }));
  if (type === "chat") {
    chatGroupImgEle.classList.add("d-none");
    chatUserImgEle.classList.remove("d-none");

    chatUserImgEle.src = image;

    messageUser = document.querySelectorAll(".message-avatar .avatar img");
    if (messageUser) {
      messageUser.forEach((ele) => {
        ele.src = image;
      });
    }
  } else {
    chatGroupImgEle.classList.remove("d-none");
    chatUserImgEle.classList.add("d-none");
  }

  if (window.innerWidth < 992) {
    chatWrapper.classList.add("show");
  }
}

function settingProfileForm() {
  return {
      editMode: false,
      formData: {
          name: 'Harris Welsh',
          email: 'DEMO@gmail.com',
          contact: '+251 2548 639',
          location: 'Germany / Berlin'
      },
      originalData: {
        name: 'Harris Welsh',
        email: 'DEMO@gmail.com',
        contact: '+251 2548 639',
        location: 'Germany / Berlin'
      },
      errors: {},
      initializeFormData() {
          this.originalData = { ...this.formData };
      },
      validate() {
          this.errors = {};
          if (!this.formData.name) this.errors.name = true;
          if (!this.formData.email) this.errors.email = true;
          if (!this.formData.contact) this.errors.contact = true;
          if (!this.formData.location) this.errors.location = true;
          return Object.keys(this.errors).length === 0;
      },
      saveChanges() {
          if (this.validate()) {
              // Simulate saving changes (you can add actual saving logic here)
               this.originalData.name = this.formData.name ;
               this.originalData.email =this.formData.email ;
               this.originalData.contact = this.formData.contact;
               this.originalData.location = this.formData.location ;

              this.editMode = false;
          }
      },
      cancelEdit() {
          // Reset formData to originalData when canceling
          this.formData = {
              name: this.originalData.name,
              email: this.originalData.email,
              contact: this.originalData.contact,
              location: this.originalData.location
          };
          this.editMode = false;
          this.errors = {};
      }
  };
}

init();
