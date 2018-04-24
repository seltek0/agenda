<?php
// DE TAKEN LATEN ZIEN
function opstaan(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 1";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	// echo "<tr><td>".($row['Taak'])."</td></tr>";
	        echo $row["Taak"]."<br>";
	    }
	} else {
	    echo "no</br>";
	    echo mysql_error($sql);
	}
}
function eten1(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 2";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["Taak"]."<br>";
	    }
	}
}
function eten2(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 3";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["Taak"]."<br>";
	    }
	}
}
function eten3(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 4";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["Taak"]."<br>";
	    }
	}
}
function werk(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 5";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["Taak"]."<br>";
	    }
	}
}
function boodschappen(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 6";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["Taak"]."<br>";
	    }
	}
}
function uit(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 7";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["Taak"]."<br>";
	    }
	}
}
function kapper(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 8";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["Taak"]."<br>";
	    }
	}
}
function spelen(){
	include "db.php";
	$sql = "SELECT Taak FROM Planning WHERE id = 9";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo $row["Taak"]."<br>";
	    }
	}
}

// close db
mysqli_close($conn);
?>