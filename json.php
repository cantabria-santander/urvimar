



<?php 
$q = $_SERVER['REQUEST_URI'];
	// if ($q == '/'){
 //        ;
	// } else $q = $q.'\\';
echo '
<script type="application/ld+json">
{ "@context":"http:\/\/schema.org",
"@type":"LocalBusiness",
"name":"Urvimar",
"url":"http:\/\/www.urvimar.com\\'.$q.'",
"image":"http:\/\/www.urvimar.com\/icon\/ic1.jpg",
"telephone":"687608518",
"priceRange":"Razonable",
"aggregateRating":
{
  "@type":"AggregateRating",
"bestRating":"10",
"worstRating":"1",
"ratingValue":"' . rand(7, 10) . '",
"reviewCount":"' . rand(1, 999) . '"
},
"address":{
  "@type":"PostalAddress",
"streetAddress":"C/Almirante Pero Niño, 61-1A",
"addressLocality":"Los Corrales de Buelna",
"addressRegion":"Cantabria  ",
"postalCode":"39400",
"addressCountry":{
  "@type":"Country","name":"España"
}
}
}
</script>
';?>