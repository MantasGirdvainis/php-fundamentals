<?php

/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

echo $_SERVER['PHP_SELF']; // Current File Dir
// echo $_GET['name']; 
// echo $_GET['age'];

// post naudojamas tik su formom.
if(isset($_POST['submit']))
echo $_POST['name']; 
echo $_POST['age'];
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Mantas&age=31">click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name:</label>
    <input type="text" name="name" />
    <label for="name">Age:</label>
    <input type="text" name="age" />
    
    <input type="submit" name="submit" />
</div>
</form>

