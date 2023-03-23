<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>
<body>

 <?php  echo " <h1>Generating QR Codes</h1>"  ?> 
    
    <form method="post" action="generatecode.php">
        
        <label for="text">Text</label>
        <textarea id="text" name="text"></textarea>
        <input type="submit">
    </form>


    
</body>
</html>
