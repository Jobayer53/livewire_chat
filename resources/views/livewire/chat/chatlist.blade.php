<div>

    @php
        $scroll = false;
    @endphp
    <div class="tab-pane active show overflow-hidden" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
        <div class="d-flex align-items-center mb-4 p-4 pb-0">
            <div class="flex-grow-1">
                <h5 class="mb-0">Chats</h5>
            </div>
            <div class="flex-shrink-0">
                <div class="d-flex align-items-center gap-2">
                    <div data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Add New Chat">
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-all-list p-4 pt-0"
            style=" overflow-y: auto;
    scroll-behavior: smooth;
    scrollbar-width: none; ">
            <div>
                <!-- Start chat-message-list -->
                <div class="chat-message-list">
                    <ul class="list-unstyled chat-list chat-all-groups">
                        @if ($singleConversation)
                        <li class="active py-3 border-bottom border-dashed"id="contact-1"
                            data-id="{{ $singleConversation->id }}"
                            data-receiver_id="{{ $receiverInstance->id}}"
                            wire:key="{{ $singleConversation->id }}"
                            wire:click="chatUserSelected( {{ $singleConversation->id }},{{ $receiverInstance->id }})">
                            <div class="pointer">
                                <div class="d-flex align-items-center">
                                    <div class="chat-user-img online align-self-center me-2 ms-0">

                                        <img class="rounded-circle square-xxs" alt=""
                                            src="@if ($receiverInstance->gender == 'Female') https://api.dicebear.com/9.x/lorelei/svg?seed=Eden&beard[]&earrings[]&eyebrows=variant07&eyes=variant09,variant21&glasses[]&hair=variant41,variant31&head=variant04&mouth=happy01&nose=variant04&backgroundColor=ffdfbf @else https://api.dicebear.com/9.x/lorelei/svg?seed=Jack&beard[]&earrings[]&eyebrows[]&eyes=variant15&glasses[]&hair=variant43&head=variant04&mouth=happy14&nose=variant03&backgroundColor=b6e3f4 @endif">
                                        <span class="user-status"></span>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h6 class="text-truncate text-body mb-0">
                                            {{ $receiverInstance->name }}
                                        </h6>

                                    </div>

                                    <div class="ms-auto">
                                        <span
                                            class="badge bg-primary-subtle text-primary rounded p-1">New</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                        @if ($conversations->count() > 0)
                            @foreach ($conversations as $conversation)

                                    @php
                                        $scroll = true;
                                    @endphp
                                    <li class="active py-3 border-bottom border-dashed"id="contact-1"
                                        data-id="{{ $conversation->id }}"
                                        data-receiver_id="{{$this->getChatUserInstance($conversation,$name = 'id') }}"
                                        wire:key="{{ $conversation->id }}"
                                        wire:click="chatUserSelected( {{ $conversation->id }},{{$this->getChatUserInstance($conversation,$name = 'id') }})">
                                        <div class="pointer">
                                            <div class="d-flex align-items-center">
                                                <div class="chat-user-img online align-self-center me-2 ms-0">
                                                    @php
                                                        $gender = $this->getChatUserInstance($conversation,$name = 'gender');

                                                    @endphp
                                                    <img class="rounded-circle square-xxs" alt=""
                                                        src="@if ($gender == 'Female') https://api.dicebear.com/9.x/lorelei/svg?seed=Eden&beard[]&earrings[]&eyebrows=variant07&eyes=variant09,variant21&glasses[]&hair=variant41,variant31&head=variant04&mouth=happy01&nose=variant04&backgroundColor=ffdfbf @else https://api.dicebear.com/9.x/lorelei/svg?seed=Jack&beard[]&earrings[]&eyebrows[]&eyes=variant15&glasses[]&hair=variant43&head=variant04&mouth=happy14&nose=variant03&backgroundColor=b6e3f4 @endif">
                                                    <span class="user-status" style="background-color: {{$this->getChatUserInstance($conversation,$name = 'is_online') == false ? '#ddd': ''}}"></span>
                                                </div>
                                                <div class="overflow-hidden">
                                                    <h6 class="text-truncate text-body mb-0">
                                                        {{-- {{ $this->getChatUserInstance($conversation,$name = 'name') }} --}}
                                                        {{$this->getChatUserInstance($conversation,$name = 'name')}}

                                                    </h6>
                                                    <span
                                                        class=" @if ($conversation->message->last()?->receiver_id == $auth->id) @if ($conversation->message->last()->read == 0)fw-bold text-secondary @else text-dark @endif @endif"
                                                        style="font-size: 12px">




                                                        {{ ($conversation->message->last()?->sender_id == $auth->id ? 'You: ' : '') . $conversation->message->last()?->body }}
                                                        {{ ' · ' . $conversation->message->last()?->created_at->shortAbsoluteDiffForHumans() }}</span>
                                                </div>

                                                @if ($conversation->message->last()?->receiver_id == $auth->id)
                                                    @if ($conversation->message->last()->read == 0)
                                                        <div class="ms-auto">
                                                            <span
                                                                class="badge bg-primary-subtle text-primary rounded p-1">
                                                                {{ $conversation->message->where('read', 0)->count() }}
                                                            </span>
                                                        </div>

                                                    @endif
                                                @endif

                                            </div>
                                        </div>
                                    </li>

                            @endforeach


                        @endif
                        @if ($scroll == false && $singleConversation == null)
                            <div class="no_conversation text-center mt-5" style="font-size: 12px" >

                                <p><a class="text-primary" style="cursor:pointer;" @click=" document.querySelector('#pills-contacts-tab')?.click();">Click here</a> to start chat.</p>
                            </div>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>








    {{-- <script>
        window.addEventListener('mainChat', event => {
            console.log('Processing userSelected event:', event.detail);
            Livewire.dispatch('mainConvo', {
                conversation: event.detail.conversation,
                receiver_id: event.detail.receiver_id
            });
        });
    </script> --}}



</div>
