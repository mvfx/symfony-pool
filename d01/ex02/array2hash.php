<?php 

function array2hash($data)
{
	$result = [];

	foreach ($data as $key => $values)
	{
	    if (isset($values[0]) && isset($values[1]))
	    {
	    	$result[$values[1]] = $values[0];
	    }
  	}

  	return $result;
}