     $sms = new NexmoMessage('account_key', 'account_secret');
     if ($sms->inboundText()) {
         $sms->reply('You said: ' . $sms->text);
     }
