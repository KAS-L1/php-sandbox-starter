<?php 

class User {
    // Properties
    public $name;
    public $email;

    //] Methods

public function __construct($name, $email) 
{
    $this->name = $name;
    $this->email = $email;
}

    public function login() {
        echo $this->name . 'loggedin';
    }
}



// Instantiate a new object

$user1 = new User('John Doe', 'john@gmail.com');



$user1->login();


$user2 = new User('John Doe', 'john@gmail.com');

$user2->login();



// var_dump($user2);

class Product
{
    // These are like labels that each product will have: a name, price, and quantity
    public $name;
    public $price;
    public $quantity;

    // This is a special function that runs when we create a new product
    public function __construct($name, $price, $quantity)
    {
        // We store the name, price, and quantity of the product here
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    // This function calculates the total price (price * quantity)
    public function getTotalPrice()
    {
        return $this->price * $this->quantity;
    }
}

// Now we create two products (Apple and Orange)
$product1 = new Product('Apple', 24, 2);  // Apple costs 24, and we want 2 of them
$product2 = new Product('Orange', 60, 3); // Orange costs 60, and we want 3 of them

// We display the name and total price for each product
echo "Product: " . $product1->name . ", Total Price: $" . $product1->getTotalPrice() . "\n";
echo "Product: " . $product2->name . ", Total Price: $" . $product2->getTotalPrice() . "\n";

// The first echo will say: "Product: Apple, Total Price: $48" (24 * 2 = 48)
// The second echo will say: "Product: Orange, Total Price: $180" (60 * 3 = 180)

