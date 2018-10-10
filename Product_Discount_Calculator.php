<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $productDescription = $_POST['productDescription'];
    $listPrice = $_POST['listPrice'];
    $discountPercent = $_POST['discountPercent'];
    $discountAmount = $listPrice * $discountPercent / 100;
    $discountPrice = $listPrice - $discountAmount;
}
?>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form style="width: 500px; height: 400px; border: 1px solid black" METHOD="post" action="display_discount.php">
        <h1 style="text-align: center">Nhập sản phẩm</h1>
        <br>
        <h3 style="color: aqua; margin-left: 50px">Product Description: <input type="text" name="productDescription" placeholder="Mô tả sản phẩm"></h3>
        <h3 style="color: cornflowerblue; margin-left: 50px">List Price: <input type="text" name="listPrice" placeholder="Giá niêm yết của sản phẩm" style="width: 255px"></h3>
        <h3 style="color: crimson; margin-left: 50px">Discount Percent: <input type="text" name="discountPercent" placeholder="Tỷ lệ chiết khấu (phần trăm)" style="width: 195px"></h3>
        <br>
        <input type="submit" value="Nhập" style="margin-left: 200px">
    </form>
</body>
</html>