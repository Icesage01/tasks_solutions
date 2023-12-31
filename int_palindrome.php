<?php

class isPalindrome {

	// Сверка чисел с двух концов.
	public static function method_one(int $num) {
		$length = strlen($num);
		if ($length <= 2) {
			return true;
		}

		$stop_iter_idx = (int) ($length / 2);
		$nums = array_map('intval', str_split($num)); 
		foreach ($nums as $idx => $number) {
			$last_number = array_pop($nums);
			if ($number !== $last_number) { 
				return false;
			}
			// Если достигли середины, обрываем цикл.
			elseif ($idx == $stop_iter_idx) {
				break;
			}
		}

		return true;
	}


	// Высчитываем по формуле
	public static function method_two(int $num) {
		if (strlen($num) <= 2) {
			return true;
		}

		$sum = 0;
		$result_num = $num;
		while ($result_num) {
			$remainder = $result_num % 10;
			$sum = $sum * 10 + $remainder;
			$result_num = floor($result_num / 10);
		}

		$result = ($sum == $num) ? TRUE : FALSE;

		return $result;
	}
}

?>
