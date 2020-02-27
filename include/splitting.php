<?php

$multiple = preg_replace('#/\*[^*]*\*+([^/][^*]*\*+)*/#', '', $single);
$excess = preg_replace('/\s+/', ' ', $multiple);
$trim = trim($excess," ");
$split = preg_split('/(?<=[;{}])/', $trim, 0, PREG_SPLIT_NO_EMPTY);


$_SESSION['split_code'] = $split;
$_SESSION['files'] = $entry;

?>
