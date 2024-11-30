<?php
$title = "Voting System";
ob_start();
?>

<h1>Hello World</h1>

<?php
$content = ob_get_clean();

require "./public/layouts/default.php";

?>