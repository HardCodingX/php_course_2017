<?php
header("Content-type:image/jpg");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename='./html5.jpg'");

// The PDF source is in original.pdf
readfile("html5.jpg");
?>
