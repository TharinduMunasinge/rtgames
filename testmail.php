<?php
require ("Postmark/Mail.php");
$postmarkApiKey = '518ceed1-dfe1-43b9-b103-ed5320ea2953';

// Create a message and send it
PostMark\Mail::compose($postmarkApiKey)
    ->from('rtgames@heroku.com')
    ->addTo('munasinghetharindu@gmail.com')
    ->subject('Subject')
    ->messagePlain('Plaintext message')
    ->send();
echo "done";

//mail('munasinghetharindu@gmail.com', "Subject:test","hello", "From:no-reply@rtgames.com" );
?>
