let slider = document.getElementById("slider");
let images = document.getElementsByClassName("slider-image");
let buttonLeft = document.getElementById("button-left");
let buttonRight = document.getElementById("button-right");
let count = 0;

function nextRight() {
    if(count == 0){
        slider.style.transition = "all 0.5s";
        setTimeout(function(){
            slider.style.transition = "none";
            slider.style.marginLeft = "-100%";
            if (images.length == 2) {
                buttonRight.style.display = "none";
            }
            buttonLeft.style.display = "block";
        }, 500);
    }

    if(count == 1){
        slider.style.transition = "all 0.5s";
        setTimeout(function(){
            slider.style.transition = "none";
            slider.style.marginLeft = "-200%";
            buttonRight.style.display = "none";
        }, 500);
    }
    count++;
}

function nextLeft() {
    if(count == 1){
        slider.style.transition = "all 0.5s";
        setTimeout(function(){
            slider.style.transition = "none";
            slider.style.marginLeft = "0";
            buttonLeft.style.display = "none";
            buttonRight.style.display = "block";
        }, 500);
    }

    if(count == 2){
        slider.style.transition = "all 0.5s";
        setTimeout(function(){
            slider.style.transition = "none";
            slider.style.marginLeft = "-100%";
            buttonRight.style.display = "block";
        }, 500);
    }
    count--;
}

buttonRight.addEventListener('click', function(){
    nextRight();
});

buttonLeft.addEventListener('click', function(){
    nextLeft();
});