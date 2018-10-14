<?php

if($_GET['src'] == '') {
    $dir = new DirectoryIterator(dirname(__FILE__));
} else {
    $dir = new DirectoryIterator($_GET['src']);
}

foreach ($dir as $item) {
    if ($item->isDir()) {
        echo "<img src='img/img.png' width='10px'><a href='?src=" . $_GET['src'] . "/" .
            $dir . "&item=" . $item . "'>" . $item . "</a></br>";
    } else {
        echo "<img src='img/img2.png' width='10px'>" . $item . "</br>";
    }
}