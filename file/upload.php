<?php

    if(isset($_POST['submit'])){

        //print_r($_FILES);
        $src = $_FILES['myfile']['tmp_name'];
        $des = "upload/".$_FILES['myfile']['name'];

        //echo $des;
        if(move_uploaded_file($src, $des)){
            echo "Success";
        }else{
            echo "Error";
        }

    }

?>