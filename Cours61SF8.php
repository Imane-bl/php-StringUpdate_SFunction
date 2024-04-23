<?php

  /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */

  //it wraping always if its <width 8 ex
  $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

  echo strlen($str) . "<br>";//36 //Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long

  echo wordwrap($str, 8, "<br>", True);//saute la ligne

  echo "<br>";

  echo ord("a"); // 97 ascii code

  echo "<br>";

  echo chr(97); // a

  echo "<br>";

  echo similar_text("Elz@ero", "Elz_eroo");//same carc

  echo "<br>";

  echo similar_text("Elzero", "Elzeroo", $perc);//100%

  echo "<br>";

  echo $perc;