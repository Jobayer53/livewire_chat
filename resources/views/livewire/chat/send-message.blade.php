<div>
    {{-- @if ($selectedConversation)
    <form  wire:submit.prevent="sendMessage" action="">
        <div class="chatbox_footer">
            <div class="custom_form_group">
                <input wire:model='body' type="text" class="control" required autofocus >
                <button type="submit" class="submit">Send</button>
            </div>
        </div>
    </form>
    @endif --}}
{{-- @if ($selectedConversation)

<div class="bg-body footer p-3 border-top">
    <div class="d-flex align-items-center gap-3">
        <div class="flex-fill">
            <form  wire:submit.prevent="sendMessage" action="">
            <div class="input-group">
                <input class="form-control bg-light font-14"
                wire:model='body' type="text"  required autofocus placeholder="Enter Your Message ..."
              >
                <button class="input-group-text btn btn-primary" type="submit">
                    <i class="bi bi-send-fill font-18"></i>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
@endif --}}

        <div class="bg-body footer p-3 border-top">
            <div class="d-flex align-items-center gap-3">
                <div class="flex-fill">
                    <form wire:submit.prevent="sendMessage">
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
