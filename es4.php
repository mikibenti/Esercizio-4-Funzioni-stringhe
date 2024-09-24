<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dapibus lacus orci, id semper mauris blandit id. Ut mattis nisl eu lorem volutpat, at tempor lacus pulvinar. Suspendisse ullamcorper tincidunt libero cursus molestie. Ut ut dolor at lorem pulvinar mollis ut ut dui. Donec commodo accumsan odio, sed porttitor ex suscipit ornare. Nam hendrerit malesuada ornare. Nulla sodales laoreet neque nec iaculis. Pellentesque vel interdum ipsum. Donec a mi orci.";
        echo "<p style='color:green'>{$str}</p>
              <p style='color:blue;'>" . strtoupper($str) . "</p>
              <p style='color:red'>" . strlen($str) . "</p>
              <p style='color:yellow'>" . str_word_count($str) . "</p>";
    ?>
</body>
</html>