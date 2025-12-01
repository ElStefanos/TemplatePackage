<?php

use packages\runtime\api\RuntimeControllerAPI;
use packages\runtime\api\RuntimeRouterAPI;
use router\Router;

final class PackageNameRouter extends RuntimeRouterAPI
{
    private RuntimeControllerAPI $PackageNameControllerAPI;
    private Router $router;

    public function setup(): void
    {
        $this->PackageNameControllerAPI = $this->getPassable("PackageName", "PackageNameControllerAPI");
        $this->router = new Router("/", "index", $this->PackageNameControllerAPI->getController("PackageNameController"));
    }

    public function main(): void
    {
        $this->addRouter($this->router);
    }
}