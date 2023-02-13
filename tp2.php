<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //exo1
    echo '<h2>exo1</h2>';
    echo '<br>';



    $arr = [1,4,2,6,3,7,7,4,6];
    for($i=0;$i< count($arr);$i++){
        echo $arr[$i].'<br>';
    }
    sort($arr);
    print_r($arr);
    echo '<br>';
    $empty = array();
    for($i=0;$i< count($arr);$i++){
        if(!in_array($arr[$i], $empty)){
            $empty[] = $arr[$i];

         }
    }
    print_r($empty);
    echo '<br>';

    //exo2
    echo '<h2>exo2</h2>';
    echo '<br>';
    
    $moisFr = array(1=>'Janvier', 2=>'Février', 3=>'Mars', 4=>'Avril', 5=>'Mai', 6=>'Juin', 7=>'Juillet', 8=>'Aout', 9=>'Septembre', 
    10=>'Octobre', 11=>'Novembre', 12=>'Décembre'); 
    for ($i=1; $i<count($moisFr)+1;$i++){
        echo $i."_".$moisFr[$i].'<br>';
    }
    foreach($moisFr as $key => $value){
        echo $key."_".$value.'<br>';
    }
    echo $moisFr[date("m")[1]];
    echo '<br>';
    echo ($moisFr[intVal(date("m"))]);
    echo '<br>';
    $moisFr = array(1=>'Janvier', 2=>'Février', 3=>'Mars', 4=>'Avril', 5=>'Mai', 6=>'Juin', 13=>'Juillet', 8=>'Aout', 9=>'Septembre',     10=>'Octobre', 11=>'Novembre', 12=>'Décembre'); 

    for ($i=1; $i<count($moisFr)+1;$i++){
        echo $i."_".$moisFr[$i].'<br>';
    }
    echo '<br>';
    sort($moisFr);
    print_r($moisFr);
    echo '<br>';


    //exo3
    echo '<h2>exo3</h2>';
    echo '<br>';

    $notes = [14,16,13,20,19,20,5,6,7,20];
    $moy = 0;
    $c =0;
    $count=0;
    for($i=0;$i< count($notes);$i++){
        echo $notes[$i].'<br>';
        $moy = $moy + $notes[$i];
        if ($notes[$i]>10){
            $c = $c +1;
        }
        if ($notes[$i]==20){
            $count = $count +1;
        }
    }
    echo "moyenne ".$moy/ count($notes);
    echo '<br>';
    echo "plus que 10 est ".$c;
    echo '<br>';
    echo " egal 20 est".$count;
    echo '<br>';
    for($i = 0; $i < count($notes); $i++ ) {
        for($j = 0; $j < count($notes)-1; $j++) {
        if($notes[$j+1] < $notes[$j]){
        $temp = $notes[$j+1];
        $notes[$j+1] = $notes[$j];
        $notes[$j] = $temp;
        }
        }
       }
    print_r($notes);
    echo '<br>';
    $value = 4;
    if (in_array($value,$notes)){
        echo  array_search($value, $notes);

    }
    else{
        echo "not found";
    }
    echo '<br>';


    //exo4
    echo '<h2>exo4</h2>';
    echo '<br>';

    $tab = [20,4,16,18,5,21,4,30,19,16];
    $new = array();
    for($i = count($tab)-1 , $j=0; $i >= 0; $i--,$j++ ) {
            $new[$j] = $tab[$i];
        




    }
    echo '<br>';
    print_r($new);
    echo '<br>';






    //exo5
    echo '<h2>exo5</h2>';
    echo '<br>';
    ?>
        <div class="main">
        <label>table de couleur</label>
    <div class="container">
        <?php 
        $color = ["yellow","blue","red","purple","black","orange","cian","aqua","bisque","blueviolet"]; 
        for($k=0; $k<count($color); $k++){
            echo "<div class = $color[$k]>.</div>";


    }


         ?>
    </div>
    </div>
    
    

    <?php
    echo '<br>';
    $col = "red";
    if (in_array($col,$color)){
        echo  "indice ".array_search($col, $color);
    
        }
    else{
        echo "not found";
        }
    echo '<br>';

    //exo6
    echo '<h2>exo6</h2>';
    echo '<br>';

    $adem = ["zineb@google.com","rag@wikipedia.com","yaya@youtube.com","oumi@w3school.com"];
    for($i=0;$i<count($adem);$i++){
        print_r(explode("@",$adem[$i])[1]);
        echo '<br>'; 
    }





    ?>

    
</body>
</html>
