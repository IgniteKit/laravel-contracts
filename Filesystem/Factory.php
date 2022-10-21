<?php

namespace IgniteKit\Backports\Contracts\Filesystem;

interface Factory
{
    /**
     * Get a filesystem implementation.
     *
     * @param  string|null  $name
     * @return \IgniteKit\Backports\Contracts\Filesystem\Filesystem
     */
    public function disk($name = null);
}
