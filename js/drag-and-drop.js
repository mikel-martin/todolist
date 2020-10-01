function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {

    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    
    var item = document.getElementById(data);
    item.parentNode.removeChild(item);  

    $.post("update.php", {
        data: data
    }, function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });

}