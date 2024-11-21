<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php
        require('Pages/navBar.php');
    ?>
    <?php
        require('Pages/practice.php');
    ?>
    <?php
        require('Pages/obj.php');
    ?>
    <?php
        require('Pages/others.php')
    ?>



    <script>
        function myCalculus(f){
            return (5/9) * (f-32)
        }
        const values =  myCalculus(80)
        console.log(values)
    </script>
</body>
</html>