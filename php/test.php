<?php

    $name = "alamin";
    $id = 10;
    $cgpa = 3.5;

    //$std = array(1, 3.5, 'alamin');
    //$std = [1, 3.4, 'alamin'];
    //$std[0];

    // $stds =[
    //     [1, 3.4, 'alamin'],
    //     [2, 3.4, 'alamin'],
    //     [3, 3.4, 'alamin']
    // ];
    // $stds[2][2];

    $std = ['id'=>1, 'cgpa'=> 3.4, 'name'=>'alamin'];
    // $std['cgpa'];

    // $stds = [
    //     's1'=>['id'=>1, 'cgpa'=> 3.4, 'name'=>'alamin'],
    //     's2'=>['id'=>2, 'cgpa'=> 3.3, 'name'=>'xyz'],
    //     's3'=>['id'=>3, 'cgpa'=> 3.4, 'name'=>'abc']
    // ];

    // $stds['s3']['name'];

    // function abc($a=0, $b=10){
    //     return $a+$b;
    // }
    // $c = abc();

    // for($i=0;$i<10;$i++){
    //     echo "<center><h1>HEllo PHP </h1></center>";
    // }

    // foreach($std as $v){
    //     echo $v;
    // }

    // if(){

    // }elseif(){

    // }else{

    // }

    //echo "HEllo PHP" . "Another{$id} String". $id;
    //print($id."abc");
    //print_r($std);
    //var_dump($std);
?>

    <?php 
    if($id==10){ 
    ?> 
       <h1> TEST   </h1>
    <?php 
        }else{ 
            echo " <h1>Invalid </h1>";
        }
    ?>