<?php
echo "hello world <br>";
$color="rafa";
$Color="web tech";
$m=10;
$n=11;
echo $color." is learning ".$Color."<br>";
echo var_dump(5) ."<br>";
// using var_dump  for checking data types
var_dump("john");
var_dump("j")  ;
var_dump(3.14);
echo"<br>";
print "hlw rafa <br>";

// var dump for array
 $cars=array("volvo","BMW","TOYOTA",1);
 var_dump($cars);

//global scope

function my_test(){
     echo"hi w3 schhol <br>".$color;

}
my_test();
echo"print successfully<br>";


//local scope 
function my_test1(){
    $x=5;
    echo"hi$x<br>";
}
 my_test1();


 //static scope

 function my_test2(){
  static $x=10;

 echo $x;
  $x++;

 }

 my_test2();
  my_test2();
   my_test2();
   echo"<br>" ;
   //PHP golbal keyword
   function my_test3(){
    global $color,$Color,$m, $n;
    echo $color. $Color;
    $n=$m+$n;
   }
   my_test3();
   echo "<br>";
   echo $n."<br>";

   echo"<h2>Super Global</h2> <br>";
   //super global
   function myglobal(){
     $GLOBALS['n']=$GLOBALS['m']+$GLOBALS['n'];

   }
myglobal();
echo $n."<br>";
 /*class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);*/

//string function
echo "string length: ";
echo strlen("hello World");
echo"<br>";

echo "string word count : ";
echo str_word_count("Hello world");
echo"<br>";

$text="PHP is fun";
echo "string contains : ";
echo str_contains($text,"is");
echo"<br>";

$txt="PHP is not easy";
echo "string starts with :";
var_dump(str_starts_with($txt,"PHP"));
echo "<br>";

echo 'the num is $n';
echo '<br>';
echo'the num is'.$n;


echo"<br>";
$a="rafa don't be upset";
echo "TO upper case : ";
echo strtoupper($a);
echo"<br>";

echo"<br>";
$b="TRUST ON ALLAH ";
echo "TO lower case : ";
echo strtolower($b);
echo"<br>";
echo str_replace("upset","sad",$a);
echo"<br>";
echo strrev($a);
echo"<br>";


$c="                        rafa   don't be          upset         ";
echo "TO upper case : ";
echo trim($c);
echo"<br>";

$d="hello lovely world";
$e=explode(" ",$d);
print_r ($e);
echo "<br>";


// casting
$g=5;
$h=10.0089;
$h=(int) $h;
echo $h;
echo "<br>";
//constant
define("name", "RAfA");
echo "Your Name : ".name;
define("id","23-54301-3");
echo"<br>";
echo"Id:".id;
echo "<br>";

// Class

class fruit{
  public function  myValue(){
      
   //return __CLASS__;
   return  __METHOD__;

  }
} 
$kiwi=new fruit();
echo $kiwi->myValue();

$cars=array("volvo","toyota");
foreach($cars as $value){
echo"$value <br>";
}
 $members=array("Peter"=>"32","Ben"=>"39","Joe"=>"43");
 foreach($members as $key=>$value){
 echo "$key: $value <br>";         
 
 }

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y <br>";

}
  $game=array("GTA", "fifa","freefire");
  $game[1]="pubg";
   foreach($game as $x=>$y){
    echo " $x: $y ";
   }

 echo$game[0];
 

$info=array('fname'=>'zu','roll'=>'23-54301-3','city'=>'Dhaka');
echo $info["fname"];
   $student=[];
   $student[0]="rafa";
   $student[1]="tisha";
   $student["course"]="Cse";

   foreach($student as $x){
   echo "$x <br>";
   }
   $student[]="another";
   $student["elective"]="data science";
  
   var_dump($student);

   array_push($game,"vcx");
   foreach($game as $x=>$y){
    echo"$x:$y";
   }
// remove item
echo"<br><br>";
array_splice($game,0,0);
var_dump($game);

echo"<br><br>";

unset($game[1]);
var_dump($game); 
echo"<br><br>";
echo"<h2>REMOVE ITEM FROM AN ASSOCIATIVE ARRAY</h2>";
unset($info["city"]);
var_dump($info);


echo"<br><br>";
$cars2=array( "Brand"=>"porche" , "model"=>"Mustang", "year"=>2023);

$newcar=array_diff($cars2,["Mustang", 1964]);
var_dump($newcar);

?>