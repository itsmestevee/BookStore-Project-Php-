<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\Banner.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="banner-container">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="img\banner.jpg" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="img\banner1.jpg" alt="Image 2">
                </div>
            </div>
        </div>
    </body>
<script>
        document.addEventListener('DOMContentLoaded', function () {
            const carouselInner = document.querySelector('.carousel-inner');
            const carouselItems = document.querySelectorAll('.carousel-item');
            const totalItems = carouselItems.length;
            let currentIndex = 0;

            function showImage(index) {
                const newTransformValue = -index * 100 + '%';
                carouselInner.style.transform = 'translateX(' + newTransformValue + ')';
            }
            function nextImage() {
                currentIndex = (currentIndex + 1) % totalItems;
                showImage(currentIndex);
            }
            setInterval(nextImage, 4000);
        });
    </script>
</html>