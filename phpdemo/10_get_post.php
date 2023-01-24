<?php

/* ----$_GET & $_post superglobals ----

we can pass data through urls and forms using the $_get and $_post superglobals. */

if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Neil&age=23">Click</a>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<div>
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>
<br>
<div>
    <label for="age">Name:</label>
    <input type="text" name="age">
</div>
<br><br>
<input type="submit" name="submit" value="submit">

</form>