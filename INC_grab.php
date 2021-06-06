<?php 

	// Parse			

// Strip tags by markups
$google_txt = preg_replace ('/<[^>]*>/', ' ', $google_resp);

// Set start from text block
$google_resp_pont = str_replace("span","<@>",strtolower($google_txt));

// Populate array from blocks
$item =  explode("<@>", $google_resp_pont);


// Parse array and extract phone numbers

	$ddd=$query_ddd;
	$padrao = "/\\(".$ddd."[^a-zA-Z.|]*/";

foreach ($item as $line) {

	// Search for area number 
	if (stripos($line,$ddd))  {
		
		// Extract extract phone numbers 
		preg_match_all($padrao,$line,$CleanTel);
	}
		
}

echo "<pre>";
print_r($CleanTel)  . "<hr>";
echo "</pre>";
exit;

?>	