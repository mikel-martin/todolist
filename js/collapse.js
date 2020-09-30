var coll = document.getElementsByClassName("collapse-btn");

if(coll.length > 0) {

    for (var i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
                this.style.color = "black";
                this.style.fontWeight = "normal";
                this.style.background = "transparent";
            } else {
                content.style.display = "block";
                this.style.color = "white";
                this.style.fontWeight = "bold";
                this.style.background = "rgb(95, 156, 70)";
            }
        });
    }

}
