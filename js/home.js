//object needed to index the site views
var views = new Array();
views['presentation'] = {
    navID: "presentationNav",
    pageID: "presentationPage",
    leftView: 'presentation',
    rightView: 'portofolio'
};
views['portofolio'] = {
    navID: "portofolioNav",
    pageID: "portofolioPage",
    leftView: 'presentation',
    rightView: 'about'
};
views['about'] = {
    navID: "aboutNav",
    pageID: "aboutPage",
    leftView: 'portofolio',
    rightView: 'contact'
};
views['contact'] = {
    navID: "contactNav",
    pageID: "contactPage",
    leftView: 'about',
    rightView: 'contact'
};
//function needed to defer the javascript 
$(function() {
    //get the dimension of the screen and set mobile/pc view
    if ($(document).width() <= 900) {
        //load the mobile version
        loadMobile();
    } else {
        //load the pc version
        loadPC();
    }
});
//this function is needed to adjust the webpage to the mobile version
function loadMobile() {
    //display the home page
    //variable needed to track the current location on the page
    var model = {
        location: 'presentation',
        previousPos: 'contact'
    };
    showView(model);
    //create an event listener to map the swipe action to the current page
    var element = document.getElementById("wrapper");
    var hammertime = new Hammer(element);
    // listen to events...
    hammertime.on("swipeleft", function(ev) {
        model.previousPos = model.location;
        model.location = views[model.location].rightView;
        showView(model);
    });
    hammertime.on("swiperight", function(ev) {
        model.previousPos = model.location;
        model.location = views[model.location].leftView;
        showView(model);
    });
}
//set of functions needed to show the appropriate view
function showView(model) {
    //on page load hide everything but presentation
    $('#' + views['presentation'].pageID).hide();
    $('#' + views['portofolio'].pageID).hide();
    $('#' + views['about'].pageID).hide();
    $('#' + views['contact'].pageID).hide();
    $('#' + views[model.location].pageID).show();
    $('#' + views[model.location].navID).addClass('currentPage');
    $('#' + views[model.previousPos].navID).removeClass('currentPage');
}

function loadPC() {}