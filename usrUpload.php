<?php include_once 'common.php'; ?>
<div class="containercontainer">
    <div class="contcontainer">
        <div class="contcard">
            <form id="usrUpload" action="http://examples.funwebdev.com/process.php" method="POST">
                <fieldset>
                    <label>User Upload</label><br>
                    <label for="title">Post title</label>
                    <input type="text" id="title" name="title" required><br>
                    <label for="text">Text</label><br>
                    <textarea name="postContent" id="postContent" cols="30" rows="5"></textarea><br>
                    <input type="file" id="myFile" name="filename"><br><br>
                    <select id="tag" name="tag">
                        <option>Select a tag</option>
                        <optgroup label="Meme">
                            <option>Abstract</option>
                            <option>Funny</option>
                            <option>Meta</option>
                        </optgroup>
                        <optgroup label="Other">
                            <option>Blog</option>
                            <option>Pet</option>
                            <option>Help</option>
                        </optgroup>
                    </select><br><br>
                    <input type="reset"><input type="submit"><br>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php include_once 'footer.php'?>
