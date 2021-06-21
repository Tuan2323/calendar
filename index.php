<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Calendar</title>
</head>

<body>
    <?php
    echo '<div class="text-black text-9xl text-center"> ';
    
    echo date('Y');
    echo ' </div>';

    ?>

    <div class="grid grid-cols-4 ">


        <div>

            <div>
                <?php

                echo "<div class='grid grid-cols-7 grid-rows-5'>";

                for ($i = 1; $i <= 30; $i++) {
                    echo "<div >";
                    echo $i;
                    echo ' </div>';
                }
                echo ' </div>';
                ?>


            </div>
        </div>
        <div>1</div>
        <div>1</div>
        <div>
            <?php

            echo "<div class='grid grid-cols-7 grid-rows-5'>";

            for ($i = 1; $i <= 30; $i++) {
                echo "<div >";
                echo $i;
                echo ' </div>';
            }
            echo ' </div>';
            ?>


        </div>
        <div>1</div>
        <div>1</div>
        <div>1</div>
        <div>1</div>
        <div>1</div>
        <div>1</div>
        <div>1</div>
        <div>1</div>
    </div>


</body>

</html>