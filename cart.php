<?php include("head.php") ?>
<html lang="en">
<head>
    <title>cart</title>
    <link rel="stylesheet" href="./stylecart.css">
</head>
<body> <div id="c0">
    <form action="payment.php" method="get" >
        <div id="c1">
       <label for="">
        Name: <input type="text" name="name" id="1.0" placeholder="enter your name">
       </label> <br>
       <label for=""> 
        country: <select>
            <option value="USA" >USA</option>
            <OPtion value="IND">IND</OPtion>
            <OPtion value="UK">UK</OPtion>
            <OPtion value="AUS">AUS</OPtion>
        </select>
         </label> <br>
         <label for="">
           city:  <input type="text" name="city" id="2.0" placeholder="city name">
         </label> <br>
         <label for="">
            home/office no: <input type="text" name="no" id="3.0" placeholder="no:">
         </label> <br>
         <label for=""> 
            select payment mode: <select>
                <option value="net banking">Net banking</option>
                <option value="upi">UPI</option>
                <option value="paypal">Paypal</option>
            </select>
         </label><br>
         <label for="">
            Email: <input type="email" name="email" id="4.0" placeholder="email">
         </label> <br>
         <label for="">
            phone no: <input type="text" name="phone" id="5.0" placeholder="phone number">
         </label> <br>
         <input type="submit" value="proceed" id="proceed">

        </div>
    </form>
    </div>
    </div>

</body>
</html>

<?php include("foot.php") ?>
<?php
$conn = new mysqli("localost", "root", "", "db");
if($conn->connect_error){
    die("connection fails" . $conn->connect_error);
}
echo "connected";

?>