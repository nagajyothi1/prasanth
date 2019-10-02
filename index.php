<?php
if(isset($_POST['btn']))
{
    $img=$_FILES['img']['name'];
    $target='a/'.basename($img);
   if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
   {
    echo "image uploaded sucessfully";
    }
        else{
    echo "upload failed!!";
}
}
?>