<!doctype html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/DBconnection.php");
if ($_SESSION['ID']) {
} else {
    header("location:/html/Admin/login.php");
}
$sql = "SELECT `color`,`comment`,`denim`,`img_address`,`prdct_ID`,`price`,`stock`,`type` FROM `Product` ORDER BY prdct_ID desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $GLOBALS["color"] = $row["color"];
        $color = $GLOBALS["color"];

        $GLOBALS["comment"] = $row["comment"];
        $comment = $GLOBALS["comment"];

        $GLOBALS["denim"] = $row["denim"];
        $denim = $GLOBALS["denim"];

        $GLOBALS["img_address"] = $row["img_address"];
        $img_address = $GLOBALS["img_address"];

        $GLOBALS["prdct_ID"] = $row["prdct_ID"];
        $prdct_ID = $GLOBALS["prdct_ID"];

        $GLOBALS["price"] = $row["price"];
        $price = $GLOBALS["price"];

        $GLOBALS["stock"] = $row["stock"];
        $stock = $GLOBALS["stock"];

        $GLOBALS["type"] = $row["type"];
        $type = $GLOBALS["type"];
?>
        <div class="center">
            <div class="content">

                <div class="feed1">
                    <div class="feed2">
                        <img src="/images/products/<?php echo $img_address; ?>" class="fitting-image">

                    </div>
                    <div class="feedComment">
                        <?php echo $comment; ?>
                    </div>
                    <br>
                    <div class="IDinfo">
                        <?php echo "Ürün ID:" . $prdct_ID; ?>
                    </div>
                    <form action="/html/Admin/update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="color" value="<?php echo $color; ?>">
                        <input type="hidden" name="comment" value="<?php echo $comment; ?>">
                        <input type="hidden" name="denye" value="<?php echo $denim; ?>">
                        <input type="hidden" name="img_address" value="<?php echo $img_address; ?>">
                        <input type="hidden" name="prdct_ID" value="<?php echo $prdct_ID; ?>">
                        <input type="hidden" name="price" value="<?php echo $price; ?>">
                        <input type="hidden" name="stock" value="<?php echo $stock; ?>">
                        <input type="hidden" name="type" value="<?php echo $type; ?>">
                        <input type="hidden" name="prdct_ID" value="<?php echo $prdct_ID; ?>">
                        <input type="submit" class="edit" value="Düzenle" />
                    </form>
                    <form onsubmit="return validate(this);" action="/php/delete.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="prdct_ID" value="<?php echo $prdct_ID; ?>">
                        <input type="submit" class="delete" value="Sil" />
                    </form>
                </div>
            </div>
        </div>
        <script>
            function validate(form) {

                return confirm('Silmek istediğine emin misin?');

            }
        </script>
<?php
    }
}
