<?php
namespace App\Api;

require_once "../Model/Users/Users.php";
require_once "../Controller/Users/Users.php";

use App\Controller\Users\Users as UserController;
use App\Model\Users\Users as UserModel;

$userModel = new UserModel;
$userModel->insert($_POST);

$userController = new UserController;
$userController->save($_POST);

