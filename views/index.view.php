<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>
<h1>blogs</h1>
<link rel="stylesheet" href="css/style.css">
<form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
    <button>meklet</button>
</form>

<?php if (count($posts) == 0) { ?>
<p>Nekas nav </p>

<?php } ?>

<ul>
    <?php foreach($posts as $post){ ?>
        <li> <?= $post["content"] ?> </li>
    <?php } ?>
</ul>
<?php require "components/footer.php" ?>
</body>
</html>