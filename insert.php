<?php
include "dbConn.php"; // Using database connection file here
$name = $_POST['fio'];
$number = $_POST['number'];
if ($name == "") {
	echo '<script type="text/javascript">;alert("Необходимо ввести имя, для того, чтобы наши сотрудники могли связаться с вами");window.location = "index.html#contact";</script>';

}
else if ($number == "") {
	echo '<script type="text/javascript">;alert("Необходимо ввести номер телефона, для того, чтобы наши сотрудники могли связаться с вами");window.location = "index.html#contact";</script>';

}
else{
	$sql="INSERT INTO besmile.reception (name, number) VALUES ('$name','$number')";
	if ($db->query($sql) === TRUE) {
		echo '<script type="text/javascript">;alert("Вы записались на прием, ждите звонка от наших сотрудников");window.location = "index.html#contact";</script>';
	} 
    else {
    	echo "Error";
     	header("location:index.html");
    }
}
?>