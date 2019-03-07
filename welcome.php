<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
$name = $country = $address = $type  = $message = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$name = test_input($_POST["name"]);
$country = test_input($_POST["country"]);
$address = test_input($_POST["address"]);

echo "<h2>Your Input:</h2>";
echo "Hello your name is " . $name;
echo "<br>";
echo "Your email is " . $country;
echo "<br>";
echo "your website is" . $address;
echo "<br>";

?>

</body>
</html>
