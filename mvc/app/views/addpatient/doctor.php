<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/addStaff.css">
    <title>Add Pacients</title>
</head>
<body>
    <div class="addStaff">
        <div class="addStaff__header"><h1>Add Staff</h1></div>
        <div class="addStaff___photo">
            <img src="./images/profil_img.jpg" alt="profile photo">
            <button class="btn">+</button>
        </div>


        <div class="addStaff__data">
            <form action="#" class="addStaff__data__form" >
                      
                <label>First Name</label>
                <input type="Text" placeholder="First Name" required>
            
                <label>Last Name</label>
                <input type="text" placeholder="Last Name" required>
               
                <label>Specialization</label>
                <input type="text" placeholder="Specialization" required>
                 
                <label>Email</label>
                <input type="email" placeholder="Email" required>

                <label>Phone </label>
                <input type="number" placeholder="Phone number" required>

                <label>Others</label>
                <input type="text" placeholder="Others..">
                <!--<textarea rows="5" cols="33" placeholder="Others.."></textarea>-->
                
                <button type="submit" >Add</button>
                
                
            </form>

        
        </div>
    </div>

</body>
</html>
