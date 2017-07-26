<?php
// Colocar vídeo no lugar de imagem destacada em posts de blog, por exemplo.
// Cria uma categoria Vídeo
// Cria um custom field pra receber a url do vídeo

// no HEADER.php
// Usando Twitter card ?>
<!-- TWITTER CARD -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@jonathan_slima">
<meta name="twitter:creator" content="@jonathan_slima">
<meta name="twitter:title" content="<?php wp_title( '|', true, 'right' ); ?>">

<?php if(is_single()){ ?>
	<?php if ( have_posts() ) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<meta name="twitter:description" content="<?php bloginfo('description'); ?>">
			<!-- Se for categoria videos -->
			<?php if (in_category('videos' )): ?>
				<?php $img_post = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<meta name="twitter:image" content="<?php echo $img_post; ?>">
			<?php else: ?>
				<!-- Senão vai nesse link e pega a imagem correspondente a esse vídeo do youtube -->
				<meta name="twitter:image" content="https://img.youtube.com/vi/<?php the_field('url_youtube') ?>/maxresdefault.jpg">
			<?php endif ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>

<!-- END TWITTER CARD -->

<!-- Chamando no código -->
<div class="post-thumbnail">
	<?php if (in_category('videos')): ?>
		<iframe class="video-top" src="https://www.youtube.com/embed/<?php the_field('url_youtube') ?>" frameborder="0" allowfullscreen></iframe>
	<?php else: ?>
		<?php if (is_single()): ?>
			<?php the_post_thumbnail('large'); ?>
		<?php else: ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('large'); ?>
			</a>
		<?php endif ?>
	<?php endif ?>
</div>

