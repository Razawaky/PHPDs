<?php
$day = 10;

if ($day < 15) {
    echo "$day pertecnce a 1ª quinzena";
} elseif ($day === 15) {
    echo "$day é meio do mes";
} else {
    echo "$day pertence a 2ª quinzena";
}
?>