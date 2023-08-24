<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Body</title>
</head>

<body class="">
  <?Php
  $pagename = $_GET['page'];

  if ($pagename != '') {

    include $pagename . '.php';
  } else {
    echo "welcome to dashboard";
  }
  ?>
</body>

</html>