<?php

namespace ZanPHP\NovaFoundation\Foundation\Protocol;

use ZanPHP\NovaFoundation\Foundation\Traits\StructSpecManager;

abstract class TStruct
{
    /**
     * Spec mgr
     */
    use StructSpecManager;

    /**
     * TStruct constructor.
     */
    public function __construct()
    {
        $this->staticSpecInjecting();
    }
}