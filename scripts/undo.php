<?php
if(isset($_POST)){
	$name = $_POST['name'];
	
	if (file_exists('../editable/copy/' . $name)) {
		unlink('../editable/' . $name);
		copy('../editable/copy/' . $name, '../editable/' . $name);
		unlink('../editable/copy/' . $name);
		echo 'yes';
	} else {
		echo 'no';
	}
}
?>