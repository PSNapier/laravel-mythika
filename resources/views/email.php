<?php

use App\Mail\TestEmail;
Mail::to('arjones.tx@gmail.com')->send(new TestEmail(['message' => 'Testing email! :D']));
echo 'Attempting to send email...';