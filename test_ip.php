<?php

$content = file_get_contents('http://www.zarinpal.com/labs/TestIP');

preg_match('/(\d+)\.(\d+)\.(\d+)\.(\d+)/', $content, $matches);

echo $matches[0];
?>