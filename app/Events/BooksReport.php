<?php

namespace App\Events;

use Carbon\Carbon;
use App\Models\Books;
use App\Models\Tweets;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BooksReport
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $bookReport;
    public function __construct(Books $book)
    {
        //
        $this -> bookReport = $book;
        $this -> updateVieweer($this -> bookReport);

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



    function updateVieweer($bookReport){
        if($bookReport->report == 4){
            $bookReport->report_at = Carbon::now();
        }
        $bookReport -> report = $bookReport -> report + 1;
        $bookReport -> save();
    }
    
}
