<section class="post__meta">
<span class="post__author author vcard"><i class="post__header-icon fas fa-user"></i><?php the_author_posts_link(); ?></span>
<span class="post__meta-sep"> | </span>

<?php if ( get_the_modified_time( get_option( 'date_format' ) ) != get_the_time( get_option( 'date_format' ) ) ) { ?>
	<span class="post__date"><?php the_time( get_option( 'date_format' ) ); ?></span>
<?php } else { ?>
	<span class="post__date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="post__meta-sep"> | </span><span class="post__date--updated"><?php esc_html_e( 'Updated: ', 'urban-square' ) ?><?php the_modified_time( get_option ( 'date_format') ); ?></span>
<?php } ?>
</section>
