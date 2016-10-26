<?php
$file = '';
$file = file_get_contents('./shortList.txt', FILE_USE_INCLUDE_PATH);
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">
  <p>Enter stock name seperated by "space" or "return".</p>
  <textarea rows=20 cols=50 name"stock-list"></textarea>
  <br />
  <input type="submit" name="submit" value="Update List">
</form>

<p>Current Short list</p>
<p><?php echo $file; ?></p>
</body>
</html>