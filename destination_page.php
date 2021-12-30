<?php
	require_once 'header.php';
	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trips</title>
    <style>
        .items {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding: 30px 20px;
            grid-column-gap: 20px;
            grid-row-gap: 30px;
        }

				.item {
					background: #91D7FF;
				}

        .item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .item:hover {
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
            background-color: #0148ba;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            font-size: 20px;
            display: block;
            margin: auto;
            transition: 0.2s all;
						margin-bottom: 10px;
        }

            .item button:hover {
                transform: scale(1.08);
            }

        p,b,h3{
						color: #0148ba;
            font-size: 20px;
						padding: 10px;
        }

				#h1{
					color: #0148ba;
				}



  	</style>
  </head>
  <body>
  <br />

    <h1 id="h1">Trips Available now</h1>
    <div class="items">
        <div class="item">
            <img src="img/jerusalem.jpg">
            <h3><b>Beer Sheva</b></h3>
						<p>FacebookWhatsAppTwitterPinterestCopy Link
Beer Sheva is the capital of the Negev region of Israel, a desert city that serves as the gateway to this region. There are a number of interesting things to do in Beer Sheva, an ancient city dating from Biblical times, including the old Turkish town, which is the only planned Ottoman city in the region, the Turkish railway station, and the Bedouin market, as well as Tel Beer Sheba, an UNESCO World Heritage Site.</p>
            <button id="place_1" onclick="place_1()">View More</button>

        </div>
        <div class="item">
        <img src="img/haifa.jpg">
            <h3><b>Dead Sea</b></h3>
            <p>Modern Haifa is a bustling port town, but unlike many industry-focused cities, its landscape of steep cliffs rolling down to the shore gives it a beautiful setting.
            For travelers who want a base with both good access to the sights of the north and plentiful city buzz, with a thriving café and dining scene, this is one of the best places to visit.
            Haifa's hillside location is enhanced by the Baha'i Gardens, which are the central city's dominating feature.</p>
            <button id="place_2" onclick="place_2()">View More</button>
        </div>
        <div class="item">
        <img src="img/telaviv.jpg">
            <h3><b>Eilat</b></h3>
            <p>With its hot artistic vibe, miles of picturesque city-side beaches, fascinating neighborhoods and a thriving nightlife, Tel Aviv seems to have it all. Yet Israel’s second largest—and no doubt hippest—city remains under-appreciated by most travelers. Thankfully, a series of hotel openings, city-wide renovations and a renewed appreciation for the city’s historic offerings has finally started to garner this glam metropolis the attention it so rightly deserves.</p>
            <button id="place_3" onclick="place_3()">View More</button>

        </div>
        <div class="item">
        <img src="img/eilat.jpg">
            <h3><b>Haifa</b></h3>
            <p>Eilat is Israel's southernmost city and the country's only outpost on the shores of the Red Sea, which it shares with three other nations: Jordan and Egypt, which both have a land border with the city. As the country's vacation city par excellence, many Israelis insist on visiting Eilat at least once a year or, at the very least, going through it en route to neighboring destinations, when they incorporate an overnight there with a vacation in Sinai or a trip to Jordan.</p>
            <button id="place_4" onclick="place_4()">View More</button>
        </div>

        <div class="item">
        <img src="img/eingedi.jpg">
            <h3><b>Jerusalem</b></h3>
            <p>Ein Gedi, just aside the Dead Sea in the Judean Desert, is one of Israel’s premier hiking spots, featuring spectacular beauty, varied landscapes, and botanical gardens. There’s no doubt that Ein Gedi Nature Reserve is one of the most beautiful places in Israel. While it is located close to Jerusalem, it feels worlds away, Ein Gedi is, of course, one of the most popular escape spots for locals and tourists who take advantage of the reserve, botanical gardens, and the Dead Sea.</p>
            <button id="place_5" onclick="place_5()">View More</button>
        </div>
        <div class="item">
            <img src="img/tiberias.jpg">
            <h3><b>Mitspe Ramon</b></h3>
            <p>Sitting on the edge of the Sea of Galilee, Tiberias is the perfect base to explore this region. It is a famous historical and tourist town. The ancient city is located in the southern part of today's agglomeration.
