<?php include_once('views/layout/header.inc.php'); ?>
<h2>Register</h2>
<form class="form" action="?module=post&amp;action=register" method="post">
    <input type="email" name="email" placeholder="Email" required> <br/>
    <input id="password1" type="password" name="password1" placeholder="Password" required><br/>
    Repeter mot de passe <input id="password2" type="password" name="password2" placeholder="Password" required><br/>
    <input id="register" class="btn btn-success" type="submit" name="register" value="Submit" disabled>
</form>
<h2>Login</h2>
<form class="form" action="?module=post&amp;action=login" method="post">
    <input type="email" name="email" placeholder="Email" required><br/>
    <input type="password" name="password" placeholder="Password" required><br/>
    <input class="btn btn-success" type="submit" name="register" value="Submit">
</form>
<?php include_once('views/layout/footer.inc.php'); ?>
