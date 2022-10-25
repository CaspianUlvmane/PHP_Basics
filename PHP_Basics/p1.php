<?php
 ini_set("display_errors", 1);
?>

<?php
 require_once"./core/header.php";
 titleName("Psychonauts");
 require_once"./core/nav.php";
?>
<link rel="stylesheet" href="P1_style.css">

<?php
    require_once"./p1_info/p1_info.php";
    echo "<p>$p1_info</p>";
    require_once"./p1_info/p1_chars.php";
    ?>

    <?php
    require_once"./functions/char_render.php";
    renderCharacters($p1chars, "p1");
    ?>

<?php
 require_once"./core/footer.php";
?>