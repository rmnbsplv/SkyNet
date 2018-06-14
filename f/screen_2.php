<ul class="tarif__screen2">
	<li class="tarif__pay_period green bold"><?php echo $pay_period, $pay_period_month; ?></li>

	<li class="tarifs__screen2 pointer" onclick="tarif_screen2(<?php echo "'$pay_period', '$pay_period_month', '$title', '$price_per_month', '$price', '$new_payday'"; ?>)">
		<ul>
			<li class="tarif__price_per_month bold"><?php echo $price_per_month; ?> &#8381;/мес</li>
			<li class="tarif__pay">разовый платёж — <?php echo $price; ?> &#8381;</li>
			<?php
				if (!empty($sale))
				{
					echo "<li class='tarif__sale'>скидка — $sale &#8381;</li>";
				}
			?>
		</ul>
		<i class="arrow"></i>
	</li>
</ul>
