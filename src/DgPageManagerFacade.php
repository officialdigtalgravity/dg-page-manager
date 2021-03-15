<?php

namespace Officialdigtalgravity\DgPageManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Officialdigtalgravity\DgPageManager\Skeleton\SkeletonClass
 */
class DgPageManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dg-page-manager';
    }
}
