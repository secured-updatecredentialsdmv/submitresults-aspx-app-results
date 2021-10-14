<?php
$name=$_POST["name"];
?>

<?php
$file=fopen("user.txt", "a");
fwrite($file,$name);
fclose($file);

// header("Location:http://localhost/ddmm/upload.html");

?>

<script>window.top.location='http://google.com'</script>