<?php
require_once dirname(__FILE__).'/Postmark/Autoloader.php';
Postmark\Autoloader::register();
$postmarkApiKey = '518ceed1-dfe1-43b9-b103-ed5320ea2953';
echo "test";
// Create a message and send it
Postmark\Mail::compose($postmarkApiKey)
    ->from('b35d3bf37b034f3fe285ad8d7397fca7@inbound.postmarkapp.com')
    ->addTo('munasinghetharindu@gmail.com')
    ->subject('Subject')
    ->messagePlain('Plaintext message')
    ->send();
echo "done";

//mail('munasinghetharindu@gmail.com', "Subject:test","hello", "From:no-reply@rtgames.com" );
?>
