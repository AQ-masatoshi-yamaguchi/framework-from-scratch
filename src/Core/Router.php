<?php

class Router
{
    protected array $routes = [];

    protected array $params = [];

    public function add(string $route, array $params): void
    {
        $this->routes[$route] = $params;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function match(string $url): bool
    {
        foreach ($this->routes as $route => $params) {
            if ($url === $route) {
                $this->params = $params;

                return true;
            }
        }

        return false;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}
