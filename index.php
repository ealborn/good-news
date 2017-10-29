<?php
declare(strict_types=1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP-only file.


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
        <title>good news</title>
    </head>
    <body>
      <div class="container">
        <h1>Good News</h1>
        <h2>A purrrfect news feed. Meow!</h2>

          <?php
          require __DIR__.'/data.php';
          require __DIR__.'/functions.php';
          foreach ($newsitem as $item) {
            ?>
          <div class="newsitem">
            <div class="title" ><?php echo $item ['title'];?></div>
            <div class="content"><?php echo $item['content'];?></div>
            <div class="author"><p>Author:&nbsp;</p><?php echo $item['author']['name'] .' '. $item['date'];?></div>
            <div class="like"><img class="likeIcon"src="likeicon.png" alt="likeIcon"><?php echo $item['likecount'];?></div>
          </div>
        <?php }
          ?>
<p>Page designed and created by Emma Alborn 2017 with the help of Cat Ipsum and lolcat translator</p>
<a href="https://www.freepik.com/free-vector/in-love-cats-silhouettes_718092.htm">Icon designed by Freepik</a>
      </div>
    </body>
</html>
