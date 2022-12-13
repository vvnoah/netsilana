<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styling/main.css">
    <link rel="stylesheet" href="/styling/background.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $page_title ?></title>
</head>
<body>
    <header>
        <a href="/">
            <h1>Netsilana</h1>
        </a>
        <nav>
            <a href="/info">info</a>
            <a href="/praesidium">praesidium</a>
        </nav>
    </header>

    <?php echo $content ?>

    <footer>
        <a href="#">facebook</a>
        <a href="#">instagram</a>
    </footer>
    <div id="background"></div>
</body>
</html>