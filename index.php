<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
     
     <div class="container">
    <h1>Hello, world!</h1>
    <?php
    //ex1
    echo "<h1>Hello, world!</h1>";

    echo "<h1>"."Hello, world!"." "."how are u?"."</h1>";

    //ex2
    $name="Rana Ahmed";
    echo "<h1>" . $name . "</h1>";
    var_dump($name);

    //ex3
    $number=100;
    echo "<h1>" . $number ."</h1>";
    var_dump($number);

    //ex4
    $number=100.01;
    echo "<h1>" . $number ."</h1>";
    var_dump($number);

    //ex5
    $number=null;
    echo "<h1>" . $number ."</h1>";
    var_dump($number);

    //ex6
    $number=true;
    echo "<h1>" . $number ."</h1>";
    var_dump($number);

    //ex7
    $number=false;
    echo "<h1>" . $number ."</h1>";
    var_dump($number);

   //ex8
    $students= array( "sabrina","lamia" ,"zerin");
    echo "<h1>" .$students[1]."</h1>";
    var_dump($students);

    //ex9
    $data= array("sabrina","lamia","zerin",100,10.01,true, false);
    echo "<h1>" .$data[5]."</h1>";
    var_dump($data);

    //ex9
    $data= array("sabrina"=> 40,"lamia"=>60,"zerin"=>70,);
    echo "<h1>" .$data['sabrina'] ."</h1>";
    var_dump($data);
     

     //ex10
    $number1=10;
    $number2=15;

    $result=$number1 + $number2;
     echo "<h1>" . $result ."</h1>";
    

     //ex11
     $number1=100;
     $number2=160;
     $result=$number1 - $number2;
     echo "<h1>" .$result. "</h1>";

    //ex12
    $number1=10;
    $number2=15;

    $number1+=$number2;
     echo "<h1>" . $number1 ."</h1>";
    

    //ex13
     function textMessage(){
           print "<h1>Hello, world!</h1>";
       }
       textMessage();

    //ex14
    $data="Hello world";

    echo "<h1>". chunk_split( $data,3,"..")."</h1>"; 

    //ex15
    $data="My Pleasure" ;

    print_r(explode(" ", $data));

    //ex16
    $pass="Hello world";

    echo "<h1>". md5($pass). "</h1>";

     //ex17
    $pass="Hello world";

    echo "<h1>". sha1($pass). "</h1>";

    
    //ex18
    $data="Hello world";

    echo "<h1>". str_repeat($data,5). "</h1>";

    //ex19
    $data="Hello world";

    echo "<h1>".str_replace("Hello", "there", $data). "</h1>";

    //ex20
    $data="Hello world";

    echo "<h1>". str_shuffle($data). "</h1>";


     //ex21
    $data="My Pleasure" ;

    print_r(str_split($data));

    
    //ex22
    $data="Hello world";

    echo "<h1>".stripos($data,"hello"). "</h1>";

    //ex23
    $data="Hello world";

    echo "<h1>". strlen($data). "</h1>";



    
    

    ?>
  </div>
  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>