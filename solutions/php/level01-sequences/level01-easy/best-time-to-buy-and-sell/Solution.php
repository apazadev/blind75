<?php

namespace Blind75\Solutions\PHP\Level01\Sequences\Level01\Easy\BestTimeToBuyAndSell;

class Solution {

	/**
	 * Returns the maximum profit that can be made.
	 * @param $prices
	 * @return int
	 */
	public function compute_profit($prices): int {
		$min_price = PHP_INT_MAX;
		$min_index = -1;

		foreach ($prices as $pindex => $price) {
			if ($price < $min_price && $price > 0) {
				$min_price = $price;
				$min_index = $pindex;
			}
		}

		// we have the minimum price here, and the index
		$greatest_price = 0;
		for ($i = $min_index + 1; $i < count($prices); $i++) {
			if ($prices[$i] > $greatest_price) {
				$greatest_price = (integer)$prices[$i];
			}
		}

		// we have the greatest price here
		if ($greatest_price > $min_price) {
			// we have profits
			return $greatest_price - $min_price;
		}
		// other cases, negative profit
		return 0;
	}

	// 3 2 6 5 0 3
	// the minimum different from zero: 2
	// following values, the greatest: 6
	// 6-2=4

	// 8 6 5 2 1
	// 1
	// following values, the greatest: it doesn't exist
	// 0

	// 1 2
	// 1
	// following values, the greatest: 2
	// 2-1=1

	// 2 4 2 10
	// 2
	// following values, the greatest: 10
	// 10-2=8

	// 1 5 2 12
	// 1
	// following values, the greatest: 12
	// 12-1=11

	// 12 4 3 1 2
	// 1
	// following values, the greatest: 2
	// 2-1=1
}
