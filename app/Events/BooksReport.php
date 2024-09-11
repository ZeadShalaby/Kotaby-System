<?php

namespace App\Events;

use Carbon\Carbon;
use App\Models\Books;
use App\Models\Tweets;
use App\Traits\MethodTrait;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BooksReport
{
    use Dispatchable, InteractsWithSockets, SerializesModels, MethodTrait;

    public function __construct(Books $book)
    {
        //
        $this->addReport($book);

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




    function addReport($bookReport)
    {
        if ($bookReport->report == 4) {
            $this->AddReport($bookReport, $bookReport->comment);
        }
        $bookReport->report = $bookReport->report + 1;
        $bookReport->save();
    }

}
