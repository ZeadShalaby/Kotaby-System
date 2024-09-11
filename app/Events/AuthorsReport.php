<?php

namespace App\Events;

use App\Models\User;
use App\Traits\MethodTrait;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AuthorsReport
{
    use Dispatchable, InteractsWithSockets, SerializesModels, MethodTrait;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user)
    {
        //
        $this->addReport($user);
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

    function addReport($AuthorReport)
    {
        $comment = $AuthorReport->comment;
        unset($AuthorReport['comment']);  //? Remove the 'comment' key from the object
        $AuthorReport->report()->create([
            'comment' => $comment,
            'report' => 1
        ]);
    }
}
