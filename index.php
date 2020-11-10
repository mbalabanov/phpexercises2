<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <title>Hello, world!</title>
    </head>
    <body class="bg-light">

    <div class="container">
        <h1 class="mt-4">PHP Exercises Day 1</h1>
        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#ex1" role="tab" aria-controls="home" aria-selected="true">Exercise 1</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ex2" role="tab" aria-controls="profile" aria-selected="false">Exercise 2</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ex3" role="tab" aria-controls="contact" aria-selected="false">Exercise 3</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ex4" role="tab" aria-controls="contact" aria-selected="false">Exercise 4</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ex5" role="tab" aria-controls="contact" aria-selected="false">Exercise 5</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ex6" role="tab" aria-controls="contact" aria-selected="false">Exercise 6</a>
                    </li>
                </ul>
                <div class="tab-content border-left border-right border-bottom p-4 bg-white" id="myTabContent">
                    <div class="tab-pane fade show active" id="ex1" role="ex4" aria-labelledby="home-tab">
                        <h2>Exercise 1</h2>
                        <p>Print your name in an h1 HTML element using PHP (define the variable and store your name into it). Use external CSS to position your name in the middle of the screen (horizontal, vertical).</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            /* Exercise 1 */
                            $greeting = "<h1>Welcome to the site by<br>Marin Balabanov!</h1>";
                            echo $greeting;
                        ?>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
&lt;?php
    $greeting = &quot;&lt;h1&gt;Welcome to the site by&lt;br&gt;Marin Balabanov!&lt;/h1&gt;&quot;;
    echo $greeting;
?&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex2" role="tabpanel" aria-labelledby="profile-tab">
                        <h2>Exercise 2</h2>
                        <p>Create an if statement which will be based on the current day. Output a message - if it is Monday it will return: "Happy Monday!" If it is not a Monday it should return: "Have a nice day!"</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            /* Exercise 2 */
                            $todayname=date("D");
                            if ($todayname=="Mon" )
                            echo "<h2>Happy Monday!</h2>";
                            else
                            echo "<h2>Have a nice day!</h2>" ;
                        ?>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
&lt;?php
    $todayname=date(&quot;D&quot;);
    if ($todayname==&quot;Mon&quot; )
    echo &quot;&lt;h2&gt;Happy Monday!&lt;/h2&gt;&quot;;
    else
    echo &quot;&lt;h2&gt;Have a nice day!&lt;/h2&gt;&quot; ;
