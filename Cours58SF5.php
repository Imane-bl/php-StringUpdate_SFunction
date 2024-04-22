<?php

  /*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */

  parse_str("name=Osama&email=o@nn.sa&os=mac", $query);

  echo '<pre>';
  print_r($query);
  echo '</pre>';
  /*Array
(
    [name] => Osama
    [email] => o@nn.sa
    [os] => mac
)*/

  echo $query["name"] . "<br>";
  echo $query["email"] . "<br>";
  echo $query["os"] . "<br>";

  echo "Hello [] () * + . <br>";
  echo quotemeta("Hello [] () * + . <br>");
  //Hello [] () * + .
//Hello \[\] \(\) \* \+ \.

//8 carecther width =8 will replace with 0
echo strlen(str_pad("12",8)) . "<br>";//8
  echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";//2 before and 2 after donc 3 before 3 after 00012000
  echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";//00321000
  echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
  echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";

  echo strtr("E@zero Web Schoo@", "@", "l");
//transfer for 2 things we use array 
  echo "<br>";

  $translation = ["@" => "l", "#" => "o"];

  echo strtr("E@zer# Web Sch##@", $translation);