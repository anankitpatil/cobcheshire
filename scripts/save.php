<?php
if(isset($_POST)){
	$content = str_replace('£', '&pound;', $_POST['content']);
	$name = $_POST['name'];
	
	if (file_exists('../editable/copy/' . $name)) {
		unlink('../editable/copy/' . $name);
	}
	copy('../editable/' . $name, '../editable/copy/' . $name);
	unlink('../editable/' . $name);
	$newfile = fopen('../editable/' . $name, 'w');
	fwrite($newfile, $content);
	fclose($newfile);
}
?>