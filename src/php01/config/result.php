<?php
$name = htmlspecialchars($_POST[ "name" ] , ENT_QUOTES) ;
$choices = htmlspecialchars($_POST[ "choices" ] , ENT_QUOTES);
$number = htmlspecialchars($_POST[ "number"] , ENT_QUOTES);
echo "私の名前は" . $name . "<br />" .
"ご注文の商品は" . $choices . "<br / >" .
"注文数は" . $number;


