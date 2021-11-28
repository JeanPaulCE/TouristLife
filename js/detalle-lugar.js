function like(id){
    let places = {
        place_id: id
    }
    
    fetch("http://touristlife.test/like.php", {
        method: "POST",
        mode: "same-origin",
        credentials: "same-origin",
        headers: {
            'Accept': 'application/json, text/plain, */*',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(places)
    })
    .then(response => response.json())
    .then(data => {
        if (data === 401) {
            alert("Inicia sesión para votar");
        }
        if (data === 200) {
            let like = document.getElementById(id);
            like.classList.remove("like");
            like.classList.add("like-click");
            like.setAttribute("onclick", "dislike(this.id);");
            
            let votes = document.getElementById("votes" + id);
            let updateVotes = Number(votes.innerText);
            updateVotes += 1;
            votes.innerText = updateVotes;
        }
    })
}

function dislike(id){
    let places = {
        place_id: id
    }
    
    fetch("http://touristlife.test/dislike.php", {
        method: "POST",
        mode: "same-origin",
        credentials: "same-origin",
        headers: {
            'Accept': 'application/json, text/plain, */*',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(places)
    })
    .then(response => response.json())
    .then(data => {
        if (data === 401) {
            alert("Inicia sesión para votar");
        }
        if (data === 200) {
            let like = document.getElementById(id);
            like.classList.remove("like-click");
            like.classList.add("like");
            like.setAttribute("onclick", "like(this.id);");
            
            let votes = document.getElementById("votes" + id);
            let updateVotes = Number(votes.innerText);
            updateVotes -= 1;
            votes.innerText = updateVotes;
        }
    })
}