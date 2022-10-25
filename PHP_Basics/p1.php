<?php
 ini_set("display_errors", 1);
?>

<?php
 require_once"./core/header.php";
 titleName("Psychonauts");
 require_once"./core/nav.php";
?>

<?php
    require_once"./p1_info/p1_info.php";
    echo "<p>$p1_info</p>";
    require_once"./p1_info/p1_chars.php";
    ?>
    <pre>
    <?php
        var_dump($p1chars);
    ?>
    </pre>

<?php
 require_once"./core/footer.php";
?>