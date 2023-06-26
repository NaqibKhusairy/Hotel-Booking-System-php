<!--Group Azfar,Naqib,Firdaus Hasim , Mawi-->
<!--HTML Code-->
<html>
    <head>
        <title>INAP DESA RESERVATION DETAILS</title>                                                            <!-- Web Title -->
        <link rel="icon" type="image/icon" href="../Image/icon.png">                                            <!-- Icon For Web Page-->
        <link rel="stylesheet" type="text/css" href="../CSS/hotelStyle.css">                                    <!-- Link to CSS-->
    </head>
    <body>
        <?php                                                                                                   #PHP code
            $dtin=$_POST["cin"];                                                                                #variable $dtin
            $dtout=$_POST["cout"];                                                                              #variable $dtout
            $noRoom=$_POST["noroom"];                                                                           #variable $noRoom
            $RType=$_POST["roomtype"];                                                                          #variable $RType
            $name=$_POST["name"];                                                                               #variable $name
            $mail=$_POST["mail"];                                                                               #variable $mail
            $num=$_POST["num"];                                                                                 #variable $num
            $add=$_POST["add"];                                                                                 #variable $add
            $special=$_POST["specialreq"];                                                                      #variable $special
            if($special=="")                                                                                    #if $special is null , do
            {
                $special="No Special Reuirements";                                                              #set $special to  "No Special Reuirements"
            }
            else                                                                                                #if $special no noll, do
            {
                $special=$special;                                                                              #set $special to value in $special
            }
            $cin=strtotime($dtin);                                                                              #variable $cin
            $cout=strtotime($dtout);                                                                            #variable $cout
            $ttlnight=round(($cout-$cin)/(60*60*24));                                                           #variable ttlnight (formula to count Total Night)
            $cin=date('d-m-Y',$cin);                                                                            #convert $cin to date(d-m-Y)
            $cout=date('d-m-Y',$cout);                                                                          #convert $cout to date(d-m-Y)
            if($RType=="ss")                                                                                    #if $RType value is ss , do
            {
                $RType="Standart Single";                                                                       #set $RType to "Standart Single"
                $rm=180;                                                                                        #set variable $rm to 180
            }
            elseif($RType=="dt")                                                                                #if $RType value is dt , do
            {
                $RType="Double Twin";                                                                           #set $RType to "Double Twin"
                $rm=230;                                                                                        #set variable $rm to 230
            }
            elseif($RType=="td")                                                                                #if $RType value is td , do
            {
                $RType="Triple Deluxe";                                                                         #set $RType to "Triple Deluxe"
                $rm=280;                                                                                        #set variable $rm to 280
            }
            elseif($RType=="fs")                                                                                #if $RType value is fs , do
            {
                $RType="Family Suite";                                                                          #set $RType to "Family Suite"
                $rm=330;                                                                                        #set variable $rm to 330
            }
            $totalRM=$noRoom*$rm*$ttlnight;                                                                     #variable $totalRM (formula to count Total cost)
        ?>
    <table>                                                                                                     <!-- Table -->
            <form action=dtbase.php method="post">                                                                       <!-- Form on submit to # with method post -->
                <tr>                                                                                            <!-- ROW 1 -->
                    <td colspan="7" id="tabphp">                                                                <!-- COL 1-7 -->
                        <h2 id="HeaderTitle">INAP DESA RESERVATION DETAILS</h2>                                 <!-- content in ROW 1 COL 1-7 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 2 -->
                    <td colspan="2" id="tabphp">Full Name</td>                                                  <!-- COL 1-2 -->
                    <td colspan="5" id="tabphp">                                                                <!-- COL 3-7 -->
                        : <input type="text" name="name" value="<?php echo $name; ?>" readonly>                 <!-- content in COL 3-7 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 3 -->
                    <td colspan="2"  id="tabphp">Email</td>                                                     <!-- COL 1-2 -->
                    <td colspan="5" id="tabphp">                                                                <!-- COL 3-7 -->
                        : <input type="text" name="mail" value="<?php echo $mail; ?>" readonly>                 <!-- content in COL 3-7 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 4 -->
                    <td colspan="2" id="tabphp">Telephone</td>                                                  <!-- COL 1-2 -->
                    <td colspan="5" id="tabphp">                                                                <!-- COL 3-7 -->
                        : <input type="text" name="num" value="<?php echo $num; ?>" readonly>                   <!-- content in COL 3-7 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 5 -->
                    <td colspan="2" id="tabphp">Address</td>                                                    <!-- COL 1-2 -->
                    <td colspan="5" id="tabphp">                                                                <!-- COL 3-7 -->
                        : <textarea name="add" readonly><?php echo $add; ?></textarea>                          <!-- content in COL 3-7 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 6 -->
                    <td colspan="2" id="tabphp">Special Requirements, if any </td>                              <!-- COL 1-2 -->
                    <td colspan="5" id="tabphp">                                                                <!-- COL 3-7 -->
                        : <textarea name="specialreq"  readonly><?php echo $special; ?></textarea>              <!-- content in COL 3-7 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 7 -->
                    <td colspan="7" id="tabphp">                                                                <!-- COL 1-7 -->
                        <h2 id="Desc" align="center">DESCRIPTIONS</h2>                                          <!-- content in COL 1-7 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 8 -->
                    <td colspan="4" align="center" id="tabphp">                                                 <!-- COL 1-4 -->
                        Room Reservation                                                                        <!-- content in COL 1-4 -->
                    </td>
                    <td id="tabphp">                                                                            <!-- COL 5 -->
                        No. of Nights                                                                           <!-- content in COL 5 -->
                    </td>
                    <td id="tabphp">                                                                            <!-- COL 6 -->
                        Room Quantity                                                                           <!-- content in COL 6 -->
                    </td>
                    <td id="tabphp">                                                                            <!-- COL 7 -->
                        Price / Day                                                                             <!-- content in COL 7 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 9 -->
                    <td align="center" id="tabphp">                                                             <!-- COL 1 -->
                        type                                                                                    <!-- content in COL 1 -->
                    </td>
                    <td id="tabphp">                                                                            <!-- COL 2 -->
                        :                                                                                       <!-- content in COL 2 -->
                    </td>
                    <td colspan="2" align="center" id="tabphp">                                                 <!-- COL 3-4 -->
                        <input type="hidden" name="roomtype" value="<?php echo $RType; ?>">                     <!-- put input type hidden for hidden input-->
                        <?php echo $RType; ?>                                                                   <!-- content in COL 3-4 -->
                    </td>
                    <td rowspan="3" align="center" id="tabphp">                                                 <!-- COL 5 (ROW 9-11) -->
                        <input type="hidden" name="numnight" value="<?php echo $ttlnight; ?>">                     <!-- put input type hidden for hidden input-->
                        <?php echo $ttlnight; ?>                                                                <!-- content in COL 5 (ROW 9-11) -->
                    </td>
                    <td rowspan="3" align="center" id="tabphp">                                                 <!-- COL 6 (ROW 9-11) -->
                        <input type="hidden" name="noroom" value="<?php echo $noRoom; ?>">                      <!-- put input type hidden for hidden input-->
                        <?php echo $noRoom; ?>                                                                  <!-- content in COL 6 (ROW 9-11) -->
                    </td>
                    <td rowspan="3" align="center" id="tabphp">                                                 <!-- COL 7 (ROW 9-11) -->
                        <input type="hidden" name="rm" value="<?php echo $rm; ?>">                      <!-- put input type hidden for hidden input-->
                        <?php echo "RM $rm"; ?>                                                                 <!-- content in COL 7 (ROW 9-11) -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 10 -->
                    <td align="center" id="tabphp">                                                             <!-- COL 1 -->
                        from                                                                                    <!-- content in COL 1 -->
                    </td>
                    <td id="tabphp">                                                                            <!-- COL 2 -->
                        :                                                                                       <!-- content in COL 2 -->
                    </td>
                    <td colspan="2" id="tabphp">
                        <input type="hidden" name="cin" value="<?php echo $cin; ?>">                            <!-- put input type hidden for hidden input-->
                        <?php echo $cin; ?>                                                                     <!-- content in COL 3-4 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 11 -->
                    <td align="center" id="tabphp">                                                             <!-- COL 1 -->
                        to                                                                                      <!-- content in COL 1 -->
                    </td>
                    <td id="tabphp">                                                                            <!-- COL 2 -->
                        :                                                                                       <!-- content in COL 2 -->
                    </td>
                    <td colspan="2" id="tabphp">                                                                <!-- COL 3-4 -->
                        <input type="hidden" name="cout" value="<?php echo $cout; ?>">                          <!-- put input type hidden for hidden input-->
                        <?php echo $cout; ?>                                                                    <!-- content in COL 3-4 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 12 -->
                <td colspan="7" id="tabphp">                                                                    <!-- COL 1 -->
                        <h2 id="Desc" align="center">BILL</h2>                                                  <!-- content in COL 1 -->
                    </td>
                </tr>
                <tr>                                                                                            <!-- ROW 13 -->
                    <td colspan="6" align="right" id="tabphp">Total Amount : </td>                              <!-- COL 1-6 -->
                    <td id="tabphp">                                                                            <!-- COL 7 -->
                        <input type="hidden" name="ttlRM" value="<?php echo $totalRM; ?>">                          <!-- put input type hidden for hidden input-->
                        RM<?php echo $totalRM; ?>                                                               <!-- content in COL 7 -->
                    </td>
                </tr>           
                <tr id="tabphp">                                                                                <!-- ROW 14 -->
                    <td colspan="7" align="left" >                                                              <!-- COL 1-7 -->
                        <!--content in COL 1-7 (link to hotelbook.html) and style for <a> and <a:hover> -->
                        <a href="../HTML/hotelbook.html" id="btn" class="button"
                        style="display: inline-block; background-color: lightgray; 
	                    color: black; margin: 2px; padding: 2px; border-radius: 5px;
                        cursor: pointer; text-decoration: none; border:black;"
                        onmouseover="this.style.backgroundColor='rgba(10, 10, 10, 0.3)'; 
                        this.style.color='rgb(240,255,255)';"
                        onmouseout="this.style.backgroundColor='lightgray'; 
                        this.style.color='black';">
                            BACK                                                                                <!-- Value in <a> -->
                        </a>
                        <!--content in COL 1-7 and style for <input[type:submit]> and <input[type:submit]:hover> -->
                        <input type="submit"  id="btn" value="CHECK OUT"
                        style="display: inline-block; background-color: lightgray; 
	                    color: black; margin: 2px; padding: 3px; border-radius: 5px;
                        cursor: pointer; text-decoration: none; border:black;"
                        onmouseover="this.style.backgroundColor='rgba(10, 10, 10, 0.3)'; 
                        this.style.color='rgb(240,255,255)';"
                        onmouseout="this.style.backgroundColor='lightgray'; 
                        this.style.color='black';">
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>