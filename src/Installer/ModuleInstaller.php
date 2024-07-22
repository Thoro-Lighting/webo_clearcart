<?php

declare(strict_types=1);

namespace WeboClearCart\Installer;

class ModuleInstaller
{
    const HOOKS_LIST = [
        'actionFrontControllerSetMedia',
        'displayClearCartBtn',
    ];

    /**
     * @var \Module
     */
    private $module;

    public function __construct(\Module $module)
    {
        $this->module = $module;
    }

    public function install(): bool
    {
        return $this->installHooks();
    }
    private function installHooks(): bool
    {
        $result = true;

        foreach (self::HOOKS_LIST as $hook) {
            $result = $this->module->registerHook($hook) && $result;
        }

        return $result;
    }
}
