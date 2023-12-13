<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelista</title>
    <style>body {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f0f0f0;
}

.loading-wrapper {
    text-align: center;
}

.running-car {
    width: 100px; /* Adjust the size as needed */
}

.loading-bar {
    width: 0;
    height: 10px;
    background-color: #3498db;
    margin-top: 20px;
}
</style>
</head>
<body>
    <div class="loading-wrapper">
        <img src="pepe-el.gif" alt="Running Car GIF" class="running-car">
        <div class="loading-bar" id="loading-bar"></div>
    </div>
    <script>document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        document.getElementById('loading-bar').style.width = '100%';
        setTimeout(function () {
            window.location.href = 'index.php';
        }, 500);
    }, 3000);
});
</script>
</body>
</html>
