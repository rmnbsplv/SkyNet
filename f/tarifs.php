<?php

class Tarifs
{
	public $tarifs;
	
	function __construct()
	{
		global $tarifs;
		$this->tarifs = $tarifs;
	}

	function TarifsGroups__intervalPrice($intervalPrice)
	{
		$prices = array();
		foreach ($intervalPrice as $tarif)
		{
			$price = $tarif["price"] / $tarif["pay_period"];
			array_push($prices, $price);
		}
		
		return $prices;
	}

	function TarifsGroups()
	{
		$tarifs = $this->tarifs;

		foreach ($tarifs as $tarif_group)
		{
			$intervalPrice = $tarif_group["tarifs"];
			$minPrice = min($this->TarifsGroups__intervalPrice($intervalPrice));
			$maxPrice = max($this->TarifsGroups__intervalPrice($intervalPrice));

			if (!empty($tarif_group["free_options"]))
			{
				$free_options = $tarif_group["free_options"];
			}
			
			require('screen_1.php');
		}

	}

	function TarifSorter($key) {
	    return function ($a, $b) use ($key) {
	        return strnatcmp($a[$key], $b[$key]);
	    };
	}


	function tarifsMonth($pay_period)
	{
		if ($pay_period == "1")
		{
			return " месяц";
		}
		elseif ($pay_period == "3")
		{
			return " месяца";
		}
		else
		{
			return " месяцев";
		}
	}

	function TarifsPayDay($title)
	{
		$tarifs = $this->tarifs;
		
		
	}


	function TarifsSubGroups($tarifs_group)
	{
		$tarifs = $this->tarifs;
		
		foreach ($tarifs as $tarif_group)
		{
			if ($tarif_group["title"] == $tarifs_group)
			{
				// return $tarif_group;
				//foreach ( $tarif_group as $tarif_sub_groups)
				//{
				$tarif_groups = $tarif_group["tarifs"];
				
				usort($tarif_groups, $this->TarifSorter('ID'));
				
				$first_price = $tarif_groups[0]["price"];
				
				foreach ($tarif_groups as $group)
				{
					$title = $tarifs_group;
					$pay_period = $group["pay_period"];
					$pay_period_month = $this->tarifsMonth($pay_period);
					$price = $group["price"];
					$price_per_month = $price / $pay_period;
					$new_payday = $group["new_payday"];
					
					if ( $pay_period_month != $first_price) {
						$sale = $first_price*$pay_period-$price;
					}
					
					require('screen_2.php');
				}
				

			}
/*
			if ($tarif_group["title"] == $tarifs_group)
			{
				$title = $tarifs_group;
				$pay_period = $tarif_group["pay_period"];
				$price = $tarif_group["price"];
				$price_per_month = $price / $pay_period;
				
				require('screen_2.php');
			}
*/
		}
	}
}

?>