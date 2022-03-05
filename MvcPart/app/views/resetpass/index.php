<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/PaginaResetPassV2.css">
    <script src="https://kit.fontawesome.com/9ab9988c3d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.jpg" />
    <title>Cabinet Medical Web Management</title>
</head>
<body>
    <header>
        <ul>
            <?=$data['generalbar']?>
        </ul>
    </header>
    <main>
        <div class="reset-password">
            <form action="#" class="reset-password__form">
                <h1>Reset password for user User Name</h1>

                <label>Choose a new password</label>
                <input type="newPass1" placeholder="Choose a new password" required>

                <label>Retype the password</label>
                <input type="newPass2" placeholder="Retype the password" required>

                <button type="submit">Reset</button>

            </form>

        </div>
    </main>



    <footer>
        <p>Cabinet Medical Web Management</p>
    </footer>
</body>
</html>