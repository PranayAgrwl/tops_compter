<?php
class controller extends model{
    public function __construct(){
        parent::__construct();
    }
    
    public function home(){
        include('view/home.php');
    }

    public function about(){
        include('view/about.php');
    }

    public function categoryadd(){
        include('view/categoryadd.php');

        if(isset($_REQUEST['submit'])){
            if(isset($_FILES['cimage']['name'])){
                $cname = $_REQUEST ['cname'];                   // category name
                $name = $_FILES ['cimage']['name'];             // user given file name
                $temp = $_FILES ['cimage']['tmp_name'];         // file automatic temp location
                $extname = $_FILES ['cimage']['type'];          // file extension
                //extname is saved in str format -- example -- image/jpg
                //thus we explode it into array
                $extarray = explode ("/", $extname);
                $ext = $extarray[1];

                if($ext == "jpeg" || $ext == "png" || $ext == "jpg"){
                    $filename = time().".".$ext;
                    move_uploaded_file($temp,"Uploads/".$filename);

                    $categoryData = ["cname" => $cname, "cimage" => $filename];
                    $result = $this -> insertData ("category", $categoryData);

                    if(isset($result)){
                        echo "DATA INSERTED SUCCESSFULLY";
                        header ("Location:".$GLOBALS['baseurl']."category");
                    }
                }
                else{
                    echo "ERROR - UNRECOGNISED FILE FORMAT <br> PLEASE USE JPG, JPEG OR PNG";
                }
            }

        }
    }

    public function category(){
        $catdata = $this -> selectData("category");
        include('view/category.php');
    }

    public function categorydelete($id){
        if(isset($id)){
            $catdata = $this -> findOne("category",['cid'=>$id]);
            echo $image = "uploads/".$catdata->cimage;
            unlink($image);
            $result = $this -> deleteData ("category", ['cid'=>$id]);
            if(isset($result)){
                header("Location:".$GLOBALS['baseurl']."category");
            }
        }
    }

    public function categoryedit($id){
        $catdata = $this -> findOne("category",['cid'=>$id]);
        include('view/categoryedit.php');

        if(isset($_REQUEST['submit'])){
            $cname = $_REQUEST['cname'];
            if(isset($_FILES['cimage']['name']) && $_FILES['cimage']['name']!="") {
                $name = $_FILES['cimage']['name'];
                $temp = $_FILES['cimage']['tmp_name'];
                $extname = $_FILES['cimage']['type'];
                $extarray = explode ("/", $extname);
                $ext = $extarray[1];
                if($ext == "jpeg" || $ext == "jpg" || $ext == "png"){
                    $filename = time(). "." .$ext;
                    move_uploaded_file($temp,"uploads/".$filename);
                    echo $image = "uploads/".$catdata->cimage;
                    unlink($image);
                }
                else{
                    echo "ERROR - UNRECOGNISED FILE FORMAT <br> PLEASE USE JPG, JPEG OR PNG";
                }
            }

            else{
                $filename = $catdata -> cimage ;
            }

            $productData = ["cname" => $cname, "cimage" => $filename];
            $result = $this -> updateData ("category", $productData, ['cid'=>$id]);
            if(isset($result)){
                header("Location: ". $GLOBALS['baseurl']."category");
            }
        }

    }





}
?>