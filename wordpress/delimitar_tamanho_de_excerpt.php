 <?php
	$content_sobre = get_the_content();
	if ( strlen( $content_sobre ) > 90 ) { ?>
	    <p class="text text-variant"><i><?php echo mb_strimwidth( $content_sobre, 0, 240, '...' ); ?></i></p>
	<?php } else { ?>
	    <p><?php echo $content_sobre; ?></p>
	<?php } 
?>