<?php

require_once __DIR__ . '/../solutions/php/level01-sequences/level01-easy/two-sum/Solution.php';

use Blind75\Solutions\PHP\Level01\Sequences\Level01\Easy\TwoSum\Solution;

function run_test() {
	// read inputs
	$inputs = trim(file_get_contents(__DIR__ . '/../test-cases/level01-sequences/level01-easy/two-sum/inputs.txt'));
	$inputs_lines = explode("\n", $inputs);

	// read outputs
	$outputs = trim(file_get_contents(__DIR__ . '/../test-cases/level01-sequences/level01-easy/two-sum/outputs.txt'));
	$outputs_lines = explode("\n", $outputs);

	// compare lengths and warn if different
	if (count($inputs_lines) != count($outputs_lines)) {
		echo "Test failed: number of inputs and outputs differs\n";
	}

	$tests_passed = 0;
	for ($i = 0; $i < count($inputs_lines); $i++) {
		$args = explode(",", $inputs_lines[$i]);
		$nums = explode(" ", $args[0]);
		$target = (integer)$args[1];

		$result = (new Solution())->two_sum($nums, $target);

		if (implode(" ", $result) === trim($outputs_lines[$i])) {
			$tests_passed++;
		} else {
			echo "Test failed: results differs at index $i\n";
			echo " Input: $inputs_lines[$i]\n";
			echo " Expected Output: $outputs_lines[$i]\n";
			echo " Result: " . implode(" ", $result) . "\n";
			echo "";
		}
	}
	echo "Tests passed: $tests_passed/" . count($inputs_lines) . "\n";
}

run_test();

