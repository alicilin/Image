<?php
require_once('../lib/Gregwar/Image/Image.php');

use Gregwar\Image\Image;

// Note: create a "cache" directory before try this

echo Image::open('img/test.png')
    ->sepia()
    ->jpeg();
