<?php

namespace Nhwin304\AdminThemes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nhwin304\AdminThemes\AdminThemes
 */
class AdminThemes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nhwin304\AdminThemes\AdminThemes::class;
    }
}
