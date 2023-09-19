<html>
 <body>

<?php echo $_POST["namadata"]; ?><br>
<?php echo $_POST["haridan"]; ?><br>
<?php echo $_POST["textdata"]; ?><br>

<?php
if(isset($_POST['namadata']) && isset($_POST['haridan']) && isset($_POST['textdata'])) {
    $data = $_POST['namadata'] . '-' . $_POST['haridan'] . '-' . $_POST['textdata'] . "\r\n";
    $ret = file_put_contents('/public/data.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
		//header("Location: https://www.dhanidansellywedding.site/");
		echo "fail";
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
		//header("Location: https://www.dhanidansellywedding.site/");
		die('success');
    }
}
else {
   //header("Location: https://www.dhanidansellywedding.site/");
   echo "fail";
   die('no post data to process');
}
?>
 </body>
 </html> 