<?php

namespace App\Events;

use App\Models\Books;
use App\Models\Tweets;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BookVieweer
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $views;
    public function __construct(Books $book)
    {
        //
        $this -> views = $book;
        $this -> updateVieweer($this -> views);

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



    function updateVieweer($books){
        
        $books -> view = $books -> view + 1;
        $books -> save();
    }
    

}
