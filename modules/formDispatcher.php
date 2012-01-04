<?php
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
