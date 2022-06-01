window.addEventListener('DOMContentLoaded', function() {
	
   
    let reveal = document.getElementById("image-reveal");
    let showImage = document.getElementById("show-image");
    let revealBackground = document.getElementById("reveal-background");
    let revealTitle = document.getElementById("reveal-title");


    revealBackground.addEventListener('click', function() {
        reveal.style.display = "none";
    });


    let imageLinks = document.querySelectorAll(".gallery-li a.image-link");
    let titleElements = document.querySelectorAll(".gallery-li p");
    let images = [];
    let titles = [];
    let currentIndex = 0;
    for (let i = 0; i < imageLinks.length; ++i) {
        let link = imageLinks[i];
        images.push(link.href);
        let title = titleElements[i];
        titles.push(title.innerHTML);
        link.addEventListener('click', function(event) {
            reveal.style.display = "flex";
            showImage.src = link.href;
            currentIndex = i;
            event.preventDefault();
            revealTitle.innerHTML = titles[i];
        });
    }

    let prevButton = document.getElementById('galleryPrevious');
    let nextButton = document.getElementById('galleryNext');
    prevButton.addEventListener('click', function() {
        currentIndex = Math.max(currentIndex - 1, 0);
        showImage.src = images[currentIndex];
        revealTitle.innerHTML = titles[currentIndex];
    });
    nextButton.addEventListener('click', function() {
        currentIndex = Math.min(currentIndex + 1, images.length - 1);
        showImage.src = images[currentIndex];
        revealTitle.innerHTML = titles[currentIndex];
    });

});

