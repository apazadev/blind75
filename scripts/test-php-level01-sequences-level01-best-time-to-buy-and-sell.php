<?php

require_once __DIR__ . '/../solutions/php/level01-sequences/level01-easy/best-time-to-buy-and-sell/Solution.php';

use Blind75\Solutions\PHP\Level01\Sequences\Level01\Easy\BestTimeToBuyAndSell\Solution;

function run_test() {
	// read inputs
	$inputs = trim(file_get_contents(__DIR__ . '/../test-cases/level01-sequences/level01-easy/best-time-to-buy-and-sell/inputs.txt'));
	$inputs_lines = explode("\n", $inputs);

	// read outputs
	$outputs = trim(file_get_contents(__DIR__ . '/../test-cases/level01-sequences/level01-easy/best-time-to-buy-and-sell/outputs.txt'));
	$outputs_lines = explode("\n", $outputs);

	// compare lengths and warn if different
	if (count($inputs_lines) != count($outputs_lines)) {
		echo "Test failed: number of inputs and outputs differs\n";
	}

	$tests_passed = 0;
	for ($i = 0; $i < count($inputs_lines); $i++) {
		$prices = explode(" ", $inputs_lines[$i]);

		$result = (new Solution())->compute_profit($prices);

		if ($result === (integer)trim($outputs_lines[$i])) {
			$tests_passed++;
		} else {
			echo "Test failed: results differs at index $i\n";
			echo " Input: $inputs_lines[$i]\n";
			echo " Expected Output: $outputs_lines[$i]\n";
			echo " Result: " . print_r($result, true) . "\n";
			echo "";
		}
	}
	echo "Tests passed: $tests_passed/" . count($inputs_lines) . "\n";
}

run_test();

