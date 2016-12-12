<html>
<title>Login Page</title>
<body>

Manually input your bag's location data (Testing purpose only) <br><br>

<form action="bagLocationUpdate.php" method="POST">
    <label for="B">Bag Id : </label><input type="text" name="B"><br>
    <label for="L">Location : </label><input type="text" name="L"><br>
    <label for="T">Time Stamp : </label><input type="text" name="T"><br>
    <label for="S">Speed : </label><input type="text" name="S"><br>

    <input type="submit" name="submit" value="Input Manually">
</form>

</body>
</html>
