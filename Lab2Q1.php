<!DOCTYPE html>
<html>
<body>
<?php
if (!isset($_POST['age']))
{
?>

<form action="<?php echo $_SERVER [ 'PHP_SELF' ]?>" method="post">
    Enter your age: <input type="text" name="age">
    <input type="submit" name ="submit">
</form>

<?php
}
else {
    $age = $_POST["age"];

    if ($age < "21") {
        echo "You are too young to vote.";
    } else {
        echo "You are eligible to vote.";
    }
}
?>

</body>
</html>
