
<html>
  <head>
    <title>Math Functions</title>
</head>
<body>
 <center>
  <h3 style="color:gray;">find the maximum and minimum marks from the following set of arrays</h3>
  </center>
  <pre>
Sample arrays :
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
  </pre>
 <form method="get">
  <lable for="num">Maximum marks </lable><br>
  <input type="text" id="num" name="value1"><br>
  <lable for="num">Minimum marks </lable><br>
  <input type="text" id="num" name="value2"><br>
  <input type="submit"name="form1Submit" value="check the answer" >
  <?php 
  include('functions.php');
 
if($_SERVER['REQUEST_METHOD'] === 'GET'&&$_GET['value1']==$array_contain_maximum_and_minimum[1]&&$_GET['value2']==$array_contain_maximum_and_minimum[0]){?>
  <center><h3 style="color:green;">correct</h3>
</center>
<?php 
}
else {
?>
<center><h3 style="color:red;">wrong</h3>
</center>
<?php }?>
  <form>

</body>
</html>
<html>
  <body>
    <hr>
    <center>
    <h3 style="color:gray;">string functions</h3>
   </center>
    <form method='get'>
      
      <label>transform a string all uppercase letters.</label><br>
      <input type="checkbox" name="str_upper" value="str_upper"><br>
      <label> transform a string all lowercase letters.</label><br>
      <input type="checkbox" name="str_lower" value="str_lower"><br>
      <label>make a string's first character uppercase.</label><br>
      <input type="checkbox" name="fchar_for_str_lower" value="fchar_for_str_lower"><br>
      <label >make a string's first character of all the words uppercase</label><br>
      <input type="checkbox" name="fchar_for_all_str_lower" value="fchar_for_all_str_lower"><br>
      <label > spilt 082307 to 08:23:07 </lable><br>
      <input type="checkbox" name="convert_str" value="convert"><br>
      <lable>check whether a string contains a specific string</lable><br>
      <input type="text" name ="str"><input type="text" name=specific_string><br>
      <input type="submit" name="form2Submit"><br>
      
</form>
<?php 
  if(isset($_GET['str_upper']))
   transform__string_all_uppercase_letters("word");
  if(isset($_GET['str_lower'])) transform_string_all_lowercase_letters('WORD');
  if(isset($_GET['fchar_for_str_lower']))  make_string_first_character_uppercase('word');
  if(isset($_GET['fchar_for_all_str_lower']))make_string_first_character_of_all_the_words_uppercase("it is my word");
  if(isset($_GET['convert_str'])) {
    $str= chunk_split("082307",2,':');
    $len=strlen($str)-1;
    if($str[$len]==':')$str= substr( $str,0,$len);
    echo $str."<br>";
  }
  if(isset($_GET['str'])&&isset($_GET['specific_string'])){
    if(strpos($_GET['str'],$_GET['specific_string']))
    echo "The string contains the substring.";
   else 
      echo "The string does not contain the substring.";
  }
?>
</body>
  </html>
