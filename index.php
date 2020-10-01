<html>
    <?php include 'php/templates/header.php';?>
    <body>
        <div class="center">
            <script src="js/drag-and-drop.js"></script>
            <div class="options">
                <button class="add-btn">
                    <i class="material-icons">add</i>
                </button>
                <button ondrop="drop(event)" 
                    ondragover="allowDrop(event)"
                    style="float: right" class="del-btn">
                    <i class="material-icons">delete</i>
                </button>
            </div>
            <div class="list">
                <?php include 'php/select.php';?>
            </div>
        </div>
        <script src="js/collapse.js"></script>
    </body>
</html>
