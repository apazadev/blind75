# Problem Statement

Given an array of integers `nums` and an integer `target`, return two distinct indices `i` and `j` such that the sum of `nums[i]` and `nums[j]` is equal to the target.

You can assume that each input will have exactly one solution, and you may not use the same element twice.

## Examples

### Example 1:
* Input: nums = [3, 2, 4], target = 6
* Expected Output: [1, 2]
* Justification: nums[1] + nums[2] gives 2 + 4 which equals 6.

### Example 2:
* Input: nums = [-1, -2, -3, -4, -5], target = -8
* Expected Output: [2, 4]
* Justification: nums[2] + nums[4] yields -3 + (-5) which equals -8.

### Example 3:
* Input: nums = [10, 15, 21, 25, 30], target = 45
* Expected Output: [1, 4]
* Justification: nums[1] + nums[4] gives 15 + 30 which equals 45.

## Constraints:

* 2 <= nums.length <= 10^4
* -10^9 <= nums[i] <= 10^9
* -10^9 <= target <= 10^9
* Only one valid answer exists.
