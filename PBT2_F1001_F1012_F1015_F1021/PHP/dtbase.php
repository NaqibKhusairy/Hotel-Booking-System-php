<?php
    $book = mysqli_connect("localhost","root","","hotelbook");                                      //CONNECT TO DATABASE
    if(!$book)                                                                                      //IF NOT CONNECT TO DATABASE DO
    {
        die('Could not connect : '.mysqli_error());                                                 //PRINT COULD NOT CONNET : ............
    }
    mysqli_select_db($book,"hotelbook");                                                            //SELECT DATABASE
    $booktable = "CREATE TABLE IF NOT EXISTS Cus                                                    #CREATE TABLE IF THE TABLE NOT EXISTS
    (
        FullName varchar(100),                                                                      #ROW 1 , COL 1
        Email varchar(100),                                                                         #ROW 1 , COL 2
        TelNum varchar(13),                                                                         #ROW 1 , COL 3
        Addrss varchar (200),                                                                       #ROW 1 , COL 4
        SpecialReq varchar (200),                                                                   #ROW 1 , COL 5
        RoomType varchar(20),                                                                       #ROW 1 , COL 6
        CheckInDate varchar(15),                                                                    #ROW 1 , COL 7
        CheckOutDate varchar(15),                                                                   #ROW 1 , COL 8
        NumNight int,                                                                               #ROW 1 , COL 9
        NomRoom int,                                                                                #ROW 1 , COL 10
        RM_PerNight int,                                                                            #ROW 1 , COL 11
        totalRM int                                                                                 #ROW 1 , COL 12
    )";
    mysqli_query($book,$booktable);                                                                 #CREATE TABLE
    $name=$_POST["name"];                                                                           //GLOBAL VARIABLE FOR name
    $mail=$_POST["mail"];                                                                           //GLOBAL VARIABLE FOR mail
    $num=$_POST["num"];                                                                             //GLOBAL VARIABLE FOR num
    $add=$_POST["add"];                                                                             //GLOBAL VARIABLE FOR add
    $special=$_POST["specialreq"];                                                                  //GLOBAL VARIABLE FOR special
    $RType=$_POST["roomtype"];                                                                      //GLOBAL VARIABLE FOR RType
    $dtin=$_POST["cin"];                                                                            //GLOBAL VARIABLE FOR dtin
    $dtout=$_POST["cout"];                                                                          //GLOBAL VARIABLE FOR dtout
    $numnight = $_POST["numnight"];                                                                 //GLOBAL VARIABLE FOR numnight
    $noRoom=$_POST["noroom"];                                                                       //GLOBAL VARIABLE FOR noRoom
    $rmpernight=$_POST["rm"];                                                                       //GLOBAL VARIABLE FOR rmpernight
    $totlRM=$_POST["ttlRM"];                                                                        //GLOBAL VARIABLE FOR totlRM

    $inssql = "INSERT INTO Cus (FullName,Email,TelNum,Addrss,SpecialReq,RoomType,CheckInDate,       #DETAILS FOR INSERT INTO Cus TABLE
    CheckOutDate,NumNight,NomRoom,RM_PerNight,totalRM)
    VALUES ('$name','$mail','$num','$add','$special','$RType','$dtin','$dtout','$numnight',
    '$noRoom','$rmpernight','$totlRM')";
    if(mysqli_query($book,$inssql))                                                                 //IF INSERT INTO SUCSESSFULL , DO
    {
        include 'bdbooking.php';                                                                    //INCLUDE CONTENT IN bdbooking.php
    }
    else                                                                                            //IF INSERT INTO NOT SUCSESSFULL , DO
    {
        echo "Your Data Not input on databases.";                                                   //ECHO (PRINT) TEXT
    }
?>