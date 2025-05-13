console.log('livewire loaded');
// chatbox animation
document.addEventListener('livewire:init', () => {
    Livewire.on('newMessage', (event) => {
        let blink = $('.spinner-grow');
        if (event[0] == true) {
            blink.removeClass('d-none');
        } else {
            blink.addClass('d-none');
        }
    });
});
document.addEventListener('livewire:init', () => {
    Livewire.on('chatSelected', (event) => {
        rowChatToBottom();
    });
});

function rowChatToBottom() {
    const observer = new MutationObserver((mutations, obs) => {
        const target = document.querySelector('.chat-body .simplebar-content-wrapper');
        if (!target) {
            console.warn('Chat container not found for observer.');
            return;
        }
        target.scrollTop = target.scrollHeight;
        obs.disconnect(); // only scroll once
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true,
    });
}
$(window).resize(function() {
    if (window.innerWidth > 786) {
        $('.chat_list_container').show();
        $('.chat_box_container').show();
    }
});

$(document).on('click', '.users', function() {
    let user = $(this).data('data');
    console.log(user.gender);
    let female =`https://api.dicebear.com/9.x/lorelei/svg?seed=Eden&beard[]&earrings[]&eyebrows=variant07&eyes=variant09,variant21&glasses[]&hair=variant41,variant31&head=variant04&mouth=happy01&nose=variant04&backgroundColor=ffdfbf`;
    let male =`https://api.dicebear.com/9.x/lorelei/svg?seed=Jack&beard[]&earrings[]&eyebrows[]&eyes=variant15&glasses[]&hair=variant43&head=variant04&mouth=happy14&nose=variant03&backgroundColor=b6e3f4`;
    let image = $('.chatUserImage');
    let name = $('.chatUserName');
    let flag = `https://flagsapi.com/${user.country}/flat/32.png`;
    let userflag = $('.chatUserFlag');
    let age = $('.chatUserAge');
    let gender = $('.chatUserGender');
     if(user.gender == 'Male'){
        image.attr('src', male);
    }else{
        image.attr('src', female);
    }
    name.text(user.name);
    userflag.attr('src', flag);
    age.text(user.age +' Yrs');
    gender.text(user.gender);

    if( $('#chat-wrapper').hasClass('d-none') ){
        $('#chat-wrapper').removeClass('d-none');
    }else{
            $('#chat-wrapper').removeClass('remove-animate-chat-wrapper');
    }
    $('.chat-wrapper').addClass('animate-chat-wrapper');
});

$(document).on('click', '.return', function() {

    $('#chat-wrapper').removeClass('animate-chat-wrapper');
    $('#chat-wrapper').addClass('remove-animate-chat-wrapper');

    $('.single-li').removeClass('li-pop-animation');
    $('.single-li').addClass('remove-li-pop-animation');

    Livewire.dispatch('resetChat');
    if (window.innerWidth < 768) {
        $('.chat_list_container').show();
        $('.chat_box_container').hide();
    }
});
$(document).on('click', '#editBtn', function() {
    $('#profile').addClass('d-none');
    $('#profile-form').removeClass('d-none');
});
$(document).on('click', '#cancelBtn', function() {
    $('#profile').removeClass('d-none');
    $('#profile-form').addClass('d-none');
});
// automatic logout
// Auto logout after 30 minutes of inactivity (1800000 ms)
const inactivityTime = 10 * 60 * 1000;
let logoutTimer;

function resetTimer() {
    clearTimeout(logoutTimer);
    logoutTimer = setTimeout(logoutUser, inactivityTime);
}

function logoutUser() {
    // Livewire.dispatch('logoutUser');
    // window.location.href = '/logout'; // Laravel's default logout route
    // console.log('User logged out due to inactivity');
    // $('#logoutBtn').click();
}

// Reset timer on these events
['mousemove', 'keypress', 'click', 'scroll'].forEach(event => {
    document.addEventListener(event, resetTimer);
});

// Start the timer when page loads
resetTimer();


//chatbox
document.addEventListener('livewire:init', () => {
    Livewire.on('rowChatToBottom', () => {
        rowChatToBottom();
    });
});


document.addEventListener('livewire:init', () => {
    Livewire.on('markAsRead', () => {
        var value = document.querySelectorAll('.status_tick');
        value.forEach(element, index => {
            element.classList.remove('bi-check2');
            element.classList.add('bi-check2-all', 'text-primary');
        });
    });
});
// window.addEventListener('markAsRead', event => {
//     var value = document.querySelectorAll('.status_tick');
//     value.forEach(element, index => {
//         element.classList.remove('bi-check2');
//         element.classList.add('bi-check2-all', 'text-primary');
//     })
// });

$(document).on('click', '.return-btn', function() {
    $('#chat-wrapper').removeClass('animate-chat-wrapper');
    $('#chat-wrapper').addClass('remove-animate-chat-wrapper');
    $('.single-li').removeClass('li-pop-animation');
    $('.single-li').addClass('remove-li-pop-animation');

    Livewire.dispatch('resetChat');
    if (window.innerWidth < 768) {
        $('.chat_list_container').show();
        $('.chat_box_container').hide();
    }
});



//create chat
$('.users').on('click', function() {
    let chat = $('.chat-nav');
    let user = $('.user-nav');
    let chatTab = $('.chat-tab');
    let userTab = $('.user-tab');
    user.removeClass('active').attr('aria-selected', false).attr('tabindex', '-1');
    chat.attr('aria-selected', true).removeAttr('tabindex').addClass('active');
    userTab.removeClass('active show');
    chatTab.addClass('active show');
});
