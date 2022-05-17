<?php 
function blog_category_helper(){
	$caturl = curl_init();

curl_setopt_array($caturl, array(
  CURLOPT_URL => "http://padimi.com.ng/blog/wp-json/wp/v2/categories",
  // CURLOPT_URL => "http://thel8bloomers.com/wp-json/wp/v2/posts?_embed",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$category_response = curl_exec($caturl);

curl_close($caturl);
$category_response = json_decode($category_response, true);

}
?>