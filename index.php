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
        <title>good news</title>
    </head>
    <body>
      <div class="container">
        <h1>Good News</h1>

          <?php
          require __DIR__.'/data.php';
          require __DIR__.'/functions.php';
          foreach ($newsitem as $item) {
            ?>
          <div class="newsitem">
            <div class="title" id="titleId"><?php echo $item ['title'];?></div>
            <div class="content" id="contentId"><?php echo $item['content'];?></div>
            <div class="author" id="authorId"><?php echo $item['author'], $item ['fullname'], $item ['id'];?></div>
            <div class="date" id="dateId"><?php echo $item['date'];?></div>
            <div class="like" id="likeId"> <img src="likeicon.png" alt="like"><?php echo $item['likecount'];?></div>
          </div>
        <?php }
          ?>

      </div>
    </body>
</html>
