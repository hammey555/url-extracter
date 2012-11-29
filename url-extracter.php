<?php
/**
 * Copyright 2012 Cygnis Media, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */
 
function file_get_contents_curl($url)
{
			// Calling Curl to get Data from Web
			
			$ch = curl_init();
		
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		
			$html = curl_exec($ch);
			curl_close($ch);

			//parsing begins here:
			$doc   = new DOMDocument();
			@$doc->loadHTML($html);
			$nodes = $doc->getElementsByTagName('title');
			
			//get and display what you need:
			$title = $nodes->item(0)->nodeValue;
			
			$metas = $doc->getElementsByTagName('meta');
			
			for ($i = 0; $i < $metas->length; $i++)
			{
				$meta = $metas->item($i);
				if($meta->getAttribute('name') == 'description')
					$description = $meta->getAttribute('content');							
			}			
			
			/// Get Images Links on url
			$images = $doc->getElementsByTagName('img');
			$links  = $doc->getElementsByTagName('link');
			
			$mainImageLink	=	'';
			
			foreach ($links as $link)
			{	
				$imgLink	=	$link->getAttribute('rel');
				if($imgLink	==	'image_src')
				{
					$mainImageLink	=	$link->getAttribute('href');								
				}  
			}			
			
			$otherImageLink	=	array();
			$i				=	0;
			
			foreach ($images as $image) {
			  $otherImageLink[$i]	=	$image->getAttribute('src');
			  $i++;
			}
	
	//Return responce as an array
	$urlExtracter	=	array('Title' => $title, 'Description' => $description, 'mainImageLink' => $mainImageLink, 'otherImageLink' => $otherImageLink);
	
	return $urlExtracter;								
}
?>