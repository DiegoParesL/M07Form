<h2>Login</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="user" placeholder="user">
    <br><br>
    <input type="password" name="pass" placeholder="password">
    <br><br>
    <input type="submit">
</form>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["user"]) )  {
        echo "Usuari Correcte!!!";
    } else {
        echo "login incorrecte";
    }
    

?>