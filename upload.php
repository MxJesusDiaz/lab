<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div class="container">
<div class="jumbotron bltr text-center">
<h2>
<?php
$target_dir = "imagen/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	if($imageFileType != "png" && $imageFileType != "jpg" ) {
    echo '<div class="alert alert-danger">Lo sentimos, solo formato PNG y JPG.</div>';
    $uploadOk = 0;
} else {
        $uploadOk = 1;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Esa imagen ya existe, por lo tanto ";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Tu imagen no fue subida";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "La imafen". basename( $_FILES["fileToUpload"]["name"]). " ha sido subida.";
    } else {
        echo
        "Sorry, there was an error uploading your file.";
    }
}
?>
</h2>
<br>
<p><a href="../" class="btn btn-success centro">Regresar</a></p>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
