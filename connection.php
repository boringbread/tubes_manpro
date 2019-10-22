<?php  
$serverName = "10.100.70.70\\AKREDITASI2020";
$uid = "guestManPro";
$pwd = "Testing123";
$databaseName = "Akreditasi2020";
$connectionInfo = array( "UID"=>$uid,                            
                        "PWD"=>$pwd,                            
                        "Database"=>$databaseName); 
/* Connect using SQL Server Authentication. */  
$conn = sqlsrv_connect($serverName, $connectionInfo); 
$query = "EXEC Tabel3a2_DosenPembimbingUtamaTugasAkhir;";
/* Execute the query. */ 
$stmt = sqlsrv_query( $conn, $query);  
if($stmt){
    echo "Statement executed.<br>\n";
}   
else{
    echo "Error in statement execution.\n";  
    die(print_r( sqlsrv_errors(), true));  
}
sqlsrv_free_stmt( $stmt);  
sqlsrv_close( $conn);  
?>