<?php
include 'admin/islem/baglan.php';
## Xml olarak göstermek için girilen komut
header("Content-Type: text/xml");
## Sitemap Bilgileri
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '
<urlset
  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xsi:schemaLocation="
		http://www.sitemaps.org/schemas/sitemap/0.9
		http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
';

## Site Menüleri
echo '
	<url>
       <loc>https://film.snrtr.com/</loc>
       <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
       <changefreq>daily</changefreq>
       <priority>0.5000</priority>
	</url>
';

## Makaleleri Listele
$yazisor=$db->prepare("SELECT * FROM film_icerik ORDER BY film_id DESC");
$yazisor->execute(array(
  ));
	while($yazicek=$yazisor->fetch(PDO::FETCH_ASSOC)){

echo'
	<url>
	   <loc>https://film.snrtr.com/'.$yazicek["film_seo_link"]."-".$yazicek["film_id"].'</loc>
	   <lastmod>'.date("Y").'-'.date("m").'-'.date("d").'T'.date("H:i:s").'+00:00</lastmod>
	   <changefreq>daily</changefreq>
	   <priority>0.5000</priority>
	</url>
';
}

echo '</urlset>';
?>
