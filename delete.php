<?php
require_once('classes/config.php');
$articleId = $_REQUEST['id'];
$query = "DELETE FROM SEERS WHERE id = $articleId";

$conn->query($query);


?>

<script>
alert("Deleted!"); window.history.back();
</script>