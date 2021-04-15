<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin login</title>
</head>

<body>
    <div class="container">
        <h1>Admin login</h1>
        <label>
            Login:
            <input id="login" required type='text'>
            Password:
            <input id="password" required type="password">
        </label>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        Select certificate to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
    
</body>

</html>