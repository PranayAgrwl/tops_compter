<?php

class UserController extends Model
{   
    public function __construct()
    {
        parent::__construct();
    }

    public function user()
    {
        include ('view/user/index.php');
    }

    public function userabout()
    {
        include ('view/user/userabout.php');
    }

    public function userreg()
    {
        if(isset($_POST['username']))
        {
            $user = 
            [
                "username" => $_POST ['username'],
                "email" => $_POST ['email'],
                "password" => $_POST ['password']
            ];
            $res = $this -> insertData ("users", $user);
            if (isset($res))
            {
                header ("Location: " .$GLOBALS['baseurl']."user/");
            }
        }
    }

    public function userlogin()
    {
        if(isset($_POST['email']))
        {
            $user = 
            [
                "email" => $_POST ['email'],
                "password" => $_POST ['password']
            ];
            $findlogin = $this -> findOne ("users", $user);
            if(isset($findlogin))
            {
                $_SESSION['user'] = $findlogin;
                header("Location: ".$GLOBALS['baseurl']."user/");
            }
        }
    }

    public function userlogout()
    {
        if(isset($_SESSION['user']))
        {
            session_destroy();
            header("Location: ".$GLOBALS['baseurl']."user/");
        }
    }

    
}
?>