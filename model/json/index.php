<html>
  <body>
    <body style="background-color:pink;">

<title>Seller registation Form</title>
<hr>
<h1 style="text-align:center">Registation Form</h1>
<table align="Center">
<form action="save-form.php" method="post">

<tr>
<hr>
<td><label for="fullname">Full Name:</label></td> 
<td><input type="text" name="fullname" required></td>
</tr>

<tr>
<td><label for="username">User Name:</label></td>
<td><input type="text" name="username" required></td>
</tr>

<tr>
<td><label for="email">Email:</label></td>
<td><input type="text" name="email" required></td>
</tr>

<tr>
<td><label for="password">Password:</label></td>
<td><input type="password" name="password" required></td>
</tr>


<tr>
<td><label for="address">Address:</label></td>
<td><input type="text" name="address" required></td>
</tr>

<tr>
<td><label for="phoneno">Phone number:</label></td>
<td><input type="text" name="phoneno" required></td>
</tr>

<tr>
<td><label for="nid">National Id no:</label></td>
<td><input type="text" name="nid" required></td>
</tr>

<tr>
    <td>Gender:</td> 
        <td>
          <input type="radio" name="gender" value="Male"> &nbsp; Male
          <input type="radio" name="gender" value="Female"> &nbsp; Female
          <input type="radio" name="gender" value="Others"> &nbsp; Others
    </td>
</tr>

<tr>
    <td>Date Of Birth:</td> 
        <td>
        <input type="date" name="dob"><label for="Name" required></label>
    </td>
</tr>

<tr>
<td><input type="submit" value="Submit" name="btnClick"> &nbsp; &nbsp; &nbsp; <input type="reset" value="Reset" name="btnReset"></td>
</tr>

</form> 
</table>
</table>
</table>

</head>
</html>
</form>