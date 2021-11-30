function showLeftImage() {
    if (document.documentElement.clientWidth >= 1100) {
        document.getElementById('container-left-image').style.display = 'inline-flex';
    } else {
        document.getElementById('container-left-image').style.display = 'grid';
    }
}

function showRightImage() {
    if (document.documentElement.clientWidth >= 1100) {
        document.getElementById('container-right-image').style.display = 'inline-flex';
    } else {
        document.getElementById('container-right-image').style.display = 'grid';
    }
}

let errors = false;

function showError(element) {
    if(element.getAttribute('valid') == null){
        let message = document.createElement("p");
        message.classList.add("form-error")
        message.innerHTML = "Campo invalido";
        element.parentNode.append(message);
    }
}

function checkForm(){
    let title = document.getElementById('title');
    if(validator.isEmpty(title.value)) {
        showError(title);
        errors = true;
    }

    let location = document.getElementById('location');
    if(validator.isEmpty(location.value)) {
        showError(location);
        errors = true;
    }

    let description = document.getElementById('description');
    if(validator.isEmpty(description.value)) {
        showError(description);
        errors = true;
    }

    let category = document.getElementById('category');
    if(category.value == 0) {
        showError(category);
        errors = true;
    }
    
    let valiteExt = ["jpeg", "jpg", "png"];
    let mainImage = document.getElementById('main-image');
    let mainExt = mainImage.value.split('.').pop();
    if(validator.isEmpty(mainImage.value) || !valiteExt.includes(mainExt)) {
        showError(mainImage);
        errors = true;
    }

    let leftImage = document.getElementById('left-image');
    let leftExt = leftImage.value.split('.').pop();
    if(!validator.isEmpty(leftImage.value) && !valiteExt.includes(leftExt)) {
        showError(leftImage);
        errors = true;
    }

    let rightImage = document.getElementById('right-image');
    let rightExt = rightImage.value.split('.').pop();
    if(!validator.isEmpty(rightImage.value) && !valiteExt.includes(rightExt)) {
        showError(rightImage);
        errors = true;
    }

    if(errors) {
        return false;
    }
    else {
        return true;
    }
    
}