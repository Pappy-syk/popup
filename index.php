<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown to Election</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <!-- Pop-up Image Slide Stick -->
    <div id="countdown-popup" class="countdown-popup">
        <div class="popup-content">
            <!-- Link สำหรับคลิกไปยัง URL -->
            <a href="https://buayaicity.go.th/home" target="_blank">
                <div class="image-container">
                    <img src="img/popup-photoshop-reso.png" alt="Countdown to Election" class="popup-image">
                    <!-- ตัวเลขการนับวันถอยหลัง -->
                    <div id="countdown-number" class="countdown-number">0</div>
                </div>
            </a>
            <a class="arrow" href="/"></a>
        </div>
        <!-- partial:index.partial.html -->

    </div>

    <script src="script.js" defer></script>
</body>
</html>
