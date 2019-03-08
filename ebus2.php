<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal']= $totalValue2 ;
/**
 * Allocate the mobile number session variable to a text
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title> eBusiness 2 </title>
</head>
<body>
    <div class ="form">
        <form name ="Details" method ="post" action= "ebus3.php">
            <center>
                <table cellspacing ="10">
                    <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
       
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" required/> </td>
                    </tr>
       
                     <tr>
                         <td> Email </td>
                         <td><input type="text" id="txtNum" name="txtNum" value="" required /></td>
                    </tr>
       
                    <tr>
                         <td> PIN </td>
                         <td><input type="text" id="txtPassword" name="txtPassword" value="" required pattern="\d{4}"/> </td>
                    </tr>
       
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /> </td>
                    </tr>
       
                </table>
         </center>
       
       
            <center>  
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue" />
       
            </center>
    </div>
</form>
    </body>
    </html>

   
 
	
	
	
