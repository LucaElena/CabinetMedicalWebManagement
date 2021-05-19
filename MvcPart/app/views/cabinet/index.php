
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/PagG.css">

    <title>Cabinet Medical Web Management</title>
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.ico"/>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="#" ><img class="logo" src="/images/CMED.jpg" alt="Cmed logo"></a>
            </li>
            <li>
                <a class="header_button" href="/schedules">Schedules</a>
            </li>
            <li>
                <a class="header_button" href="/files">Patients Files</a>
            </li>
            <li>
                <a class="header_button" href="/adduser/patient">Invite Patient</a>
            </li>
            <li>
                <a class="header_button" href="/adduser/doctor">Invite Doctor</a>
            </li>
            <li>
                <a class="header_button" href="/chat">Chat</a>
            </li>
            <li class="login">
                <a href="/login">Log In</a>
            </li>
        </ul>
    </header>
    <main>
        <p>Cabinet index: <?=$data['id']?></p>
    </main>
    <footer>
        <p>About us. </p>
    </footer>
</body>
</html>