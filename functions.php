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
?>