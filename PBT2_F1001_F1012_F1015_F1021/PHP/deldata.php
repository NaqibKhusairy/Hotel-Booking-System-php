<?php
    $name=$_POST["name"];                                                                           //GLOBAL VARIABLE FOR name
    $book = mysqli_connect("localhost","root","","hotelbook");                                      //CONNECT TO DATABASE
    if(!$book)                                                                                      //IF NOT CONNECT TO DATABASE DO
    {
        die('Could not connect : '.mysqli_error());                                                 //PRINT COULD NOT CONNET : ............
    }
    mysqli_select_db($book,"hotelbook");                                                            //SELECT DATABASE
    if(isset($_POST["del"]))
    {
        $deldta="DELETE FROM Cus WHERE FullName='$name'";
        mysqli_query($book,$deldta);
    }
    mysqli_close($book);                                                                        //CLOSE DATABASE
?>