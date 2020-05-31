<form role="search" method="get" class="search__form" action="<?php echo esc_url( home_url('/') ); ?>">
	<label class="search__label">
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'Example: Search for a webpage', 'urban-square' ) ?></span>
		<input type="search" class="search__field" placeholder="<?php echo esc_attr_x( 'Search ...', 'placeholder', 'urban-square' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'Example: Search for a webpage', 'urban-square' ); ?>" />
	</label><button type="submit" class="search__submit fas fa-arrow-right supporting-bgcolor reverse-supporting-color" title="<?php esc_attr_e( 'Search', 'urban-square' ); ?>"></button>
</form>
