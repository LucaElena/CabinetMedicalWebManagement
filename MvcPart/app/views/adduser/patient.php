<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/addPatient.css">
    <link rel="stylesheet" href="/css/PagG.css">
    <title>AddPatient</title>
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
                <a class="header_button" href="/files">Files</a>
            </li>
            <li>
                <a class="header_button" href="/chat">Chat</a>
            </li>
            <li class="login">
                <a href="/login">Log In</a>
            </li>
        </ul>
    </header>

    <div class="addPatient">
        
       
        <form action="#" class="addPatient__form" >
            <h1>Invite a patient</h1> 
            <label>First Name</label>
            <input type="Text" placeholder="First Name" required>
        
            <label>Last Name</label>
            <input type="text" placeholder="Last Name" required>
                    
            <label>Email</label>
            <input type="email" placeholder="Email" required>

                        
            <button type="submit" >Send</button>
            
            
        </form>
       
    </div>

    
</body>
</html>