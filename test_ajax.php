<?php
header("Content-Type: application/json; charset=UTF-8");

// Get now time
date_default_timezone_set('Asia/Taipei');
$today = date('Y-m-d H:i:s');

require 'config.php'; 

// MSSQL Connect data
$serverName = "192.168.11.104";  
$uid = $DBUSERNAME;
$pwd = $DBPASSWORD;
$sqlsrv_db = "powersale";
$connectionInfo = array("UID" => $uid, "PWD" => $pwd, "Database" => $sqlsrv_db);

// Check Request method is POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Required field names
    $required = array('ipaddr', 'calchar', 'calloc', 'rate', 'calmon01', 'calmon02', 'calmon03', 'calmon04', 'calmon05', 'calmon06',
    'calmon07', 'calmon08', 'calmon09', 'calmon10', 'calmon11', 'calmon12',);
    $error = false;
    
    // Check POST date if any empty
    $qrystr = ""; 
    foreach($required as $field){
        if(!isset($_POST[$field])){
            $error = true; // Return error=true if ant empty
        } else {
            $qrystr = $qrystr.sprintf("'%s',", $_POST[$field]); // Create pre insert query string by POST data
        }
    }
    
    if ( !$error ) {
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        if( $conn )  
        {
            // Check the IP if had data in the same time
            // Get the IP data count in this second
            $querystr = "SELECT COUNT([recordtime])
                FROM [powersale].[dbo].[power_esti]
                WHERE [ipaddr]='".$_POST['ipaddr']."' AND [recordtime] = '".$today."';";
            $stmt = sqlsrv_query($conn, $querystr);
            if(sqlsrv_fetch($stmt) === false) 
                die(sqlsrv_errors());
            $data_cnt = sqlsrv_get_field($stmt, 0);
            sqlsrv_free_stmt($stmt);

            // if no data in this second, do insert
            if ( $data_cnt==0 ){
                $tsql = "INSERT INTO dbo.power_esti ([ipaddr]
                                    ,[character]
                                    ,[location]
                                    ,[rate]
                                    ,[mon01]
                                    ,[mon02]
                                    ,[mon03]
                                    ,[mon04]
                                    ,[mon05]
                                    ,[mon06]
                                    ,[mon07]
                                    ,[mon08]
                                    ,[mon09]
                                    ,[mon10]
                                    ,[mon11]
                                    ,[mon12]
                                    ,[recordtime]) 
                        values (".$qrystr."'".$today."');";
                try {
                    $insertReview = sqlsrv_query($conn, $tsql);
                    if($insertReview == FALSE)
                        die(sqlsrv_errors());
                    sqlsrv_free_stmt($insertReview);
                    sqlsrv_close($conn);
                    echo json_encode(array(
                        "MSG" => "Insert Sucess!",
                    ));      
                }
                catch(Exception $e) {
                    sqlsrv_close($conn);
                    echo json_encode(array(
                        "MSG" => "Error!",
                    ));  
                }
            } else {
                sqlsrv_close($conn);
                echo json_encode(array(
                    "MSG" => "Connect insert data as same time",
                ));
            }
        }  
        else  
        {  
            echo json_encode(array(
                "MSG" => "Connect Fail".sqlsrv_errors(),
            ));
        } 
    } else {
        echo json_encode(array(
            "MSG" => "Input Cannot be Empty",
        ));
    }
} else {
    //回傳 errorMsg json 資料
    echo json_encode(array(
        "MSG" => "請求無效，只允許 POST 方式訪問！"
    ));
}

?>