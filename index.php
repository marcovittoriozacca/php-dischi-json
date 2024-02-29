<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- personal css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP Dischi JSON</title>
</head>
<body>
    
    <div id="app">
        <div id="web-app" class="vh-100">

        <!-- header -->
        <?php include_once __DIR__ . '/PHP/components/header.php' ?>
        <!-- main -->
        <?php include_once __DIR__ . '/PHP/components/main.php' ?>

        </div>
    </div>

    <!-- packages -->

    <!-- vue cdn -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- personal main js -->
    <script src="./assets/js/main.js"></script>    

</body>
</html>