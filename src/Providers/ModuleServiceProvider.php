<?php

namespace Webkul\Newsletter\Providers;

use Webkul\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    /**
     * The models associated with this module.
     *
     * @var array
     */
    protected $models = [
        \Webkul\Newsletter\Models\Newsletter::class,
    ];
}
