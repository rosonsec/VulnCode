<?php
if (isset($_COOKIE['file']))
{
	include($_COOKIE['file']);
}
else { echo "You must use this cookie on the request: <b>Cookie: file=../../../../etc/passwd</b>"; }
?>
