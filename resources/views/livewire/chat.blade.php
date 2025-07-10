<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @foreach ($this->users as $user)
                    <div tabindex="0" role="button" wire:click="selectUser({{ $user->id }})">{{ $user->name }}</div>
                @endforeach
            </div>
            <div class="col-md-6">
                @if ($this->selectedUser)
                    <div>Chat with: {{ $this->selectedUser->name }}</div>
                @endif

                <div>
                    @foreach ($messages as $message)
                        <div>
                            <strong>{{ $message->sender->name }}:</strong> {{ $message->message }}
                        </div>
                    @endforeach
                </div>

                <div>
                    <form wire:submit="sendMessage">
                        <input type="text" placeholder="Type your message here..." wire:model="newMessage">
                        <button wire:click="sendMessage">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
