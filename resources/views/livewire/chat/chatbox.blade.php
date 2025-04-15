<div>
    <style>

    </style>

    @if ($selectedConversation)
        <div class="chatbox_header">
            <div class="return">
                <i class="bi bi-arrow-left"></i>
            </div>
            <div class="img_container">
                <img src="https://ui-avatars.com/api/?name={{ $receiverInstance->name }}" alt="">
            </div>
            <div class="name">
                {{ $receiverInstance->name }}
            </div>
            <div class="info">
                <div class="info-item">

                </div>
            </div>
        </div>
    @endif

    <div class="chatbox_body" id="chatboxBody">
        @if ($selectedConversation)
            @foreach ($messages as $message)
                <div wire:key="{{ $message->id }}" data-message-id="{{ $message->id }}"
                    class="msg_body {{ auth()->id() == $message->sender_id ? 'msg_body_me' : 'msg_body_receiver' }} " style="max-width:80%; width: 80%; max-width:max-content;">
                    {{ $message->body }}
                    <div class="msg_body_footer">
                        <div class="date">
                            {{ $message->created_at->format('m: i a') }}
                        </div>
                        <div class="read">
                            @php
                                if($message->user->id === auth()->id()){
                                    if($message->read  == 0){
                                        echo '<i class="bi bi-check2 status_tick"></i>';
                                    }else{
                                        echo '<i class="bi bi-check2-all text-primary "></i>';
                                    }
                                }
                            @endphp

                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="no_conversation p-5 m-auto">
                No conversation found
            </div>
        @endif
    </div>


    <script>
        window.addEventListener('rowChatToBottom', () => {
            const chatbox = document.querySelector('.chatbox_body');
            const msgbox = document.querySelector('.msg_body');
            if (!msgbox) return;

            // First, scroll immediately
            requestAnimationFrame(() => {
                chatbox.scrollTop = chatbox.scrollHeight;
            });

            // Observe new messages and scroll automatically
            const observer = new MutationObserver(() => {
                chatbox.scrollTop = chatbox.scrollHeight;
            });

            observer.observe(chatbox, {
                childList: true,
                subtree: true
            });

            // Stop observing after 2 seconds
            setTimeout(() => observer.disconnect(), 2000);
        });
        $(document).on('click', '.return', function(){
            Livewire.dispatch('resetChat');
        });

        window.addEventListener('markAsRead', event=>{
            var value = document.querySelectorAll('.status_tick');
            value.forEach(element, index=>{
                element.classList.remove('bi-check2');
                element.classList.add('bi-check2-all', 'text-primary');
            })
        })
    </script>




</div>
