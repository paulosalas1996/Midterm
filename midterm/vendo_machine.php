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
        <input type="number" name="QtySoda" id="QtySoda" min="1" max="99999999999">
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
                $SodaQty = $_POST['QtySoda'];

                foreach($arrSoda as $key => $SodaValue){
                    foreach($arrSize as $key => $SizeValue){

                        //For Regular Selection
                        if (($SodaValue == "Coke")&&($SizeValue == "Regular")){
                            $coke = 15 * $SodaQty;
                            $QtyCoke = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li></ul><br>';
                            }
                            else{
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li></ul><br>';
                            }      
                        }
                        if (($SodaValue == "Sprite")&&($SizeValue == "Regular")){
                            $sprite = 20 * $SodaQty;
                            $QtySprite = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul><br>';
                            }
                            else{
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul><br>';
                            }      
                                        
                        }
                        if (($SodaValue == "Royal")&&($SizeValue == "Regular")){
                            $royal = 20 * $SodaQty; 
                            $QtyRoyal = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li></ul><br>';
                            }
                            else{
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li></u><br>';
                            }    
                        }
                        if (($SodaValue == "Pepsi")&&($SizeValue == "Regular")){
                            $pepsi = 15 * $SodaQty;
                            $QtyPepsi = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul><br>';
                            }
                            else {
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul><br>';
                            }                       
                        }
                        if (($SodaValue == "Mountaindew")&&($SizeValue == "Regular")){
                            $MountainDew = 20 * $SodaQty;
                            $QtyMountaindew = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li></ul><br>';
                            }
                            else {
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li></ul> <br>';
                            }         
                        }

                        //For Upsize Selection 
                        if (($SodaValue == "Coke")&&($SizeValue == "UpSize")){
                            $coke = 20*$SodaQty;
                            $QtyCoke = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li></ul> <br>';
                            }
                            else{
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li></ul><br>';
                            }                        
                        }
                        if (($SodaValue == "Sprite")&&($SizeValue == "UpSize")){
                            $sprite =25*$SodaQty; 
                            $QtySprite = $SodaQty;

                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul><br>';
                            }
                            else{
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul><br>';
                            }                
                        }
                        if (($SodaValue == "Royal")&&($SizeValue == "UpSize")){
                            $royal = 25*$SodaQty; 
                            $QtyRoyal = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li></ul><br>';
                            }
                            else{
                            echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li></ul><br>';
                            }   
                        }
                        if (($SodaValue == "Pepsi")&&($SizeValue == "UpSize")){
                            $pepsi = 20 * $SodaQty;
                            $QtyPepsi = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li></u><br>';
                            }
                            else{
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li>,/ul><br>';
                            }                         
                        }
                        if (($SodaValue == "Mountaindew")&&($SizeValue == "UpSize")){
                            $MountainDew = 25 * $SodaQty;
                            $QtyMountaindew = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li></ul><br>';
                            }
                            else {
                            echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li></ul><br>';
                            }   
                        }

                        // For Jumbo size Selection
                        if (($SodaValue == "Coke")&&($SizeValue == "Jumbo")){
                            $coke = 25 * $SodaQty; 
                            $QtyCoke = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li></ul><br>';
                            }
                            else {
                            echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li></ul><br>';
                            }   
                        }
                        if (($SodaValue == "Sprite")&&($SizeValue == "Jumbo")){
                            $sprite = 30 * $SodaQty;
                            $QtySprite = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul><br>';
                            }
                            else {
                            echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li></ul><br>';
                            }                  
                        }
                        if (($SodaValue == "Royal")&&($SizeValue == "Jumbo")){
                            $royal= 30 * $SodaQty; 
                            $QtyRoyal = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li></ul><br>';
                            }
                            else{
                            echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li></ul><br>';
                            }                    
                        }
                        if (($SodaValue == "Pepsi")&&($SizeValue == "Jumbo")){
                            $pepsi= 25 * $SodaQty;
                            $QtyPepsi = $SodaQty; 
                            if($SodaQty > 1){
                                echo'<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul><br>';
                            }
                            else{
                            echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li></ul><br>';
                            }                           
                        }
                        if (($SodaValue == "Mountaindew")&&($SizeValue == "Jumbo")){
                            $MountainDew = 30 * $SodaQty;
                            $QtyMountaindew = $SodaQty;
                            if($SodaQty > 1){
                                echo '<ul><li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li></ul> <br>';
                            }
                            else{
                                echo '<ul><li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li></ul><br>';
                            }      
                        }
                    }
                }
                $TotalAmnt = $coke + $sprite + $royal + $pepsi + $MountainDew;
                $TotalSoda = $QtyCoke + $QtySprite + $QtyRoyal + $QtyPepsi +  $QtyMountaindew;
                echo '<b>Total Number of Items: </b>',$TotalAmnt,'<br>';
                echo '<b>Total Amount: </b>',$TotalSoda,'<br>';
            }
        ?>
</body>
</html>