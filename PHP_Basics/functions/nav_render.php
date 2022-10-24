<?php
    function renderNav($link){
        $url = $link[0];
        $name = ucfirst($link[1]);
        $class = str_replace(' ', '', $link[1]);
        return "<div><a href='$url' class='$class'>$name</a><div class='$class'></div></div>";
    };
?>