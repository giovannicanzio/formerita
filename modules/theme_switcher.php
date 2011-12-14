<script type="text/javascript">

    $(document).ready(function(){
        $("#themeSwitcher").change(function(){
            $(this).submit();
        })
    })

</script>

<form action="index.php" method="GET" id="themeSwitcher">
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