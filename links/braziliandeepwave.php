<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="../style.css">

    <title>braziliandeepwave</title>
</head>
<body>
    <?php
        include_once (__DIR__ . "/../header.php");
    ?>
    <section>
        <div class="title">
            <h1>BRAZILIAN DEEP WAVE</h1>
        </div>
        <div class="titlecontainer">
            <div>
                <div class="miniimage"><img src="../img/istockphoto-1124740181-1024x1024.jpg" alt=""></div>
                <div class="miniimage"><img src="../img/istockphoto-1334248487-1024x1024.jpg" alt=""></div>
                <div class="miniimage"><img src="../img/istockphoto-452522751-1024x1024.jpg" alt=""></div>
                <div class="miniimage"><img src="../img/ExclusiveBleachedClosures4x4_2_1024x1024.webp" alt=""></div>
            </div>
            <div class="largeimage"><img src="../img/istockphoto-1124740181-1024x1024.jpg" alt=""></div>
            <div class="itemdisbox">
                <h2>BRAZILIAN DEEP  WAVE</h2>
                <p class="itemsamount" id="itemsamount"><span>$</span>0</p>
                <div class="discript">
                    <p>Goddess Natural Body Wave Bundles consist of the highest quality Premium Virgin Hair.
                        Our single donor body wave texture is manufactured in China and processed to this 
                        elite bouncy beach wave pattern. These bundles are extremely soft to touch giving you sexy, 
                        seductive, sultry vibes. Feel free to straighten, curl, color and style your bundles as you 
                        wish. Because our bundles are double wefted, tangling and shedding is minimal. Bundles will 
                        last more than a year with proper care.
                    </p>
                </div>
                <div class="itemformbox">
                    <form>
                        <div class="lengthcontainer">
                            <h3>LENGTH:</h3>
                            <div class="lengthbox">
                               <div class="minilgtbox" data-amount = "100" >1'10</div>
                               <div class="minilgtbox" data-amount = "200" >1'11</div>
                               <div class="minilgtbox" data-amount = "300" >1'12</div>
                               <div class="minilgtbox" data-amount = "400" >1'13</div>
                               <div class="minilgtbox" data-amount = "500" >1'14</div>
                               <div class="minilgtbox" data-amount = "600" >1'15</div>
                               <div class="minilgtbox" data-amount = "700" >1'16</div>
                               <div class="minilgtbox" data-amount = "800" >1'17</div>
                               <div class="minilgtbox" data-amount = "900" >1'18</div>
                               <div class="minilgtbox" data-amount = "950" >1'19</div>
                            </div>                           
                        </div>

                        <div class="quantity-box">
                            <h2>QUANTITY:</h2>
                            <input type="number" name="quantity" id="quantity" min="1">
                        </div>
                        <div class="add-to">
                            <button type="submit" name="add-bttncart" id="add-bttncart" class="add-bttn">ADD TO CART</button>
                            <button type="submit" name="add-bttnwish" id="add-bttnwish" class="add-bttn">ADD TO WISH LIST</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="nextdayair">
        <p>NEXT DAY DELIVERY</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, perferendis?</p>
        <p>Lorem, ipsum.</p>
    </div>
    <section>
        <div class="related">
            <h3>RELATED PRODUCTS</h3>
            <div class="related-item">
                <a href="">
                    <div class="related-img">
                        <img src="../img/istockphoto-452522751-1024x1024.jpg" alt="">
                    </div>
                    <p>EXCLUSIVE BLEACHED</p>
                    <p><S>$192</S> from $162</p>
                    <button id="selectoptbttn" name="submit"><a href="">SELECT OPTIONS</a></button>
                </a>
            </div>
        </div>
    </section>
    <?php
        include_once (__DIR__ . "/../footer.php")
    ?>
    <script src="mainsec.js"></script>
</body>
</html>