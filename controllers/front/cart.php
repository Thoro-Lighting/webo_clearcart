<?php
class Webo_ClearCartCartModuleFrontController extends ModuleFrontController
{
    public function displayAjaxDeleteCart()
    {
        $result = $this->context->cart->delete();

        ob_end_clean();
        header('Content-Type: application/json');

        $this->ajaxRender(json_encode([
            'success' => (bool) !empty($result),
        ]));
    }
}