<html>
<body>
<form method="POST">
        <input type="text" name="name" placeholder="Enter name">
        <input type="text" name="pass" placeholder="enter password">
        <input type="submit">
    </form>
<?php
$connect=mysqli_connect("localhost","root","","youtube")or die("connection failed");
$name=$_POST['name'];
$pass=$_POST['pass'];
$sql="INSERT INTO `demo` (`name`, `pass`) VALUES ('$name', '$pass')";
$result=mysqli_query($connect,$sql);
if($result)
{
    echo "data inserted";
}
?>
</boby>
</html>