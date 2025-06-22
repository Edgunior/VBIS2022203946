<?php

namespace app\core;

class Router
{
    public array $routes = [];
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function put($path, $callback)
    {
        $this->routes['put'][$path] = $callback;
    }

    public function delete($path, $callback)
    {
        $this->routes['delete'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = strtolower($this->request->requestMethod());

        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            http_response_code(404);
            echo "<h1>404 - Not Found</h1><p>No route defined for [$method] $path</p>";
            exit;
        }

        if (is_callable($callback)) {
            // Anonymous function
            return call_user_func($callback);
        }

        if (is_array($callback)) {
            $controller = new $callback[0]();
            $methodName = $callback[1];

            if (!method_exists($controller, $methodName)) {
                http_response_code(500);
                echo "<h1>500 - Controller Error</h1><p>Method '$methodName' does not exist in controller.</p>";
                exit;
            }

            // Optional future use: call $controller->authorizeRoles() and check if current user has access

            return call_user_func([$controller, $methodName]);
        }

        // If it's just a view name or similar
        if (is_string($callback)) {
            echo $callback;
            return;
        }

        // Unknown type
        http_response_code(500);
        echo "<h1>500 - Internal Server Error</h1><p>Invalid route callback type.</p>";
        exit;
    }
}
