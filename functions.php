<?php
declare(strict_types=1);

//fetches data from the file data.php
require __DIR__.'/data.php';

//the function that sorts each entry by date
function sortByDate(array $newsitem, array $sort): bool {
return $newsitem ['date'] < $sort ['date'];
}
usort($newsitem, 'sortbyDate');
