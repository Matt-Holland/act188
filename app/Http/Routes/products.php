<?php

use App\Http\Controllers\ProductController;
use Illuminate\Routing\Router;

return function (Router $router) {
    $router->get('/products/search', ProductController::class . '@searchProducts');
    $router->get('/products/{product}', ProductController::class . '@showProduct');
};
