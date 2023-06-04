const searchBar = document.querySelector(".users .search input");
searchBtn = document.querySelector(".users .search button");
usersList = document.querySelector(".users-list");

searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value = "";
}

searchBar.onkeyup = function() {
    let word = searchBar.value;
    
    if (word != "") {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }
    let request = new XMLHttpRequest(); // creating a new XML object
    request.open("POST","php/search.php",true);
    request.onload = () => {
        if(request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                let data = request.response;
                usersList.innerHTML = data;
            }
        }
    }
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("searchTerm=" + word);
}

setInterval(() => {
    let request = new XMLHttpRequest(); // creating a new XML object
    request.open("GET","php/users.php",true);
    request.onload = () => {
        if(request.readyState === XMLHttpRequest.DONE) {
            if (request.status === 200) {
                let data = request.response;
                if (!searchBar.classList.contains("active")) {
                    usersList.innerHTML = data;
                }
            }
        }
    }
    request.send();
},500); // this function will run frequently after 0.5 seconds