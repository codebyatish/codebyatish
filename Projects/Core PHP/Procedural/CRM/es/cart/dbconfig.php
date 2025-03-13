<?php
function connect_to_database ($databaseName)
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "electronic_shop";
    
    $con = null;
    
    $con = mysqli_connect ($hostname, $username, $password, $databaseName);

    // Check connection
    if (mysqli_connect_errno($con))
      die ("Failed to connect to MySQL: ".mysqli_connect_error());
    
    // set support for Bharat languages and Unicode in general
    // without this the non-english languages will not display correctly
    mysqli_query($con,'SET character_set_results=utf8');
    mysqli_query($con,'SET names=utf8');
    mysqli_query($con,'SET character_set_client=utf8');
    mysqli_query($con,'SET character_set_results=utf8');
    mysqli_query($con,'SET character_set_connection=utf8');
    mysqli_query($con,'SET collation_connection=utf8_general_ci');
    
    return $con;
}

function disconnect_from_database ($con)
{        
    mysqli_close($con);
}  
?>  