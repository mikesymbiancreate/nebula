<section class="video_box">

	<div class="video_wrapper">
		<div class="video_container">
			
			<iframe src="<?php the_sub_field('embed_code');?>?<?php the_sub_field('autoplay');?>&<?php the_sub_field('captions');?>&<?php the_sub_field('colour');?>&<?php the_sub_field('controls');?>&<?php the_sub_field('disable_keyboard');?>&<?php the_sub_field('enablejsapi');?>&<?php if( get_sub_field('start') ): ?><?php the_sub_field('start');?>&<?php endif;?><?php if( get_sub_field('end') ): ?><?php the_sub_field('end');?>&<?php endif;?><?php the_sub_field('fullscreen');?>&<?php the_sub_field('annotations');?>&<?php the_sub_field('loop');?>&<?php the_sub_field('modestbranding');?>&<?php the_sub_field('inline');?>&<?php the_sub_field('showinfo');?>" allowfullscreen></iframe>
		</div>
	</div> 

</section>
