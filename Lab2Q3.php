<!DOCTYPE html>
<html>
<head></head>
<body>

<?php
error_reporting(0);
$ros = $_REQUEST['ros'];
$dai = $_REQUEST['dai'];
$orc = $_REQUEST['orc'];
$total = 0;
?>

<h3>Welcome to The Florist!</h3><br/>
<form onSubmit="return validate_form(this)" name="entryform" method="post">
    Rose &nbsp; &nbsp; : <input type="text" name="ros" <?php echo $ros; ?> size="3"><br/><br/>
    Daisy &nbsp;&nbsp; : <input type="text" name="dai" <?php echo $dai; ?> size="3"><br/><br/>
    Orchid &nbsp;: <input type="text" name="orc" <?php echo $orc; ?> size="3"><br/><br/>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if($ros==''){
    echo "Place your order to calculate the amount payable.";
}else{
    echo "You ordered : $ros roses, $dai daisies, and $orc orchids. <br/>";
    switch($ros){
        case $ros>0:
            $total += 2.5*$ros;
            break;
        case $ros==0:
            break;
    }
    switch($dai){
        case $dai>0:
            $total += 1.25*$dai;
            break;
        case $dai==0:
            break;
    }
    switch($orc){
        case $orc>0:
            $total += 1.5*$orc;
            break;
        case $orc==0:
            break;
    }

    echo "The total amount is RM$total";
}


?>

</body>
</html>
