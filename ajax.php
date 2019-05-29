<?php 
$val_get=$_GET['val'];
$ch = curl_init('https://api.coinmarketcap.com/v1/ticker/'.$val_get);         
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTREDIR, 3);                                                                
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
$resp_orders = curl_exec($ch); 
$jd_orders = json_decode($resp_orders,true);
curl_close($ch);
echo '&nbsp&nbsp&nbsp&nbsp<p><strong>Name:</strong> '.$jd_orders[0]['name'].'</p>
       <p><strong>Symbol:</strong>  '.$jd_orders[0]['symbol'].'</p>
       <p><strong>Price USD:</strong>  '.$jd_orders[0]['price_usd'].'</p>';
?>
