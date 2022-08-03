<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment Integartion </title>
    <link rel="stylesheet" href="./css/_style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php

echo 'please enter this short code to your desired page [yoodule_stripe]My Text Here[/yoodule_stripe]

<div class="form-container">
            <form autocomplete="off" action="checkout-charge.php" method="POST">
                <div>
                    <input type="text" name="c_name" placeholder="Customer Name" required/>
                    
                </div>
                <div>
                    <input type="text" name="address" placeholder="Address" required/>
                    
                </div>
                <div>
                    <input type="number" id="ph" name="phone" pattern="\d{10}" maxlength="10" placeholder="Contact number" required/>
                    
                </div>
                <div>
                    <input type="text"  name="product_name"  placeholder="Product name" disabled required/>
                    
                </div>
                <div>
                    <input type="text"  name="price" placeholder="Price" disabled required/>
           
                </div>
               
                    <input type="hidden" name="amount" value="<?php echo $_GET["price"]?>">
                    <input type="hidden" name="product_name" value="<?php echo $_GET["item_name"]?>">
                
                <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key=""
                data-amount=<?php echo str_replace(",","",$_GET["price"]) * 100?>
                data-name="<?php echo $_GET["item_name"]?>"
                data-description="<?php echo $_GET["item_name"]?>"
                data-image="<?php echo $_GET["image"]?>"
                data-currency="inr"
                data-locale="auto">
                </script>
            </form>
        </div>
        ';
?>
</body>