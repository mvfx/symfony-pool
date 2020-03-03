<?php

function array2hash_sorted($data)
{
	$result = [];

	if (count($data))
	{
		usort($data, function ($item1, $item2)
		{
	  		if ($item1[1] == $item2[1])
	  		{
	  			return 0;
	  		}
	  		
	  		return $item1[1] > $item2[1] ? 1 : -1;
	  	});

		foreach($data as $key => $value)
		{
			if (isset($value[0]) && isset($value[1]))
			{
				$result[$value[0]] = $value[1];
			}
		}
  	}

  	return ($result);
}
