<!DOCTYPE html>
<html>
<head>
<title>Test Page</title>
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<body>
<h1>Welcome!</h1>
<p>Today is: <?php print(Date("l F d, Y"));?></p>
<p>Hostname: <?php echo gethostname();?></p>

<p><em>Thank you for testing.</em></p>
</body>
</html>
