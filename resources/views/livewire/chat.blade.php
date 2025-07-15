<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 border-end p-0" style="height: 500px; overflow-y: auto;">
                <div class="list-group list-group-flush">
                    @foreach ($this->users as $user)
                        <button type="button"
                            class="list-group-item list-group-item-action {{ $this->selectedUser && $this->selectedUser->id === $user->id ? 'active' : '' }}"
                            wire:click="selectUser({{ $user->id }})">
                            {{ $user->name }}
                        </button>
                    @endforeach
                </div>
            </div>
            <div class="col-md-8 d-flex flex-column" style="height: 500px;">
                <div class="border-bottom py-2 px-3 bg-light">
                    @if ($this->selectedUser)
                        <strong>Chat with: {{ $this->selectedUser->name }}</strong>
                    @else
                        <span class="text-muted">Select a user to start chatting</span>
                    @endif
                </div>
                <div class="flex-grow-1 overflow-auto px-3 py-2" style="background: #f8f9fa;">
                    @foreach ($messages as $message)
                        <div class="mb-2">
                            <span
                                class="fw-bold {{ $message->sender->id === auth()->id() ? 'text-primary' : 'text-secondary' }}">
                                {{ $message->sender->name }}:
                            </span>
                            <span>{{ $message->message }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="border-top p-3 bg-white">
                    <div class="typing-indicator text-muted"></div>
                    <form class="d-flex gap-2" wire:submit="sendMessage">
                        <input type="text" class="form-control" placeholder="Type your message here..."
                            wire:model.live="newMessage" required>
                        <button type="submit" class="btn btn-primary" wire:target="sendMessage">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('livewire:initialized', function() {
        Livewire.on('userTyping', (event) => {
            console.log(event);

            window.Echo.private(`chat.${event.selectedUserID}`).whisper('typing', {
                userID: event.userID,
                userName: event.userName
            });

            window.Echo.private(`chat.{{ $loginID }}`).listenForWhisper('typing', (event) => {
                var t = document.querySelector('.typing-indicator');
                t.innerHTML = `${event.userName} is typing...`;
                console.log(`${event.userName} is typing...`);

                setTimeout(() => {
                    t.innerHTML = '';
                }, 3000); // Clear typing indicator after 3 seconds
            });
        });
    });
</script>
