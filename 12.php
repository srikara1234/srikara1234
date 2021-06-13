<?php
$msg = '';
$item_sl = $item_name = $item_price = $item_code = '';
	if(isset($_POST['form_submit'])) {
		$option = $_POST['option'];
		if($option == '1')
		{
			$item_sl = '01';
			$item_name = 'Book';
			$item_price = '30';
			$item_code = 'B01';
		}
		elseif ($option == '2') {
			$item_sl = '02';
			$item_name = 'Pen';
			$item_price = '15';
			$item_code = 'P02';
		}
		elseif ($option == '3') {
			$item_sl = '03';
			$item_name = 'Eraser';
			$item_price = '10';
			$item_code = 'E03';
		}
	}
?>
<?php
$qty = '';
$item_total = '';
	if(isset($_POST['qty_sub'])) {
		$qty = $_POST['qty'];
		$item_sl = $_POST['sl_num'];
		$item_name = $_POST['item_name'];
		$item_price = $_POST['item_price'];
		$item_code = $_POST['item_code'];
		$item_total = $qty * $item_price;
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
	<div class="w3-container w3-half w3-small w3-margin-top">
		<form class="w3-container w3-card-2" method="POST">
			<center><h2><b>K-Mart</b></h2></center>
			<select class="w3-select w3-border" name="option" required>
    		<option value="" disabled selected>Choose your option</option>
    		<option value="1">Book</option>
   			<option value="2">Pencil</option>
   			<option value="3">Eraser</option>
  </select>
  <br>
  <br>
  <input class="w3-button w3-green w3-center" type="submit" name="form_submit">
  <br>
 <br>
		</form>
	</div>

	<div class="w3-container w3-left w3-half w3-small w3-margin-bottom w3-container w3-card-2">
					<center><h2>Item Info</h2></center>

		<table class="w3-table">
			<tr class="w3-green">
				<td>Description</td>
				<td>Values</td>
			</tr>
			<tr>
			<td>SL.Number</td>
			<form method="POST">
			<td>
				<input class="w3-input" type="text" name="sl_num" value="<?php echo $item_sl; ?>" readonly>
			</td>

			</tr>
			<tr>
				<td>Item Name</td>
				<td><input class="w3-input" type="text" name="item_name" value="<?php echo $item_name; ?>" readonly></td>
			</tr>
			<tr>
			<td>Item Price</td>
				<td>
				<input class="w3-input" type="text" name="item_price" value="<?php echo $item_price; ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Item Code</td>
				<td><input class="w3-input" type="text" name="item_code" value="<?php echo $item_code; ?>" readonly></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input class="w3-input" type="text" name="qty" placeholder="Enter Quantity" required></td>
			</tr>
			<br>
		</table>
		<br>
		<input class="w3-button w3-green w3-right" type="submit" name="qty_sub">
		<br><br>
		</form>
	</div>

	<div class="w3-container w3-half w3-right w3-small w3-margin-bottom  w3-card-2">
		<center><h2>Bill</h2></center>
		<br>
		<table class="w3-table">
			<tr class="w3-green">
				<th>Item Name</th>
				<th>Item Code</th>
				<th>Item Price</th>
				<th>Quantity</th>
				<th>Date of purchase</th>
				<th>Total Amount</th>
			</tr>
			<tr>
				<td><?php echo $item_name; ?></td>
				<td><?php echo $item_code; ?></td>
				<td><?php echo $item_price; ?></td>
				<td><?php echo $qty; ?></td>
				<td><?php echo date("d/m/Y h:i:sA"); ?></td>
				<td><?php echo $item_total; ?></td>
			</tr>
		</table>
		<br>
		<br>
	</div>
	<br>
	<br>
</body>	
</html>