Flowing with natural hot springs, brimming with Christian and Jewish holy sites and hugging the shores of the Sea of Galilee, Tiberias is a top tourist stopover for visitors to Israel. The city boasts many historical and religious sites as well as water recreation options.</p>
            <button id="place_6" onclick="place_6()">View More</button>

        </div>

        <div class="item">
        <img src="img/jaffa.jpg">
            <h3><b>Netanya</b></h3>
            <p>Jaffa (also known as Yafo) is the ancient port city out of which Tel Aviv has now grown. In recent years, like much of South Tel Aviv, this area has been regenerated. The old narrow streets and courtyards are now another highly desirable part of Tel Aviv’s urban tapestry.
Jaffa’s flea market is a well-known attraction of the area. Here, the vendors sell a diverse range of interesting and unique products from Turkish carpets to original art. Meanwhile, the narrow passageways and ancient buildings in the Old City are worlds away from modern Tel Aviv.</p>
            <button id="place_7" onclick="place_7()">View More</button>

        </div>
        <div class="item">
        <img src="img/ashdod.jpg">
            <h3><b>Tel Aviv</b></h3>
            <p>Ashdod is the sixth-largest city and the largest port in Israel accounting for 60% of the country's imported goods. Ashdod is located in the Southern District of the country, on the Mediterranean coast where it is situated between Tel Aviv to the north and Ashkelon. The city is also an important regional industrial center.Modern Ashdod covers the territory of two ancient twin towns, one inland and one on the coast, which were for most of their history two separate entities, connected though by close ties with each other.</p>
            <button id="place_8" onclick="place_8()">View More</button>

        </div>
        <div class="item">
        <img src="img/nahariya.jpg">
            <h3><b>Tiberias</b></h3>
            <p>Nahariya is Israel’s northernmost coastal city, a last testament to the seaside settlements that reach up along the sunny Mediterranean shoreline. Being the end of the train-line and just a few minutes from Rosh HaNikra, with its famous white sandstone grottos, tourists often find themselves Nahariya, a vibrant, little city. With a lively nucleus, comprised of a wide boulevard, divided by a river and lined with shops, restaurants, bars and hotels, and the seafront bars and restaurants, Nahariya provides sun-lovers with an idyllic vacation spot.</p>
            <button id="place_9" onclick="place_9()">View More</button>
				</div>

						<form method="post" action="trip_page.php">
					    <input type="text" name="place" id="place" style="display:none"><br>
							<input type="submit" name="formsend_place" class="formsend_place" id="formsend_place" style="display:none">
						</form>

						<script type="text/javascript">
							function place_1(){
								document.getElementById('place').value = "Beer Sheva";
								document.getElementById('formsend_place').click();
							}
							function place_2(){
								document.getElementById('place').value = "Dead Sea";
								document.getElementById('formsend_place').click();
							}
							function place_3(){
								document.getElementById('place').value = "Eilat";
								document.getElementById('formsend_place').click();
							}
							function place_4(){
								document.getElementById('place').value = "Haifa";
								document.getElementById('formsend_place').click();
							}
							function place_5(){
								document.getElementById('place').value = "Jerusalem";
								document.getElementById('formsend_place').click();
							}
							function place_6(){
								document.getElementById('place').value = "Mitspe Ramon";
								document.getElementById('formsend_place').click();
							}
							function place_7(){
								document.getElementById('place').value = "Netanya";
								document.getElementById('formsend_place').click();
							}
							function place_8(){
								document.getElementById('place').value = "Tel Aviv";
								document.getElementById('formsend_place').click();
							}
							function place_9(){
								document.getElementById('place').value = "Tiberias";
								document.getElementById('formsend_place').click();
							}
						</script>
        </div>


</html>


<?php
	require_once 'footer.php';
	?>
