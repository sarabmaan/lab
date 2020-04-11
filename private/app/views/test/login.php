<style>
form > {
    display: block;
}
</style>
<form method ="post" action="/test/login">
<input type = "hidden" name="csrf" value = "<?php echo($csrf)?>">
<label for= "username">Email</label>
<input id="username" name="username" required autocomplete="email">
<label for="password">password</label>
<input type="password" name="passworf" required autocomplete="email">
<input type="submit" value="login">
</form>