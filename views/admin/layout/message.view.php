<?php
if (isset($_SESSION['error_message'])) {
	echo "<p style='color: red'>".$_SESSION['error_message']."</p>";
	unset($_SESSION['error_message']);
}

if (isset($_SESSION['success_message'])) {
	echo "<p style='color: green'>".$_SESSION['success_message']."</p>";
	unset($_SESSION['success_message']);
}

?>