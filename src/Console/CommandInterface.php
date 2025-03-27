<?php

namespace Axcel\Halo\Console;

interface CommandInterface
{
    public function execute(array $arguments): void;
}
