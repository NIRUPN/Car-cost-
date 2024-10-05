<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Cost Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="number"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        h3 {
            color: #007bff;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Car Cost Calculator</h2>
<form method="POST" action="static2.php">
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required>

    <label for="time">Time (in years):</label>
    <input type="number" id="time" name="time" required>

    <label for="tax">Tax Percentage:</label>
    <input type="number" id="tax" name="tax" required>

    <input type="submit" value="Calculate Total Amount">
</form>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $price=$_POST['price'];
    $time=$_POST['time'];
    $tax =$_POST['tax'];

// i=road tax 

    class car{
        public $price;
        public $time;
        public $tax;
        static $i=5000;
    

    public function __construct($p,$ti,$ta){

        $this->price=$p;
        $this->time=$ti;
        $this->tax=$ta;
      
    }

    public function cal(){
        $total=$this->price+$this->time+$this->tax+self::$i;
        return $total;
    }
}

$car = new Car($price, $time, $tax);
$totalAmount = $car->cal();

echo "Total Amount: $totalAmount";

}



?>
</body>
</html>