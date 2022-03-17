<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>
<!-- step one done -->
<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['title'] ?></li>
        <li><?= $card['author'] ?></li>
        <li><?= $card['synopsis'] ?></li>
        <a href="?action=create">update</a><br>
        <a href="?action=create">delete</a>
    <?php endforeach; ?>
</ul>
<!-- start step 2 update a table -->
<form method="GET"> <!--post connected to name & POST is used to save value
                                                & GET needs to open a session, store value and then use
        name is refering to database -->
        <!-- CAN USE GET ON ANCHOR TAGS AND BUTTONS -->
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
        <label for="author">Author</label>
        <input type="text" id="author" name="author">
        <label for="synopsis">Synopsis</label>
        <input type="text" id="synopsis" name="synopsis">
        <input type="submit">
        <a href=?action="create.php">create</a><br>

         <!-- ALWAYS can use same value for Id and name -->
</form>
</body>
</html>