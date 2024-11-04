<?php
require_once __DIR__ . '/../solutions/php/level01-sequences/level01-easy/sum-two-numbers/Solution.php';

use Blind75\Solutions\PHP\Level01\Sequences\Level01\Easy\SumTwoNumbers\Solution;

function run_test() {
	// read inputs
	$inputs = trim(file_get_contents(__DIR__ . '/../test-cases/level01-sequences/level01-easy/sum-two-numbers/inputs.txt'));
	$inputs_lines = explode("\n", $inputs);

	// read outputs
	$outputs = trim(file_get_contents(__DIR__ . '/../test-cases/level01-sequences/level01-easy/sum-two-numbers/outputs.txt'));
	$outputs_lines = explode("\n", $outputs);

	// compare lengths and warn if different
	if (count($inputs_lines) != count($outputs_lines)) {
		echo "Test failed: number of inputs and outputs differs\n";
	}

	$tests_passed = 0;
	for ($i = 0; $i < count($inputs_lines); $i++) {
		$args = explode(" ", $inputs_lines[$i]);
		$result = (new Solution())->sum_two_numbers((integer)$args[0], (integer)$args[1]);

		if ($result != (integer)$outputs_lines[$i]) {
			echo "Test failed: results differs at index $i\n";
			echo " Input: $inputs_lines[$i]\n";
			echo " Expected Output: $outputs_lines[$i]\n";
			echo " Result: $result\n";
		} else {
			$tests_passed++;
		}
	}
	echo "Tests passed: $tests_passed/" . count($inputs_lines) . "\n";

}

run_test();
