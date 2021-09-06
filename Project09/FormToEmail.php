<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Capture information from Form</title>

<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>

<?php

//print_r($_POST);

$FName = $_POST['FName'];
$LName = $_POST['LName'];
$Email = $_POST['Email'];
$JobTitle = $_POST['JobTitle'];
$Severity = $_POST['Severity'];
$Time = $_POST['Time'];
if( isset($_POST['Hardware']) ) {$Hardware = $_POST['Hardware']; }
if( isset($_POST['Software']) ) {$Software = $_POST['Software']; }
if( isset($_POST['Human']) ) {$Human = $_POST['Human']; }
$Comment = $_POST['Comment'];


print "<p class=\"format\">";
   print "Customer Incident Report";
print "</p>";

print "<p>";
   print "Customer Name: " . $FName . " " . $LName . "<br />";
   $message = "Customer Name: " . $FName . " " . $LName . "\n\n";
print "</p>";

print "<p>";
   print "Email: " . $Email . "<br />";
print "</p>";

print "<p>";
   print "Jobtitle: " . $JobTitle . "<br />";
   $message .= "Jobtitle: " . $JobTitle . "\n\n";
print "</p>";

print "<p>";
   $message .= "Time of Incident: " . $Time . "\n\n";
   print "Time of Incident: " . $Time . "<br />";
print "</p>";

print "<p>";
   $message .= "Severity: " . $Severity . "\n\n";
   print "Severity: " . $Severity;
print "</p>";

print "<p>";
   $message .= "Error Type(s): " . "\n";
   print "Error Type(s):<br />";
   if ($Hardware != '') { 
      print "&emsp;" . $Hardware . "<br />"; 
      $message .= "   " . $Hardware . "\n";
   }
   if ($Software != '') { 
      print "&emsp;" . $Software . "<br />"; 
      $message .= "   " . $Software . "\n";
   }
   if ($Human != '') { 
      print "&emsp;" . $Human . "<br />"; 
      $message .= "   " . $Human . "\n";
   }
print "</p>";

print "<p>";
   print "Comment: " . $Comment;
   $message .=  "\n\nComment: " . $Comment;
print "</p>";
   


//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers = "From: " . $Email . "\r\n";
$headers .= "CC: jan.bentley@uvu.edu";

//mail("jan.bentley@uvu.edu","Customer Incident Report",$message,$headers);
mail("mgchild09@gmail.com","Customer Incident Report",$message,$headers);

?>

</body>
</html>
