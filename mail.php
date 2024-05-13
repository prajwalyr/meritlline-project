<?php
if(isset($_POST['submit']) && !empty($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$sub=$_POST['sub'];
		$msg=$_POST['msg'];

		$to='iamnaveengyadav@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message='Name:'.$name.'E-mail :'.$email.' Phone :'.$phone. 'Subject : ' .$sub.' Wrote the following'.$msg;

		if(mail($to, $subject, $message)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
			echo "<script>alert('successfully sent');windows.location='contact.php';</script>";
		}
		else{
			echo "Something went wrong!";
		}
}	

header("refresh:5; url:/meritline/contact.php");

?>