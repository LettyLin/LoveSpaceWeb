<?php
session_start();
include("User.php");
include("ExecuteMYSQL.php");
if(!isset($_SESSION['name']))
{
    $user = new User($_POST["email"],$_POST["password"],$_POST["gender"]);
    $add=new ExecuteMYSQL();
    $add->Add($user,"users");
    $_SESSION['name']=$_POST["name"];
}
?>
<html>
<head></head>
<body>
<?php
    echo "<h1>hello world!</h1>";
?>

</body>
</html>

