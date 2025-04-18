<?php
include ("model/model.php");
include ("controller/controller.php");

$objController = new Controller();

$uri_str = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo $uri_str;
$uri_array = explode ('/', $uri_str);
// echo '<pre>';                                            //as it is array it cannot be printed by echo
// print_r ($uri_array);
$path = $uri_array[3];
// echo $path;


$GLOBALS['baseurl'] = "https://localhost/tops_computer/mvc_intro/";


if(isset($path) && $path == ""){
    $objController -> home();
}
else if($path == "about"){
    $objController -> about();
}

else if($path == "categoryadd"){
    $objController -> categoryadd();
}
else if($path == "product"){
    echo 'PRODUCT';
}

else{
    echo 'ERROR 404 PAGE NOT FOUND';
}


?>