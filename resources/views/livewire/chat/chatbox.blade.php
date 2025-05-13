<div>


        {{-- chatbody --}}
        <div class="chat-body p-3 position-relative " id="chatScrollContainer">
            <div class="simplebar-wrapper">
                <div class="simplebar-mask">
                    <div class="simplebar-offset">
                        <div class="simplebar-content-wrapper" style="overflow: auto; height:90%;">
                            <div class="simplebar-content">
                                <div class="messages position-relative" id="messagesContainer">
                                    @if ($messages)
                                        @foreach ($messages as $message)
                                            @if ($auth->id == $message->sender_id)
                                                <div class="message-item outgoing-message mt-2 mb-2">
                                                    <div class="d-flex gap-2 align-items-center flex-wrap">
                                                        <div>
                                                            <div class="message-content  me-2">{{ $message->body }}
                                                            </div>
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
                                                            <div class="message-content ms-2"> {{ $message->body }}
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="time text-start font-12 mt-1 ms-2">
                                                        <span> {{ $message->created_at->format('m: i a') }} </span>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                    loading....
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->



        <div class="bg-body footer p-3 border-top">
            <div class="d-flex align-items-center gap-3">
                <div class="flex-fill">
                    <form wire:submit.prevent="$dispatch('sendMessage', { data:$wire.body})">
                        <div class="input-group">
                            <input class="form-control bg-light " wire:model='body' type="text" required
                                placeholder="Enter Your Message ...">
                            <button class="input-group-text btn btn-primary" type="submit">
                                <i class="bi bi-send-fill font-18"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




</div>
