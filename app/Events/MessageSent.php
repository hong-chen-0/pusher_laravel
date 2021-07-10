<?php
 
namespace App\Events;
 

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
 
class MessageSent implements ShouldBroadcast
{
    use SerializesModels;
 
    public $info;
 
    /**
     * PusherEvent constructor.
     */
    public function __construct($info)
    {
        $this->info = $info;
    }
 
    /**
     * 指定广播频道(对应前端的频道)
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['my-channel'];
    }
 
    /**
     * 指定广播事件(对应前端的事件)
     * @return string
     */
    public function broadcastAs()
    {
        return 'my-event';
    }
 
    /**
     * 获取广播数据,默认是广播的public属性的数据
     */
    public function broadcastWith()
    {
        return ['info' => $this->info];
    }
}