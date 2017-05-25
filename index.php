<?php
include "connection.php";

$results = $mysqli->query("SELECT * FROM movies ORDER BY year DESC");

$output = "";
while ($movie = $results->fetch_object()) {
	$output .= "<a class='list-group-item' href='movie_view.php?id=$movie->id'>
<img src='$movie->image_url'>&emsp;&emsp;$movie->name&emsp;($movie->year)</a>";
}
//$output = "<ul>$output</ul>";
//echo $output;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MovieMain</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
            integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>

    <style>
        .wrapper {
            margin: 50px auto;
            max-width: 600px;
            /*background: lightsteelblue;*/
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        a {
            color: black;
            text-align: right;
        }
        a:hover{
            background: #B0C4DE;
        }

        img {
            max-width: 10%;
            overflow: hidden;
            /*float: right;*/
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            /*padding-right: 15px;*/
        }
        body{
            background: #BDBDB9;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <div class="list-group">
		<?php
		//				echo '<pre>',$output,'</pre>';
		echo $output;


		?>
    </div>

</div>
</body>
</html>
