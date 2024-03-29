<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/PaginaLoginV2.css">
    <script src="https://kit.fontawesome.com/9ab9988c3d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="/images/favicon.jpg" />
    <title>Cabinet Medical Web Management</title>
</head>
<body>
    <header>
        <ul>
                <li>
                    <a class="logo" href="/index_cabinet.html">

                        <span class="header_icon_logo"> <i class="fas fa-clinic-medical"></i> </span>
                        <img class="logo" src="./images/CMED.jpg" alt="Cmed logo">
                        <!-- <span class="header_icon"> <i class="fas fa-calendar-plus"></i> </span>
                            <span class="header_text">Logo</span> -->
                    </a>
                </li>


        
                <li>
                    <a class="header_button" href="/PaginaGeneralaCabinetV2.html">
                        <span class="header_icon"> <i class="fas fa-sign-in-alt"></i> </span>
                        <span class="header_text">Log In</span>
                    </a>
                </li>

        </ul>
    </header>
    <main>
        <div class="LogIn">
            
            <div class="LogIn__formHeader">
                <img class="LogIn__formHeader__logo" src="./images/CMED.jpg" alt="Cmed logo">
            </div>
            <!-- <img class="logo" src="./images/CMED.jpg" alt="Cmed logo"> -->

            <form action="./PaginaGeneralaCabinetV2.html" class="LogIn__form">
                <h1>Login</h1>

                <label>Email/Username:</label>
                <input type="email" placeholder="Enter email or username" required>

                <label>Password:</label>
                <input type="password" placeholder="Enter password" required>

                <button type="submit">Login</button>

            </form>
            <div class="LogIn__formFooter">
                <span><a href="#">Forgot password?</a></span>
                <p>Don't have an account?<a href="./PaginaSignupCabinetV2.html">Singup</a></p>
            </div>

        </div>
    </main>



    <footer>
        <p>Cabinet Medical Web Management</p>
    </footer>
</body>
</html>