<?php theme_include('header'); ?>

		<?php if(has_search_results()): ?>
			<ul class="items">
				<?php $i = 0; while(search_results()): $i++; ?>
				<li style="background: hsl(215,28%,<?php echo round((($i / posts_per_page()) * 20) + 20); ?>%);">
					<article class="wrap">
						<h2>
							<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
						</h2>
					</article>
				</li>
				<?php endwhile; ?>
			</ul>
	
		<section class="pagination">
			<?php if(has_pagination()) : ?>
			    <nav class="pagination">
					<?php echo search_prev(); ?>
					<?php echo search_next(); ?>
			    </nav>
			<?php endif; ?>
		</section>
		
		<?php else: ?>
			<p>No results for &ldquo;<?php echo search_term(); ?>&rdquo;</p>
		<?php endif; ?>

<?php theme_include('footer'); ?>