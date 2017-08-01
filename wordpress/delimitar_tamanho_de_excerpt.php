 <?php
	$content = get_the_content();
	if ( strlen( $content ) > 90 ) { ?>
	    <p class="text text-variant"><i><?php echo mb_strimwidth( $content, 0, 240, '...' ); ?></i></p>
	<?php } else { ?>
	    <p><?php echo $content; ?></p>
	<?php } 
?>