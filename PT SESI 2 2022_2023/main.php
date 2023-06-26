<html>
	<head>
		<title>Hotel Check In Check Out</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<?php
			$fname=$_POST["fname"];
		?>
		<H2><center>:: HOTEL CHECK IN CHECK OUT ::</center></H2>
		<form action="process.php" method="post">
			<table id="cus" align="center">
				<tr>
					<td>
						Full Name <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="name" name="fname" pattern="[A-Za-z ]+" value=<?php echo $fname;?> readonly required>
					</td>
				</tr>
				<tr>
					<td>
						Ic Number <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="name" name="Ic" pattern="[0-9]{12}" required>
						Example : 010203040506
					</td>
				</tr>
				<tr>
					<td>
						Phone Number <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="name" name="phone" pattern="[0-9]{3}-[0-9]{7,8}" required>
						Example : 012-3456789
					</td>
				</tr>
				<tr>
					<td>
						Email <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="email" name="email" required>
					</td>
				</tr>
				<tr>
					<td>
						Check In date <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="date" name="cinDate" required>
					</td>
				</tr>
				<tr>
					<td>
						Check In Time <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="time" name="cinTime" required>
					</td>
				</tr>
				<tr>
					<td>
						Check Out date <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="date" name="coutDate" required>
					</td>
				</tr>
				<tr>
					<td>
						Check Out Time <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="time" name="coutTime" required>
					</td>
				</tr>
				<tr>
					<td>
						Room Type <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="radio" name="type" value="Standart Single" required> Standart Single
						<br>
						<input type="radio" name="type" value="Double Twin" required> Double Twin
						<br>
						<input type="radio" name="type" value="Triple Deluxe" required> Triple Deluxe
						<br>
						<input type="radio" name="type" value="Family Suite" required> Family Suite
						<br>
					</td>
				</tr>
				<tr>
					<td>
						Floor Level <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<select id="fl" name="fl" required>
							<option value="">-- Please Select --</option>
							<?php
								for($x=1;$x<=10;$x++)
								{
									echo"<option value=' Floor $x'>Floor $x</option>";
								}
								/*$x=1;
								while($x<=10)
								{
									echo"<option value=' Floor $x'>Floor $x</option>";
									$x++;
								}
								/*$x=1;
								do
								{
									echo"<option value=' Floor $x'>Floor $x</option>";
									$x++;
								}while($x<11);*/
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Number Of Room <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="Number" name="nor" required>
					</td>
				</tr>
				<tr>
					<td>
						Room Services <red>*</red>
					</td>
					<td>
						:
					</td>
					<td>
						<input type="checkbox" name="services[]" value="Room Service" required> Room Service <red>*</red>
						<br>
						<input type="checkbox" name="services[]" value="Cleaning"> Cleaning
						<br>
						<input type="checkbox" name="services[]" value="Laundry"> Laundry
						<br>
						<input type="checkbox" name="services[]" value="Meal"> Meal
						<select id="meal" name="MealType">
							<option value="Breakfast"> Breakfast </option>
							<option value="Launch"> Launch </option>
							<option value="Dinner"> Dinner </option>
							<option value="Snacks"> Snacks </option>
						</select>
						<br>
						<input type="checkbox" name="services[]" value="Wi-Fi"> Wi-Fi
						<br>
					</td>
				</tr>
                <tr>
                    <td>Special Requirements, if any </td>
                    <td> : </td>
                    <td>
                        <textarea name="specialreq"></textarea>
                    </td>
                </tr>
				<tr>
					<td>
						<input type="checkbox" required>
						I accept the Terms and Conditions
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Submit Aplication">
						<input type="reset" value="Clear">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>