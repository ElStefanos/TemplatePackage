<?php

use packages\runtime\api\RuntimeLinkerAPI;
use packages\runtime\handler\enums\ERuntimeFlags;

final class PackageName extends RuntimeLinkerAPI
{

    public function environmentSetup(): void
    {
        parent::environmentSetup();
        $this->setRuntimeFlag(ERuntimeFlags::EventDispatcher);
    }

    public function setup(): void
    {

    }

    public function main(): void
    {
        $this->createLink("PackageNameControllerAPI", "/controllers/PackageNameControllerAPI.php");
        $this->createLink("PackageNameRouter", "/routes/PackageNameRouter.php");
    }
}