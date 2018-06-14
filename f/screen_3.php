<ul class="tarif__screen3">
	<li class="screen__3__title green bold">Тариф "<?php echo $title; ?>"</li>
	<li class="screen__3__price_and_per_month">
		<ul>
			<li class="bold">Период оплаты — <?php echo $pay_period . " " . $pay_period_month; ?></li>
			<li class="bold"><?php echo $price_per_month; ?> &#8381;/мес</li>
		</ul>
	</li>
	<li class="screen__3__pay">
		<ul>
			<li>разовый платёж — <?php echo $price; ?> &#8381;</li>
			<li>со счёта спишется — <?php echo $price; ?> &#8381;</li>
		</ul>
	</li>
	<li class="screen__3__date">
		<ul>
			<li>вступит в силу — сегодня</li>
			<li>активно до — <?php echo $date; ?></li>
		</ul>
	</li>
	<li>
		<div id="done" class="pointer" onclick="alert('Выбрано!')">Выбрать</div>
	</li>
</ul>
