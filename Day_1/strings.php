<?php

 $title = 'PhP Strings';

// $message = 'We Are Learning ' . $title;

// echo $message;

// $message2 = "\nWe Are Learning $title"; // Interpolation is only possible with double quotes, which means of you are trying 
//                                        // to include variable expression within the strings you should use double quotes.

// Define a Heredoc string
$heredocString = <<<EOD
This is a Heredoc string.
It can span multiple lines.
Variables like $title will be parsed.
EOD;

// Output the Heredoc string
echo $heredocString;