Cygnis Media PHP URL-Extracter (v.1.0)
==========================

The [Cygnis Media Platform](http://www.cygnismedia.com/) is
a set of Plugins that make your app more social and Energetic.

This repository contains the open source PHP code that allows you to
access Cygnis Media for your PHP app. Except as otherwise noted,
the Cygnis Media PHP SDK is licensed under the Apache Licence, Version 2.0
(http://www.apache.org/licenses/LICENSE-2.0.html).

Outputs
-------

The Output of this function is just the title, description and images links from the url provided in the function to call.


Usage
-----

The [examples] are a good place to start. The minimal you'll need to
have is:

    require 'url-extracter.php';

    //Url to be parsed
    $url		=	 "http://www.cygnismedia.com/";

    //Calling of the function	
    $responce	=	 file_get_contents_curl($url);

    //Print Responce
    echo '<pre>';
    print_r($responce);
    echo '</pre>';


[examples]: http://developer.cygnismedia.com/testing/alist411/demo.php
[Function]: http://developer.cygnismedia.com/testing/alist411/url-extracter.php


Tests
-----

In order to keep us nimble and allow us to bring you new functionality, without
compromising on stability, we have ensured full test coverage of the Functions.
We are including this in the open source repository to assure you of our
commitment to quality, but also with the hopes that you will contribute back to
help keep it stable. The easiest way to do so is to file bugs and include a
test case.



Report Issues/Bugs and Ask Questions
====================================
Email at hammad@cygnismedia.com

