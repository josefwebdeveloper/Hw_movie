<?php
include "connection.php";


if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = false;
	echo "error";
}

$results = $mysqli->query("SELECT * FROM movies WHERE id=$id");
$output = "";
//$movie=$results->fetch_object();
$movies = $results->fetch_object();
//var_dump($movies);
$output = "<h1>$movies->name</h1><br><p>$movies->description</p><img class='image' src='$movies->image_url'>";
//echo $output;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MOVIE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
    <!--    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lato" rel="stylesheet">
    <style>


        .wrapper {
            margin: 50px auto;
            max-width: 600px;
            background: lightsteelblue;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        img {
            max-width: 100%;
            overflow: hidden;
        }

        h1, h5, p {
            text-align: center;
            padding: 5px;
            font-family: 'Gloria Hallelujah', cursive;

        }

        .button {
            width: 100px;
        }

        body {
            background: #BDBDB9;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <a class="btn btn-outline-primary button" href="index.php" role="button">Back</a>
    <a class="btn btn-outline-primary button" href="http://www.imdb.com/title/<?php echo $movies->imdb_id ?>/" role="button"
       style="float:right">To IMDB</a>
	<?php
	//	echo '<pre>',$output,'</pre>';
	echo $output;
//	echo $movies->imdb_id;
	?>
</div>
</body>
</html>