<?php
    function renderCharacters ($chars, $game){
        if($game == "p1"){
            foreach($chars as $char){
                echo "<div class='char'>";
                if(array_key_exists("camper", array: $char)){
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
                    echo "<p>Psychonaut Agent</p>";
                };
    
                echo "</div>";
            };
        } else {
            foreach($chars as $char){
                echo "<div class='char'>";
                if(array_key_exists("intern", array: $char)){
                    $name = $char["name"];
                    $info = $char["info"];
                    $url = $char["image"];
                    echo "<img src='./Char_img/$url' alt='$name'></img>";
                    echo "<h2>$name</h2>";
                    echo "<p>$info</p>";
                    echo "<p>Intern at the Motherlobe</p>";
                } else if ($char["name"] == "Augustus Aquato"){
                    $name = $char["name"];
                    $info = $char["info"];
                    $url = $char["image"];
                    echo "<img src='./Char_img/$url' alt='$name'></img>";
                    echo "<h2>$name</h2>";
                    echo "<p>$info</p>";
                    echo "<p>Psychic dad</p>";
                } else {
                    $name = $char["name"];
                    $info = $char["info"];
                    $url = $char["image"];
                    echo "<img src='./Char_img/$url' alt='$name'></img>";
                    echo "<h2>$name</h2>";
                    echo "<p>$info</p>";
                    echo "<p>Psychonaut Agent</p>";
                }
                echo "</div>";
            };
        };

    }
?>