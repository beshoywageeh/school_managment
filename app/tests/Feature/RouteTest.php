<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * @test
     */
    public function all_routes_have_valid_actions()
    {
        $routes = Route::getRoutes()->getRoutes();

        foreach ($routes as $route) {
            $action = $route->getAction();

            if (isset($action['controller'])) {
                $controllerAction = $action['controller'];
                // All routes that do not belong to the app are ignored
                if (strpos($controllerAction, 'App\\Http\\Controllers\\') !== 0) {
                    continue;
                }

                $controller = $controllerAction;
                $method = null;
                if (strpos($controllerAction, '@') !== false) {
                    [$controller, $method] = explode('@', $controllerAction);
                } elseif (method_exists($controller, '__invoke')) {
                    $method = '__invoke';
                }

                $this->assertTrue(class_exists($controller), "Controller {$controller} does not exist");

                if ($method) {
                    $this->assertTrue(
                        method_exists($controller, $method),
                        "Method {$method} does not exist on controller {$controller}"
                    );
                }
            }
        }
        $this->assertTrue(true);
    }
}
