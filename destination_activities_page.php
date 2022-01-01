<?php
	require_once 'header.php';
	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Activities</title>
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

    <h1 id="h1">Activities Available now</h1>
    <div class="items">
        <div class="item">
            <img src="img/beersheva.jpg">
            <h3><b>Beer Sheva</b></h3>
            <p>Beer Sheva is the capital of the Negev region of Israel, a desert city that serves as the gateway to this region. Beer Sheva is generally not on the agendas of many tourists to Israel, and is therefore somewhat of an off the beaten track destination. There are a number of interesting and unique things to do in Beer Sheva, including the old Turkish town, which is the only planned Ottoman city in the region, the Turkish railway station, Tel Beer Sheba and UNESCO World Heritage Site.</p>
            <button id="city_1" onclick="city_1()">View More</button>

        </div>
        <div class="item">
        <img src="img/deadsea.jpg">
            <h3><b>Dead Sea</b></h3>
            <p>The Dead Sea is an outstanding natural body of water situated between Israel and Jordan at the lowest point on earth, stretching from the Judean Desert through to the Arava Desert and flanked by mountains on both sides. It’s so salty that its salt crystals are often visible on the surface, and anyone going for a swim in the Dead Sea floats pretty much instantly. It’s dubbed the Dead Sea because the salty nature of the water disallows marine life from living here, although it does sustain smaller organisms like algae. </p>

            <button id="city_2" onclick="city_2()">View More</button>
        </div>
        <div class="item">
        <img src="img/eilat.jpg">
            <h3><b>Eilat</b></h3>
            <p>Eilat is Israel's southernmost city and the country's only outpost on the shores of the Red Sea, which it shares with three other nations: Jordan and Egypt, which both have a land border with the city. As the country's vacation city par excellence, many Israelis insist on visiting Eilat at least once a year or, at the very least, going through it en route to neighboring destinations, when they incorporate an overnight there with a vacation in Sinai or a trip to Jordan. Eilat is really a place to visit.
                
                </p>
            <button id="city_3" onclick="city_3()">View More</button>

        </div>
        <div class="item">
        <img src="img/haifa.jpg">
            <h3><b>Haifa</b></h3>
            <p>Modern Haifa is a bustling port town, but unlike many industry-focused cities, its landscape of steep cliffs rolling down to the shore gives it a beautiful setting.

For travelers who want a base with both good access to the sights of the north and plentiful city buzz, with a thriving café and dining scene, this is one of the best places to visit.

Haifa's hillside location is enhanced by the Baha'i Gardens, which are the central city's dominating feature. These cascading terraces of manicured lawns are Haifa's number one tourist attraction.

The Baha'i Gardens are also an example of the modern town's overall harmonious approach to life. As well as being a center for the Baha'i faith, Haifa's mixed population of Jews and Arabs is much less segregated here than elsewhere.
            
            </p>            <button id="city_4" onclick="city_4()">View More</button>
        </div>

        <div class="item">
        <img src="img/jerusalem.jpg">
            <h3><b>Jerusalem</b></h3>
            <p>The most contested city on Earth is also one of the most beautiful. Jerusalem's scope of history is staggering, and the major role the city plays in the traditions of all three major monotheistic faiths has led to it being continually fought over, across the centuries.

This is the heart of the Holy Land, where the Jews raised the First Temple to keep the Ark of the Covenant safe, where Jesus was crucified and rose again, and where the Prophet Muhammad ascended to heaven to receive God's word.

For believers, a visit to Jerusalem is a pilgrimage to one of the most sacred sites in the world. The number of religious tourist attractions here can be baffling for first-time visitors, but luckily most of the things to do are secreted within the lanes of the compact Old City district.</p>            <button id="city_5" onclick="city_5()">View More</button>
        </div>
        <div class="item">
            <img src="img/mitzperamon.jpg">
            <h3><b>Mitspe Ramon</b></h3>
            <p>The town of Mitzpe Ramon sits on the edge of the Ramon Crater in the Negev Desert of Southern Israel. 
                Mitzpe Ramon sits on the northern cliffs of the unique and magical Ramon Crater, and is the best place to stay if you want to explore the makhtesh, hike or bike in it, or explore its nature and wildlife. It is also the perfect place from which to take a jeep tour of the Ramon Crater.

