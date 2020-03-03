<?php 

function capital_city_from($state)
{
	$states = [
		'Oregon' => 'OR',
		'Alabama' => 'AL',
		'New Jersey' => 'NJ',
		'Colorado' => 'CO',
	];
	
	$capitals = [
		'OR' => 'Salem',
		'AL' => 'Montgomery',
		'NJ' => 'trenton',
		'KS' => 'Topeka',
	];

	$result = 'Unknown';
	
	if (isset($states[$state]))
	{
		$state = $states[$state];
		
		if (isset($capitals[$state]))
		{
			$result = $capitals[$state];
		}
	}

	return $result . "\n";
}
