<?php

// arrange ascending order
function cmpCresc($a, $b) {
    if ($a['distance'] == $b['distance']) {
        return 0;
    }
    return ($a['distance'] < $b['distance']) ? -1 : 1;
}

// arrange descending order
function cmpDesc($a, $b) {
    if ($a['distance'] == $b['distance']) {
        return 0;
    }
    return ($a['distance'] > $b['distance']) ? -1 : 1;
}

?>
