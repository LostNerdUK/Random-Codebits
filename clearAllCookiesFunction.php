<?php

//A simple script that unsets all cookies stored in $_COOKIE and also the cookie stored on the users computer.

function clearCookies() {
	foreach($_COOKIE as $one => $two) {
		unset($_COOKIE[$one]);
		setcookie($one, "", time()-3600);
	}
return true;
}
?>
