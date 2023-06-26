<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="../style.css">

    <title>Naturalbodywave</title>
</head>
<body>
    <?php
        include_once (__DIR__ . "/../header.php");
    ?>
    <section>
        <div class="title">
            <h1>EXCLUSIVE BLEACHED</h1>
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
                <h2>EXCLUSIVE BLEACHED</h2>
                <p class="itemsamount">$90.00</p>
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
                                <input type="radio" id="option1" name="option" value="1">
                                <label for="option1" class="radio-square"></label>

                                <input type="radio" id="option2" name="option" value="2">
                                <label for="option2" class="radio-square"></label>

                                <input type="radio" id="option3" name="option" value="3">
                                <label for="option3" class="radio-square"></label>

                                <input type="radio" id="option4" name="option" value="4">
                                <label for="option4" class="radio-square"></label>

                                <input type="radio" id="option5" name="option" value="5">
                                <label for="option5" class="radio-square"></label>

                                <input type="radio" id="option6" name="option" value="6">
                                <label for="option6" class="radio-square"></label>

                                <input type="radio" id="option7" name="option" value="7">
                                <label for="option7" class="radio-square"></label>

                                <input type="radio" id="option8" name="option" value="8">
                                <label for="option8" class="radio-square"></label>

                                <input type="radio" id="option9" name="option" value="9">
                                <label for="option9" class="radio-square"></label>

                                <input type="radio" id="option10" name="option" value="10">
                                <label for="option10" class="radio-square"></label>

                                <input type="radio" id="option11" name="option" value="11">
                                <label for="option11" class="radio-square"></label>
                            </div>                           
                        </div>
                        <div class="quanity">
                            <h3>QUANITY:</h2>
                            <input type="number" name="amount" id="amount">
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
        include_once "footer.php"
    ?>
</body>
</html>