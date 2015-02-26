//my attempt to implement jquery

$("document").ready(function(){
    $("#reg").bind('click', alertButtonClick);
});

function alertButtonClick(){
    alert("Successfully created user");
}