 <?php 
	$severname = "localhost";
	$username ="root";
	$password="";
	$dbname="blogs";

	$conn = new mysqli($severname, $username, $password, $dbname);
	$query2 ="SELECT * FROM posts ORDER BY created_at DESC LIMIT 7,6";
	$result2 =$conn-> query($query2);
	$categories2 =array();
	while ($row2 =$result2->fetch_assoc()) {
		$categories2[] = $row2;
	}

	foreach ($categories2 as $cate2) {
		echo "<pre>";
			print_r($cate2);
		echo "</pre>";
	}
 ?> 