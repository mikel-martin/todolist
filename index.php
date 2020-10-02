<html>
    <?php include 'php/templates/header.php';?>
    <body>
        <!-- MAIN CONTAINER -->
        <div class="center">
            <!-- OPTIONS -->
            <div class="options">
                <button id="add-btn" class="add-btn">
                    <i class="material-icons">add</i>
                </button>
                <button ondrop="drop(event)" 
                    ondragover="allowDrop(event)"
                    style="float: right" class="del-btn">
                    <i class="material-icons">delete</i>
                </button>
            </div>
            <!-- ERRORS -->
            <div id="errorMsg"></div>
            <!-- FOTM TO ADD NEW TODO ITEMS -->
            <div id="add-item-form" class="form-container collapsible">
                <form action="insert.php" autocomplete="off" method="post">
                    <input id="title-input" type="text" name="title" placeholder="Title...">
                    <br>
                    <textarea id="descptn-input" 
                        name="descptn" rows="5"
                        placeholder="Description..."></textarea>
                    <input class="save-btn" type="submit" value="SAVE">
                </form>
            </div>
            <!-- TODO LIST -->
            <div class="list">
                <?php include 'php/select.php';?>
            </div>
        </div>
        <!-- JAVASCRIPT -->
        <script src="js/collapse.js"></script>
        <script src="js/add-item-form.js"></script>
        <script src="js/drag-and-drop.js"></script>
    </body>
</html>
