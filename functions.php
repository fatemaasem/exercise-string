<?php
//call function find the maximum and minimum number from any numbers of arrays

function transform__string_all_uppercase_letters($str){
    echo strtoupper($str)."<br>";

}
function transform_string_all_lowercase_letters($str){
    echo strtolower($str)."<br>";
}
function make_string_first_character_uppercase($str){
    echo ucfirst($str).". <br>";
}
function make_string_first_character_of_all_the_words_uppercase($str){
    echo ucwords($str).".<br>";
}
function extract_the_file_name_from_the_string($path){
   $file_name= strrchr($path,'/');
   echo substr($file_name,1);
}
function extract_the_user_name_from_the_email_ID($email)
{
    $len=strpos($email,'@');
    echo substr($email,0,$len);
}
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr( str_shuffle($data),0,$chars);
}
function replace_the_first_given_str1_from_curren_str_with_given_str2($curren_str,$given_str1,$given_str2){
   echo preg_replace('/'.$given_str1.'/',$given_str2,$curren_str,1);
 
}
function fun2(){
    
}

?>