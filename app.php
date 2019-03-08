<?php 
/**
 * File Name : app.php
 * Author : Amit Sabal
 * Created on : 8-March-2019
 * Motive :To parse given URL and extract URL for the link 'Submit Paper'
 */

// Determine if PHP is being run from the CLI
if(php_sapi_name() === 'cli'){
    
	//URL of the page to be parsed
	$url = "https://journals.sagepub.com/home/VRT";
    
   /*
    //Initializing DOM object
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
	
	//Reading the content of the url
    $doc->loadHTMLFile($url);
	
	//iterating loop through entire page content by using html tag 'a'
    foreach( $doc->getElementsByTagName('a') as $item){
		
		//Fetching the value of the anchor tag , by using the its attribute 'href'
        $href =  $item->getAttribute('href');
        var_dump($href);
    }
    */
   

    /**
     * Getting web page content using cURL
     */
    $c = curl_init($url);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, TRUE);
   
    $html = curl_exec($c);
    //echo $html;
    $outfile = "url2.txt";
    file_put_contents($outfile, $html);
    
    if (curl_error($c))
        die(curl_error($c));

    // Get the status code
    $status = curl_getinfo($c, CURLINFO_HTTP_CODE);
    
    curl_close($c);
}
?>