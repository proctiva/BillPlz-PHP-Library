<?PHP
require_once ('billplz.php'); 

$bill_id = billplz_create_bill ($name, $email, $amount, $mobile, $callback, $delivery);
echo $bill_id; // Returns Bill ID

?>
