<?php 

$db = mysqli_connect("localhost", "root", "", "nra"); 

$sql = "SELECT * FROM repository";

$result = mysqli_query($db, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

 if(isset($_POST['submit'])) {
   $filename = $_FILES['myfile']['name'];
   $destination = 'uploads-ex-1/'. $filename;

   $extension = pathinfo($filename, PATHINFO_EXTENSION);
   $file = $_FILES['myfile']['tmp_name'];
   $size = $_FILES['myfile']['size'];

   if($_FILES['myfile']['size']> 1000000) {
     echo "The file is too large";
   }
   
     if(move_uploaded_file($file, $destination)) {
       $sql = "INSERT INTO repository (name, size) VALUES ('$filename','$size')";

       if(mysqli_query($db, $sql)) {
           echo 'File uploaded successfully';
          }else{
            echo 'Something went wrong';
          }
     }
  }
 
if(isset($_GET['file_id'])) {

  $id = $_GET['file_id'];

  $sql = "SELECT * FROM repository  WHERE id=$id";

  $result = mysqli_query($db, $sql);
  $file = mysqli_fetch_assoc($result);

  $filepath = 'uploads-ex-1/' . $file['name'];

  if(file_exists($filepath)) {
    header ('Content-Type: application/octet-stream');
    header ('Content-Description: File Transfer');
    header ('Expires: 0');
    header ('Cache-control: must-revalidate');
    header ('Pragma: public');
    header ('Content-Length:'   . filesize('uploads-ex-1/'.$file['name']));
    readfile ('uploads-ex-1/'.$file['name']);

    $newCount = $file['downloads'] + 1;
    $updatQuery = "UPDATE repository SET downloads=$newCount WHERE id=$id";

    mysqli_query ($db, $updatQuery);
    exit;
  }
}
 
