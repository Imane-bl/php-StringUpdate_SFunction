<?php

  /*
    String Functions
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
  */
//lower case 
  echo lcfirst("Elzero Web School") . "<br>";//the first lettre wille be small the rest nrml no change elzero Web School
  echo ucfirst("elzero web school") . "<br>";//Elzero web school
  echo strtolower("ELZERO WEB SCHOOL") . "<br>";//elzero web school
  echo strtoupper("elzero web school") . "<br>";//ELZERO WEB SCHOOL
  echo ucwords("elzero web school") . "<br>";//Elzero Web School
  echo ucwords("elzero web|school", "|") . "<br>";//Elzero web|School
  echo str_repeat("Elzero", 3);//ElzeroElzeroElzero