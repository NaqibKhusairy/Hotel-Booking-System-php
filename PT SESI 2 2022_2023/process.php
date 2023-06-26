<html>
	<head>
		<title>Hotel Check In Check Out</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<?php
		
			function IctoAnything($Ic)
			{
				if($Ic%2==0)
				{
					$gender="Female";
				}
				else
				{
					$gender="Male";
				}
				$year=substr($Ic,0,2);
				if($year >=0 && $year <=23)
				{
					$year+=2000;
				}
				else{
					$year+=1900;
				}
				$age=2023-$year;
				$month=substr($Ic,2,2);
				$day=substr($Ic,4,2);
				$DOB="$day-$month-$year";
				$from =substr($Ic, 6, 2);
				if ($from==1||$from==21||$from==22||$from==23||$from==24) 
				{
					$negeri="Johor";
				}
				elseif ($from==2||$from==25||$from==26||$from==27) 
				{
					$negeri="Kedah";
				}
				elseif ($from==3||$from==28||$from==29) 
				{
					$negeri="Kelantan";
				} 
				elseif ($from==4||$from==30) 
				{
					$negeri="Melaka";
				} 
				elseif ($from==5||$from==31||$from==59) 
				{
					$negeri="Negeri Sembilan";
				} 
				elseif ($from==6||$from==32||$from==33) 
				{
					$negeri="Pahang";
				} 
				elseif ($from==7||$from==34||$from==35) 
				{
					$negeri="Pulau Pinang";
				} 
				elseif ($from==8||$from==36||$from==37||$from==38||$from==39) 
				{
					$negeri="Perak";
				} 
				elseif ($from==9||$from==40) 
				{
					$negeri="Perlis";
				} 
				elseif ($from==10||$from==41||$from==42||$from==43||$from==44) 
				{
					$negeri="Selangor";
				} 
				elseif ($from==11||$from==45||$from==46) {
					$negeri="Terengganu";
				} 
				elseif ($from==12||$from==47||$from==48||$from==49) 
				{
					$negeri="Sabah";
				} 
				elseif ($from==13||$from==50||$from==51||$from==52||$from==53) 
				{
					$negeri="Sarawak";
				} 
				elseif ($from==14||$from==54||$from==55||$from==56||$from==57) 
				{
					$negeri="Kuala Lumpur";
				} 
				elseif ($from==15||$from==58) 
				{
					$negeri="Labuan";
				} 
				elseif ($from==16) 
				{
					$negeri="Putrajaya";
				} 
				else 
				{
					$negeri="Negeri Tidak Diketahui";
				}
				return [$gender,$negeri,$DOB,$age];
			}
			$fname=$_POST["fname"];
			$fname=strtoupper($fname);
			$Ic=$_POST["Ic"];
			$result=IctoAnything($Ic);
			$gender=strtoupper($result[0]);
			$negeri=strtoupper($result[1]);
			$DOB=$result[2];
			$age=$result[3];
			
			$phone=$_POST["phone"];
			$email=$_POST["email"];
			$cinDate=$_POST["cinDate"];
			$cinTime=$_POST["cinTime"];
			$cin=strtotime("$cinDate $cinTime");
			$cinDate=strtotime($cinDate);
			$cinDate=date('d-m-Y',$cinDate);
			$coutDate=$_POST["coutDate"];
			$coutTime=$_POST["coutTime"];
			$cout=strtotime("$coutDate $coutTime");
			$coutDate=strtotime($coutDate);
			$coutDate=date('d-m-Y',$coutDate);
			$ttlnight=round(($cout-$cin)/(60*60*24));
			$type=$_POST["type"];
			if($type=="Standart Single")
            {
                $rm=180;
            }
            elseif($type=="Double Twin")
            {
                $rm=230;
            }
            elseif($type=="Triple Deluxe")
            {
                $rm=280;
            }
            elseif($type=="Family Suite")
            {
                $rm=330;
            } 
			
			$type=strtoupper($type);
			$fl=$_POST["fl"];
			$fl=strtoupper($fl);
			$nor=$_POST["nor"];
            $totalRM=$nor*$rm*$ttlnight;
			
			if (isset($_POST["services"]))
			{
				$services=$_POST["services"];
			}
			$MealType=$_POST["MealType"];
			$specialreq=$_POST["specialreq"];
			switch ($specialreq)
			{
				case "":
				{
					$specialreq="<span class='red'> No Secial Requirements </span>";
					break;
				}
				default:
				{
					$specialreq="<span class='green'> $specialreq </green>";
					break;
				}
			}
			//strlen($string);
			//strpos($string,find,start);
			//strstr($string,search);
			//strtolower($string);
		?>
		<H2><center>:: HOTEL CHECK IN CHECK OUT ::</center></H2>
		<blue><H3><center><i><?php echo "Hi, $fname";?></i></center></H3></blue>
		<form>
			<table id="cus" align="center"> 
				<tr>
					<td>
						Ic Number
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $Ic;?>
					</td>
				</tr>
				<tr>
					<td>
						Date Of Birth
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $DOB;?>
					</td>
				</tr>
				<tr>
					<td>
						Age
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $age;?>
					</td>
				</tr>
				<tr>
					<td>
						Gender
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $gender;?>
					</td>
				</tr>
				<tr>
					<td>
						State of Birth
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $negeri;?>
					</td>
				</tr>
				<tr>
					<td>
						Phone Number
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $phone;?>
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $email;?>
					</td>
				</tr>
				<tr>
					<td>
						Check In date
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $cinDate;?>
					</td>
				</tr>
				<tr>
					<td>
						Check In Time
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $cinTime;?>
					</td>
				</tr>
				<tr>
					<td>
						Check Out date
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $coutDate;?>
					</td>
				</tr>
				<tr>
					<td>
						Check Out Time
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $coutTime;?>
					</td>
				</tr>
				<tr>
					<td>
						<b>TOTAL NIGHT</b>
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $ttlnight;?>
					</td>
				</tr>
				<tr>
					<td>
						Room Type
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $type;?>
					</td>
				</tr>
                <tr>
                    <td><b>ROOM PRICE</b></td>
                    <td> : </td>
                    <td>
                        <?php echo "RM $rm";?>
                    </td>
                </tr>
				<tr>
					<td>
						Floor Level
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $fl;?>
					</td>
				</tr>
				<tr>
					<td>
						Number Of Room
					</td>
					<td>
						:
					</td>
					<td>
						<?php echo $nor;?>
					</td>
				</tr>
				<tr>
					<td>
						Room Services
					</td>
					<td>
						:
					</td>
					<td>
						<?php
							foreach($services as $service)
							{
								if($service=="Meal")
								{
									$service="Meal ($MealType)";
								}
								$service=strtoupper($service);
								echo "$service <br>";
							}
						?>
					</td>
				</tr>
                <tr>
                    <td>Special Requirements, if any </td>
                    <td> : </td>
                    <td>
                        <?php echo $specialreq;?>
                    </td>
                </tr>
                <tr>
                    <td><b>TOTAL PRICE</b></td>
                    <td> : </td>
                    <td>
                        <?php echo "RM $totalRM";?>
                    </td>
                </tr>
			</table>
		</form>
	</body>
</html>