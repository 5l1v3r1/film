<!------------------------------------------------------------------------>
<!------------------------------------------------------------------------>
<!--------------- 24.01.2016 Furkan Kandemir | Kandemir.co --------------->
<!------------------------------------------------------------------------>
<!------------------------------------------------------------------------>
<meta charset="utf-8"/>
<?php function getir($baslangic, $son, $cekilmek_istenen) {
				@preg_match_all('/' . preg_quote($baslangic, '/') .
				'(.*?)'. preg_quote($son, '/').'/i', $cekilmek_istenen, $m);
				return @$m[1]; }

			  $id = "tt0816692"; $url = "http://www.omdbapi.com/?i=".$id."&apikey=734ec620&plot=short&r=json";
			  $url_sinemalar = "http://www.sinemalar.com/film/9845/interstellar";
			  $icerik = file_get_contents($url); $icerik_sinemalar = file_get_contents($url_sinemalar);
			  $film_adi = getir('"Title":"','"',$icerik);
			  $imdb_puani = getir('"imdbRating":"','"',$icerik);
			  $yapim_yili = getir('"Year":"','"',$icerik);
			  $yapim_ulke = getir('"Country":"','"',$icerik);
			  $yonetmen = getir('"Director":"','"',$icerik);
			  $senaryo = getir('"Writer":"','"',$icerik);
			  $oyuncular = getir('"Actors":"','"',$icerik);
			  $sure = getir('"Runtime":"','"',$icerik);
			  $afis = getir('<link rel="image_src" href="','"/>',$icerik_sinemalar); $fragman = getir('data-embedUrl="','"',$icerik_sinemalar);
			  $sablonlar[0] = '/Turkey/'; $yeniler[0] = 'Türkiye';
			  $sablonlar[1] = '/USA/'; $yeniler[1] = 'ABD';
			  $sablonlar[2] = '/China/'; $yeniler[2] = 'Çin';
			  $sablonlar[3] = '/Germany/'; $yeniler[3] = 'Almanya';
			  $sablonlar[4] = '/Russia/'; $yeniler[4] = 'Rusya';
			  $sablonlar[5] = '/Sweden/'; $yeniler[5] = 'İsveç';
			  $sablonlar[6] = '/Australia/'; $yeniler[6] = 'Avustralya';
			  $sablonlar[7] = '/France/'; $yeniler[7] = 'Fransa';
			  $sablonlar[8] = '/Ireland/'; $yeniler[8] = 'İrlanda';
			  $sablonlar[9] = '/Mexico/'; $yeniler[9] = 'Meksika';
			  $sablonlar[10] = '/Poland/'; $yeniler[10] = 'Polonya';
			  $sablonlar[11] = '/Switzerland/'; $yeniler[11] = 'İsviçre';
			  $sablonlar[12] = '/Austria/'; $yeniler[12] = 'Avusturya';
			  $sablonlar[13] = '/Canada/'; $yeniler[13] = 'Kanada';
			  $sablonlar[14] = '/Czech Republic/'; $yeniler[14] = 'Çek Cumhuriyeti';
			  $sablonlar[15] = '/Iceland/'; $yeniler[15] = 'İzlanda';
			  $sablonlar[16] = '/Italy/'; $yeniler[16] = 'İtalya';
			  $sablonlar[17] = '/Netherlands/'; $yeniler[17] = 'Hollanda';
			  $sablonlar[18] = '/Portugal/'; $yeniler[18] = 'Portekiz';
			  $sablonlar[19] = '/South Africa/'; $yeniler[19] = 'Güney Afrika';
			  $sablonlar[20] = '/Thailand/'; $yeniler[20] = 'Tayland';
			  $sablonlar[21] = '/Belgium/'; $yeniler[21] = 'Belçika';
			  $sablonlar[22] = '/Denmark/'; $yeniler[22] = 'Danimarka';
			  $sablonlar[23] = '/Greece/'; $yeniler[23] = 'Yunanistan';
			  $sablonlar[24] = '/India/'; $yeniler[24] = 'Hindistan';
			  $sablonlar[24] = '/Argentina/'; $yeniler[24] = 'Arjantin';
			  $sablonlar[25] = '/Japan/'; $yeniler[25] = 'Japonya';
			  $sablonlar[26] = '/New Zealand/'; $yeniler[26] = 'Yeni Zelanda';
			  $sablonlar[27] = '/Romania/'; $yeniler[27] = 'Romanya';
			  $sablonlar[28] = '/Spain/'; $yeniler[28] = 'İspanya';
			  $sablonlar[29] = '/UK/'; $yeniler[29] = 'İngiltere';
			  $sablonlar[30] = '/Finland/'; $yeniler[30] = 'Finlandiya';
			  $sablonlar[31] = '/Iran/'; $yeniler[31] = 'İran';
			  $sablonlar[32] = '/Malaysia/'; $yeniler[32] = 'Malezya';
			  $sablonlar[33] = '/Pakistan/'; $yeniler[33] = 'Arjantin';
			  $sablonlar[34] = '/Brazil/'; $yeniler[34] = 'Brezilya';
			  $sablonlar[35] = '/Bulgaria/'; $yeniler[35] = 'Bulgaristan';
			  $sablonlar[36] = '/Philippines/'; $yeniler[36] = 'Filipinler';
			  $min[0] = '/min/'; $dk[0] = 'dakika';
			  $gereksiz = array(' (based on an original story by)',' (story)',' (screenplay)',' (characters: Sherlock Holmes,',' Dr. Watson)',' (novel)',' (book)',' (short story ',' (comic book)',' (Marvel comic book)',' (screen story)',' (based on the Marvel comic book by)');
			  $bos = array('');

			  echo "Film Adı: ".strtoupper($film_adi[0])."<br/>";
			  echo "Yapım: ".$yapim_yili[0]." - ".preg_replace($sablonlar, $yeniler, $yapim_ulke[0])."<br/>";
			  echo "Süre: ".preg_replace($min, $dk, $sure[0])."<br/>";
			  echo "Yönetmen: ".$yonetmen[0]."<br/>";
			  echo "Senaryo: ".str_replace($gereksiz, $bos, $senaryo[0])."<br/>";
			  echo "IMDb: ".$imdb_puani[0]."<br/>";
			  echo '<img src="'.$afis[0].'"><br/>'; ?>
		      <iframe width="600" height="400" src="<?php echo $fragman[0]; ?>" frameborder="0" allowfullscreen></iframe>
<!------------------------------------------------------------------------>
<!------------------------------------------------------------------------>
<!--------------- 24.01.2016 Furkan Kandemir | Kandemir.co --------------->
<!------------------------------------------------------------------------>
<!------------------------------------------------------------------------>
