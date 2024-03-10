<?php
  $hi="guys";
  // echo $hi
    ?>

    <?php 
    require "./blocks/header.php"
    ?>
    <h1>Main</h1>

    <form action="check_post.php" method="post">
      <input type="text" name="username" placeholder="add username">
      <input type="email" name="useremail" placeholder="add email">
      <input type="password" name="userpassword" placeholder="add password">
      <textarea name="message" placeholder="Add text"></textarea>
      <input type="submit" value="Send">
    </form>

    <?php
    require "./blocks/footer.php";

    $arr = [321,4324,1,0,1,2,3];
    // unset($arr[0]);
    $arr = array_values($arr);
    // shuffle($arr);
   $arr2 = array_slice($arr,0,count($arr));
    // rsort($arr);
    // echo in_array(30,$arr);
    // print_r($arr2);
    $var = "Hello, world!";
    // var_dump($var);

    // $fi = fopen("about.php","r");
    // var_dump($file); // Ресурс типа "файл"
    // fclose($file);


    $arr3 = [1,2,3,4];

    function summ ($int1,$int2,$act) {
      switch ($act) {
        case '+':
         return $int1 + $int2;
          break;
        case '-':
          return $int1 - $int2;
            break;
        case '*':
          return $int1 * $int2;
            break;
        case '/':
          return $int1 / $int2;
            break;
        default:
          echo "Cant support";
          break;
      }
    }
    $summ = summ(21,4214,'*');
    // echo $summ;

    function fib ($int) {
      if ($int <= 1) {
        return $int;
      } else {
        return fib($int-1) + fib ($int-2);
      }
    }

    // echo fib(32);

    // class Person {
    //   public $name , $surname;
    //   function hello () {
    //     echo "Hello! <br>";
    //   }
    // }

    // $nick = new Person();
    // $nick->name="nick";
    // $nick->surname="shakhbazyan";
    // $newPersName = $nick->name;
    // $newPersSurname = $nick->surname;
    // echo $newPersName,"<br>",$newPersSurname;

    require('./teaching.php');
    ?> 