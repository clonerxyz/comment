<html>
 <body>

<?php echo $_POST["namadata"]; ?><br>
<?php echo $_POST["haridan"]; ?><br>
<?php echo $_POST["textdata"]; ?><br>

<?php
$txt = "/public/data.txt"; 
if (isset($_POST['namadata']) && isset($_POST['haridan'])) { // check if both fields are set
    $fh = fopen($txt, 'a'); 
    $txt=$_POST['namadata'].' \r\n '.$_POST['haridan'].' \r\n '.$_POST['textdata'].''; 
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
	header("Location: https://www.dhanidansellywedding.site/");
}
?>
 </body>
 </html> 