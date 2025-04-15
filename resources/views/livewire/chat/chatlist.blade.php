<div>
    <div class="chatlist_header">
        <div class="title">
            chat
        </div>
        <div class="img_container">
            <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{ auth()->user()->name }}"
                alt="">
        </div>
    </div>
    <div class="chatlist_body" style="overflow-y: auto; height: 550px;">






        @if ($conversations->count() > 0)
        @if ($singleConversation)
        <div class="chatlist_item" data-id="{{ $singleConversation->id }}"
            data-receiver_id="{{ $this->getChatUserInstance($singleConversation, $name = 'id') }}"
            wire:key="{{ $singleConversation->id }}"
            wire:click="chatUserSelected( {{ $singleConversation->id }},{{ $this->getChatUserInstance($singleConversation, $name = 'id') }})">




            <div class="chatlist_img_container">
                <img src="https://ui-avatars.com/api/?name={{ $this->getChatUserInstance($singleConversation, $name = 'name') }}"
                    alt="">
            </div>
            <div class="chatlist_info">
                <div class="top_row">
                    <div
                        class="list_username
                @if ($singleConversation->message->last()?->receiver_id == auth()->id()) @if ($singleConversation->message->last()->read == 0)
                        fw-bold @endif
                @endif
                ">
                        {{ $this->getChatUserInstance($singleConversation, $name = 'name') }}

                    </div>

                </div>
                <div class="bottom_row">
                    <div
                        class="message_body text-truncate
                        @if ($singleConversation->message->last()?->receiver_id == auth()->id()) @if ($singleConversation->message->last()->read == 0)
                        fw-bold
                        @else
                        text-secondary @endif
                @endif
                    ">
                        {{ ($singleConversation->message->last()?->sender_id == auth()->id() ? 'You: ' : '') . $singleConversation->message->last()?->body }}
                        <span class="date">
                            {{  $singleConversation->message->last()?->created_at->shortAbsoluteDiffForHumans() }}</span>

                    </div>
                    @if ($singleConversation->message->last()?->receiver_id == auth()->id())
                        @if ($singleConversation->message->last()->read == 0)
                            <div class="unread_counts badge rounded-pill bg-primary text-light"
                                style="margin-top:3px;">
                                {{ $singleConversation->message->where('read', 0)->count() }}
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endif
            @foreach ($conversations as $conversation)
                @if ($conversation->message->last())
                    <div class="chatlist_item" data-id="{{ $conversation->id }}"
                        data-receiver_id="{{ $this->getChatUserInstance($conversation, $name = 'id') }}"
                        wire:key="{{ $conversation->id }}"
                        wire:click="chatUserSelected( {{ $conversation->id }},{{ $this->getChatUserInstance($conversation, $name = 'id') }})">




                        <div class="chatlist_img_container">
                            <img src="https://ui-avatars.com/api/?name={{ $this->getChatUserInstance($conversation, $name = 'name') }}"
                                alt="">
                        </div>
                        <div class="chatlist_info">
                            <div class="top_row">
                                <div
                                    class="list_username
                                @if ($conversation->message->last()?->receiver_id == auth()->id()) @if ($conversation->message->last()->read == 0)
                                        fw-bold @endif
                                @endif
                                ">
                                    {{ $this->getChatUserInstance($conversation, $name = 'name') }}

                                </div>

                            </div>
                            <div class="bottom_row">
                                <div
                                    class="message_body text-truncate
                                        @if ($conversation->message->last()?->receiver_id == auth()->id()) @if ($conversation->message->last()->read == 0)
                                        fw-bold
                                        @else
                                        text-secondary @endif
                                @endif
                                    ">
                                    {{ ($conversation->message->last()?->sender_id == auth()->id() ? 'You: ' : '') . $conversation->message->last()?->body }}
                                    <span class="date">
                                        {{ ' · ' . $conversation->message->last()?->created_at->shortAbsoluteDiffForHumans() }}</span>

                                </div>
                                @if ($conversation->message->last()?->receiver_id == auth()->id())
                                    @if ($conversation->message->last()->read == 0)
                                        <div class="unread_counts badge rounded-pill bg-primary text-light"
                                            style="margin-top:3px;">
                                            {{ $conversation->message->where('read', 0)->count() }}
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        @else
        <div class="no_conversation">
            No conversation found
        </div>

        @endif
    </div>


    <script>
        window.addEventListener('mainChat', event => {
            console.log('Processing userSelected event:', event.detail);
            Livewire.dispatch('mainConvo', {
                conversation: event.detail.conversation,
                receiver_id: event.detail.receiver_id
            });
        });
    </script>



</div>
