<?php 
    function response_code($code,$mes){
        if(is_array($mes)){
           print_r( json_encode(( $mes)));
           }
        else{
            echo "$mes";
        }
        http_response_code($code);
    }
    // function validateArrayId($array_id){
    //     $aya_surah=[];//two dimintional array sort 3id and information for each id (numberofsurah and number of aya)
    //     if(sizeof($array_id)==3){
    //         for($i=0;$i<3;$i++){
    //             $data=$array_id[$i];
    //             $array_data=explode('-',$data);
    //             if(sizeof($array_data)==3&&is_numeric($array_data[0])&&is_numeric($array_data[1])&&is_numeric($array_data[2])){
    //                 $aya_surah[]= $array_data;
                    
    //             }
    //             else{
    //                 return false;//if eny id is not valid
    //             }

    //         }
    //         return  $aya_surah;
    //     }
    //     else{
    //         return false;//if size of array is not equal 3
    //     }
        
    //    }
    // //    function creatNewArray($arr){
    // //         return 
    // //    }
      
      
       