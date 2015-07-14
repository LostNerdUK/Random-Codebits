<?php
$brokenArray = "Serialized array here";
$fixedArray = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $brokenArray);
$fixedArray = unserialize($array);
?>
