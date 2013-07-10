<?php

	include '../../includes/accessDBConnect.php';

    $sql = "Insert into TranscriptRequests". 
           "(StudentID, PrevLocation, PrevSchool, LastName, FirstName, DOB, RequestorName, SchoolName, SchoolAddr, SchoolCity, SchoolState, SchoolZip, Transmittal)".
           "Values ('0000001', '123', 'Test', 'LastName', 'FirstName', '02/02/1987', 'Requestor', 'Desert Pines HS', '123 test ave.', 'henderson', 'nv', '89011', 'mail' );";

    $dbh->query($sql);

    if(!$dbh)
    {
		echo "There was an error writing to the database.".
    }

    /*** close the database connection ***/
    $dbh = null;

?>