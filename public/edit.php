<?phprequire "./forms.php";$directory = './dataBase/';$db = fopen($directory . $_POST['index'] . '.txt', 'a+');$read = trim(fread($db, filesize($directory . $_POST['indexEdit'] . '.txt')));$el = json_decode($read, true);$el['name'] = check($_POST['login']);$el['email'] = check($_POST['email']);$el['desc'] = check($_POST['desc']);file_put_contents($directory . $_POST['index'] . '.txt', '');file_put_contents($directory . $_POST['index'] . '.txt', json_encode($el));?>