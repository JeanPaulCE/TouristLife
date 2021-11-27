function voting(id){
    let places = {
        place_id: id
    }
    

    fetch("http://explorecr.test/votes.php/", {
        method: "POST",
        mode: "same-origin",
        credentials: "same-origin",
        headers: {
            'Accept': 'application/json, text/plain, */*',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(info)
    })
    .then(response => response.json())
    .then(data => {
        if (data === 401) {
            alert("Login to vote");
        }
        if (data === 200) {
            alert("Login");
            let btn = document.getElementById(id);
            btn.classList.remove("far");
            btn.removeAttribute("onclick");
            btn.classList.add("fas");
            let votes = document.getElementById("v" + id);
            let updateVotes = Number(votes.innerText);
            updateVotes += 1;
            votes.innerText = updateVotes;
        }
    })
}