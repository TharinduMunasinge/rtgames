<?php
$postmarkApiKey = '518ceed1-dfe1-43b9-b103-ed5320ea2953';

// Create a message and send it
Postmark\Mail::compose($postmarkApiKey)
    ->from('rtgames@heroku.com', 'John Smith')
    ->addTo('munasinghetharindu@gmail.com', 'Jane Smith')
    ->subject('Subject')
    ->messagePlain('Plaintext message')
    ->send();


//mail('munasinghetharindu@gmail.com', "Subject:test","hello", "From:no-reply@rtgames.com" );
?>
