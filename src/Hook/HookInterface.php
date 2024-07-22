<?php

declare(strict_types=1);

namespace WeboClearCart\Hook;

interface HookInterface
{
    public function execute(array $params);
}
