<?php
dd($_SERVER["REQUEST_ URI"]);
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
if($uri == "/"){
    require "controllers/index.php";
}else if($uri == "about"){
    require "controllers/story.php";
}else if ($uri == "cateogries"){
    require "controllers/cateogries.php";
} ?>

