<html>

<head>

</head>

<body>

<?php

$con = mysql_connect("localhost", "root", "");
if (!$con)
{
die("Can Not Connect: " . mysql_error ());
}


if (mysql_query ("CREATE DATABASE Library_Catalog", $con))
{
echo "Database Created";
}
else echo "Error: " . mysql_error ();


mysql_select_db ("Library_Catalog", $con);

$sql = "CREATE TABLE Items (

ID int auto_increment,
Bar_Code int (50),
Call_Number	int (50),
Catalog_Bib	varchar (50),
ISBN int (50),
Subject varchar (50),
Title varchar (50),
Cover_Art varchar (50),
Author varchar (50),
Lib_Of_Cong_Code varchar (50),
Web_Link varchar (50),
Time_Stamp timestamp,
fulltext key `search_index1`(Subject, Author)
)";

mysql_query ($sql, $con);

mysql_close ($con);

?>


</body>

</html>
