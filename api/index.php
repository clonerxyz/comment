<html>
 <body>

<?php echo $_POST["namadata"]; ?><br>
<?php echo $_POST["haridan"]; ?><br>
<?php echo $_POST["textdata"]; ?><br>

<?php
if(isset($_POST['namadata']) && isset($_POST['haridan']) && isset($_POST['textdata'])) {
    $data = $_POST['namadata'] . '-' . $_POST['haridan'] . '-' . $_POST['textdata'] . "\r\n";
    $ret = file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
		echo '<script type="text/javascript">
           window.location = "https://www.dhanidansellywedding.site/"
      </script>';
    }
    else {
        echo "$ret bytes written to file";
		echo '<script type="text/javascript">
           window.location = "https://www.dhanidansellywedding.site/"
      </script>';
    }
}
else {
   echo '<script type="text/javascript">
           window.location = "https://www.dhanidansellywedding.site/"
      </script>';
   die('no post data to process');
}
 </body>
 </html> 