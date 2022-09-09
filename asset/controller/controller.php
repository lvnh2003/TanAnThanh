

<?php 
require 'conection.php';
session_start();
$errors = array();
    if(isset($_POST['submit']) && ($_POST['submit'])){
        
        $target_dir = "../asset/uploads/";
        $title=mysqli_real_escape_string( $con,$_POST['title']);
        //iamge title name
        $path_image_title_name=basename( $_FILES['image_title_name']['name']);
        $target_file = $target_dir . $path_image_title_name;
        move_uploaded_file($_FILES["image_title_name"]["tmp_name"], $target_file);

  

        $main_content=mysqli_real_escape_string($con,$_POST['main_content']);

        $content_1= mysqli_real_escape_string($con,$_POST['content_1']);
        $content_2=mysqli_real_escape_string($con, $_POST['content_2']);
        $content_3=mysqli_real_escape_string($con, $_POST['content_3']);

        $path_image_1=basename( $_FILES['image_1']['name']);
        $target_file = $target_dir . $path_image_1;
        move_uploaded_file($_FILES["image_1"]["tmp_name"], $target_file);

        $path_image_2=basename( $_FILES['image_2']['name']);
        $target_file = $target_dir . $path_image_2;
        move_uploaded_file($_FILES["image_2"]["tmp_name"], $target_file);
        
        $path_image_3=basename( $_FILES['image_3']['name']);
        $target_file = $target_dir . $path_image_3;
        move_uploaded_file($_FILES["image_3"]["tmp_name"], $target_file);
        
        $image_description_1=mysqli_real_escape_string($con,$_POST['image_description_1']);
        $image_description_2=mysqli_real_escape_string($con,$_POST['image_description_2']);
        $image_description_3=mysqli_real_escape_string($con,$_POST['image_description_3']);

        if(empty($title)){
            $errors['error-title']= "Tiêu đề không được bỏ trống";
        }
        if(empty($path_image_title_name)){
            $errors['image']="Chưa chọn anh tiêu đề";
        }
        if(empty($main_content)){
         $errors['content']="Chưa điền nội dung được bôi đậm";
        }
        if(strlen($image_description_1)>200){
            $errors['len']="Mô tả hình ảnh số 1 có quá dài";
        }
        if(strlen($image_description_2)>200){
            $errors['len']="Mô tả hình ảnh số 2 có quá dài";
        }
        if(strlen($image_description_3)>200){
            $errors['len']="Mô tả hình ảnh số 3 có quá dài";
        }
        if(count($errors)===0){
            $sql="INSERT INTO NEW(title,image_title_name,main_content,content_1,content_2,content_3,image_1,image_2,image_3,image_description_1,image_description_2,image_description_3) 
            VALUES('$title','$path_image_title_name','$main_content','$content_1', '$content_2','$content_3','$path_image_1','$path_image_2','$path_image_3','$image_description_1','$image_description_2','$image_description_3') ";
             mysqli_query($con,$sql);
        }

        

       
       
    }   
    if(isset($_POST['login'])){
        $user=$_POST['user'];
        $passowrd= $_POST['password'];
        $sql= "SELECT * FROM  ACCOUNT WHERE user='$user' AND password= '$passowrd'";

        if(mysqli_num_rows(mysqli_query($con,$sql))>0){
            $_SESSION['user']=$user;
            header("location:index.php");
        }
    }

    if(isset($_POST['search'])){
        $value_search=mysqli_real_escape_string($con,$_POST['value-search']);
        header("location:/tananthanh/view/new.php?value-search=$value_search");
    }
    ?>