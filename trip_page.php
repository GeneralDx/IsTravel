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
        p,b,h3{
            color: white;
            font-size: 20px;
        }
        
        

  	</style>
  </head>
  <body>
  <br />
    
    <h1>Trips Available now</h1>
    <div class="items">
        <div class="item">
            <img src="img/jerusalem.jpg"
            <h3><b>     Jerusalem - $168 </b></h3>
            <p>Our Jerusalem Tours offer a variety of different experiences in the holiest city of them all. From one day introductory tours to religious-themed tours, packages tours, culinary tours, and more, the tours offered by Tourist Israel include something for everyone. We offer the most popular one day tours featuring the highlights of the Old and New parts of the city to Christian and Jewish focused tours following in the footsteps of the Biblical stories.</p>
            <button>View More</button>

        </div>
        <div class="item">
        <img src="img/haifa.jpg"
            <h3><b>     Haifa - $134 </b></h3>
            <p>Modern Haifa is a bustling port town, but unlike many industry-focused cities, its landscape of steep cliffs rolling down to the shore gives it a beautiful setting.
            For travelers who want a base with both good access to the sights of the north and plentiful city buzz, with a thriving café and dining scene, this is one of the best places to visit.
            Haifa's hillside location is enhanced by the Baha'i Gardens, which are the central city's dominating feature.</p>
            <button>View More</button>
        </div>
        <div class="item">
        <img src="img/telaviv.jpg"
            <h3><b>     Tel Aviv - $159 </b></h3>
            <p>With its hot artistic vibe, miles of picturesque city-side beaches, fascinating neighborhoods and a thriving nightlife, Tel Aviv seems to have it all. Yet Israel’s second largest—and no doubt hippest—city remains under-appreciated by most travelers. Thankfully, a series of hotel openings, city-wide renovations and a renewed appreciation for the city’s historic offerings has finally started to garner this glam metropolis the attention it so rightly deserves.</p>
            <button>View More</button>

        </div>
        <div class="item">
        <img src="img/eilat.jpg"
            <h3><b>     Eilat - $137 </b></h3>
            <p>Eilat is Israel's southernmost city and the country's only outpost on the shores of the Red Sea, which it shares with three other nations: Jordan and Egypt, which both have a land border with the city. As the country's vacation city par excellence, many Israelis insist on visiting Eilat at least once a year or, at the very least, going through it en route to neighboring destinations, when they incorporate an overnight there with a vacation in Sinai or a trip to Jordan.

</p>
            <button>View More</button>
        </div>

        <div class="item">
        <img src="img/eingedi.jpg"
            <h3><b>     Ein Gedi - $147 </b></h3>
            <p>Ein Gedi, just aside the Dead Sea in the Judean Desert, is one of Israel’s premier hiking spots, featuring spectacular beauty, varied landscapes, and botanical gardens. There’s no doubt that Ein Gedi Nature Reserve is one of the most beautiful places in Israel. While it is located close to Jerusalem, it feels worlds away, Ein Gedi is, of course, one of the most popular escape spots for locals and tourists who take advantage of the reserve, botanical gardens, and the Dead Sea.

            </p>
            <button>View More</button>
        </div>
        <div class="item">
            <img src="img/tiberias.jpg"
            <h3><b>     Tiberias - $129 </b></h3>
            <p>Sitting on the edge of the Sea of Galilee, Tiberias is the perfect base to explore this region. It is a famous historical and tourist town. The ancient city is located in the southern part of today's agglomeration. 
Flowing with natural hot springs, brimming with Christian and Jewish holy sites and hugging the shores of the Sea of Galilee, Tiberias is a top tourist stopover for visitors to Israel. The city boasts many historical and religious sites as well as water recreation options.

            </p>
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
