// Global variables
var isLogin = false;
var userID = 0;
var fullname = "Guest";

var path = window. location. pathname;
var page = path. split("/"). pop();

// load before main tag
function loadHeader(fileName){
    $.ajax({
        url: fileName,
        async: false,
        success: function (data){
            $("main").prepend(data);
        }
    });
}

// load after main tag
function loadFooter(fileName){
    $.ajax({
        url: fileName,
        async: false,
        success: function (data){
            $("main").append(data);
        }
    });
}

function printNavProfileInfo(){
    $("#navbar-profile-name").text(fullname);
    $("#navbar-profile-picture").attr('src', "images/default-profile-icon.png");
}

// redirect to login page (in case not allowed on this page)


// Always load
loadFooter("master pages/mp-footer-1.html");

// check if login or not
if(isLogin == false){
    loadHeader("master pages/mp-header-1.html");
    printNavProfileInfo();
    // load modals for login and register
    loadFooter("master pages/mp-modal-login.html");
    loadFooter("master pages/mp-modal-register.html");
}
else{
    loadHeader("master pages/mp-header-2.html");
    printNavProfileInfo();
}

if(page == "search.html" || page == "story.html"){
    $("nav").removeClass("container");
    $("nav").addClass("container-fluid");
   //$("footer .container").removeClass("container");
   //$("footer .container").addClass("container-fluid");
}

if(page == "profile.html"){
    loadFooter("master pages/mp-modal-createStory.html");
}