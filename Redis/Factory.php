<?php

namespace IgniteKit\Backports\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string|null  $name
     * @return \IgniteKit\Backports\Redis\Connections\Connection
     */
    public function connection($name = null);
}
