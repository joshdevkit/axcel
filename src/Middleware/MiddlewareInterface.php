<?php

namespace Axcel\Halo\Middleware;

use Axcel\Halo\Http\Request;

interface MiddlewareInterface
{
    public function handle(Request $request, callable $next);
}
