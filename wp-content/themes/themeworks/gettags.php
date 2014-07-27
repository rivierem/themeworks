<?php
if (isset($_POST['search'])) {
	$search = htmlentities($_POST['search']);
} else $search ='';

$db = mysql_connect('localhost','themeworks_user','8cLdZmwHdfMQXVDy'); //Don't forget to change
mysql_select_db('wp', $db); //theses parameters
$sql = "SELECT name from wp_terms WHERE name LIKE '$search%'";
$req = mysql_query($sql) or die();
echo '<ul>';
	while ($data = mysql_fetch_array($req)){
		echo '<li><a href="#" onclick="selected(this.innerHTML);">'.htmlentities($data['name']).'</a></li>';
	}
echo '</ul>';
mysql_close();
?>