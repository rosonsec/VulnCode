<?php
if (isset($_GET['file']))
{
	include($_GET['file']);
}
else { echo "You must use this parameter on the request: <b>file=../../../../etc/passwd</b>"; }
?>