Within Mitzpe Ramon is the newly opened Ramon Crater Mitzpe Ramon Visitor Center which tells the geological story of the formation of the makhtesh, the largest landform of its type in the world. As part of the exhibition is the Ilan Ramon Memorial, telling the story of Israel’s first astronaut, Ilan Ramon who died in the 2003 Colombia Disaster, and loved the Ramon Crater and surrounding desert area.</p>
            <button id="city_6" onclick="city_6()">View More</button>

        </div>

        <div class="item">
        <img src="img/jaffa.jpg">
            <h3><b>Netanya</b></h3>
            <p>Jaffa (also known as Yafo) is the ancient port city out of which Tel Aviv has now grown. In recent years, like much of South Tel Aviv, this area has been regenerated. The old narrow streets and courtyards are now another highly desirable part of Tel Aviv’s urban tapestry.
Jaffa’s flea market is a well-known attraction of the area. Here, the vendors sell a diverse range of interesting and unique products from Turkish carpets to original art. Meanwhile, the narrow passageways and ancient buildings in the Old City are worlds away from modern Tel Aviv.</p>
            <button id="city_7" onclick="city_7()">View More</button>

        </div>
        <div class="item">
        <img src="img/ashdod.jpg">
            <h3><b>Tel Aviv</b></h3>
            <p>Ashdod is the sixth-largest city and the largest port in Israel accounting for 60% of the country's imported goods. Ashdod is located in the Southern District of the country, on the Mediterranean coast where it is situated between Tel Aviv to the north and Ashkelon. The city is also an important regional industrial center.Modern Ashdod covers the territory of two ancient twin towns, one inland and one on the coast, which were for most of their history two separate entities, connected though by close ties with each other.</p>
            <button id="city_8" onclick="city_8()">View More</button>

        </div>
        <div class="item">
        <img src="img/nahariya.jpg">
            <h3><b>Tiberias</b></h3>
            <p>Nahariya is Israel’s northernmost coastal city, a last testament to the seaside settlements that reach up along the sunny Mediterranean shoreline. Being the end of the train-line and just a few minutes from Rosh HaNikra, with its famous white sandstone grottos, tourists often find themselves Nahariya, a vibrant, little city. With a lively nucleus, comprised of a wide boulevard, divided by a river and lined with shops, restaurants, bars and hotels, and the seafront bars and restaurants, Nahariya provides sun-lovers with an idyllic vacation spot.</p>
            <button id="city_9" onclick="city_9()">View More</button>
				</div>

						<form method="post" action="activities_page.php">
					    <input type="text" name="city" id="city" style="display:none"><br>
							<input type="submit" name="formsend_city" class="formsend_city" id="formsend_city" style="display:none">
						</form>

						<script type="text/javascript">
							function city_1(){
								document.getElementById('city').value = "Beer Sheva";
								document.getElementById('formsend_city').click();
							}
							function city_2(){
								document.getElementById('city').value = "Dead Sea";
								document.getElementById('formsend_city').click();
							}
							function city_3(){
								document.getElementById('city').value = "Eilat";
								document.getElementById('formsend_city').click();
							}
							function city_4(){
								document.getElementById('city').value = "Haifa";
								document.getElementById('formsend_city').click();
							}
							function city_5(){
								document.getElementById('city').value = "Jerusalem";
								document.getElementById('formsend_city').click();
							}
							function city_6(){
								document.getElementById('city').value = "Mitspe Ramon";
								document.getElementById('formsend_city').click();
							}
							function city_7(){
								document.getElementById('city').value = "Netanya";
								document.getElementById('formsend_city').click();
							}
							function city_8(){
								document.getElementById('city').value = "Tel Aviv";
								document.getElementById('formsend_city').click();
							}
							function city_9(){
								document.getElementById('city').value = "Tiberias";
								document.getElementById('formsend_city').click();
							}
						</script>
        </div>


</html>


<?php
	require_once 'footer.php';
	?>
