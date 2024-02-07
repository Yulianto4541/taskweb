<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/slick/slick.css">
    <link rel="stylesheet" href="./assets/slick/slick-theme.css">
    <link rel="stylesheet" href="./breadcrumb.css">
    <link rel="stylesheet" href="./grid.css">
    <link rel="stylesheet" href="./slider.css">
    <link rel="stylesheet" href="./weather.css">
    <link rel="stylesheet" href="./flex.css">
    <link rel="stylesheet" href="./slider-tui.css">
    <link rel="stylesheet" href="./faq.css">
</head>

<body>
    <style>
        body {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .slick-arrow {
            width: 100px;
            height: 100px;
            z-index: 99;
        }

        @media (min-width: 992px) {
            body {
                width: 970px;
            }
        }
    </style>
    <?php
    include './breadcrumb.php';
    include './grid.php';
    include './slider.php';
    include './weather.php';


    include './flex.php';
    include './slider-tui.php';
    include './faq.php';
    ?>

    <script src="./assets/jquery-3.7.1.min.js"></script>
    <script src="./assets/slick/slick.min.js"></script>
    <script src="./slider.js"></script>
    <script src="./weather.js"></script>
    <script src="./slider-tui.js"></script>
    <script src="./faq.js"></script>
</body>

</html>