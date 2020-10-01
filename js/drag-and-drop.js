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

    $.ajax({
        url:"update.php",  
        type: "post",    
        dataType: 'json',
        data: {id: data},
        success:function(result){
            console.log(result.abc);
        }
    });

}