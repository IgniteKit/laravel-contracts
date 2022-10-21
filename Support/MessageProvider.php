<?php

namespace IgniteKit\Backports\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \IgniteKit\Backports\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
