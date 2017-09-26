<?php 
session_start();
session_unset();
session_destroy();

$e = "hello";
echo "<script>
alert('$e');
</script>";
?>