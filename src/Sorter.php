<?php

namespace MaestroSort;


class Sorter {
	
	public static function sort($list)
	{
		$swapped = true;
		
		while($swapped)
		{
			for($i = 0; $i < count($list) - 1; $i++)
			{
				if($list[$i] > $list[$i + 1])
				{
					$temp = $list[$i];
					$list[$i]= $list[$i + 1];
					$list[$i + 1] = temp;					
				}
			}
		}		
	}	
}

