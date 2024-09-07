<?php

namespace App\Events;

use App\Models\Books;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class DownloadBooks
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $booksdownload;
    public function __construct(Books $book)
    {
        //
        $this -> booksdownload = $book;
        $this -> updateDownload($this ->booksdownload);

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



    function updateDownload($booksdownload){
       
        $booksdownload ->download = $booksdownload ->download + 1;
        $booksdownload ->save();
    }
    
}