?&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex3" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 3</h2>
                        <p>Create an else if statement which will be based on the current day. Output a message - if it is Monday, it will return: "Today is Monday!" if it is Tuesday, it will return: "Today is Tuesday!" etc. for every day in the week.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            $week = array( "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                            $todaycount=date("w");
                            echo "<h3>Today is $week[$todaycount]!</h3>";
                        ?>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
&lt;?php
    $week = array( &quot;Sunday&quot;, &quot;Monday&quot;, &quot;Tuesday&quot;, &quot;Wednesday&quot;, &quot;Thursday&quot;, &quot;Friday&quot;, &quot;Saturday&quot;);
    $todaycount=date(&quot;w&quot;);
    echo &quot;&lt;h3&gt;Today is $week[$todaycount]!&lt;/h3&gt;&quot;;
?&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex4" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 4</h2>
                        <p>Create a <strong>for</strong> loop which will print your name 50 times on the screen. Do the same with <strong>while</strong> and <strong>do while</strong> loop.</p>
                        <h3>Solution</h3>
                        <div class="row">
                            <div class="col-4 p-2">
                                <div class="alert alert-info text-center" role="alert">
                                    <h3>For</h3>
                                    <?php
                                        for( $indexfor = 0; $indexfor < 50; $indexfor++ )
                                        {
                                            echo "<p>Marin (iteration no. $indexfor) </p>\n";
                                        }
                                    ?>
                                </div>
                                <h3>PHP Code</h3>
                                <pre class="border p-2">
                                    <code>
&lt;?php
for( $indexfor = 0; $indexfor &lt; 50; $indexfor++ )
{
    echo &quot;&lt;p&gt;Marin (iteration no. $indexfor) &lt;/p&gt;\n&quot;;
}
?&gt;
                                    </code>
                                </pre>
                            </div>
                            <div class="col-4 p-2">
                                <div class="alert alert-warning text-center" role="alert">
                                    <h3>While</h3>
                                    <?php
                                        $indexwhile = 0;
                                        while( $indexwhile <  50)
                                        {
                                            $indexwhile++;
                                            echo "<p>Marin (iteration no. $indexwhile) </p>\n";
                                        }
                                    ?>
                                </div>
                                <h3>PHP Code</h3>
                                <pre class="border p-2">
                                    <code>
&lt;?php
$indexwhile = 0;
while( $indexwhile &lt;  50)
{
    $indexwhile++;
    echo &quot;&lt;p&gt;Marin (iteration no. $indexwhile) &lt;/p&gt;\n&quot;;
}
?&gt;
                                    </code>
                                </pre>
                            </div>
                            <div class="col-4 p-2">
                                <div class="alert alert-secondary text-center" role="alert">
                                    <h3>Do While</h3>
                                    <?php
                                        $indexdowhile = 0;
                                        do
                                        {
                                            echo "<p>Marin (iteration no. $indexdowhile) </p>\n";
                                            $indexdowhile++;
                                        } while( $indexdowhile < 50 );
                                    ?>
                                </div>
                                <h3>PHP Code</h3>
                                <pre class="border p-2">
                                    <code>
&lt;?php
$indexdowhile = 0;
do
{
    echo &quot;&lt;p&gt;Marin (iteration no. $indexdowhile) &lt;/p&gt;\n&quot;;
    $indexdowhile++;
} while( $indexdowhile &lt; 50 );
?&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ex5" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 5</h2>
                        <p>Define a numeric array with 10 elements. Use a <strong>foreach</strong> loop to output the value of every array's element.</p>
                        <h3>Solution</h3>
                        <div class="alert alert-primary text-center" role="alert">
                        <?php
                            $pokemon = array("Bulbasaur", "Ivysaur", "Venusaur", "Charmander", "Charmeleon", "Charizard", "Squirtle", "Wartortle", "Blastoise", "Caterpie", "Metapod");
                            foreach( $pokemon as  $pokename )
                            {
                                echo "<p>The Pokémon is called $pokename </p>";
                            }
                        ?>
                        </div>
                        <h3>PHP Code</h3>
                        <pre class="border p-2">
                            <code>
&lt;?php
$pokemon = array(&quot;Bulbasaur&quot;, &quot;Ivysaur&quot;, &quot;Venusaur&quot;, &quot;Charmander&quot;, &quot;Charmeleon&quot;, &quot;Charizard&quot;, &quot;Squirtle&quot;, &quot;Wartortle&quot;, &quot;Blastoise&quot;, &quot;Caterpie&quot;, &quot;Metapod&quot;);
foreach( $pokemon as  $pokename )
{
    echo &quot;&lt;p&gt;The Pok&eacute;mon is called $pokename &lt;/p&gt;&quot;;
}
?&gt;
                            </code>
                        </pre>
                    </div>
                    <div class="tab-pane fade" id="ex6" role="tabpanel" aria-labelledby="contact-tab">
                        <h2>Exercise 6</h2>
                        <p>6a. Define an associative array and output array elements on the screen. Use for this cartoon/anime/game characters (like Mickey Mouse, Super Mario, Goku, Pokemon etc.).</p>
                        <p>6b. Transform this code into a solution done with multidimensional arrays to track different properties of the characters. (Hint: remember the logic used for the automated creation of HTML).</p>
                        <div class="row">
                            <div class="col-6">
                                <h3>Solution 6a</h3>
                                <div class="alert alert-primary text-center" role="alert">
                                <?php
                                    $digimonallies = array(
                                        "DemiDevimon" => 2000,
                                        "Dokugumon" => 2000,
                                        "Phantomon" => 3000,
                                        "SkullMeramon" => 4000,
                                        "MegaSeadramon" => 5000,
                                        "Tuskmon" => 6000,
                                        "Bakemon" => 7000,
                                        "Snimon" => 8000,
                                        "Raremon" => 9000,
                                        "Gesomon" => 10000,
                                        "DarkTyrannomon" => 11000,
                                        "Mammothmon" => 12000);
                                        echo "<p>DemiDevimon has ". $digimonallies['DemiDevimon'] ." points.</p>";
                                        echo "<p>Dokugumon has ". $digimonallies['Dokugumon'] ." points.</p>";
                                        echo "<p>Phantomon has ". $digimonallies['Phantomon'] ." points.</p>";
                                        echo "<p>SkullMeramon has ". $digimonallies['SkullMeramon'] ." points.</p>";
                                        echo "<p>MegaSeadramon has ". $digimonallies['MegaSeadramon'] ." points.</p>";
                                        echo "<p>Tuskmon has ". $digimonallies['Tuskmon'] ." points.</p>";
                                        echo "<p>Bakemon has ". $digimonallies['Bakemon'] ." points.</p>";
                                        echo "<p>Snimon has ". $digimonallies['Snimon'] ." points.</p>";
                                        echo "<p>Raremon has ". $digimonallies['Raremon'] ." points.</p>";
                                        echo "<p>Gesomon has ". $digimonallies['Gesomon'] ." points.</p>";
                                        echo "<p>DarkTyrannomon has ".  $digimonallies['DarkTyrannomon'] ." points.</p>";
                                        echo "<p>Mammothmon has ". $digimonallies['Mammothmon'] ." points.</p>";
                                ?>
                                </div>
                                <h3>PHP Code</h3>
                                <pre class="border p-2">
                                    <code>
&lt;?php
$digimonallies = array(
    &quot;DemiDevimon&quot; =&gt; 2000,
    &quot;Dokugumon&quot; =&gt; 2000,
    &quot;Phantomon&quot; =&gt; 3000,
    &quot;SkullMeramon&quot; =&gt; 4000,
    &quot;MegaSeadramon&quot; =&gt; 5000,
    &quot;Tuskmon&quot; =&gt; 6000,
    &quot;Bakemon&quot; =&gt; 7000,
    &quot;Snimon&quot; =&gt; 8000,
    &quot;Raremon&quot; =&gt; 9000,
    &quot;Gesomon&quot; =&gt; 10000,
    &quot;DarkTyrannomon&quot; =&gt; 11000,
    &quot;Mammothmon&quot; =&gt; 12000);
    echo &quot;&lt;p&gt;DemiDevimon has &quot;. $digimonallies[&apos;DemiDevimon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;Dokugumon has &quot;. $digimonallies[&apos;Dokugumon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;Phantomon has &quot;. $digimonallies[&apos;Phantomon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;SkullMeramon has &quot;. $digimonallies[&apos;SkullMeramon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;MegaSeadramon has &quot;. $digimonallies[&apos;MegaSeadramon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;Tuskmon has &quot;. $digimonallies[&apos;Tuskmon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;Bakemon has &quot;. $digimonallies[&apos;Bakemon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;Snimon has &quot;. $digimonallies[&apos;Snimon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;Raremon has &quot;. $digimonallies[&apos;Raremon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;Gesomon has &quot;. $digimonallies[&apos;Gesomon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;DarkTyrannomon has &quot;.  $digimonallies[&apos;DarkTyrannomon&apos;] .&quot; points.&lt;/p&gt;&quot;;
    echo &quot;&lt;p&gt;Mammothmon has &quot;. $digimonallies[&apos;Mammothmon&apos;] .&quot; points.&lt;/p&gt;&quot;;
?&gt;
                                    </code>
                                </pre>
                            </div>
                            <div class="col-6">
                                <h3>Solution 6b</h3>
                                <div class="alert alert-primary text-center" role="alert">
                                <?php
                                    $digimonallies = array(
                                        "DemiDevimon" => array
                                            (
                                            "strength" => 100,
                                            "speed" => 30,
                                            "dexterity"  => 39
                                            ),
                                        "Dokugumon" =>  array
                                            (
                                            "strength" => 30,
                                            "speed" => 32,
                                            "dexterity"  => 29
                                            ),
                                        "Phantomon" =>  array
                                            (
                                            "strength" => 31 ,
                                            "speed" => 22,
                                            "dexterity" => 39
                                            ),
                                        "SkullMeramon" => array
                                            (
                                            "strength" => 70,
                                            "speed" => 80,
                                            "dexterity"  => 34
                                            ),
                                        "MegaSeadramon" =>  array
                                            (
                                            "strength" => 60,
                                            "speed" => 25,
                                            "dexterity"  => 45
                                            ),
                                        "Tuskmon" =>  array
                                            (
                                            "strength" => 90 ,
                                            "speed" => 70,
                                            "dexterity" => 60
                                            )
                                        );
                                        echo "<h4>DemiDevimon</h4>";
                                        echo "<p>DemiDevimon has this strength ".  $digimonallies[ 'DemiDevimon']['strength'] . "</p>" ;
                                        echo "<p>DemiDevimon has this speed ".  $digimonallies[ 'DemiDevimon']['speed'] . "</p>" ;
                                        echo "<p>DemiDevimon has this dexterity ".  $digimonallies[ 'DemiDevimon']['dexterity'] . "</p>" ;
                                        echo "<h4>Dokugumon</h4>";
                                        echo "<p>Dokugumon has this strength ".  $digimonallies[ 'Dokugumon']['strength'] . "</p>" ;
                                        echo "<p>Dokugumon has this speed ".  $digimonallies[ 'Dokugumon']['speed'] . "</p>" ;
                                        echo "<p>Dokugumon has this dexterity ".  $digimonallies[ 'Dokugumon']['dexterity'] . "</p>" ;
                                        echo "<h4>Phantomon</h4>";
                                        echo "<p>Phantomon has this strength ".  $digimonallies[ 'Phantomon']['strength'] . "</p>" ;
                                        echo "<p>Phantomon has this speed ".  $digimonallies[ 'Phantomon']['speed'] . "</p>" ;
                                        echo "<p>Phantomon has this dexterity ".  $digimonallies[ 'Phantomon']['dexterity'] . "</p>" ;
                                        echo "<h4>SkullMeramon</h4>";
                                        echo "<p>SkullMeramon has this strength ".  $digimonallies[ 'SkullMeramon']['strength'] . "</p>" ;
                                        echo "<p>SkullMeramon has this speed ".  $digimonallies[ 'SkullMeramon']['speed'] . "</p>" ;
                                        echo "<p>SkullMeramon has this dexterity ".  $digimonallies[ 'SkullMeramon']['dexterity'] . "</p>" ;
                                        echo "<h4>MegaSeadramon</h4>";
                                        echo "<p>MegaSeadramon has this strength ".  $digimonallies[ 'MegaSeadramon']['strength'] . "</p>" ;
                                        echo "<p>MegaSeadramon has this speed ".  $digimonallies[ 'MegaSeadramon']['speed'] . "</p>" ;
                                        echo "<p>MegaSeadramon has this dexterity ".  $digimonallies[ 'MegaSeadramon']['dexterity'] . "</p>" ;
                                        echo "<h4>Tuskmon</h4>";
                                        echo "<p>Tuskmon has this strength ".  $digimonallies[ 'Tuskmon']['strength'] . "</p>" ;
                                        echo "<p>Tuskmon has this speed ".  $digimonallies[ 'Tuskmon']['speed'] . "</p>" ;
                                        echo "<p>Tuskmon has this dexterity ".  $digimonallies[ 'Tuskmon']['dexterity'] . "</p>" ;
                                ?>
                                </div>
                                <h3>PHP Code</h3>
                                <pre class="border p-2">
                                    <code>
&lt;?php
$digimonallies = array(
    &quot;DemiDevimon&quot; =&gt; array
        (
        &quot;strength&quot; =&gt; 100,
        &quot;speed&quot; =&gt; 30,
        &quot;dexterity&quot;  =&gt; 39
        ),
    &quot;Dokugumon&quot; =&gt;  array
        (
        &quot;strength&quot; =&gt; 30,
        &quot;speed&quot; =&gt; 32,
        &quot;dexterity&quot;  =&gt; 29
        ),
    &quot;Phantomon&quot; =&gt;  array
        (
        &quot;strength&quot; =&gt; 31 ,
        &quot;speed&quot; =&gt; 22,
        &quot;dexterity&quot; =&gt; 39
        ),
    &quot;SkullMeramon&quot; =&gt; array
        (
        &quot;strength&quot; =&gt; 70,
        &quot;speed&quot; =&gt; 80,
        &quot;dexterity&quot;  =&gt; 34
        ),
    &quot;MegaSeadramon&quot; =&gt;  array
        (
        &quot;strength&quot; =&gt; 60,
        &quot;speed&quot; =&gt; 25,
        &quot;dexterity&quot;  =&gt; 45
        ),
    &quot;Tuskmon&quot; =&gt;  array
        (
        &quot;strength&quot; =&gt; 90 ,
        &quot;speed&quot; =&gt; 70,
        &quot;dexterity&quot; =&gt; 60
        )
    );
    echo &quot;&lt;h4&gt;DemiDevimon&lt;/h4&gt;&quot;;
    echo &quot;&lt;p&gt;DemiDevimon has this strength &quot;.  $digimonallies[ &apos;DemiDevimon&apos;][&apos;strength&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;DemiDevimon has this speed &quot;.  $digimonallies[ &apos;DemiDevimon&apos;][&apos;speed&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;DemiDevimon has this dexterity &quot;.  $digimonallies[ &apos;DemiDevimon&apos;][&apos;dexterity&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;h4&gt;Dokugumon&lt;/h4&gt;&quot;;
    echo &quot;&lt;p&gt;Dokugumon has this strength &quot;.  $digimonallies[ &apos;Dokugumon&apos;][&apos;strength&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;Dokugumon has this speed &quot;.  $digimonallies[ &apos;Dokugumon&apos;][&apos;speed&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;Dokugumon has this dexterity &quot;.  $digimonallies[ &apos;Dokugumon&apos;][&apos;dexterity&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;h4&gt;Phantomon&lt;/h4&gt;&quot;;
    echo &quot;&lt;p&gt;Phantomon has this strength &quot;.  $digimonallies[ &apos;Phantomon&apos;][&apos;strength&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;Phantomon has this speed &quot;.  $digimonallies[ &apos;Phantomon&apos;][&apos;speed&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;Phantomon has this dexterity &quot;.  $digimonallies[ &apos;Phantomon&apos;][&apos;dexterity&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;h4&gt;SkullMeramon&lt;/h4&gt;&quot;;
    echo &quot;&lt;p&gt;SkullMeramon has this strength &quot;.  $digimonallies[ &apos;SkullMeramon&apos;][&apos;strength&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;SkullMeramon has this speed &quot;.  $digimonallies[ &apos;SkullMeramon&apos;][&apos;speed&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;SkullMeramon has this dexterity &quot;.  $digimonallies[ &apos;SkullMeramon&apos;][&apos;dexterity&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;h4&gt;MegaSeadramon&lt;/h4&gt;&quot;;
    echo &quot;&lt;p&gt;MegaSeadramon has this strength &quot;.  $digimonallies[ &apos;MegaSeadramon&apos;][&apos;strength&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;MegaSeadramon has this speed &quot;.  $digimonallies[ &apos;MegaSeadramon&apos;][&apos;speed&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;MegaSeadramon has this dexterity &quot;.  $digimonallies[ &apos;MegaSeadramon&apos;][&apos;dexterity&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;h4&gt;Tuskmon&lt;/h4&gt;&quot;;
    echo &quot;&lt;p&gt;Tuskmon has this strength &quot;.  $digimonallies[ &apos;Tuskmon&apos;][&apos;strength&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;Tuskmon has this speed &quot;.  $digimonallies[ &apos;Tuskmon&apos;][&apos;speed&apos;] . &quot;&lt;/p&gt;&quot; ;
    echo &quot;&lt;p&gt;Tuskmon has this dexterity &quot;.  $digimonallies[ &apos;Tuskmon&apos;][&apos;dexterity&apos;] . &quot;&lt;/p&gt;&quot; ;
?&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>





