<?php

/* For more details, read the project readme file. */

function latest_disqus_comments() {

	/* "example-com" should be the disqus site shortname */

	$url = 'https://example-com.disqus.com/latest.rss';

	$dcurl = curl_init(); 
	curl_setopt( $dcurl, CURLOPT_URL, $url ); 
	curl_setopt( $dcurl, CURLOPT_RETURNTRANSFER, 1 ); 
	$response = curl_exec( $dcurl ); 
	curl_close( $dcurl );

	$xml = new SimpleXMLElement( $response );

	foreach( $xml->channel->item as $item ){

		/* Get every property under each item */
		/* From the given xml content from "latest.rss" file, we have title, link, description, creator/author, pubDate/comment-published-date */

		$msg = $item->description;

		/* limit the number of letters displayed for each comment, change the number 183 */
		$comment_length = 183;
		if( strlen( $msg) > $comment_length ) {
			$msg = substr( $msg, 0, $comment_length ) . '...';
		}

		/* get those "<dc:creator>Aikya Halder</dc:creator>" namespace parameters */
		$dc = $item->children( 'dc', TRUE );

		/* display content */
		echo $item->title; // title of the post for which the comment was posted.
		echo $item->description; // actual comment, which we reduced in length, finally outputting through $msg variable.
		echo $item->link; // comment link.
		echo $dc->creator; // comment author name.
		echo $item->pubDate; // date on which the comment is published.
	}
}
?>