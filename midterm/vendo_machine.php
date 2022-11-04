<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/vending.css">
    <title>Vendo machine</title>
</head>
<body>
    <h1>Vendo Machine</h1>

    <form method = "post">
        <fieldset style="width: 500px;">
        <legend >Product</legend>
        <input type="checkbox" name="sodas[]" id="sodasCoke" value = "Coke" > <label for = "sodasCoke">Coke - 15</label><br>
        <input type="checkbox" name="sodas[]" id="sodasSprite" value = "Sprite"> <label for = "sodasSprite">Sprite - 20</label><br>
        <input type="checkbox" name="sodas[]" id="sodasRoyal" value = "Royal"> <label for = "sodasRoyal">Royal - 20</label><br>
        <input type="checkbox" name="sodas[]" id="sodasPepsi" value = "Pepsi"> <label for = "sodasPepsi">Pepsi - 15</label><br>
        <input type="checkbox" name="sodas[]" id="sodasMountaindew" value = "Mountaindew"> <label for = "sodasMountaindew">Mountain Dew - 20</label><br>
        </fieldset>

        <fieldset style="width: 500px;">
        <legend>Options</legend>
        <label for="size">Size:</label>
        <select name="size[]" id="sizes">
            <option value="Regular">Regular </option>
            <option value="UpSize">Up-Size (add ₱5)</option>
            <option value="Jumbo">Jumbo (add ₱10)</option>
        </select>

        <label for="QtySoda"> Quantity: </label>
        <input type="number" name="QtySoda" id="QtySoda" min="1" max="100">
        <input type="submit" name="CheckOutbtn" value ="Check Out">
        </fieldset>
    </form>

        <?php
        if(isset($_POST['CheckOutbtn'])) {
            if(empty($_POST['sodas'])){
                echo '<hr>';
                echo '<b>No Selected Product, Try Again!</b>';
            }
        }
        error_reporting(0);
        if(isset($_POST['CheckOutbtn']) &&
            isset($_POST['sodas']) && 
            isset($_POST['size']) && 
            isset($_POST['QtySoda'])){
        echo '<hr>';
        echo '<b>Purchase Summary:</b> <br>';

                $arrSoda = $_POST['sodas'];
                $arrSize = $_POST['size'];
                $sodaQty = $_POST['QtySoda'];

                foreach($arrSoda as $key => $sodaValue){
                    foreach($arrSize as $key => $sizeValue){

                        if (($sodaValue == "Coke")&&($sizeValue == "Regular")){
                            $coke = 15 * $sodaQty;
                            $QtyCoke = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$coke,'</li></ul>';
                            }
                            else{
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$coke,'</li></ul>';
                            }      
                        }
                        if (($sodaValue == "Sprite")&&($sizeValue == "Regular")){
                            $sprite = 20 * $sodaQty;
                            $QtySprite = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul>';
                            }
                            else{
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul>';
                            }      
                                        
                        }
                        if (($sodaValue == "Royal")&&($sizeValue == "Regular")){
                            $royal = 20 * $sodaQty; 
                            $QtyRoyal = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$royal,'</li></ul>';
                            }
                            else{
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$royal,'</li></ul>';
                            }    
                        }
                        if (($sodaValue == "Pepsi")&&($sizeValue == "Regular")){
                            $pepsi = 15 * $sodaQty;
                            $QtyPepsi = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$odaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul>';
                            }
                            else {
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul>';
                            }                       
                        }
                        if (($sodaValue == "Mountaindew")&&($sizeValue == "Regular")){
                            $mountainDew = 20 * $sodaQty;
                            $QtyMountaindew = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$mountainDew,'</li></ul>';
                            }
                            else {
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$mountainDew,'</li></ul>';
                            }         
                        }

                         
                        if (($sodaValue == "Coke")&&($sizeValue == "UpSize")){
                            $coke = 20*$sodaQty;
                            $QtyCoke = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$coke,'</li></ul>';
                            }
                            else{
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$coke,'</li></ul>';
                            }                        
                        }
                        if (($sodaValue == "Sprite")&&($sizeValue == "UpSize")){
                            $sprite =25*$sodaQty; 
                            $QtySprite = $sodaQty;

                            if($SodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul>';
                            }
                            else{
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul>';
                            }                
                        }
                        if (($sodaValue == "Royal")&&($sizeValue == "UpSize")){
                            $royal = 25*$SodaQty; 
                            $QtyRoyal = $SodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$royal,'</li></ul>';
                            }
                            else{
                            echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$royal,'</li></ul>';
                            }   
                        }
                        if (($sodaValue == "Pepsi")&&($sizeValue == "UpSize")){
                            $pepsi = 20 * $sodaQty;
                            $QtyPepsi = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$pepsi,'</li></u>';
                            }
                            else{
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul>';
                            }                         
                        }
                        if (($sodaValue == "Mountaindew")&&($sizeValue == "UpSize")){
                            $mountainDew = 25 * $sodaQty;
                            $QtyMountaindew = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$mountainDew,'</li></ul>';
                            }
                            else {
                            echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$mountainDew,'</li></ul>';
                            }   
                        }

                        
                        if (($sodaValue == "Coke")&&($sizeValue == "Jumbo")){
                            $coke = 25 * $sodaQty; 
                            $QtyCoke = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$coke,'</li></ul>';
                            }
                            else {
                            echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$coke,'</li></ul>';
                            }   
                        }
                        if (($sodaValue == "Sprite")&&($sizeValue == "Jumbo")){
                            $sprite = 30 * $sodaQty;
                            $QtySprite = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul>';
                            }
                            else {
                            echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul>';
                            }                  
                        }
                        if (($sodaValue == "Royal")&&($sizeValue == "Jumbo")){
                            $royal= 30 * $sodaQty; 
                            $QtyRoyal = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$royal,'</li></ul>';
                            }
                            else{
                            echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$royal,'</li></ul>';
                            }                    
                        }
                        if (($sodaValue == "Pepsi")&&($sizeValue == "Jumbo")){
                            $pepsi= 25 * $sodaQty;
                            $QtyPepsi = $sodaQty; 
                            if($sodaQty > 1){
                                echo'<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul>';
                            }
                            else{
                            echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul>';
                            }                           
                        }
                        if (($sodaValue == "Mountaindew")&&($sizeValue == "Jumbo")){
                            $mountainDew = 30 * $sodaQty;
                            $QtyMountaindew = $sodaQty;
                            if($sodaQty > 1){
                                echo '<ul><li> ',$sodaQty,' ','pieces of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$mountainDew,'</li></ul>';
                            }
                            else{
                                echo '<ul><li> ',$sodaQty,' ','piece of ',$sizeValue,' ',$sodaValue,' amounting to ',' ₱ ',$mountainDew,'</li></ul>';
                            }      
                        }
                    }
                }
                $TotalAmnt = $coke + $sprite + $royal + $pepsi + $mountainDew;
                $TotalSoda = $QtyCoke + $QtySprite + $QtyRoyal + $QtyPepsi +  $QtyMountaindew;
                echo '<b>Total Number of Items: </b>',$TotalAmnt,'<br>';
                echo '<b>Total Amount: </b>',$TotalSoda,'<br>';
            }
        ?>
</body>
</html>