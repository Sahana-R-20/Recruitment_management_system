
<?php
$conn= new mysqli('localhost','root','','recruitment_db')or die("Could not connect to mysql".mysqli_error($con));
$res=mysqli_query($conn,"call Delete_failed_applicants()");
print "Failed applicants deleted";
?>
