<div>





    {{-- new code here --}}
    @if ($selectedConversation)
        <div class="chat-wrapper show" id="chat-wrapper">
            <nav class="navbar navbar-expand p-sm-3 z-3">
                <div class="d-flex align-items-center gap-2">
                    <button class="navbar-toggler text-primary shadow-none border-0 p-0 fs-2 return-btn" type="button"
                        >
                        <i class="bi bi-arrow-left-short align-middle"></i>
                    </button>
                    <img id="chatUserImg"
                        src="@if ($receiverInstance->gender == 'Female') https://api.dicebear.com/9.x/lorelei/svg?seed=Eden&beard[]&earrings[]&eyebrows=variant07&eyes=variant09,variant21&glasses[]&hair=variant41,variant31&head=variant04&mouth=happy01&nose=variant04&backgroundColor=ffdfbf @else https://api.dicebear.com/9.x/lorelei/svg?seed=Jack&beard[]&earrings[]&eyebrows[]&eyes=variant15&glasses[]&hair=variant43&head=variant04&mouth=happy14&nose=variant03&backgroundColor=b6e3f4 @endif"
                        alt="user image" class="img-fluid square-xs rounded-circle" data-bs-toggle="offcanvas"
                        href="#profileSlider" role="button">
                    <span id="chatGroupImg"
                        class="square-title bg-primary-subtle text-primary square-xs rounded-circle text-center lh-37 d-none">#</span>
                    <div>
                        <h6 class="mb-0" data-bs-toggle="offcanvas" href="#profileSlider"><a
                                href="javascript:void(0);" class="text-body"
                                id="chatUserName">{{ $receiverInstance->name }} <img
                                    src="https://flagsapi.com/{{ $receiverInstance->country }}/flat/32.png"
                                    width="20"></a>
                        </h6>
                        <p class="text-muted font-12 mb-0" style="font-size: 12px;"> {{ $receiverInstance->age }} Yrs
                        </p>
                    </div>
                </div>
                <div class="ms-auto">
                    <ul class="navbar-nav gap-2">
                        {{-- <li>
                            <a href="javascript:void(0);" class="btn btn-small fs-5 btn-success p-3" aria-current="page"
                                data-bs-toggle="modal" data-bs-target="#audioModal"><i
                                    class="font-14 bi bi-telephone-fill"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-small fs-5 btn-warning p-3" aria-current="page"
                                data-bs-toggle="modal" data-bs-target="#videoModal"><i
                                    class="font-14 bi bi-camera-video-fill"></i></a>
                        </li> --}}
                        <li class="return" style="cursor: pointer;font-size: 25px;">
                            <div>
                                <i class="bi bi-x " style=""></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="profileSlider">
                <div class="offcanvas-body">
                    <div class="offcanvas-header p-0 pb-3 justify-content-between">
                        <h6 class="mb-0">Profile</h6>
                        <button type="button" class="btn bg-body-tertiary btn-small p-0" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                    <div class="text-center">
                        <div class="mx-auto mt-2 rounded-circle square-xxl bg-light">
                            <img src="@if ($receiverInstance->gender == 'Female') https://api.dicebear.com/9.x/lorelei/svg?seed=Eden&beard[]&earrings[]&eyebrows=variant07&eyes=variant09,variant21&glasses[]&hair=variant41,variant31&head=variant04&mouth=happy01&nose=variant04&backgroundColor=ffdfbf @else https://api.dicebear.com/9.x/lorelei/svg?seed=Jack&beard[]&earrings[]&eyebrows[]&eyes=variant15&glasses[]&hair=variant43&head=variant04&mouth=happy14&nose=variant03&backgroundColor=b6e3f4 @endif" alt=""
                                class="img-fluid square-xxl rounded-circle p-1 bg-primary-subtle">
                        </div>
                        <h5 class="mt-3" id="profileUserName">{{$receiverInstance->name}}</h5>
                        <p class="text-muted font-14 mb-0">Online</p>

                    </div>
                    <div class="mt-3">
                        <p class="mb-3 text-primary">Personal Information</p>
                        <h6 class="mb-2 pb-1 fw-medium d-flex align-items-center gap-2">
                            <span>Name :</span>
                            <span class="fs-6 text-body fw-medium">{{$receiverInstance->name}} </span>
                        </h6>
                        <h6 class="mb-2 pb-1 fw-medium d-flex align-items-center gap-2">
                            <span>Age : </span>
                            <span class="fs-6 text-body fw-medium">{{$receiverInstance->age}} </span>
                        </h6>
                        <h6 class="mb-2 pb-1 fw-medium d-flex align-items-center gap-2">
                            <span>Gender :</span>
                            <span class="fs-6 text-body fw-medium">{{$receiverInstance->gender}} </span>
                        </h6>
                        <h6 class="mb-2 pb-1 fw-medium d-flex align-items-center gap-2">
                            <span>Country :</span>
                            @php
                                $code = $receiverInstance->country;
                                // $response = Http::get("https://restcountries.com/v3.1/alpha/{$code}");

                                $cntName ='hh';
                                // $response->successful()
                                //     ? $response->json()[0]['name']['common']
                                //     : strtoupper($code); // fallback to code if failed
                            @endphp
                            <span class="fs-6 text-body fw-medium">{{$cntName}}
                                <img
                                    src="https://flagsapi.com/{{ $receiverInstance->country }}/flat/32.png"
                                    width="20">
                            </span>
                        </h6>






                    </div>
                </div>
            </div>
            {{-- chatbody --}}
            <div class="chat-body p-3 position-relative " id="chatScrollContainer">
                <div class="simplebar-wrapper" style="margin: -16px;overflow:auto !important;">
                    <div class="messages position-relative" id="messagesContainer">
                      @if($messages)
                      @foreach ($messages as $message)
                      @if ($auth->id == $message->sender_id)
                          <div class="message-item outgoing-message mt-2 mb-2">
                              <div class="d-flex gap-2 align-items-center flex-wrap">
                                  <div>
                                      <div class="message-content  me-2">{{ $message->body }}</div>
                                  </div>
                              </div>
                              <div class="time text-end font-12 mt-1">
                                  <span>{{ $message->created_at->format('m: i a') }}</span>
                                  @php
                                      if ($message->user->id === $auth->id) {
                                          if ($message->read == 0) {
                                              echo '<i class="bi bi-check2-all  status_tick"></i>';
                                          } else {
                                              echo '<i class="bi bi-check2-all text-primary "></i>';
                                          }
                                      }
                                  @endphp
                              </div>
                          </div>
                      @else
                          <div class="message-item incoming-message mt-2 mb-2">
                              <div class="d-flex gap-2 align-items-center flex-wrap">
                                  <div>
                                      <div class="message-content ms-2"> {{ $message->body }}</div>
                                  </div>

                              </div>
                              <div class="time text-start font-12 mt-1 ms-2">
                                  <span> {{ $message->created_at->format('m: i a') }} </span>

                              </div>
                          </div>
                      @endif
                  @endforeach
                      @endif
                    </div>
                </div>


            </div>
            <!-- Footer -->
            <div class="bg-body footer p-3 border-top">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-fill">
                        <form wire:submit.prevent="$dispatch('sendMessage', { data:$wire.body})" >
                            <div class="input-group">
                                <input class="form-control bg-light font-14" wire:model='body' type="text"
                                    required autofocus placeholder="Enter Your Message ...">
                                <button class="input-group-text btn btn-primary" type="submit">
                                    <i class="bi bi-send-fill font-18"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script>
        window.addEventListener('rowChatToBottom', () => {
            const chatbox = document.querySelector('.simplebar-wrapper');
            if (!chatbox) return console.error('Chatbox not found');

            requestAnimationFrame(() => {
                chatbox.scrollTop = chatbox.scrollHeight;
            });

            // Observe new messages and scroll automatically
            const observer = new MutationObserver(() => {
                console.log(chatbox.scrollHeight);
                chatbox.scrollTop = chatbox.scrollHeight;
            });

            observer.observe(chatbox, {
                childList: true,
                subtree: true
            });

            // Stop observing after 2 seconds
            // setTimeout(() => observer.disconnect(), 2000);
        });
        $(document).on('click', '.return', function() {

            Livewire.dispatch('resetChat');
        });
        $(document).on('click', '.return-btn', function() {

            Livewire.dispatch('resetChat');
        });

        window.addEventListener('markAsRead', event => {
            var value = document.querySelectorAll('.status_tick');
            value.forEach(element, index => {
                element.classList.remove('bi-check2');
                element.classList.add('bi-check2-all', 'text-primary');
            })
        })
    </script>

</div>
