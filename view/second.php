<html>
<body>
<body style="background-color:skyblue;">

<title>Seller registation Details</title>
<hr>
<h1 style="text-align:center">Registation Details</h1>
<hr>

</body>
 </html>

<center><?php
  echo "<br>";
  $fname=$_POST["fullname"];
  $uname=$_POST["username"];
  $mail=$_POST["email"];
  $pass=$_POST["password"];
  $add=$_POST["address"];
  $pno=$_POST["phoneno"];
  $nid=$_POST["nid"];
  $gen=$_POST["gender"];
  $dob=$_POST["dob"];


  echo "<br>Full Name: ".$fname."<br>";
  echo "Username: ".$uname."<br>";
  echo "Email: ".$mail."<br>";
  echo "Password: ".$pass."<br>";
  echo "Address: ".$add."<br>";
  echo "Phone no: ".$pno."<br>";
  echo "National Id: ".$nid."<br>";
  echo "Gender: ".$gen."<br>";
  echo "Date Of Birth: ".$dob."<br>";
?></center>