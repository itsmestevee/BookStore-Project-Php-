<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS\Cat_Page.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS\navbar.css">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
</head>
<body>

    <div class="navbar">
        <?php include "Inc_Files\Navbar.php" ?>
    </div>
    <div class="categories-container">
        <div class="categories-box">
            <a href="Explore.php?fdId=1"><img src="img\philosphy.jpg" alt="">
                <h1>ទស្សនវិជ្ជា - Philosphy</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=2"><img src="img\romance.jpg" alt="">
                <h1>មនោសញ្ចេតនា - romance</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=3"><img src="img\science.jpg" alt="">
                <h1>វិទ្យាសាស្ត្រ - Science</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=4"><img src="img\technology.jpg" alt="">
                <h1>បច្ចេកវិទ្យា - Technology</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=5"><img src="img\biography.jpg" alt="">
                <h1>ជីវប្រវត្តិ - Biography</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=6"><img src="img\horror.jpg" alt="">
                <h1>រឿងខ្មោច - Horror</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=7"><img src="img\novel.jpg" alt="">
                <h1>ប្រលោមលោក - Novel</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=8"><img src="img\history.jpg" alt="">
                <h1>ប្រវត្តិសាស្ត្រ - History</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=9"><img src="img\poetry.jpg" alt="">
                <h1>កំណាព្យ - Poetry</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=10"><img src="img\fiction.jpg" alt="">
                <h1>ប្រឌិត - Fiction</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=11"><img src="img\children book.jpg" alt="">
                <h1>សៀវភៅកុមារ - Children's Book</h1>
            </a>
        </div>
        <div class="categories-box">
            <a href="Explore.php?fdId=12"><img src="img\magazine.jpg" alt="">
                <h1>ទស្សនាវដ្តី- Magazine</h1>
            </a>
        </div>
    </div>
</body>
</html>