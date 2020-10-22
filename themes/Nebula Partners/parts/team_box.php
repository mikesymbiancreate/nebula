<section id="team_box" class="team-box full_container <?php the_sub_field('margins_options');?> <?php the_sub_field('padding_options');?> <?php the_sub_field('unique_class');?>">



	<div class="container">
 
		<div class="department_sort">
			<!-- use class="no_dep" for MD -->
			<a class="dep_btn" id="prof_dep_btn"><span>Professional Services</span></a>
			<a class="dep_btn" id="comm_dep_btn"><span>Commerce & Industry</span></a>
			<a class="dep_btn" id="alt_dep_btn"><span>Alternative Investments</span></a>
			<a class="dep_btn" id="priv_dep_btn"><span>Private Client</span></a>
			<a class="dep_btn close_btn" id="all_dep_btn"><span></span></a>
		</div>
	</div>

	<div class="team-box-container">

		<?php if( have_rows('team_block') ): ?>
			<?php while( have_rows('team_block') ): the_row(); 
			$name = get_sub_field('name');
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			$email = get_sub_field('email');
			$tel = get_sub_field('tel');
			$tel_ring = get_sub_field('tel_ring');
			$image = get_sub_field('image');
			$teamid = get_sub_field('team_id');
			$teamclass = get_sub_field('team_class');
			?>

		<article class="team-block all_dep <?php echo $teamclass;?>" id="<?php echo $teamid;?>">
			<div class="featured">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>" />
				<span><?php echo $title;?></span>
				<div class="layer"></div>
			</div>
			<div class="content">
				<div class="sections details">
					<h3><?php echo $name;?></h3>
					<div class="description"><?php echo $description;?></div>
					
					<div class="expand">
						<i class="infocon fa fa-x2 fa-plus"></i>
						<i class="infocon fa fa-x2 fa-minus hide"></i>
					</div>
				</div>
				
				<div class="sections mail">
					<h4>
						<a href="mailto:<?php echo $email;?>">
							<?php echo $email;?>
						</a>
					</h4>
					<ul>
                		<li>
                			<a href="mailto:<?php echo $email;?>">
								<i class="fa fa-x2 fa-envelope"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="sections phone">
					<h4>
						<a href="tel:<?php echo $tel_ring;?>">
							<?php echo $tel;?>
						</a>
					</h4>
					<ul>
                		<li>
                			<a href="tel:<?php echo $tel_ring;?>">
								<i class="fa fa-x2 fa-phone"></i>
							</a>
						</li>
					</ul>
				</div>          
			</div>
		</article>

	<?php endwhile; ?><?php endif; ?>
	</div>

	<div class="wallpaper border_bottom" style="<?php if ( get_sub_field('background_image') ):?>background: url('<?php the_sub_field('background_image');?>');<?php endif ;?>; background-color: #1d2362;">
		<div class="border_top_masque"></div>

	<?php if ( get_sub_field('overlay') ) : ?>
		<div class="overlay"></div>
	<?php endif; ?>
	</div>


</section>