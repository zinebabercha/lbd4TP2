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

    $ag = array("zineb" => 19, "rag" => 18, "yaya"=> 20 , "oumi" => 14);
    print_r($ag);
    echo '<br>';
    foreach($ag as $key=>$value){
        echo $key." a ".$value." ans ".'<br>';
    }
    echo '<table>';

    echo '<tr>';

            echo "<td>age</td>";
            foreach($ag as $key=>$value){
                echo "<td>$value</td>";
            }
 

          
    echo '</tr>';
    echo '<tr>';
    echo "<td>name</td>";

    foreach($ag as $key=>$value){
        echo "<td>$key</td>";
    } 
    echo '</tr>';
    
    echo '</table>';
    echo '<br>';
    

    //exo2
    echo '<h2>exo2</h2>';
    echo '<br>';

    $tab=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.o 
    rg","SQLite"=>"http://www.sqlite.org","HTML"=>"https://www.w3schools.com/html/default.as
    p","CSS"=>"https://www.w3schools.com/css/default.asp"); 
    print_r($tab);
    echo '<br>';
    $rk = array_rand($tab);
    echo $tab[$rk];
    echo '<br>';

    //exo3
    echo '<h2>exo3</h2>';
    echo '<br>';
    $emp = array("ahmed" => 14, "joudia" => 19, "samir"=> 14 , "yassir" => 14.5 , "aya" => 12, "liham" => 16 , "yassine"=> 17);
    print_r($emp);
    echo '<br>';
    foreach($emp as $key=>$value){
        echo ("nom:".$key." note".$value).'<br>';
    }
    echo '<table>';
    echo '<tr>';
    echo "<td>key</td>";
    echo "<td>value</td>";


    echo '</tr>';
    $keys = array_keys($emp);
    $values = array_values($emp);



    for ($j=0; $j<count($emp); $j++) {
            echo '<tr>';

            echo "<td>$keys[$j]</td>";
            echo "<td>$values[$j]</td>";
            




           
            echo '</tr>';

    }
    
    echo '</table>';
    echo '<br>';


    

          



    
    $max = max($emp);
    $min = min($emp);
    echo "max ".array_search($max,$emp);
    echo '<br>';

    echo "min ".array_search($min,$emp);

    echo '<br>';
    $moy = 0;
    
    foreach($values as $val){
        $moy = $moy + $val;

    }
    $moy = $moy/count($values);
    echo "moyenne".$moy;









    //exo4
    echo '<br>';

    echo '<h2>exo4</h2>';
    echo '<br>';

   
    echo '<table border="1" width="100%">';
    echo '<tr>';
    echo '<td bgcolor="#FFA500"></td>';
    for ($j=2; $j<=10; $j++) {
        echo '<td bgcolor="#FFA500">'.$j.'</td>';
    }
    echo '</tr>';
    for ($i=2; $i<=10; $i++) {
    echo '<tr>';
    for ($j=2; $j<=10; $j++) {
        if ($j==2) {
            echo '<td bgcolor="#FFA500">'.$i.'</td>';
        }

                echo '<td>';
            
        echo $i*$j;
        echo '</td>';
    }
    echo '</tr>';
    }
    echo '</table>';
    echo '<br>';
    //exo5
    echo '<br>';

    echo '<h2>exo5</h2>';
    echo '<br>';

    $capitales = array("Maroc" => "Rabat" ,  "Allemagne" =>  "Berlin" , "Serbie" =>  "Belgrade" , "Brésil" =>  "Brasilia" , 
    "Slovaquie" =>  "Bratislava" , "Italie" =>  "Rome ", "Venezuela" =>  "Caracas" , "Moldavie" =>  "Chisinau" ,
    "Guyana" =>  "Georgetown ", "Viêt Nam" => "Hanoï"  , "Zimbabwe " => " Harare" , "Cuba" =>  "La Havane"  , "Pays-Bas" => "La 
    Haye" , "Finlande" =>  "Helsinki" );
    print_r($capitales);
    echo '<br>';
    echo '<table>';
    echo '<tr>';
    echo "<td>pays</td>";
    echo "<td>capitales</td>";


    echo '</tr>';
    $keys = array_keys($capitales);
    $values = array_values($capitales);



    for ($j=0; $j<count($capitales); $j++) {
            echo '<tr>';

            echo "<td>$keys[$j]</td>";
            echo "<td>$values[$j]</td>";
            




           
            echo '</tr>';

    }
    
    echo '</table>';
    echo '<br>';
    $country = "Maroc";
    echo "la capitale est ".$capitales["$country"];
    //exo6
    echo '<br>';

    echo '<h2>exo6</h2>';
    echo '<br>';
    $nested = array("web" => array(array("nom" =>"php","lien" => "https://www.php.net/ ","avis"=>"*****" ),array("nom" =>"html","lien" => "https://www.w3schools.com/html/default.asp","avis"=>"****" ),array("nom" =>"JavaScript","lien" => "https://www.javascript.com/ ","avis"=>"**" ),array("nom" =>"css","lien" => "https://www.w3schools.com/css/ ","avis"=>"****" )),"db"=>array(array("nom" =>"mysql","lien" => "https://www.mysql.com/ ","avis"=>"*****" ),array("nom" =>"PostgreSQL","lien" => "https://www.postgresql.org/ ","avis"=>"*****" ),array("nom" =>"oracle","lien" => "https://www.oracle.com/","avis"=>"****" ),array("nom" =>"db2","lien" => "https://www.ibm.com/products/db2 ","avis"=>"****" )));
    print_r($nested);
    echo '<br>';
    echo 'pour web les sites recommendes ';
    echo '<br>';
    $lengthsweb = array();
    $links = array();



    for($i = 0;$i<4;$i++){
        echo $nested["web"][$i]["lien"].'<br>';
        $lengthsweb[] = strlen($nested["web"][$i]["avis"]);
        $links[] = ($nested["web"][$i]["lien"]);



    }
    echo 'pour db les sites recommendes';
    echo '<br>';
    $lengthsdb= array();
    $links1 = array();




    for($i = 0;$i<4;$i++){
        echo $nested["db"][$i]["lien"].'<br>';
        $lengthsdb[] = strlen($nested["db"][$i]["avis"]);
        $links1[] = ($nested["db"][$i]["lien"]);


    }
    echo '<br>';
    echo '<br>';
    echo '<br>';
    $rag = array();
    for($i=0;$i<4;$i++){
        $rag["$links[$i]"]= $lengthsweb[$i];
    }
    $raga = array();
    for($i=0;$i<4;$i++){
        $raga["$links1[$i]"]= $lengthsdb[$i];
    }


    echo '<br>';
    echo '<br>';
    echo 'pour web';
    echo '<br>';
    $tab = array();


    for($i=0;$i<4;$i++){
        if (!(in_array(array_search($lengthsweb[$i],$rag),$tab))){
            $tab[] =array_search($lengthsweb[$i],$rag).'<br>';


        }
    }


    echo '<br>';
    print_r($tab);
    echo '<br>';


    echo 'pour db';
    echo '<br>';



    for($i=0;$i<4;$i++){
        echo array_search($lengthsdb[$i],$raga).'<br>';
    }


    echo '<br>';
     //exo7
    echo '<br>';

    echo '<h2>exo7</h2>';
    echo '<br>';
    $code= array("ET123" => array("nom"=>"AB","prenom"=>"AC","moyenne"=>17),"ET676"=>array("nom"=>"BC","prenom"=>"BD","moyenne"=>12),"ET998"=>array("nom"=>"CD","prenom"=>"CE","moyenne"=>9),"ET764"=>array("nom"=>"DE","prenom"=>"DF","moyenne"=>16.5));
    print_r(array_values($code));
    $cles = array_keys($code);
    echo '<br>';

    $vide = array();
    for($i=0;$i<count($cles);$i++){
        $vide[]= $code["$cles[$i]"]["moyenne"];

    }
    echo '<br>';

    $mx = max($vide);
    $raag = array();
    for($i=0;$i<count($cles);$i++){
        $raag["$vide[$i]"]= $cles[$i];
    }
    echo '<br>';
    $maj = $raag[$mx];
    echo "letudiant avec la note la plus elevee ".$maj;
    echo '<br>';
    echo "ses infos";
    echo '<br>';

    print_r( $code[$maj]);
    $moyen= array();
    for($i=0;$i<count($vide);$i++){
        if($vide[$i]>=10){
            $moyen[]= $vide[$i];

        }

    }
    echo '<br>';
    echo '<br>';
    $mini = min($moyen);
    $mino = $raag[$mini];
    echo "les infos de cet eleve sont";
    echo '<br>';



    print_r( $code[$mino]);
    $nonvalider= array();
    for($i=0;$i<count($vide);$i++){
        if($vide[$i]<10){
            $nonvalider[]= $vide[$i];

        }

    }
    echo '<br>';
    echo "les etudiants qui n ont pas valide l annee sont  ";
    echo '<br>';



    for($i=0;$i<count($nonvalider);$i++){
        echo $raag[$nonvalider[$i]];

    }
    echo '<br>';
    //exo8
    echo '<br>';

    echo '<h2>exo8</h2>';
    echo '<br>';
    $cod= array("ET123" => array("nom"=>"AB","prenom"=>"AC","notes"=>array("module1"=>17,"module2"=>6,"module3"=>10,"module4"=>12)),"ET676"=>array("nom"=>"BC","prenom"=>"BD","notes"=>array("module1"=>14,"module2"=>16,"module3"=>10,"module4"=>11)),"ET998"=>array("nom"=>"CD","prenom"=>"CE","notes"=>array("module1"=>19,"module2"=>4,"module3"=>10,"module4"=>13)),"ET764"=>array("nom"=>"DE","prenom"=>"DF","notes"=>array("module1"=>17,"module2"=>15,"module3"=>14,"module4"=>12)));
    print_r($cod);
    $noote = array();
    for($i=0;$i<count($cles);$i++){
        $noote[]= array_keys($cod["$cles[$i]"]["notes"]);

    }
    echo '<br>';
    echo '<br>';





    echo '<br>';
    $nootes = array();
    for($i=0;$i<count($cles);$i++){
        $nootes[]= array_values($cod["$cles[$i]"]["notes"]);

    }
    echo '<br>';
    $maxi = array();
    $mimi = array();
    $moy=0;
    for($i=0;$i<count($nootes);$i++){
        $maxi[]= max($nootes[$i]);


    }
    echo '<br>';





    echo '<br>';
    echo "module max";
    echo '<br>';
   

    $modmax = array();
    for($i=0;$i<count($noote);$i++){
        $modmax["$cles[$i]"]= array_search($maxi[$i],$cod["$cles[$i]"]["notes"]);


    }

    print_r($modmax);
    echo '<br>';
    $minii = array();
    for($i=0;$i<count($nootes);$i++){
        $minii[]= min($nootes[$i]);


    }
    echo '<br>';
    echo "module min";
    echo '<br>';
    $modmin = array();
    for($i=0;$i<count($noote);$i++){
        $modmin["$cles[$i]"]= array_search($minii[$i],$cod["$cles[$i]"]["notes"]);


    }
    print_r($modmin);
    echo '<br>';

    echo '<br>';
    $test = array();
    for($i=0;$i<count($nootes);$i++){
        $test[] =  ($nootes[$i]);

    }
    echo '<br>';
    $fini = array();
    for($i=0;$i<count($cles);$i++){
        $fini["$cles[$i]"]=((array_sum($test[$i])))/4;




    }
    echo "la moyenne pour chaque etudiant";
    echo '<br>';
    print_r($fini);
    echo '<br>';

    for($i=0;$i<count($cles);$i++){
        if($fini["$cles[$i]"] >= 10){
            echo $cles[$i]." valide";
            echo '<br>';

        }
        else{
            echo $cles[$i]." na pas valide";
            echo '<br>';



        }

    }











































    ?>
</body>
</html>