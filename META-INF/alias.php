<?php

return [
    \ZanPHP\NovaFoundation\Foundation\Protocol\TException::class => \Kdt\Iron\Nova\Foundation\Protocol\TException::class,
    \ZanPHP\NovaFoundation\Foundation\Protocol\TStruct::class => \Kdt\Iron\Nova\Foundation\Protocol\TStruct::class,

    \ZanPHP\NovaFoundation\Foundation\Traits\InstanceManager::class => \Kdt\Iron\Nova\Foundation\Traits\InstanceManager::class,
    \ZanPHP\NovaFoundation\Foundation\Traits\ServiceSpecManager::class => \Kdt\Iron\Nova\Foundation\Traits\ServiceSpecManager::class,
    \ZanPHP\NovaFoundation\Foundation\Traits\StructSpecManager::class => \Kdt\Iron\Nova\Foundation\Traits\StructSpecManager::class,

    \ZanPHP\NovaFoundation\Foundation\TService::class => \Kdt\Iron\Nova\Foundation\TService::class,
    \ZanPHP\NovaFoundation\Foundation\TSpecification::class => \Kdt\Iron\Nova\Foundation\TSpecification::class,

    \ZanPHP\NovaFoundation\NullResult\BaseNullResult::class => \Kdt\Iron\Nova\NullResult\BaseNullResult::class,
    \ZanPHP\NovaFoundation\NullResult\NovaEmptyListResult::class => \Kdt\Iron\Nova\NullResult\NovaEmptyListResult::class,
    \ZanPHP\NovaFoundation\NullResult\NovaEmptyMapResult::class => \Kdt\Iron\Nova\NullResult\NovaEmptyMapResult::class,
    \ZanPHP\NovaFoundation\NullResult\NovaEmptySetResult::class => \Kdt\Iron\Nova\NullResult\NovaEmptySetResult::class,
    \ZanPHP\NovaFoundation\NullResult\NovaNullResult::class => \Kdt\Iron\Nova\NullResult\NovaNullResult::class,

];