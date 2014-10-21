<html>
  <head>
    <title>Test</title>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  </head>
  <body>
    <a href="create.html">Create Question</a>
<br/>
<br/>

<h1>List of Quiz</h1>

<?php

if ($handle = opendir('./json')) {
    // echo "Directory handle: $handle\n";
    // echo "Entries:\n";
    echo "<ul>";
    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        if($entry != "." && $entry != "..") {
            echo "<li><a href='quiz.html#".$entry."'>".$entry."</a></li>";
        }
    }
    echo "</ul>";

    // /* This is the WRONG way to loop over the directory. */
    // while ($entry = readdir($handle)) {
    //     echo "$entry\n";
    // }

    closedir($handle);
}
?>

  </body>
</html>
