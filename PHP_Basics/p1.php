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

    <?php
        foreach($p1chars as $char){
            echo "<div class='char'>";
            if(array_key_exists("camper", $char)){
                $name = $char["name"];
                $info = $char["info"];
                $url = $char["image"];
                echo "<img src='./Char_img/$url' alt='$name'></img>";
                echo "<h2>$name</h2>";
                echo "<p>$info</p>";
                echo "<p>Camper at Whispering Rock</p>";
            } else {
                $name = $char["name"];
                $info = $char["info"];
                $url = $char["image"];
                echo "<img src='./Char_img/$url' alt='$name'></img>";
                echo "<h2>$name</h2>";
                echo "<p>$info</p>";
            };

            echo "</div>";
        };
    ?>

<?php
 require_once"./core/footer.php";
?>