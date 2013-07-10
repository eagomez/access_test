<?php

    try
    {
    $dsn = "odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\\TranscriptRequests.accdb;Uid=admin;Pwd=;";

    $dbh = new PDO($dsn);

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        die();    
    }
   

/* odbc PHP connection without PDO */
/*
    try{
        $username = "admin";
        $password = "";
        $connection = odbc_connect("Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=C:\\TranscriptRequests.accdb;",$username, $password);
    }catch(Exception $ex){
      echo $ex->getMessage();
    }
    
    if(!$connection)
    {
        echo "Error establishing connection to database.";
    } else 
    {
        odbc_exec($connection, "Insert into TranscriptRequests". 
                               "(StudentID, PrevLocation, PrevSchool, LastName, FirstName, DOB, RequestorName, SchoolName, SchoolAddr, SchoolCity, SchoolState, SchoolZip, Transmittal)".
                               "Values ('0000001', '123', 'Test', 'LastName', 'FirstName', '02/02/1987', 'Requestor', 'Desert Pines HS', '123 test ave.', 'henderson', 'nv', '89011', 'mail' );");

        odbc_close($connection);        
    }
*/

 
?>
