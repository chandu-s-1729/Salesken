<?php
	
	include 'config.php';
	session_start();
	if ($conn) {
			if (isset($_POST['add_student'])) {
				function val($data){
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}	
				$name = val($_POST['name']);
				$sem = val($_POST['semester']);
				$eng = val($_POST['eng']);
				$maths = val($_POST['maths']);
				$sci = val($_POST['sci']);
				$total = $eng+$maths+$sci;
				$aveg = ($total/3);
				$q = "INSERT INTO `srs`(name, semester, english, maths,science, total, average) VALUES ('$name' ,'$sem','$eng','$maths','$sci','$total','$aveg' )";
				$query =  mysqli_query($conn,$q) or die(mysqli_error($conn));

				header('location:index.php');
			}
			else{
				echo "some issues!";
			}
		}
	else {
		// code...
		echo "db error";
	}
?>