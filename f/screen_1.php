<ul class="tarif">
	<li class="tarif__title bold green">
		<span>Тариф "<?php echo $tarif_group['title']; ?>"</span>
	</li>
	<li class="tarif__options pointer" tarif_group="<?php echo $tarif_group['title']; ?>">
		<ul>
			<li class="tarif__speed bold">
				<span><?php echo $tarif_group['speed']; ?> Мбит/с</span>
			</li>
			<li class="tarif__price bold"><?php echo $minPrice; ?> - <?php echo $maxPrice; ?> &#8381;/мес</li>
			<?php
				if (!empty($free_options))
				{
					echo '<li class="f_free_options"><ul>';
					foreach ($free_options as $free_option)
					{
					echo "<li>$free_option</li>";
					}
					echo '</ul></li>';
				}
			?>
		</ul>
		<i class="arrow"></i>
	</li>
	<li class="tarif__link">
		<a href="<?php echo $tarif_group['link'] ?>">узнать подробнее на сайте www.sknt.ru</a>
	</li>
</ul>
