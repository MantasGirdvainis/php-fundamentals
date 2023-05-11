<?php


// post naudojamas tik su formom.
if(isset($_POST['submit'])) {
$name = htmlspecialchars($_POST['name']); 
$age = htmlspecialchars($_POST['age']); 
echo $name;
echo $age;
}
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name:</label>
    <input type="text" name="name" />
    <label for="name">Age:</label>
    <input type="text" name="age" />
    
    <input type="submit" name="submit" />
</div>
</form>
