<!DOCTYPE html>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="fileToUpload">Choose a file:</label>
    <input type="file" name="fileToUpload" id="fileToUpload" />
    <input type="submit" value="Upload File" name="submit" />
</form>

<?php
if(isset($_POST['submit'])){
    $file_name = $_FILES['fileToUpload']['name'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type']; 

    // Check if the file name is not empty and the file was uploaded successfully
    if(!empty($file_name) && is_uploaded_file($file_tmp)){
        $upload_path = "images" . $file_name;
        if(move_uploaded_file($file_tmp, $upload_path)){
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Please choose a file to upload.";
    }
}
?>

</body>
</html>
