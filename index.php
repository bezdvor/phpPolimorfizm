<?

require_once 'data.php';
foreach($objs as $obj) {
	$obj->render();
}

//echo '<pre>';
//var_dump($objs);
//echo '</pre>';