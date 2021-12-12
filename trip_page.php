<?php
	require_once 'header.php';
	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact us</title>
    <style>
        .items {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding: 30px 20px;
            grid-column-gap: 20px;
            grid-row-gap: 30px;
        }

        .item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .item img:hover {
             transform: scale(1.04);
        }

        .item h3 {
            padding: 5px;
            text-align: center;
            font-weight: bold;
        }

        .item button {
            padding: 5px 30px;
            border: none;
            outline: none;
            background-color: #333;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            font-size: 20px;
            display: block;
            margin: 0 auto;
            transition: 0.2s all;
        }

            .item button:hover {
                transform: scale(1.08);
            }
        #btn {
            background-color: #333;
        }
        p,b,h1,h3{
            color: black;
        }
  	</style>
  </head>
  <body>
  <br /><br /><br /><br />
    
    <h1>Trips Available now</h1>
    <div class="items">
        <div class="item">
            <img src="img/jerusalem.jpg"
            <h3><b>     Jerusalem</b> - $168</h3>
            <p>Our Jerusalem Tours offer a variety of different experiences in the holiest city of them all. From one day introductory tours to religious-themed tours, packages tours, culinary tours, and more, the tours offered by Tourist Israel include something for everyone. We offer the most popular one day tours featuring the highlights of the Old and New parts of the city to Christian and Jewish focused tours following in the footsteps of the Biblical stories.</p>
            <button>View More</button>

        </div>
        <div class="item">
        <img src="img/haifa.jpg"
            <h3><b>     Haifa</b> - $134</h3>
            <p>Modern Haifa is a bustling port town, but unlike many industry-focused cities, its landscape of steep cliffs rolling down to the shore gives it a beautiful setting.
            For travelers who want a base with both good access to the sights of the north and plentiful city buzz, with a thriving café and dining scene, this is one of the best places to visit.
            Haifa's hillside location is enhanced by the Baha'i Gardens, which are the central city's dominating feature. These cascading terraces of manicured lawns are Haifa's number one tourist attraction.</p>
            <button>View More</button>
        </div>
        <div class="item">
            <img src="~/img/hotchoco.jpg"
            <h3><b>Hot Chocolate</b> - $3.80</h3>
            <p>Steamed milk and mocha sauce topped with sweet whipped cream and a chocolate drizzle. A timeless classic made to soften your spirits.</p>
            <button>View More</button>

        </div>
        <div class="item">
            <img src="~/img/americano.jpg"
            <h3><b>Café Americano</b> - $3.50 </h3>
            <p>
                Shot of espresso topped with hot water create a light coating of creme that culminates in this wonderfully rich cup with depth and undertone.
            </p>
            <button>View More</button>
        </div>

        <div class="item">
            <img src="~/img/cappucino.png"
            <h3><b>Café Cappucino</b> - $3</h3>
            <p>
                Dark, rich espresso awaits beneath a smooth, stretched layer of thick milk froth.
                An alchemy of barista art and craftsmanship.
            </p>
            <button>View More</button>
        </div>
        <div class="item">
            <img src="~/img/expresso.jpg"
            <h3><b>Café Expresso</b> - $3</h3>
            <p>Our signature creamy espresso roast with a rich flavor and caramelized sweetness is at the heart of everything we do.</p>
            <button>View More</button>

        </div>

        <div class="item">
            <img src="~/img/croissant.jpg"
            <h3><b>Croissant</b> - $3</h3>
            <p>Delicious Croissant made with butter.</p>
            <button>View More</button>

        </div>
        <div class="item">
            <img src="~/img/greentea.jpg"
            <h3><b>Green Tea</b> - $2.80</h3>
            <p>Green tea with its natural flavor. Keep it simple.</p>
            <button>View More</button>

        </div>

    
</html>


<?php
	require_once 'footer.php';
	?>
