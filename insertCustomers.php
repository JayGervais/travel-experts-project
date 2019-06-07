<?php
$table_info=$_POST;
addTableInfo('customers',$table_info);
function addTableInfo($table,$table_info){
          $v1table='';
          $v2table='';
          foreach ($table_info as $key => $value) {
          $v1table=$v1table.$key.',';
          $v2table=$v2table."'$value'".',';
          }
    $v1table=rtrim($v1table,',');
    $v2table=rtrim($v2table,',');
    global $sql;
     $sql = "INSERT INTO $table ($v1table) VALUES ($v2table);";

        };

$dbh = mysqli_connect("localhost","root","","travelexperts");
if(!$dbh){
    die('Could not connect: '.mysqli_connect_error());
    }
echo 'Connected successfully<br/>';
echo $sql."<br/>";
addTableInfo('customers',$table_info);

$retval = mysqli_query($dbh, $sql);
if(! $retval )
{
  die('can not work ' . mysqli_error($dbh));
}
echo "successfully!!!\n";
mysqli_close($dbh);

header('Location: customerslogin.php');


?>
