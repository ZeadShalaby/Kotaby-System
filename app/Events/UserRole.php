<?php

namespace App\Events;

use Carbon\Carbon;
use App\Models\User;
use App\Enums\GuardEnums;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserRole
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $info;
    public function __construct(User $user)
    {
        // todo pass the code and gmail in value gmail , code to insert code in data //
        $this->info = $user;
        if ($user->role != GuardEnums::ADMIN->value) {
            $this->changeRole($this->info);
        } else {
        }
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }

    // todo add new code in your data to this email //
    public function changeRole($info)
    {
        $info->role = GuardEnums::AUTHOR->value;
        $info->save();
    }
}
