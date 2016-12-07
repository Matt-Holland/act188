<?php

use App\Http\Controllers\DisclosureController;
use Illuminate\Routing\Router;

return function (Router $router) {
    $router->get('/disclosures/search', DisclosureController::class . '@searchDisclosures');
    $router->get('/disclosures/{disclosure}', DisclosureController::class . '@showDisclosure');
};
