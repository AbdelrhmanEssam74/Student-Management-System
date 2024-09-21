<?php

namespace PROJECT;

use PROJECT\HTTP\Request;
use PROJECT\HTTP\Response;
use PROJECT\HTTP\Route;
use PROJECT\support\Config;

class Application
{
    protected Route $route;
    protected Request $request;
    protected Response $response;
    protected Config $config;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->route = new Route($this->request, $this->response);
        $this->config = new Config($this->loadConfig());
    }

    protected function loadConfig(): array
    {
        $config = [];
        foreach (scandir(config_path()) as $file) {
            if ($file == "." || $file == "..") {
                continue;
            }
            $fileName = explode(".", $file)[0];
            $config[$fileName] = require config_path() . $file;
        }
        return $config;
    }


    public function run(): void
    {
        $this->route->resolve();
    }

    public function __get(string $name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

}