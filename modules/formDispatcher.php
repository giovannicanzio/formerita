<?php

    if($_POST['action'] == "") {
        include 'form/exampleForm_view.php';
    } else {
        switch ($_POST['action']){
            case 'save':
                include 'form/exampleForm_view.php';
                break;
                
            case 'cancel':
                include 'form/exampleForm_view.php';
                break;
                
            case 'edit':
                include 'form/exampleForm_edit.php';
                break;
                
        } 
    }

?>
