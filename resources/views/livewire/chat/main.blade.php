<div>
    <div class="chat_container">
        <div class="chat_list_container">
            @livewire('chat.chatlist')
        </div>
        <div class="chat_box_container">
            @livewire('chat.chatbox')
            @livewire('chat.send-message')
        </div>
    </div>
    {{-- <script>
        window.addEventListener('chatSelected', event => {
            if (window.innerWidth < 768) {
                $('.chat_list_container').hide();
                $('.chat_box_container').show();
            }
            const observer = new MutationObserver((mutations) => {
                const chatboxBody = $('')[0];
                const msgbox = $('')[0];
                if (msgbox) {
                    console.log(chatboxBody.scrollHeight);
                    console.log(chatboxBody.scrollTop);
                    chatboxBody.scrollTop = chatboxBody.scrollHeight;
                    observer.disconnect();
                }
            });
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        });
        $(window).resize(function() {
            if (window.innerWidth > 786) {
                $('.chat_list_container').show();
                $('.chat_box_container').show();
            }
        });
        $(document).on('click', '.return', function() {
            if (window.innerWidth < 768) {
                $('.chat_list_container').show();
                $('.chat_box_container').hide();
            }
        });
    </script> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Event handler for .return elements
        $('.return').on('click', function() {
            console.log('clicked');

            // To get the class of the clicked element
            var elementClass = $(this).attr('class');
            console.log('Element class:', elementClass);

            // If you specifically want the 'return' class
            var hasReturnClass = $(this).hasClass('return');
            console.log('Has return class:', hasReturnClass);
        });
    });
    </script> --}}

</div>
