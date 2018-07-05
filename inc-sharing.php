<!-- begin standard share bar -->
<div class="sharing">
	<span>Share this:</span>
	<a href="https://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&amp;url=<?php echo urlencode(the_permalink()); ?>" title="Share on Twitter" rel="nofollow" target="_blank" class="twitter"><i class="icon-twitter-bird" aria-hidden="true"></i></a>
	<a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(the_permalink()); ?>"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank" alt="Share on Facebook" class="fb"><i class="icon-facebook" aria-hidden="true"></i></a>
	<a href="https://m.google.com/app/plus/x/?v=compose&content=<?php the_title(); ?> - <?php the_permalink(); ?>" onclick="window.open('https://m.google.com/app/plus/x/?v=compose&content=<?php the_title(); ?> - <?php the_permalink(); ?>','gplusshare','width=750,height=500,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;" class="gplus"><i class="icon-gplus" aria-hidden="true"></i></a>
	<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" rel="nofollow" target="_blank" class="linkedin"><i class="icon-linkedin" aria-hidden="true"></i></a>
	<a href="mailto:type email address here?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>"><i class="icon-mail" aria-hidden="true"></i></a>
</div><!-- #standard share bar -->