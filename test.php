<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP test</title>
</head>
<body>
  
  <h1>
    <?php
     echo htmlspecialchars(@$_POST['name'], ENT_QUOTES, 'UTF-8');
    ?>
     さんご登録ありがとうございます。
  </h1>

</body>
</html>