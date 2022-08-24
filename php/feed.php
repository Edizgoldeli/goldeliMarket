<!doctype html>
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/DBconnection.php");

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
        <br>
       
        <div class="center">

            <div class="content">

                <div class="feed1">
                    <div class="feed2">
                        <img src="/images/products/<?php echo $img_address; ?>" alt="<?php echo $comment;?>" class="fitting-image">
                    </div>
                    <div class="feedComment">
                        <?php echo $comment; ?>
                    </div>
                    <br>
                    <div class="social">
                        <a href="tel:+905333319928" title="Call / Ara" rel="nofollow"><img src="https://market.goldeli.com/images/website/phone.png" alt="Phone icon" width="35px" height="35px"></a>
                        <a href="https://wa.me/905333319928/?text=<?php echo $comment." [ID: ".$prdct_ID."]"; ?>" title="Whatsapp ile Mesaj At" rel="nofollow"><img src="https://market.goldeli.com/images/website/whatsApp.png" alt="WP icon"width="62.222222223px" height="35px"></a>
                    </div>
                    <div class="IDinfo">
                    <br>
                        <?php echo "Ürün ID: " . $prdct_ID; ?>
                    </div>
                </div>

            </div>


        </div>
        
<?php
    }
}
