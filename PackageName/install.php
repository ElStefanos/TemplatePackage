<?php

use database\creator\ColumnCreator;
use database\creator\TableWizard;
use packages\installer\interface\IPackageInstall;

class PackageNameInstall implements IPackageInstall
{
    private TableWizard $dbWizard;
    private ColumnCreator $columnCreator;

    public function postInstall(int $packageID, string $packageName): bool
    {
        // Post install logic here
        return true;
    }
}