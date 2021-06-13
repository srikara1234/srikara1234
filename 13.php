<!DOCTYPE html>
<html>

<body>
	<div>
		<h1>Find Factorial</h1>
		<form method="POST">
			<br>
			<br>
			<input name="num" placeholder="Enter number">
			<br>
			<br>

                     <input type="submit" name="form_submit">
			<br>
			<br>
		</form>
	</div>
	
<?php
$msg = '';
$num = '';
	if(isset($_POST['form_submit'])) {
		$num = $_POST['num'];
		$msg = factorial_of_a_number($num);

	}
function factorial_of_a_number($n)
{
	if($n >= 0)
	{
		if($n == 0)
	    {
		   return 1;
	    }
	  	else 
	    {	
		   return $n * factorial_of_a_number($n-1);
	    }
	}
	else
	{
		return 'Invalid!! Enter Positive Ineteger';
	}
}
  ?>
		<h3><?php echo 'Factorial of <b> '. $num . '</b> is <b>' . $msg;  ?></h3>	
</body>
</html>