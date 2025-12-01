<?php

use controller\Controller;
use object\ObjectFactory;
use packages\runtime\api\RuntimeControllerAPI;
use packages\runtime\handler\enums\ERuntimeFlags;

final class PackageNameControllerAPI extends RuntimeControllerAPI
{
    private ObjectFactory $factory;

    /**
     * @throws Exception
     */

    public function environmentSetup(): void
    {
        parent::environmentSetup();
        $this->setRuntimeFlag(ERuntimeFlags::EventDispatcher);
    }

    public function setup(): void
    {
        $props = [
            "controllerName" => "PackageNameController",
            "localAssetPath" => "/awt_packages/PackageName/views/assets",
            "eventDispatcher" => $this->eventDispatcher,
        ];

        $methods = [
            "setRootPath",
            "setViewPath",
        ];

        $methodArgs = [
            "setRootPath" =>
                [
                    $this->runtimePath,
                ],
            "setViewPath" => [
                "/views/"
            ]
        ];

        $objectFactory = new ObjectFactory();
        $objectFactory->setType(Controller::class);
        $objectFactory->setClassPath($this->runtimePath . "/controllers/controller/PackageNameController.php");

        $objectFactory->setProperties($props);
        $objectFactory->setMethodCalls($methods);
        $objectFactory->setMethodArgs($methodArgs);


        $this->factory = $objectFactory;
    }

    /**
     * @throws Exception
     */
    public function main(): void
    {
        $this->addController($this->factory, "PackageNameController");
    }
}