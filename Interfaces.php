<?php

interface IUser
{
    function register();
    function login();


}

class User implements IUser
{

    /**
     */
    function __construct()
    {
    }

    function register()
    {
        print("You have successfully registered");
    }
    function login()
    {
        print("Logged In Successfully");
    }
}

$user = new User;
$user->login();
$user->register();

?>