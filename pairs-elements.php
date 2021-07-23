<?php
$arr_elem = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];
$qty_elem = 0;

for ($i = 0; $i < count($arr_elem); $i++) {
    if ($i > 0 && $arr_elem[$i - 1] == $arr_elem[$i]) {
        $qty_elem++;
    }
}

echo 'Количество пар: <b>' . $qty_elem . '</b>';
