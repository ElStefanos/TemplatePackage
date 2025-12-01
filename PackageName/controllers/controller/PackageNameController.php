<?php

use controller\Controller;
use view\View;

class PackageNameController extends Controller
{
    public function index(array|string $params): View
    {
        $params["name"] = $this->packageName;
        return $this->view($params);
    }
}