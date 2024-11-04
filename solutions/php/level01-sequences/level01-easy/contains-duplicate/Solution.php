<?php

namespace Blind75\Solutions\PHP\Level01\Sequences\Level01\Easy\ContainsDuplicate;

class Solution {

	public function contains_duplicate($nums): bool {
		for ($i = 0; $i < count($nums); $i++) {
			for ($j = 0; $j < count($nums); $j++) {
				if ($i != $j && $nums[$i] == $nums[$j]) {
					return true;
				}
			}
		}
		return false;
	}
}
