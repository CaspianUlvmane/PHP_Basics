<?php
 ini_set("display_errors", 1);
?>

<?php
 require_once"./core/header.php";
 titleName("Psychonauts 2");
 require_once"./core/nav.php";
?>
<link rel="stylesheet" href="P1_style.css">

<?php
    require_once"./p2_info/p2_info.php";
    echo "<p>$p2_info</p>";
    require_once"./p2_info/p2_chars.php";
    ?>

    <?php
        require_once"./functions/char_render.php";
        renderCharacters($p2chars, "p2");
    ?>

<?php
 require_once"./core/footer.php";
?>