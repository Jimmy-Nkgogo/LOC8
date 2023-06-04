<?php
    session_start();
    include_once("config.php");
    // sanitizing 
    $fName = trim($_POST['fName']);
    $lName = trim($_POST['lName']);
    $email = trim($_POST['email']);
    $email = strtolower($email);
    $password = $_POST['password'];

    $fName = mysqli_real_escape_string($conn, $fName);
    $lName = mysqli_real_escape_string($conn, $lName);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    if (!empty($fName) && !empty($lName) && !empty($email) && !empty($password)) {
        $fName = filter_var($fName,FILTER_SANITIZE_STRING);
        $lName = filter_var($lName,FILTER_SANITIZE_STRING);
        $password = password_hash($password, PASSWORD_DEFAULT);
        if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
            // checking if the email is in the database
            $sql = mysqli_query($conn,"SELECT email FROM `users` WHERE email ='{$email}'");
            if (mysqli_num_rows($sql) > 0 ) {
                echo "$email - This email already exists!";
            }
            else {
                // checking if user upload the file or not
                if (isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name']; //getting user uploaded image name
                    $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder

                    // let's explode the image and get the img extension (jpg)
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode); 

                    $extension = ['png','jpeg','jpg'];
                    if (in_array($img_ext,$extension) === true) {
                        $time = time(); // this will return current time
                                        // We need this time because when you uploading user image to in our folder, we rename user file with current time
                                        //  so all the image files will have a unique name
                        //moving the user image to our particular folder
                        $new_img_name = $time.$img_name;

                        // to check if the user's image was moved successfully.
                        if (move_uploaded_file($tmp_name,"Images/".$new_img_name)) {
                            $status = "Active now"; // Once user signed up, then his status will be active now
                            $random_id = rand(time(), 1000000);

                            // lets insert all user data inside the table
                            $sql2 = mysqli_query($conn, "INSERT INTO `users`(unique_id, first_name, last_name, email, password, image, status)
                                                VALUES ({$random_id}, '{$fName}','{$lName}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            if ($sql2) {
                                $sql3 = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '{$email}'");
                                if (mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id']; // using this session we use the unique_id in other php file
                                    echo "success";
                                }
                            } else {
                                echo "Something went wrong!";
                            }
                        }

                    } else {
                        echo "Please select an image file! - png, jpeg, jpg";
                    }
                } else {
                    echo "Please select an image file!";
                }
            }
        } else {
            echo "$email - is not a valid email!";
        }
    } else {
        echo "All inputs are required!";
    }
?>