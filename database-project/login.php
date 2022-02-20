<?php 
    require_once 'include/header.php';
?>

<div>
    <h1>Log in</h1>
    <p>No account? <a href="register.php"> Register Here!</a></p>

    <form action="include/login-inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">Login</button>
    </form>
</div>


<?php 
    require_once 'include/footer.php';
?>
