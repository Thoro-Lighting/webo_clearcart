<?php

declare(strict_types=1);

namespace WeboClearCart\Hook;

class DisplayClearCartBtn extends AbstractHook {

    private const TEMPLATE_FILE = 'display_clear_cart_btn.tpl';

    public function execute(array $params)
    {
        if(empty($this->context->cart->getProducts())) {
            return '';
        }

        return $this->module->fetch($this->getTemplateFullPath());
    }

    public function getTemplateFullPath(): string
    {
        return "module:{$this->module->name}/views/templates/hook/{$this->getTemplate()}";
    }

    protected function getTemplate(): string
    {
        return DisplayClearCartBtn::TEMPLATE_FILE;
    }
}