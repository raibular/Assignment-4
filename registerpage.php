<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/styleerg.css">

</head>
<body>
<div class="regbox">
    <h1> Create a new account </h1>
    <form>
        <p>Username</p>
        <input type="text" name="inv" placeholder="Enter Username" required pattern="^\D([a-z]|[A-Z]){3,}\d*?">
        <p>Firstname</p>
        <input type="text" name="inv" placeholder="Enter first-name" required pattern="^[A-Z]*|[A-Z][a-z]*|[a-z]*">
        <p>Lastname</p>
        <input type="text" name="inv" placeholder="Enter last-name" required pattern="^[A-Z]*|[A-Z][a-z]*|[a-z]*">
        <p>E-mail</p>
        <input type="email" name="inv" placeholder="Enter e-mail" required pattern="^\D[a-z]">
        <p>Passsword</p>
        <input type="password" name="inv" placeholder="Enter Password" required pattern="^(([A-Z]+)[a-z]{3,})\d+[a-z]*?[A-Z]*?">

        <input type="submit" value="Create account">
        <a href="loginpage.php">Already registered?</a><br>


    </form>
</div>
</body>
</html>