#Get-URL-link-
Get URL link using PHP 

This project developed to Extract URL (https://journals.sagepub.com/home/VRT) for the link ‘Submit Paper’ and print it.

##Installation/Prerequisite
To run the application, Apache 2.4.37and PHP is requied.

#Running the tests
It can be executed only in CLI.(Command Line Interface)

To Run 
```bash
<Path to the application folder>$ php app.php
```

#Development
To achieve the objective, the URL is parsed and source is stored in the local file, named as sourceFile.html

PHP DOM loadHTMLFile() method has been used to read the content from the local file.

Once the file reading is done, the content is stored in the DOM object.

Complete content is loop through using the 'li' tag, like getElementsByTagName('li').

On get the nodeValue as 'Submit Paper', its anchor tag 'a' iterated again to fetch the href attribute, which holds the URL value.

##Authors
Amit Sabal

