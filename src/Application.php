<?php

namespace PROJECT;

use PROJECT\HTTP\Request;
use PROJECT\HTTP\Response;
use PROJECT\HTTP\Route;

class Application
{
    protected Route $route;
    protected Request $request;
    protected Response $response;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->route = new Route($this->request, $this->response);
    }

    public function run(): void
    {
        $this->route->resolve();
    }

    public function __get(string $name)
    {
        if (property_exists($this, $name)) {
            return $this->name;
        }
    }
}