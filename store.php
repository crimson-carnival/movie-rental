<?php

    //Creates XML string and XML document using the DOM
    $dom = new DomDocument('1.0', 'UTF-8');

    //add root
    $root = $dom->appendChild($dom->createElement('movie-list'));
    if(file_exists("test1.xml") && $xml=simplexml_load_file("test1.xml")) {
        $flag = 0;
        $length = count($xml->movie_name);
        for($i=0;$i<$length;$i++) {
            if(strcmp($_POST['status'],'Return')==0 && strcmp($xml->movie_name[$i],$_POST['name'])==0) { $flag = 1; continue; }
            $name[$i] = $dom->createElement('movie_name');
            $name[$i]->appendChild($dom->createTextNode($xml->movie_name[$i]));
            $rented_to[$i] = $dom->createElement('rented_to');
            $rented_to[$i]->appendChild($dom->createTextNode($xml->rented_to[$i]));
            $root->appendChild($name[$i]);
            $root->appendChild($rented_to[$i]);
        }

        if($flag != 1) {
            $name[$length] = $dom->createElement('movie_name');
            $name[$length]->appendChild($dom->createTextNode($_POST['name']));
            $rented_to[$length] = $dom->createElement('rented_to');
            $rented_to[$length]->appendChild($dom->createTextNode($_POST['rented-to']));
            $root->appendChild($name[$length]);
            $root->appendChild($rented_to[$length]);
            echo "
                <html><head><script>alert('Rented succesfully'); window.location.replace('index.html'); </script></head></html>
            ";
        }
        else
            echo "
                <html><head><script>alert('Return succesful'); window.location.replace('index.html'); </script></head></html>
            ";
    }
    else
    {
        $name = $dom->createElement('movie_name');
        $name->appendChild($dom->createTextNode($_POST['name']));
        $rented_to = $dom->createElement('rented_to');
        $rented_to->appendChild($dom->createTextNode($_POST['rented-to']));
        $root->appendChild($name);
        $root->appendChild($rented_to);
        echo "
                <html><head><script>alert('Rented succesfully'); window.location.replace('index.html'); </script></head></html>
            ";
    }

    /* Appending attr1 and attr2 to the NodeA element
    $attr = $dom->createAttribute('attr1');
    $attr->appendChild($dom->createTextNode('some text'));
    $nodeA->appendChild($attr);*/
/*
** insert more nodes
*/

    $dom->formatOutput = true; // set the formatOutput attribute of domDocument to true

    // save XML as string or file
    $test1 = $dom->saveXML(); // put string in test1
    $dom->save('test1.xml'); // save as file
?>
