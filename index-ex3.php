<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Ex 3: PHP Exercises Day 2</title>
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
                        <a class="nav-link active" id="contact-tab" href="index-ex3.php" role="tab" aria-controls="contact" aria-selected="false">Exercise 3</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" href="index-ex4.php"  role="tab" aria-controls="contact" aria-selected="false">Exercise 4</a>
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
                            <div class="d-flex justify-content-center">
                                <div class="browserdependent text-center">
                                    <p>This Browser's Box<br/>
                                    is RED on Mozilla Firefox<br/>
                                    and BLUR on Google Chrome</p>
                                </div>
                            </div>
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
                    <div class="tab-pane fade show active" id="ex3" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 3</h2>
                        <p>Create a function which takes two integer parameters - divide them and output the result on the screen.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-success text-center" role="alert">
                                <div class="row">
                                    <div class="col-8 offset-2">
                                        <p>Enter two numbers and submit them to divide them.</p>
                                        <form action="index-ex3.php" method ="POST">
                                            First Number: <input type="number" class="form-control text-center" name="firstnumber" />
                                            Second Number: <input type ="number" class="form-control text-center" name="secondnumber" />
                                            <input class="btn btn-primary m-2" type="submit" name="submit"  />
                                        </form>
                                        <?php

                                            function divideNumbers($num1, $num2)
                                            {
                                                $division = $num1 / $num2;
                                                echo  "<h3>The division of the two numbers is : $division </h3>";
                                            };

                                            if( isset($_POST['submit']))
                                            {
                                                if( $_POST["firstnumber" ] && $_POST["secondnumber"] )
                                                {
                                                    $num1 = intval ($_POST[ 'firstnumber']);
                                                    $num2 = intval ($_POST[ 'secondnumber']);
                                                    divideNumbers($num1, $num2);
                                                } elseif ( !$_POST["firstnumber" ] )
                                                {
                                                    echo "Please enter the first number";
                                                } elseif ( !$_POST["secondnumber"] )
                                                {
                                                    echo "Please enter the second number";
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
&lt;form action=&quot;index.php&quot; method =&quot;POST&quot;&gt;
    First Number: &lt;input type=&quot;number&quot; class=&quot;form-control text-center&quot; name=&quot;firstnumber&quot; /&gt;
    Second Number: &lt;input type =&quot;number&quot; class=&quot;form-control text-center&quot; name=&quot;secondnumber&quot; /&gt;
    &lt;input class=&quot;btn btn-primary m-2&quot; type=&quot;submit&quot; name=&quot;submit&quot;  /&gt;
&lt;/form&gt;
&lt;?php
    function divideNumbers($num1, $num2)
    {
        $division = $num1 / $num2;
        echo  &quot;&lt;h3&gt;The division of the two numbers is : $division &lt;/h3&gt;&quot;;
    };

    if( isset($_POST[&apos;submit&apos;]))
    {
        if( $_POST[&quot;firstnumber&quot; ] &amp;&amp; $_POST[&quot;secondnumber&quot;] )
        {
            $num1 = intval ($_POST[ &apos;firstnumber&apos;]);
            $num2 = intval ($_POST[ &apos;secondnumber&apos;]);
            divideNumbers($num1, $num2);
        } elseif ( !$_POST[&quot;firstnumber&quot; ] )
        {
            echo &quot;Please enter the first number&quot;;
        } elseif ( !$_POST[&quot;secondnumber&quot;] )
        {
            echo &quot;Please enter the second number&quot;;
        }
    }
?&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex4" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 4</h2>
                        <p>Create a Database using PHP and MySQL.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
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





