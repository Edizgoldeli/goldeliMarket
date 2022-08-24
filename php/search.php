<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/DBconnection.php");
include($_SERVER['DOCUMENT_ROOT'] . "/html/results.php");
$search = $_POST['search'];
function tr_strtoupper($text)
{
    $search = array("ç", "i", "ı", "ğ", "ö", "ş", "ü");
    $replace = array("Ç", "İ", "I", "Ğ", "Ö", "Ş", "Ü");
    $text = str_replace($search, $replace, $text);
    $text = strtoupper($text);
    return $text;
}
function tr_strtolower($text)
{
    $search = array("Ç", "İ", "I", "Ğ", "Ö", "Ş", "Ü");
    $replace = array("ç", "i", "ı", "ğ", "ö", "ş", "ü");
    $text = str_replace($search, $replace, $text);
    $text = strtolower($text);
    return $text;
}
function gnrl_stristr($var1, $text)
{
    $text = tr_strtolower($text);
    return stristr($var1, $text);
}


?> <center>
    <h1> <?php echo tr_strtoupper($search); ?> için arama sonuçları </h1>
</center><?php
            $sql = "SELECT `color`,`comment`,`denim`,`img_address`,`prdct_ID`,`price`,`stock`,`type` FROM `Product` ORDER BY prdct_ID desc";
            $result = $conn->query($sql);
            $ID = [];
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

                    $words = explode(' ', tr_strtolower($search));
                   
                    foreach ($words as $word) {
                        //
                        if (gnrl_stristr(tr_strtolower($prdct_ID), $word)) {
                            
                            if (in_array($prdct_ID, $ID)) {
                            } else {
                                array_push($ID, $prdct_ID);
                                

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
                                <div class="social">
                                    <a href="tel:+905333319928"><img src="https://market.goldeli.com/images/website/phone.png" width="35px" height="35px"></a>
                                    <a href="https://wa.me/905333319928/?text=<?php echo $comment; ?>"><img src="https://market.goldeli.com/images/website/whatsApp.png" width="62.222222223px" height="35px"></a>
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
                    }
                        //
                        if (gnrl_stristr(tr_strtolower($comment), $word)) {
                            
                            if (in_array($prdct_ID, $ID)) {
                            } else {
                                array_push($ID, $prdct_ID);
                                

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
                                <div class="social">
                                    <a href="tel:+905333319928"><img src="https://market.goldeli.com/images/website/phone.png" width="35px" height="35px"></a>
                                    <a href="https://wa.me/905333319928/?text=<?php echo $comment; ?>"><img src="https://market.goldeli.com/images/website/whatsApp.png" width="62.222222223px" height="35px"></a>
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
                    }
                }
             ?>
</body>

</html>