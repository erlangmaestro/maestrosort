<?php

namespace MaestroSort;

/**
 * Contains useful static sorting methods.
 *
 * @package MaestroSort
 */
class Sorter {

    /**
     * Performs a bubble sort on the array.
     *
     * @param array $list   the array to be sorted
     * @return array        the sorted array
     */
	public static function sort($list)
	{
		$swapped = true;

		while($swapped)
		{
		    $swapped = false;
			for($i = 0; $i < count($list) - 1; $i++)
			{
				if($list[$i] > $list[$i + 1])
				{
					$temp = $list[$i];
					$list[$i]= $list[$i + 1];
					$list[$i + 1] = $temp;
					$swapped = true;
				}
			}
		}
		return $list;
	}	
}

