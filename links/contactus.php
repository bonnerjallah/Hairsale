<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style2.css">
    <title>Contact Us</title>
</head>
<body>
    <?php
        include_once (__DIR__ . "/../header.php");
    ?>
    <div class="contactcontainer">
        <h1>CONTACT US</h1>
        <div class="contactformbox">
            <div class="thanks">
                <h3>Thank you for visiting Goddess Collection Hair!</h3>
                <p>We hope that your shopping experience has been a remarkable one, 
                    and we certainly look forward to having you shop with us again.  
                    Be sure to join our mailing list to learn more about our exclusive promotions, 
                    our new inventory, our regional events, our behind the scenes photos, 
                    and also some of our new product launches to come in the near future.
                </p>
                <p>If you would like to contact us, please feel free to use the contact form located below,
                    or you can simply email us directly at....
                </p>
                <p><Address>address goes here</Address></p>
            </div>
            <div class="contactformbox2">
                <div class="formbuttonbox">
                    <button id="genbtn">GENERAL INQUIRES >></button>
                    <button id="shipbtn">SHIPPING >></button>
                    <button id="retnbtn">RETURN / EXCHANGES >></button>
                </div>
                <div id="formbox" class="formbox ">
                    <form action="" method="post">
                    <h4>CONTACT US WITH ANY GENERAL QUESTIONS</h4>

                        <label for="contname">NAME</label>
                        <br>
                        <input type="text" id="contname" name="contname" class="continput">
                        <br>
                        <label for="contemail">EMAIL</label>
                        <br>
                        <input type="text" id="contemail" name="contemail" class="continput">
                        <br>
                        <label for="contphone">PHONE NUMBER</label>
                        <br>
                        <input type="text" id="contphone" name="contphone" class="continput">
                        <br>
                        <br>
                        <textarea name="contmsg" id="" cols="30" rows="10"></textarea>
                        <br>
                        <div class="shopnow-bttn">
                            <button id="lux-bttn">SEND</button>
                        </div>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
    <?php
        include_once (__DIR__ . "/../footer.php");
    ?>
    <script src="mainsec.js"></script>
</body>
</html>