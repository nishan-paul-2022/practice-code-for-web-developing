<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php for($i = 0; $i < 5; $i++) { ?>
            <h3> <?php echo $i; ?> </h3>
        <?php } ?>

        <?php include("form_complete.php"); ?>
        <?php echo __DIR__."<br>"; ?>
        <?php echo $_SERVER["DOCUMENT_ROOT"]."<br>"; ?>
        <?php include("../#HTML/graphics_canvas.html"); ?>
    </body>
</html>
<!-- we use require when the file is required by the application and application should not continue when file is not found. -->
<!-- we use include when the file is not required and application should continue when file is not found. -->