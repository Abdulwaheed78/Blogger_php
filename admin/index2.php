<?php
include("conn.php");

if(isset($_POST['post'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category_id'];

    // Save the featured image in the post table
    if(isset($_FILES['featured_image']['name'])) {
        $featuredImageName = $_FILES['featured_image']['name'];
        $featuredImageTmpName = $_FILES['featured_image']['tmp_name'];
        $featuredImageFolder = "../images/" . $featuredImageName;
        move_uploaded_file($featuredImageTmpName, $featuredImageFolder);

        // Insert into post table
        mysqli_query($con, "INSERT INTO post (title, content, category_id, image) VALUES ('$title', '$content', $category, '$featuredImageName')");

        // Get the last inserted post id
        $post_id = mysqli_insert_id($con);

        // Save the array of images in the images table
        if(isset($_FILES['image']['name'])) {
            for ($i = 0; $i < count($_FILES['image']['name']); $i++) {
                $image_name = $_FILES['image']['name'][$i];
                $tmpname = $_FILES['image']['tmp_name'][$i];
                $folder = "../images/" . $image_name;
                move_uploaded_file($tmpname, $folder);

                // Insert into images table with the corresponding post_id
                mysqli_query($con, "INSERT INTO images (image, post_id) VALUES ('$image_name', $post_id)");
            }
        }

        header("location:index.php");
    } else {
        // Handle case where no featured image is uploaded
        echo "Please upload a featured image.";
    }
}
?>
