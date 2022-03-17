//TODO index->check which action is made = switch (create/edit/delete)
//TODO from switch to action to action function
//TODO require edit.php in switch->edit from index.php_check_syntax
//TODO check in function "update"() if inputfields are filled in_array
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="">
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['title'] ?></li>
        <li><?= $card['author'] ?></li>
        <li><?= $card['synopsis'] ?></li>
        <a href="?action=create">update</a><br>
        <a href="?action=create">delete</a>
    <?php endforeach; ?>
    </form>
</body>
</html>