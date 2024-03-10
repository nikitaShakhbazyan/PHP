<?php
class Card {
    
};

$prdct1 = new Card();
$prdct2 = new Card();
$prdct3 = new Card();

// var_dump($prdct1 instanceof Card);
// var_dump($prdct2);
// var_dump($prdct3);

// class Shop {
//     private $name;
//     public function naming () {
//         $this -> name = "Adidas";
//         echo $this->name;
//     }
// };

// $pr1 = new Shop;
// // $pr1 -> naming();
// $pr1 -> name = "Nike";


class User {
    public $name = "name";
    public $pass = "pass";
    public $emai = "emai";
    public $city = "city";
}

$admin = new User;
// echo $admin -> name ;

$user1 = new User;
$admin -> name = 'Nick';
$user1 -> name = 'Mike';

echo $admin->name;
echo $user1->name;

$user1->surname = "Shakh";
echo $user1 -> surname;