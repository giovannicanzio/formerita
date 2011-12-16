<script type="text/javascript">

    $(document).ready(function(){
        $("#themeSwitcher").change(function(){
            $(this).submit();
        })
    })

</script>

<style type="text/css">
    #themeSwitcher {
        position: fixed;
        border: #f90 3px solid;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        background: #fff;
        padding: 10px 15px;
        top: 20px;
        right: 20px;
        font-family: "Verdana", "Arial", sans-serif;
        font-size: 10px;
        z-index: 1000;
    }
</style>

<form action="demo.php" method="GET" id="themeSwitcher">
    <label for="themeSelector">Select theme:</label>
    <select name="theme" id="themeSelector">
        <?php
        foreach ($themesArray as $themeName => $themePath) {
            $selected = "";
            if($_REQUEST['theme'] == $themePath) {
                $selected = "selected=\"selected\"";
            }
            ?>
        <option value="<?php echo $themePath?>" <?php echo $selected?>><?php echo $themeName?></option>
        <?php   
        }

    ?>
    </select>
</form>