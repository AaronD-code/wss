<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/slideshow.css">
    <title>ASC Motors</title>

</head>
<body>
<h1 style="text-align: center;">Car recommendations for you</h1>

<div class="slideshow-container">
    <div class="slide fade">
        <img src="Images/tesla model3.png" alt="Tesla Model 3">
        <div class="text">Tesla Model 3</div>
    </div>

    <div class="slide fade">
        <img src="Images/ford mustang.png" alt="Ford Mustang">
        <div class="text">Ford Mustang</div>
    </div>

    <div class="slide fade">
        <img src="Images/toyota corolla.png" alt="Toyota Corolla">
        <div class="text">Toyota Corolla</div>
    </div>

    <div class="slide fade">
        <img src="Images/bmw.png" alt="BMW 3 Series">
        <div class="text">BMW 3 Series</div>
    </div>

    <div class="slide fade">
        <img src="Images/chevy.png" alt="Chevrolet Silverado">
        <div class="text">Chevrolet Silverado</div>
    </div>
</div>

<script>
    let slideIndex = 0;

    function showSlides() {
        let slides = document.querySelectorAll(".slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000);
    }

    showSlides();
</script>
</body>
</html>
