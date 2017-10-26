<?php
declare(strict_types=1);
// This is the file where you can keep all your functions.

//sorteringsfunktion här
require __DIR__.'/data.php';


//kopia
// function sortByDate($a, $b) {
// return (int) $a ['date'] > (int) $b ['date'];
// }
// usorts($posts, 'sortbyDate');
// foreach ($posts as $post) {
// echo $post ['date'].'<br>';
// }


//min
function sortByDate(array $newsitem, array $sort): bool {
return $newsitem ['date'] < $sort ['date'];
}
usort($newsitem, 'sortbyDate');

//
// foreach ($newsitem as $item) {
// return $item ['date'].'<br>';
