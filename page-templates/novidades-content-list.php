<?php
//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
	'posts_per_page' => 12,
	'paged' => $paged,
);

$the_query = new WP_Query( $args );

if($the_query->have_posts())
{
	while($the_query->have_posts())
	{
		$the_query->the_post();
		$thumbnail = get_the_post_thumbnail();
		$title = get_the_title();
		$time = get_the_time('F j, Y');
		$excerpt = get_the_excerpt();
		
		
		echo ""
		. "<div class='item-container'>"
			. "<div class='item'>"
				. "$thumbnail"
				. "<div class='item-detail'>"
					. "<h3>$title</h3>"
					. "<p>$time</p>"
				. "</div>"
				. "<div class='item-excerpt'>"
					. "<p>$excerpt</p>"
				. "</div>"
			. "</div>"
		. "</div>";
	}
}

$big = 9999999; // need an unlikely integer

echo "<div class='item-container pag-container'>";
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'prev_text' => '<',
	'next_text' => '>',
	'total' => $the_query->max_num_pages
));
echo "</div>";
