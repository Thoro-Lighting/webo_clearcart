<?php

declare(strict_types=1);

namespace WeboClearCart\Hook;

use Media;

class ActionFrontControllerSetMedia extends AbstractHook
{
    public function execute($params)
    {
        Media::addJsDef([
            'webo_delete_cart_link' => $this->context->link->getModuleLink($this->module->name, 'cart', [
                'action' => 'deleteCart',
                'ajax' => 1
            ])
        ]);

        $this->context->controller->registerStylesheet(
            'module-'.$this->module->name.'-css',
            'modules/'.$this->module->name.'/views/css/front.css',
            [
                'version' => $this->module->version,
            ]
        );


        $this->context->controller->registerJavascript(
            'module-'.$this->module->name.'-js',
            'modules/'.$this->module->name.'/views/js/cart.js',
            [
                'version' => $this->module->version,
            ]
        );
    }
}
