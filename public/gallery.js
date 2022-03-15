window.addEventListener('DOMContentLoaded', function() {
	
   
        let reveal = document.getElementById("image-reveal");
        let showImage = document.getElementById("show-image");
        let revealBackground = document.getElementById("reveal-background");
  
        revealBackground.addEventListener('click', function() {
            reveal.style.display = "none";
        });
    
   
        let imageLinks = document.querySelectorAll(".gallery-li a");
        let images = [];
        let currentIndex = 0;
        for (let i = 0; i < imageLinks.length; ++i) {
            let link = imageLinks[i];
            images.push(link.href);
            link.addEventListener('click', function(event) {
                reveal.style.display = "flex";
                showImage.src = link.href;
                currentIndex = i;
                event.preventDefault();
            });
        }
    
        let prevButton = document.getElementById('galleryPrevious');
        let nextButton = document.getElementById('galleryNext');
        prevButton.addEventListener('click', function() {
            currentIndex = Math.max(currentIndex - 1, 0);
            showImage.src = images[currentIndex];
        });
        nextButton.addEventListener('click', function() {
            currentIndex = Math.min(currentIndex + 1, images.length - 1);
            showImage.src = images[currentIndex];
        });
    });
    