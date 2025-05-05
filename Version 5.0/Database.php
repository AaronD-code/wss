<?php

$dbname = 'name';
$dbuser = 'user';
$dbpass = 'pass';
$dbhost = 'host';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("'Unable to connect to database' '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open databse '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);

$tblcnt = 0;
while($tbl = mysqli_fetch_array($result)) {
    $tblcnt++;
}

if (!$tblcnt) {
    echo"There are no tables <br />\n";
}   else {
    echo "There are $tblcnt tables <br />\n";
}