<!DOCTYPE html>
<html>
<head>
    <title>Picture Gallery</title>
    <link rel="stylesheet" type="text/css" href="../CSS/global.css">

    <link rel="stylesheet" type="text/css" href="../CSS/style_event.css">
    <link rel="stylesheet" type="text/css" href="gallery.css">
    
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <?php include '../includes/links.php'; ?>

    
    <!-- Picture Gallery -->
    <div id="gallery">
        <!-- Large Image Display -->
        <div id="mainImage">
            <img src="../image/im.jpeg" alt="Main Image">
        </div>

<!-- Thumbnails -->
<div class="i1">
    <img src="../image/ge.jpg" alt="Image 1" onclick="showImage('../image/ge.jpg')">
    <img src="../image/im.jpeg" alt="Image 2" onclick="showImage('../image/im.jpeg')">
    <img src="../image/image.jpg" alt="Image 3" onclick="showImage('../image/image.jpg')">
    <img src="../image/images.jpeg" alt="Image 4" onclick="showImage('../image/images.jpeg')">
    <img src="../image/imagess.jpeg" alt="Image 5" onclick="showImage('../image/imagess.jpeg')">
    <img src="../image/SEMIC Conference 2023.jpg" alt="Image 6" onclick="showImage('../image/SEMIC Conference 2023.jpg')">
    <img src="../image/usf-football-fire-entrance.png" alt="Image 7" onclick="showImage('../image/usf-football-fire-entrance.png')">
    <img src="../image/3147136-379411577.jpg" alt="Image 8" onclick="showImage('../image/3147136-379411577.jpg')">
    <img src="../image/iimages.jpeg" alt="Image 9" onclick="showImage('../image/iimages.jpeg')">
    <img src="../image/imageeees.jpeg" alt="Image 10" onclick="showImage('../image/imageeees.jpeg')">
    <img src="../image/irmages.jpeg" alt="Image 11" onclick="showImage('../image/irmages.jpeg')">
    <img src="../image/5a819cd2d7d89eae87f2e0527bc7d141.jpg" alt="Image 12" onclick="showImage('../image/5a819cd2d7d89eae87f2e0527bc7d141.jpg')">
    <img src="../image/imagges.jpeg" alt="Image 13" onclick="showImage('../image/imagges.jpeg')">
    <img src="../image/imageees.jpeg" alt="Image 14" onclick="showImage('../image/imageees.jpeg')">
    <img src="../image/imaggges.jpeg" alt="Image 15" onclick="showImage('../image/imaggges.jpeg')">
    <img src="../image/i.jpeg" alt="Image 16" onclick="showImage('../image/i.jpeg')">
    <!-- Add other thumbnails similarly -->
    <!-- ... -->
</div>

    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="gallery.js"></script>
</body>
</html>
