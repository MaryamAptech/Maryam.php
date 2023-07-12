<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Survey Form</title>
</head>
<style>
body {
    margin: 50px auto;
    font-family: 'Poppins', sans-serif;
    color: #d9dcd6;
    background-image: url('https://images.unsplash.com/photo-1619266465172-02a857c3556d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1331&q=80');
    background-repeat: no-repeat;
    background-size: cover;
}

.registration {
    margin: auto;
    max-width: 800px;
    background-color: rgba(51, 54, 52, 0.8);
    border-radius: 10px 10px 0 0;
    border: 1px solid black;
    border-radius: 10px 10px 0 0;
}

header {
    text-align: center;

}

#survey-form {

    display: flex;
    flex-direction: column;
    padding: 10px 50px;
    border-top: 2px solid rgb(51, 54, 52);

}

.top-label {
    margin-top: 10px;
}

.top-input {
    margin-top: 10px;
    height: 25px;
    width: 100%;
    font-size: 16px;
}


#dropdown-div {
    margin: 10px 0 20px;
}


#dropdown {
    width: 100%;
    height: 25px;
}

textarea {
    font-family: 'Poppins', sans-serif;
}

fieldset {

    padding-bottom: 20px;
    border: none;
}

fieldset a {
    text-decoration: none;
    color: #adb5bd;
}

#contact {
    display: flex;
    flex-direction: column;
}


.button {
    margin: 20px auto 10px;
    background-color: #222;
    border-radius: 4px;
    border-style: none;
    color: #d9dcd6;
    cursor: pointer;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.5;
    max-width: 200px;
    min-height: 44px;
    min-width: 100px;
    outline: none;
    overflow: hidden;
    padding: 12px 30px 10px;
    text-align: center;
}

.button:hover,
.button:focus {
    opacity: .75;
}

</style>
<body>
    <div class="registration">
        <header>
            <h1 id="title">Registration</h1>
            <p id="description">Fill out form and click submit!</p>
        </header>
        <form action=""  method="POST" id="survey-form">
            <label   id="name-label" class="top-label">Name: </label><input name="name" id="name" class="top-input" type="text"
                placeholder="Enter your name" required></input>

            <label id="email-label" class="top-label">Email: </label><input  name="email"  id="email" class="top-input" type="email"
                placeholder="Enter your email" required></input>

            <label id="number-label" class="top-label">password </label><input name="password" id="number" class="top-input"
                type="number" placeholder="Enter your password" min="1930" max="2005"></input>
            <div id="dropdown-div">
               
            </div>
            <button name="register" type="submit" class="button">Submit</button>
        </form>



        <?php
        include("connection.php");
        
        if(isset($_POST['register']))
{
    $name= $_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];


$query= "insert into student(student_name,student_email,student_password) values ('".$name."','".$email."','".$password."')";


$exc= mysqli_query($con,$query);


}
        ?>
    </div>
</body>

</html>