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
function to_find_the_first_character_that_is_different_between_two_strings($str1,$str2){
    $char1='';
    $char2='';
    $ans=-1;
    $min_length=min(strlen($str1),strlen($str2));
   for ($index=0;$index< $min_length;$index++){
    if($str1[$index]!=$str2[$index]){
        $char1=$str1[$index];
        $char2=$str2[$index];
        $ans=1;
        break;
    }
   }
   if($ans==1){
    echo $char1." ".$char2."<br>";
   }
}
function string_to_array($str){
    echo "<pre>";
    print_r(explode("\n",$str));
    echo "/pre";

}
function Write_to_get_filename_component_of_the_path($path){
$start=strrpos($path,'/')+1;$end=strrpos($path,'.');
$len=$end-$start;
echo substr($path,$start,$len);

}
function insert_string_at_specified_position_in_given_string($str,$search1,$search2,$replace){
    echo "$search1 $search2<br>";
    echo str_replace("$search1 $search2","$search1 $replace $search2",$str);
   
}
function get_the_first_word_of_sentence($str){
    $len=strpos(trim($str),' ');
    echo substr(trim($str),0,$len) ."<br>";
}
function remove_part_of_string($search,$subject){
   echo  str_replace($search,'',$subject);
}
function  replace_multiple_characters_from_th_string($str){
   echo implode (" ",str_split(str_replace(['/','+','.',':','"','*','\\','-'],'',$str)));
}
function select_first_5_words_from_string($str){
print_r (array_slice((explode(' ',$str)),0,5));
}


?>