<?php 
    require_once 'include/header.php';
?>

<div>
    <h1>Register</h1>
    <p>Already have an account? <a href="login.php"> Login!</a></p>

    <form action="include/register-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password" placeholder="Confirm password">
        <button type="submit" name="submit">Register</button>
        <!--Akhan theke register-inc.php create kora hochce -->
    </form>
</div>


<?php 
    require_once 'include/footer.php';
?>