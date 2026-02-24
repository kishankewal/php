<?php
namespace App\Api;

class ParentClass {
    private $name = "Kishan";
}

class ChildClass extends ParentClass {
    public function getName() {
        return $this->name;
    }
}

$childClass = new ChildClass;
$childClass->getName();
// require_once "../Controller/Users/UserController.php";
// require_once "../Utils/Utils.php";


// use App\Controller\Users\UserController;
// use App\Utils\Utils;

// class AllMethods {
//     use Utils;
// }

// $methods = new AllMethods;
// echo $methods->getCurrentTimeStamp();
// echo "\n";
// echo $methods->getIpAddress();

// $userController = new UserController;
// $userController->save($_POST);

