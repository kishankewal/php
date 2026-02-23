<?php
namespace Users;

use Users\UsersPopo;

class UserController {
    public function save(UsersPopo $userPopo) {
        print_r($userPopo);
    }
}