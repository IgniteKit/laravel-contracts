<?php

namespace IgniteKit\Backports\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string|null  $name
     * @return \IgniteKit\Backports\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
