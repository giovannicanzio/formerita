<?php 

$xml = simplexml_load_file('form/xml/formXmlTest.xml');

//echo "#############<br />";
//
////print_r($xml);
//
//echo "<br />#############<br />";
//
//echo $xml->getname();
//
//echo "<br />#############<br />";
//
//echo $xml->children()->getname();
//
//echo "<br />#############<br />";
//
//echo $xml->children()->children()->getname();
//
//echo "<br />#############<br />";


function hasChildren($element) {
    //se l'elemento padre ha un figlio (controllo che il nome non sia null)
    if($element->children()->getname() !=null) {
        //costruisco il tag con quel nome
        echo "<".$element->children()->getname()."";
            // e scrivo gli attributi
            foreach ($element->children()->attributes() as $a => $b) {
                echo " $a=\"$b\"";
            }
        echo ">\n";
        hasChildren($element->children());
        echo "</".$element->children()->getname().">\n";
    }
}

echo "<textarea style=\"width: 100%; height: 600px;\">";
hasChildren($xml);
echo "</textarea>";

//foreach ($xml->fieldset as $fieldset){
//    echo "fieldset<br />";
//    foreach ($fieldset->group as $group) {
//        echo "group<br />";
//        foreach ($group->element as $element) {
//            echo "$element with attributes:<br />";
//            foreach ($element->attributes() as $a => $b) {
//                echo "$a=$b<br />";
//            }
//        }
//    };
//};

?>