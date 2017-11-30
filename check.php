<?php
    $flag = 0;
    $name=$_POST['name'];
    $username=$_POST['username'];
    if(file_exists("test1.xml")) {
        $xml=simplexml_load_file("test1.xml");
        $length = count($xml->movie_name);
        if($length == 0) {
            echo "Rent";
            die(0);
        }
        for($i=0;$i<$length;$i++) {
            if(strcmp($name,$xml->movie_name[$i])==0) {
                if(strcmp($xml->rented_to[$i],$username)==0) echo "Return";
                else echo "Already rented";
                $flag = 1;
            }
        }
    }
    if($flag == 0) echo "Rent";

?>
