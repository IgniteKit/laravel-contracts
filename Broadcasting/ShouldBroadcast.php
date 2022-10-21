<?php

namespace IgniteKit\Backports\Contracts\Broadcasting;

interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \IgniteKit\Backports\Broadcasting\Channel|\IgniteKit\Backports\Broadcasting\Channel[]
     */
    public function broadcastOn();
}
