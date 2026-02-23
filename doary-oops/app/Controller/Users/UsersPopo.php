<?php
namespace users;

class UsersPopo{
    private $name;
    private $email;
    private $password;

    public function setName(string $name) : void {
        $this->name = $name;
    }
    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    public function setPassword(string $password) : void {
        $this->password = $password;
    }

    public function getName() : string {
        return $this->name;
    }
    public function getEmail($email) : string {
        return $this->email;
    }
    public function getPassword() : string {
        return $this->password;
    }
}