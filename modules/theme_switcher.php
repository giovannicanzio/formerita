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
<script type="text/javascript">

    $(document).ready(function(){
        $("#themeSwitcher").change(function(){
            $(this).submit();
        })
    })

</script>

<form action="#" method="GET" id="themeSwitcher">
    <label for="themeSelector">Select theme:</label>
    <select name="theme" id="themeSelector">
        <?php
        foreach ($themesArray as $themeName => $themePath) {
            $selected = "";
            if($_REQUEST['theme'] == $themePath) {
                $selected = "selected=\"selected\"";
                $creditsPath = $themePath."/credits.php";
            }
            ?>
        <option value="<?php echo $themePath?>" <?php echo $selected?>><?php echo $themeName?></option>
        <?php 
        
        }

    ?>
    </select>
    <?php 
    
    include $creditsPath;
    
    ?>
</form>