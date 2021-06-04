<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/PaginaGeneralaV2.css">

    <title>Cabinet Medical Web Management</title>
    <script src="https://kit.fontawesome.com/9ab9988c3d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.jpg"/>
</head>
<body>
    <header>
        <ul>
            <?=$data['generalbar']?>
        </ul>
    </header>
    <main>
        <p> Welcome <?=$data['type']?> username: <?=$data['username']?></p>
    </main>
    <footer>
        <p>About us. </p>
    </footer>
</body>
</html>