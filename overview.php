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

<h1>books - track your collection of books cards</h1>

<table style="text-align: center; border: solid 1px; padding: 10px;">
    <th style="border: solid 1px">Title</th>
    <th style="border: solid 1px">Author</th>
    <th style="border: solid 1px">Synopsis</th>
        <?php foreach ($cards as $card) : ?>
        <tr>
            <td style="border-bottom: solid 1px;"><?= $card['title'] ?></td>
            <td style="border-bottom: solid 1px;"><?= $card['author'] ?></td>
            <td style="border-bottom: solid 1px;"><?= $card['synopsis'] ?></td>
            <td style="border-bottom: solid 1px;"><a href="<?= "index.php?id={$card['id']}&action=update"?>">Update</a></td>
            <td style="border-bottom: solid 1px;"><a href="<?= "index.php?id={$card['id']}&action=delete"?>">Delete</a></td>
            <td style="border-bottom: solid 1px;"><a href="<?= "index.php?id={$card['id']}&action=show"?>">Details</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<!-- step one done -->
<a href="index.php?action=create">Create a new book</a>
         <!-- ALWAYS can use same value for Id and name -->
<?php pre($_GET);?>
</body>
</html>