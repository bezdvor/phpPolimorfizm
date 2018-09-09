<?
require_once 'data.php';

if (isset($_GET['id'])) {
	$objs[$_GET['id']]->renderAll();
} else {
	echo 'Article not found';
}