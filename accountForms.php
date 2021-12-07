<div class="swap">
    <div id="popup_ID" class="popup">
        <div class="popup-content animate">
            <div id="login">
                <h3>Login</h3>
                <form method="POST" id="login_f" action="./handlers/login.inc.php">
                    <div class="container">
                        <label for="username">Username</label>
                        <input type="text" name="username" required><br>
                        <label for="pswd">Password</label>
                        <input type="password" name="pswd" required><br>
                        <button type="submit" name="login">Login</button>
                    </div>
                </form>
                <a class="swap" id="toCreate" onclick="swap(this)">Create an Account</a>
            </div>
            <!-- RegEx for passwords -->
            <!-- (?=.*[A-Z])(?=.*\d).{8,} -->
            <div id="create">
                <h3>Create a New Account</h3>
                <form method="POST" id="create_f" action="./handlers/createAccount.inc.php">
                    <div class="container">
                        <label for="email_C">Email:</label>
                        <input type="text" name="email_C" required><br>
                        <label for="username">Username:</label>
                        <input type="text" name="username" required><br>
                        <label for="pswd">Password:</label>
                        <input type="password" name="pswd" title="Password must include a number, uppercase letter, and be at least 8 characters." required><br>
                        <!-- <label for="repeat">Repeat password:</label>
                        <input type="password" name="repeat" title="Password must include a number, uppercase letter, and be at least 8 characters." required><br> -->
                        <button type="submit" name="create">Create</button>
                    </div>
                </form>
                <a class="swap" id="toLogin" onclick="swap(this)">Login to an Account</a>
            </div>
        </div>
    </div>
</div>

<script>
    var popup = document.getElementById('popup_ID');
    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }
</script>