<?php
$array = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $row['array']);
$array = unserialize($array);
?>
