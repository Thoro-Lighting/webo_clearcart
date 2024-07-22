<?php

declare(strict_types=1);

namespace WeboClearCart\Hook;

use WeboClearCart\Hook\HookInterface;
use Context;
use Module;

abstract class AbstractHook implements HookInterface
{
    protected $module;
    protected $context;

    public function __construct(Module $module, Context $context)
    {
        $this->module = $module;
        $this->context = $context;
    }
}
