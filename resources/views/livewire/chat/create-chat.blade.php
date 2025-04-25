

    <!-- Start contacts -->
    <div class="tab-pane overflow-hidden user-tab" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
        <!-- Start Contact content -->
        <div  >
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" class="rounded me-2" alt="logo"
                            height="25">
                        <strong class="me-auto">CHATIZO</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Contact Added Successfully.
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center mb-4 p-4 pb-0">
                <div class="flex-grow-1">
                    <h5 class="mb-0">Active Users</h5>
                </div>
                <div class="flex-shrink-0">
                    <div class="d-flex align-items-center gap-2">
                        <div data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Add New Contact">

                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-lists p-4 pt-0 mainbutton" data-simplebar style="overflow-y: auto; scroll-behavior: smooth; scrollbar-width: none;">


                <ul class="list-unstyled chat-list chat-all-groups" id="userList" >
                    @forelse($users as $user)
                        <li class="active py-2 border-bottom border-dashed users" id="contact-1">
                            <div class="pointer"  wire:click='checkconversation({{$user->id}})'>
                            {{-- <div class="pointer"  > --}}
                                <div class="d-flex align-items-center">
                                    <div class="chat-user-img online align-self-center me-2 ms-0">
                                        <img class="rounded-circle square-xxs" alt=""
                                       src="@if($user->gender == 'Female')https://api.dicebear.com/9.x/lorelei/svg?seed=Eden&beard[]&earrings[]&eyebrows=variant07&eyes=variant09,variant21&glasses[]&hair=variant41,variant31&head=variant04&mouth=happy01&nose=variant04&backgroundColor=ffdfbf @else https://api.dicebear.com/9.x/lorelei/svg?seed=Jack&beard[]&earrings[]&eyebrows[]&eyes=variant15&glasses[]&hair=variant43&head=variant04&mouth=happy14&nose=variant03&backgroundColor=b6e3f4 @endif" style="filter: invert(0);">
                                        {{-- <span class="user-status"></span> --}}
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="text-truncate text-body mb-0" >{{$user->name}} </h6>
                                        <span style="font-size: 10px">{{$user->age}} Yrs</span>
                                    </div>
                                    <template>
                                        <div class="ms-auto">
                                            <span class="badge bg-danger-subtle text-danger rounded p-1"></span>
                                        </div>
                                    </template>
                                    <div class="ms-auto">

                                        <span class="badge   rounded ">
                                            <img src="https://flagsapi.com/{{$user->country}}/flat/32.png">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @empty
                        nothing
                    @endforelse
                </ul>

            </div>
            <!-- end contact lists -->
        </div>
        <script>
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
        </script>
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('usersUpdated', () => {
                    // Force Livewire to re-evaluate DOM
                    // Livewire.rescan();
                    console.log('usersUpdated');
                    $("#userList").load(location.href+' #userList');

                });
            });
            </script>
        <!-- Start Contact content -->
        <!-- End Add New Contact Modal -->
    </div> <!-- End contacts -->

