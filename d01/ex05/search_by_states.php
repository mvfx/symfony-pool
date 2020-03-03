<?php 

function search_by_states($str)
{
	$array = explode(',', $str);

	foreach ($array as $key => $value)
	{
		$array[$key] = trim($value);
	}

	$states = [
		'Oregon' => 'OR',
		'Alabama' => 'AL',
		'New Jersey' => 'NJ',
		'Colorado' => 'CO'
  	];

  	$capitals = [
		'OR' => 'Salem',
		'AL' => 'Montgomery',
		'NJ' => 'trenton',
		'KS' => 'Topeka'
	];

	foreach ($array as $key => $value)
	{
		$find = false;
		if (isset($states[$value]) && isset($capitals[$states[$value]]))
		{
			echo $capitals[$states[$value]]." is the capital of $value.\n";
		}
		else
		{
			foreach ($capitals as $capital => $val)
			{
				if ($value == $val)
				{
					$is_capital = $capital;

					foreach ($states as $state => $v)
					{
						if ($is_capital == $v)
						{
							$is_capital = $state;
			  				$find = true;
			  				break;
			  			}
		  			}
		  			break;
				}
				else
				{
		  			$is_capital = false;
		  		}
	  		}

	  		if ($find)
	  		{
	  			echo $value." is the capital of ".$is_capital.".\n";
	  		}
	  		else
	  		{
	  			echo $value." is neither a capital nor a state.\n";
			}
		}
  	}
}

