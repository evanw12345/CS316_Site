var url = window.location.pathname;
console.log(url);
function assignActive() {
    switch (url) {
        case "/index.html":
            var element = document.getElementById("link1");
            element.classList.add("active");
            break;
        case "/images.html":
            var element = document.getElementById("link2");
            element.classList.add("active");
            break;
        case "/videos.html":
            var element = document.getElementById("link3");
            element.classList.add("active");
            break;
        case "/admin.php":
            var element = document.getElementById("link4");
            element.classList.add("active");
            break;
        case "/usrUpload.html":
            var element = document.getElementById("link5");
            element.classList.add("active");
            break;
        case "/test.php":
            var element = document.getElementById("link6");
            element.classList.add("active");
    }
}

function include() {
    $("#include").load("common.html");
}

