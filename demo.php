 <?php 
	$severname = "localhost";
	$username ="root";
	$password="";
	$dbname="blogs";

	$conn = new mysqli($severname, $username, $password, $dbname);
	/*$query2 ="SELECT * FROM posts ORDER BY created_at DESC LIMIT 7,6";
	$result2 =$conn-> query($query2);
	$categories2 =array();
	while ($row2 =$result2->fetch_assoc()) {
		$categories2[] = $row2;
	}*/
	$query_most ="SELECT p.*,c.title AS 'categories' FROM posts p LEFT JOIN categories c ON p.category_id= c.id ORDER BY created_at desc LIMIT 3,6";
	$result_most =$conn-> query($query_most);
	$posts_most =array();
	while ($row =$result_most->fetch_assoc()) {
		$posts_most[] = $row;
	}
	foreach ($posts_most as $cate2) {
		echo "<pre>";
			print_r($cate2);
		echo "</pre>";
	}
 ?> 