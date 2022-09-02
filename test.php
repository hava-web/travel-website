<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test PHP OOP code</h1>
    <?php
    class Product
    {
        public $description;
        public $price;
        public $iventory;
        public $onsale;

        public function __set($name,$value)
        {
            if($name == "price" && $value <0)
            {
                echo"<p>Invalid price set </p>\n ";
                $this->price = 0;
            }
            elseif($name == "inventory" && $value <0)
            {
                echo"Invalid inventory set: $value</p>\n";
            }
            else
            {
                $this->$name = $value;
            }
        }


        public function buyProduct($amount)
        {
            if($this->inventory >= $amount)
            {
                $this->inventory -= $amount;
            }
            else
            {
                echo"<p>Sorry, Invalid inventory requested: $amount</p>\n";
                echo"<p>There are only $this->inventory left</p>\n";
            }
        }
    }
    
    
    $prod1 = new Product();
    $prod1->description = "Carrot";
    $prod1->price = 1.50;
    $prod1->inventory = 5;
    $prod1->onsale = false;

    echo "<p>Just add $prod1->description</p>\n";


    echo "<p>Now buying 4 carrots...<p>\n";
    $prod1->buyProduct(4);
    echo "<p>Inventory of $prod1->description is now $prod1->inventory</p>\n";
    
    echo"<p>Trying to set carrot inventory to -1: </p>\n";
    $prod1->inventory = -1;

    echo"<p>Now trying to buy 10 carrots...</p>\n";
    $prod1->buyProduct(10);
    echo"<p>Invalid of $prod1->description is now $prod1->inventory</p>\n";
    ?>
</body>
</html>