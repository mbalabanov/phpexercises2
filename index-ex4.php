<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Ex 4: PHP Exercises Day 2</title>
    </head>
    <body class="bg-light">

    <div class="container">
        <h1 class="mt-4">PHP Exercises Day 2</h1>
        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="home-tab" href="index.php" role="tab" aria-controls="home" aria-selected="true">Exercise 1</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" href="index-ex2.php" role="tab" aria-controls="profile" aria-selected="false">Exercise 2</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" href="index-ex3.php" role="tab" aria-controls="contact" aria-selected="false">Exercise 3</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="contact-tab" href="index-ex4.php"  role="tab" aria-controls="contact" aria-selected="false">Exercise 4</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" href="index-ex5.php" role="tab" aria-controls="contact" aria-selected="false">Exercise 5</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" href="index-ex6.php" role="tab" aria-controls="contact" aria-selected="false">Exercise 6</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" href="index-ex7.php" role="tab" aria-controls="contact" aria-selected="false">Exercise 7</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" href="index-ex8.php"  role="tab" aria-controls="contact" aria-selected="false">Exercise 8</a>
                    </li>
                </ul>
                <div class="tab-content border-left border-right border-bottom p-4 bg-white" id="myTabContent">
                    <div class="tab-pane fade" id="ex1" role="ex4" aria-labelledby="home-tab">
                        <h2>Exercise 1</h2>
                        <p>Create a PHP script which will be based on the browser type, include <em>chrome.css</em> or <em>mozilla.css</em> in the head section of your HTML document structure.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex2" role="tabpanel" aria-labelledby="profile-tab">
                        <h2>Exercise 2</h2>
                        <p>Create a PHP script which will accept two parameters from the form (name and surname). The user must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex3" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 3</h2>
                        <p>Create a function which takes two integer parameters - divide them and output the result on the screen.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade show active" id="ex4" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 4</h2>
                        <p>Create a Database using PHP and MySQL.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                            <form action="index-ex4.php" method ="POST">
                                Enter name for new database: <input type="text" class="form-control text-center" name="dbname" />
                                <input class="btn btn-primary m-2" type="submit" name="submit"  />
                            </form>
                            <?php
                                function createnewdatabase($dbname)
                                {
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "" ;
                                    $conn = mysqli_connect($servername, $username, $password);
                                    if (!$conn) {
                                    die("<h3>Connection failed: "  . mysqli_connect_error()) ."</h3>";
                                    }
                                    $sql = "CREATE DATABASE $dbname";
                                    if  (mysqli_query($conn, $sql)) {
                                    echo "<h3>Database $dbname created successfully! </h3>";
                                    } else {
                                    echo "<h3>Error creating database $dbname: " . mysqli_error($conn) ."</h3>";
                                    }
                                    mysqli_close($conn);
                                }

                                if( isset($_POST['submit']))
                                {
                                    if( $_POST["dbname" ] )
                                    {
                                        $dbname = $_POST[ 'dbname'];
                                        createnewdatabase($dbname);
                                    } elseif ( !$_POST["dbname" ] )
                                    {
                                        echo "<h3>Please enter the name for the new database</h3>";
                                    }
                                }
                            ?>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
&lt;?php
    function createnewdatabase($dbname)
    {
        $servername = &quot;localhost&quot;;
        $username = &quot;root&quot;;
        $password = &quot;&quot; ;
        $conn = mysqli_connect($servername, $username, $password);
        if (!$conn) {
        die(&quot;&lt;h3&gt;Connection failed: &quot;  . mysqli_connect_error()) .&quot;&lt;/h3&gt;&quot;;
        }
        $sql = &quot;CREATE DATABASE $dbname&quot;;
        if  (mysqli_query($conn, $sql)) {
        echo &quot;&lt;h3&gt;Database $dbname created successfully! &lt;/h3&gt;&quot;;
        } else {
        echo &quot;&lt;h3&gt;Error creating database $dbname: &quot; . mysqli_error($conn) .&quot;&lt;/h3&gt;&quot;;
        }
        mysqli_close($conn);
    }

    if( isset($_POST[&apos;submit&apos;]))
    {
        if( $_POST[&quot;dbname&quot; ] )
        {
            $dbname = $_POST[ &apos;dbname&apos;];
            createnewdatabase($dbname);
        } elseif ( !$_POST[&quot;dbname&quot; ] )
        {
            echo &quot;&lt;h3&gt;Please enter the name for the new database&lt;/h3&gt;&quot;;
        }
    }
?&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex5" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 5</h2>
                        <p>Create a Table in your Database using PHP and MySQL.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex6" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 6</h2>
                        <p>Insert data into MySQL table using PHP and MySQL.</p>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php

                        ?>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>

                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex7" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 7</h2>
                        <p>Create a form which will insert data into MySQL table using PHP and MySQL.</p>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php

                        ?>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>

                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex8" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 8</h2>
                        <p>Display all the records from the MySQL table using PHP and MySQL.</p>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php

                        ?>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>

                            </code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>





