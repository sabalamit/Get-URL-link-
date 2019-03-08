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
    $url = "sourceFile.html";
    
    //Initializing DOM object
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
	
	//Reading the content of the url
    $doc->loadHTMLFile($url);

    //Saving the page content to dom object
    $doc->saveHTML();

    //Looping the content by tag name 'li'
    foreach( $doc->getElementsByTagName('li') as $item){
        
        //Fetching the node value name
        $value =$item->nodeValue;
       
        //If condition chech for the nodeValue to be Submit Paper
        if (trim($value) === "Submit Paper") { 

            //iterating loop through entire page content by using html tag 'a'
            foreach( $item->getElementsByTagName('a') as $link){

                //Fetching the value of the anchor tag , by using the its attribute 'href'
                $href =  $link->getAttribute('href');

                echo "\n Key => ".$value."  Link => ".$href;               
            }
        }
    }    
}else{
    echo "Access Denied";
}
?>