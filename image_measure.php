<?php
    $file = "swfs/header.swf";
    $info = getimagesize($file);
    $width = $info[0];
    $height = $info[1];
    print "{$width} x {$height}\n";
?>