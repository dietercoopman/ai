<?php

namespace Dietercoopman\Ai\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dietercoopman\Ai\Ai
 */
class Ai extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dietercoopman\Ai\Ai::class;
    }
}
