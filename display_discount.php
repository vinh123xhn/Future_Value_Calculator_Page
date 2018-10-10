<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $productDescription = $_POST['productDescription'];
    $listPrice = $_POST['listPrice'];
    $discountPercent = $_POST['discountPercent'];
    $discountAmount = $listPrice * $discountPercent / 100;
    $discountPrice = $listPrice - $discountAmount;
}
?>

<body>
<div style="margin-left: 450px; border: 2px solid cornflowerblue; width: 435px; height: 245px">
    <form method="post" action="display_discount.php">
        <h1 style=' color: navy; margin-bottom: 10px; float: left; padding-left: 1em;'>Product
            Discount Calculator</h1>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px '>Product
            Description:  <?php echo $discountPercent ?></h5><br>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px'>Price: <?php echo $listPrice ?> </h5><br>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px'>Discount Percent:<?php echo $discountPercent ?></h5>
        <br>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px'>Discount Amount:<?php echo $discountAmount ?></h5><br>
        <h5 style=' margin-bottom: -27px; padding-left: 1em; width: 100%; font-size: 15px'>Discount Price:<?php echo $discountPrice ?></h5>
    </form>
</div>
</body>

