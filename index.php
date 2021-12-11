<?php include_once 'common.php'; ?>

<body>
    <div class=containercontainer>
        <div class="contcontainer">
            <?php
            if (isset($_GET["create"])) {
                if ($_GET["create"] == "success") {
                    echo '<div class="contcard card2">
                    <h2>Welcome ' . $_GET["user"] . '!</h2>
                    <p>You have successfully created an account!</p>
                    <p>Click the plus icon in the top right to upload content</p>
                    </div>';
                } else if ($_GET["create"] == "user_e") {
                    echo '<div class="contcard card2">
                    <h2>Sorry, the username: ' . $_GET["user"] . ' was already taken.</h2>
                    <p>Please try again.</p>
                    </div>';
                }
            }
            if (isset($_GET["login"])) {
                if ($_GET["login"] == "success") {
                    echo '<div class="contcard card2">
                    <h2>Welcome back ' . $_SESSION["username"] . '!</h2>
                    <p>' . $_SESSION["access"] . '</p>
                    <p>Click the plus icon in the top right to upload content or your username to view your content</p>
                    </div>';
                } else if ($_GET["login"] == "user_e") {
                    echo '<div class="contcard card2">
                    <h2>Sorry, the username: ' . $_GET["user"] . ' doesn\'t exist</h2>
                    <p>Please try again.</p>
                    </div>';
                } else if ($_GET["login"] == "pass_e") {
                    echo '<div class="contcard card2">
                    <h2>Sorry, the password for: ' . $_GET["user"] . ' is incorrect</h2>
                    <p>Please try again.</p>
                    </div>';
                }
            }

            ?>
            <div class="card1 contcard">
                <h2>CS316-001 Project 6: Evan Wells</h2>
                <p>The internet sample has revolutionized society. There are many wonderful things accessable with the
                    internet. However, some users upload seemingly abstract content. Some of this content takes the form
                    of internet memes, abstract videos, and strange websites.</p>
            </div>
            <div class="card1 contcard">
                <h3>In this iteration of my CS 316 project,</h3>
                <ul>
                    <li>Placeholder</li>
                </ul>
            </div>
            <div class="contcard">
                <img src="images/cow.png" title="this is cow" alt="Some alt text">
                <details>
                    <summary>Aerodynamics of a Cow</summary>
                    Originally uploaded to Reddit, the image is a
                    representation of the aerodynamics of a cow.
                </details>
            </div>
            <div class="contcard">
                <img src="images/syoss89fhhf21.png" title="picture" alt="Some alt text" style="width: 100%;" />
                <br>
                <details>
                    <summary>Bowser eats milk with cereal</summary> When he doesn't have milk in his cereal, he is mad!
                </details>
            </div>
            <div class="contcard">
                <p>Some relevant links</p>
                <ul>
                    <li><a href="https://www.google.com">Google</a></li>
                    <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Inconspicuous link</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php include_once 'footer.php' ?>