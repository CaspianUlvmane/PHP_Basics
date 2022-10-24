<?php
require_once"./functions/nav_render.php";
?>

<?php
    $links = [["./index.php", "home"], ["./p1.php", "psychonauts"], ["./p2.php", "psychonauts 2"] ];
?>

<?php
    echo "<nav>";
    foreach($links as $link){
    
    echo renderNav($link);
};
    echo "</nav>";
?>