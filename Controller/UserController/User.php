<?php
namespace Prash\Oop\Controller\UserController;
use Prash\Oop\Controller\appcontroller;

class User extends appcontroller
{
    function __construct()
    {
        
        parent::__construct();echo "<br/>";
        echo "User Is called";
    }
}