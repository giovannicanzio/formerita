<?php
#
#    Formerita
#    (c) 2011 Giovanni Canzio <giovanni.canzio@gmail.com>
#    
#    This file is part of Formerita
#
#    This is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    Formerita is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#

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