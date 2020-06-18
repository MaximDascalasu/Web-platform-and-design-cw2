<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
<title>Customer</title>
</head>
<body> 

<a href ="merchandise.html">Order Form</a>

<?php
// define variables and set to empty values
$Fname = "";
$City = "";
$UserID = "";
$Pass = "";
$th="";
$hi="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $Fname = $_POST["name"];
   $City = $_POST["city"];
  
   $th="Thank you for using our website!";
   $hi="Hi  ". $Fname;
   $UserID = "Your User ID has been set to:".$Fname.strlen($Fname)."GCU";
   $Pass="Your password is:".str_shuffle($City);
   
}

?>

<h2>Customer Details Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   First Name: <input type="text" name="name">
   <br><br>
    Chosen City: <input type="text" name="city">
   <br><br>
       <br><br>
   <input type="submit" name="submit" value="Submit"> 
       <br><br>
   <input type="reset" name="reset" value="Reset"> 
</form>

<?php
echo $th;
echo "<br>";
echo $hi;
echo "<br>";
echo $UserID;
echo "<br>";
echo $Pass;
echo "<br>";

?>

</body>
</html>