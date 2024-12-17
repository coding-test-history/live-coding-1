<?php
function countPairs(array $numbers, int $target):int {
    $tempArr = [];
    $result = 0;

    foreach ($numbers as $number) {
        $complement = $target - $number;

        if (isset($tempArr[$complement]) && $tempArr[$complement] > 0) {
            $result++;
            $tempArr[$complement]--;
        } else {
            if (!isset($tempArr[$number])) {
                $tempArr[$number] = 0;
            }
            $tempArr[$number]++;
        }
    }

    return $result;
}

echo countPairs([1, 3, 2, 2, 3, 4], 5) . "\n";
echo countPairs([1, 1, 1, 1], 2) . "\n";
echo countPairs([1, 2, 3, 4, 5], 7) . "\n";