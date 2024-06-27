<?php
require_once "inc/connection.php";
 require_once "inc/function.php";
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['id'])){
        echo "val";
        $id=$_GET['id'];
        $query="select * from surahs join ayahs on  surahs.id=ayahs.surah_id where  ayahs.id=$id";
        $runQuery=mysqli_query($conn,$query);
        if(mysqli_num_rows($runQuery)==1){
            $ayah=json_encode(mysqli_fetch_assoc($runQuery));
            print_r($ayah);
        }
        else{
            response_code(404,'Not found ayah.');
        }
    }  
    else{
        response_code(404,'Not found id for ayah.');
    }
}
else{
   response_code(503,'There is an error on request');
}
 ?>