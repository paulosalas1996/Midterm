<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>

</head>
<body>
    <h1>Peys App</h1>

    <form action="" method="post">
        <label for="imgSize">Select Photo Size:</label>
        <input type="range" name="imgSize" id="imgSize" min="50" max="1000" step="10" value="60">
        <br>
        <label for="imgColor">Select Border Color:</label>
        <input type="color" name="imgColor" id="imgColor">
        <br>
        <button type="submit" name="btnProcess">Process</button>
        <br><br>
       
        <?php if (isset($_POST['btnProcess'])) : ?>
            <?php 
                $size = $_POST ['imgSize'];
                $border = $_POST ['imgColor'];
            ?>
        <?php endif; ?> 
        <img src="myphoto.jpg" alt="" width="<?php echo $size; ?>" border= " 5px solid" style="color: <?php echo $border; ?>">
    </form>
</body>
</html>