//------------------------------------------------------------------------------------------
//                                Initialiize Site
//------------------------------------------------------------------------------------------

var url = window.location.pathname;
console.log(url);
function assignActive() {
    switch (url) {
        case "/index.php":
            var element = document.getElementById("link1");
            element.classList.add("active");
            break;
        case "/images.php":
            var element = document.getElementById("link2");
            element.classList.add("active");
            break;
        case "/videos.php":
            var element = document.getElementById("link3");
            element.classList.add("active");
            break;
        case "/admin.php":
            var element = document.getElementById("link4");
            element.classList.add("active");
            break;
        case "/usrUpload.php":
            var element = document.getElementById("link5");
            element.classList.add("active");
            break;
        case "/test.php":
            var element = document.getElementById("link6");
            element.classList.add("active");
    }
}

//------------------------------------------------------------------------------------------
//                                Account Forms 
//------------------------------------------------------------------------------------------

var current;
var login = document.getElementById("login");
var create = document.getElementById("create");
create.style.display = "none";
function swap(to){
    var too = to.id;
    if (too == "toCreate") {
        login.style.display = "none";
        create.style.display = "block";
    }
    else if (too == "toLogin"){
        create.style.display = "none";
        login.style.display = "block";
    }
    else {
        console.log("Error in swap()");
        console.log(too);
    }
}

function test() {
    
}