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

				p{
					text-align: justify;
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
            <img src="img/beersheva.jpg">
            <h3><b>Beer Sheva</b></h3>
						<p>
Beer Sheva is the capital of the Negev region of Israel, a desert city that serves as the gateway to this region. Beer Sheva is generally not on the agendas of many tourists to Israel, and is therefore somewhat of an off the beaten track destination. There are a number of interesting and unique things to do in Beer Sheva, including the old Turkish town, which is the only planned Ottoman city in the region, the Turkish railway station, Tel Beer Sheba and UNESCO World Heritage Site.</p>
            <button id="place_1" onclick="place_1()">View More</button>

        </div>
        <div class="item">
        <img src="img/deadsea.jpg">
            <h3><b>Dead Sea</b></h3>
            <p>The Dead Sea is an outstanding natural body of water situated between Israel and Jordan at the lowest point on earth, stretching from the Judean Desert through to the Arava Desert and flanked by mountains on both sides. It’s so salty that its salt crystals are often visible on the surface, and anyone going for a swim in the Dead Sea floats pretty much instantly. It’s dubbed the Dead Sea because the salty nature of the water disallows marine life from living here, although it does sustain smaller organisms like algae. </p>
            <button id="place_2" onclick="place_2()">View More</button>
        </div>
        <div class="item">
        <img src="img/eilat.jpg">
            <h3><b>Eilat</b></h3>
            <p>Eilat is Israel's southernmost city and the country's only outpost on the shores of the Red Sea, which it shares with three other nations: Jordan and Egypt, which both have a land border with the city. As the country's vacation city par excellence, many Israelis insist on visiting Eilat at least once a year or, at the very least, going through it en route to neighboring destinations, when they incorporate an overnight there with a vacation in Sinai or a trip to Jordan. Eilat is really a place to visit.

           </p>
            <button id="place_3" onclick="place_3()">View More</button>

        </div>
        <div class="item">
        <img src="img/haifa.jpg">
            <h3><b>Haifa</b></h3>
            <p>Modern Haifa is a bustling port town, but unlike many industry-focused cities, its landscape of steep cliffs rolling down to the shore gives it a beautiful setting.

For travelers who want a base with both good access to the sights of the north and plentiful city buzz, with a thriving café and dining scene, this is one of the best places to visit.

Haifa's hillside location is enhanced by the Baha'i Gardens, which are the central city's dominating feature. These cascading terraces of manicured lawns are Haifa's number one tourist attraction.

The Baha'i Gardens are also an example of the modern town's overall harmonious approach to life. As well as being a center for the Baha'i faith, Haifa's mixed population of Jews and Arabs is much less segregated here than elsewhere.

            </p>
            <button id="place_4" onclick="place_4()">View More</button>
        </div>

        <div class="item">
        <img src="img/jerusalem.jpg">
            <h3><b>Jerusalem</b></h3>
            <p>The most contested city on Earth is also one of the most beautiful. Jerusalem's scope of history is staggering, and the major role the city plays in the traditions of all three major monotheistic faiths has led to it being continually fought over, across the centuries.

This is the heart of the Holy Land, where the Jews raised the First Temple to keep the Ark of the Covenant safe, where Jesus was crucified and rose again, and where the Prophet Muhammad ascended to heaven to receive God's word.

For believers, a visit to Jerusalem is a pilgrimage to one of the most sacred sites in the world. The number of religious tourist attractions here can be baffling for first-time visitors, but luckily most of the things to do are secreted within the lanes of the compact Old City district.</p>
            <button id="place_5" onclick="place_5()">View More</button>
        </div>
        <div class="item">
            <img src="img/mitzperamon.jpg">
            <h3><b>Mitspe Ramon</b></h3>
            <p>The town of Mitzpe Ramon sits on the edge of the Ramon Crater in the Negev Desert of Southern Israel.
							Mitzpe Ramon sits on the northern cliffs of the unique and magical Ramon Crater, and is the best place to stay if you want to explore the makhtesh, hike or bike in it or explore its nature, wildlife. It is also the perfect place to take a Jeep ride to Ramon Crater.

Within Mitzpe Ramon is the newly opened Ramon Crater Mitzpe Ramon Visitor Center which tells the geological story of the formation of the makhtesh, the largest landform of its type in the world. As part of the exhibition is the Ilan Ramon Memorial, telling the story of Israel’s first astronaut, Ilan Ramon who died in the 2003 Colombia Disaster, and loved the Ramon Crater and surrounding desert area.</p>
            <button id="place_6" onclick="place_6()">View More</button>

        </div>

        <div class="item">
        <img src="img/netanya.jpg">
            <h3><b>Netanya</b></h3>
            <p>
A Diamond on the Med is not just a nick name given to this City.
Netanya, is a true diamond which is only being discovered in these last few years with the help of many tourists that have started the visiting the great hotels in Netanya and enjoying the large variaty of restaurants and the activities that Netanya is offering its visitors.

Netanya is located on the beach of the mediterranean sea and only 10 minutes drive from Israels cultural capital, Tel Aviv, you can check our maps to see how easy it is to travel israel when you are based in Netanya.

Netanya not only offers a great starting point for your trip accross Israel and the Middle East, but also a great place to spend you days, with its great museums, galleries, culture events and other activities.</p>
            <button id="place_7" onclick="place_7()">View More</button>

        </div>
        <div class="item">
        <img src="img/telaviv.jpg">
            <h3><b>Tel Aviv</b></h3>
            <p>Rimmed by stretches of golden beach and renowned for its lively coffee culture and innovative dining scene, Tel Aviv is Israel's most cosmopolitan and youthful city.

Soaking up the sun and sand, shopping in arty boutiques, and enjoying some serious foodie action are Tel Aviv's major things to do, and what the city lacks in major tourist attractions it makes up for with its laid-back atmosphere.

Nicknamed "The White City," the town was awarded UNESCO World Heritage Status in 2003 in recognition of its fine examples of Bauhaus architecture (an early 20th-century Modernist style of building). There are also a number of art galleries and small, specialist museums for sightseeing off the beach. For historic ambience, though, one of the best places to visit is Jaffa, just to the south. </p>
            <button id="place_8" onclick="place_8()">View More</button>

        </div>
        <div class="item">
        <img src="img/tiberias.jpg">
            <h3><b>Tiberias</b></h3>
            <p>Tiberias is one of Judaism's four holy cities, the burial place of venerated Jewish sages and a very popular base for Christians visiting holy sites around the Sea of Galilee.
							It's also one of the most aesthetically challenged resort towns in Israel, its sunbaked lakeside strip marred by 1970s architectural monstrosities.
							So the sacred and the kitsch – plus beaches, hot springs and a growing ultra-Orthodox population – coexist side by side in a whirl of holiness, hawkers and hedonism.  Tiberias received an influx of rabbis who established the city as a center for Jewish learning. There are several tombs of holy people. Tiberias is one of the Jewish Four Holy Cities, along with Jerusalem, Hebron, and Safed. It is a pleasant lakefront resort, and also a good base for visiting the Galilee and Golan. </p>
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
