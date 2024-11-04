<?php

namespace Blind75\Solutions\PHP\Level01\Sequences\Level01\Easy\TwoSum;

class Solution {

	public function two_sum($nums, $target): array {
		for ($i = 0; $i < count($nums); $i++) {
			for ($j = 0; $j < count($nums); $j++) {
				if ($i != $j && $nums[$i] + $nums[$j] === $target) {
					return [$i, $j];
				}
			}
		}
		return [];
	}
}
