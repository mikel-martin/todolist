var form = document.getElementById("add-item-form");
var btn = document.getElementById("add-btn");

btn.onclick = function() {
    document.querySelector(".form-container.collapsible").classList.toggle("collapsed");
}
