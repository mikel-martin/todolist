var form = document.getElementById("add-item-form");
var btn = document.getElementById("add-btn");

var title = document.getElementById("title-input");
var descptn = document.getElementById("descptn-input");

title.addEventListener("onchange", function() {
    if(title.value === "")
        btn.disabled = true;
    else
        btn.disabled = false;
});

descptn.addEventListener("onchange", function() {
    if(descptn.value === "")
        btn.disabled = true;
    else
        btn.disabled = false;
});

btn.onclick = function() {
    document.querySelector(".form-container.collapsible").classList.toggle("collapsed");
}
