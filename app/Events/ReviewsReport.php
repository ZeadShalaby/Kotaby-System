<?php

namespace App\Events;

use App\Models\Reviews;
use App\Traits\MethodTrait;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ReviewsReport
{
    use Dispatchable, InteractsWithSockets, SerializesModels, MethodTrait;

    /**
     * Create a new event instance.
     */
    public function __construct(Reviews $review)
    {
        //
        $this->addReport($review);

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

    function addReport($ReviewReport)
    {
        $comment = $ReviewReport->comment;
        unset($ReviewReport['comment']);  //? Remove the 'comment' key from the object
        $ReviewReport->report()->create([
            'comment' => $comment,
            'report' => 1
        ]);
    }
}
