<?php
include ("model/model.php");

session_start();

include ("controller/controller.php");
include ("controller/productController.php");
include ("controller/userController.php");

$objController = new Controller();
$objProduct = new ProductController();
$objUser = new UserController();

$uri_str = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo $uri_str;
$uri_array = explode ('/', $uri_str);
// echo '<pre>';                                            //as it is array it cannot be printed by echo
// print_r ($uri_array);
$path = $uri_array[3];
// echo $path;

$queryparams = isset($uri_array[4]) ? $uri_array[4] : 0;

$GLOBALS['baseurl'] = "https://localhost/tops_computer/mvc_intro/";




$userpath = isset($uri_array[4]) ? $uri_array[4] : 0;
$userparams = isset($uri_array[5]) ? $uri_array[5] : 0;


if(isset($path) && $path == ""){
    $objController -> home();
}
else if($path == "about"){
    $objController -> about();
}

else if($path == "categoryadd"){
    $objController -> categoryadd();
}
else if($path == "category"){
    $objController -> category();
}
else if($path == "categorydelete"){
    $objController -> categorydelete($queryparams);
}
else if($path == "categoryedit"){
    $objController -> categoryedit($queryparams);
}
else if($path == "product"){
    $objProduct -> product($queryparams);
}
else if($path == "productadd"){
    $objProduct -> productadd($queryparams);
}
else if($path == "productedit"){
    $objProduct -> productedit($queryparams);
}
else if($path == "productdelete"){
    $objProduct -> productdelete($queryparams);
}


else if($userpath == ""){
    $objUser -> user();
}
else if($userpath == "about"){
    $objUser -> userabout();
}
else if($userpath == "userreg"){
    $objUser -> userreg();
}
else if($userpath == "userlogin"){
    $objUser -> userlogin();
}
else if($userpath == "userlogout"){
    $objUser -> userlogout();
}

else{
    include ('view/error404.php');
    echo $path;
}


?>