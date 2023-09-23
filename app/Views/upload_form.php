<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Form</title>
</head>
<body>

<p>
<?php foreach ($errors as $error): ?>
    <li><?= esc($error) ?></li>
<?php endforeach ?>
</p>

File is required:
<?= form_open_multipart('upload/upload') ?>
<input type="file" name="userfile" size="20">
<br><br>
<input type="submit" value="upload">
</form>

<hr>

File is not required:
<?= form_open_multipart('upload/upload-permit-empty') ?>
<input type="file" name="userfile" size="20">
<br><br>
<input type="submit" value="upload">
</form>

</body>
</html>
