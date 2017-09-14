<?php
$title = "Management";

$content = '<h3>Forhandlere</h3>
           
            <a href="uploadimage.php">Upload billede</a><br/>
            <a href="forhandler.php">Overblik over forhandlere</a><br/>';

include './Template.php';
?>
<?php
require_once 'dbcon.php';
$sql = 'SELECT img FROM img';
$stmt = $link->prepare($sql);
$stmt->excute();
$stmt->bind_result($img);

while($stmt->fetch()){
	echo '<p>' ."Upload af dit billede".'</p>';
}
?>
