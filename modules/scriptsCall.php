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
?>
<!-- jQuery UI inclusion -->
<link type="text/css" href="themes/script/jquery_ui/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
<script type="text/javascript" src="themes/script/jquery_ui/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="themes/script/jquery_ui/js/jquery-ui-1.8.16.custom.min.js"></script>
<!-- -->

<script type="text/javascript">
$(function(){
                <?php 
                    
                    // If in edit mode enable form tools (calendar etc...)
                
                    if ($_POST['action'] == "edit") {
                
                ?>
                // Datepicker
                $('.date input').datepicker({
                    inline: true,
                    dateFormat: 'dd/mm/yy'
                });
                <?php 
                
                    }
                
                ?>                
                // tabs
                $('#tabs').tabs();

            });
</script>