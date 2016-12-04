# BillPlz-PHP-Library
Simple PHP Library for BillPlz Payment Gateway

Pass all the parameters to this function which returns the Bill ID from BillPlz.

$bill_id = billplz_create_bill ($name='John', $email='test@test.com', $amount='100', $mobile='65858745856', $callback='http://www.your-domain.com/callback.php', $delivery='false');
echo $bill_id; // Returns Bill ID
