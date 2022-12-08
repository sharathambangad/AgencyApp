<?php
include('security.php');

$image_upload_path = "uploads/images/";
$image_ext = array('image/jpg', 'image/jpeg', 'image/png');

/***** Enquiries (contact form) ******/
if (isset($_POST['enq_delete_btn'])) {

    $id = mysqli_real_escape_string($connection, $_POST['delete_id']);

    $query = "DELETE FROM contact_form WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo 200;
    } else {
        echo 500;
    }
}

// add insert query section once FE completes
/*------------------------------------------------------- Enquiries END---------------------------------------------------------------------------*/

/*  About US (team profile)  */

//INSERT DATA
if (isset($_POST['save_team_btn'])) {

    $name = mysqli_real_escape_string($connection, $_POST['team_member_name']);
    $desg = mysqli_real_escape_string($connection, $_POST['team_member_desg']);
    $email = mysqli_real_escape_string($connection, $_POST['team_member_email']);
    $fb = mysqli_real_escape_string($connection, $_POST['team_member_facebook']);
    $ig = mysqli_real_escape_string($connection, $_POST['team_member_instagram']);
    $image = $_FILES['team_member_image']['name'];

    //email id duplication  
    $email_query = "SELECT email FROM about_us WHERE email = '$email'";
    $email_query_run = mysqli_query($connection, $email_query);
    $email_count = mysqli_num_rows($email_query_run);

    if ($email_count == 0) {

        $image_validate_ext = in_array($_FILES['team_member_image']['type'], $image_ext);

        if ($image_validate_ext) {
            $info = pathinfo($_FILES['team_member_image']['name']);
            $ext = $info['extension'];
            $file_name = time() . '.' . $ext;

            $query = "INSERT INTO about_us (`name`,`designation`,`image`,`email`,`fb_url`,`ig_url`) VALUES ('$name','$desg','$file_name','$email','$fb','$ig')";
            $query_run = mysqli_query($connection, $query);

            if ($query_run) {
                move_uploaded_file($_FILES['team_member_image']['tmp_name'], $image_upload_path . "team/" . $file_name);
                $_SESSION['status'] = "Profile Added Successfully";
                $_SESSION['status_code'] = "success";
                header('Location: about_us.php');
            } else {
                $_SESSION['status'] = "Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: about_us.php');
            }
        } else {
            $_SESSION['status'] = "File format not supported";
            $_SESSION['status_code'] = "warning";
            header('Location: about_us.php');
        }
    } else {
        $_SESSION['status'] = "e-mail already exists";
        $_SESSION['status_code'] = "warning";
        header('Location: about_us.php');
    }
}

//EDIT or UPDATE 
if (isset($_POST['update_team_btn'])) {

    $edit_id = mysqli_real_escape_string($connection, $_POST['edit_team_id']);
    $edit_name = mysqli_real_escape_string($connection, $_POST['edit_team_member_name']);
    $edit_desg = mysqli_real_escape_string($connection, $_POST['edit_team_member_desg']);
    $edit_email = mysqli_real_escape_string($connection, $_POST['edit_team_member_email']);
    $edit_fb = mysqli_real_escape_string($connection, $_POST['edit_team_member_facebook']);
    $edit_ig = mysqli_real_escape_string($connection, $_POST['edit_team_member_instagram']);
    $edit_image = $_FILES['team_member_image']['name'];


    $email_query = "SELECT id,email FROM about_us WHERE email = '$edit_email'";
    $email_query_run = mysqli_query($connection, $email_query);
    $email_count = mysqli_num_rows($email_query_run);

    foreach ($email_query_run as $email) {
        $db_user_id = $email['id'];
    }

    if ($db_user_id == NULL) {
        $db_user_id = $edit_id;
    }

    if (($email_count <= 1) && ($edit_id == $db_user_id)) {
        $image_query = "SELECT * from about_us WHERE id = '$edit_id'";
        $image_query_run = mysqli_query($connection, $image_query);

        foreach ($image_query_run as $image_row) {
            $file_name = $image_row['image'];
            if ($edit_image != NULL) {
                $image_validate_ext = in_array($_FILES['team_member_image']['type'], $image_ext);

                if (!$image_validate_ext) {
                    $_SESSION['status'] = "File format not supported";
                    $_SESSION['status_code'] = "warning";
                    header('Location: about_us.php');
                    exit(0);
                }
                //update with new image and delete old image
                elseif ($image_path = $image_upload_path . "team/" . $image_row['image']) {
                    unlink($image_path);
                    $info = pathinfo($_FILES['team_member_image']['name']);
                    $ext = $info['extension'];
                    $file_name = time() . '.' . $ext;
                }
            }
        }


        $query = "UPDATE about_us SET name='$edit_name', designation='$edit_desg', email='$edit_email', fb_url='$edit_fb', ig_url='$edit_ig', image='$file_name' WHERE id = '$edit_id'";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            if ($edit_image == NULL) {
                $_SESSION['status'] = "Profile Updated Successfully";
                $_SESSION['status_code'] = "success";
                header('Location: about_us.php');
            } else {
                move_uploaded_file($_FILES['team_member_image']['tmp_name'], $image_upload_path . "team/" . $file_name);
                $_SESSION['status'] = "Profile Updated Successfully";
                $_SESSION['status_code'] = "success";
                header('Location: about_us.php');
            }
        } else {
            $_SESSION['status'] = "Profile Not Updated";
            $_SESSION['status_code'] = "error";
            header('Location: about_us.php');
        }
    } else {
        $_SESSION['status'] = "e-mail already exists";
        $_SESSION['status_code'] = "warning";
        header('Location: about_us.php');
    }
}

//DELETE DATA
if (isset($_POST['team_delete_btn'])) {
    //add this everywhere
    $id = mysqli_real_escape_string($connection, $_POST['team_delete_id']);

    $delete_image_query = "SELECT * from about_us WHERE id = '$id'";
    $delete_image_query_run = mysqli_query($connection, $delete_image_query);

    if ($delete_image_query_run) {
        foreach ($delete_image_query_run as $image_row) {
            $delete_image = $image_row['image'];
        }
    }

    $delete_image_path = $image_upload_path . "team/" . $delete_image;

    $query = "DELETE from about_us WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        if (file_exists($delete_image_path)) {
            unlink($delete_image_path);
        }
        echo 200;
    } else {
        echo 500;
    }
}

/*------------------------------------------------------- ABOUT US END---------------------------------------------------------------------------*/


/*  Portfolio */

//INSERT DATA
if (isset($_POST['save_portfolio_btn'])) {
    $client_name = mysqli_real_escape_string($connection, $_POST['portfolio_client_name']);
    $client_image = $_FILES['portfolio_client_image']['name'];

    $image_validate_ext = in_array($_FILES['portfolio_client_image']['type'], $image_ext);

    if ($image_validate_ext) {

        $info = pathinfo($_FILES['portfolio_client_image']['name']);
        $ext = $info['extension'];
        $file_name = time() . '.' . $ext;

        $query = "INSERT INTO portfolio (`client_name`,`client_image`) VALUES ('$client_name','$file_name')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            move_uploaded_file($_FILES['portfolio_client_image']['tmp_name'], $image_upload_path . "portfolio/" . $file_name);
            $_SESSION['status'] = "Portfolio Added Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: portfolios.php');
        } else {
            $_SESSION['status'] = "Profile Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: portfolios.php');
        }
    } else {
        $_SESSION['status'] = "File format not supported";
        $_SESSION['status_code'] = "warning";
        header('Location: portfolios.php');
    }
}

//EDIT or UPDATE 
if (isset($_POST['update_portfolio_btn'])) {

    $edit_id = mysqli_real_escape_string($connection, $_POST['edit_portfolio_id']);
    $edit_client_name = mysqli_real_escape_string($connection, $_POST['edit_portfolio_client_name']);
    $edit_client_image = $_FILES['portfolio_client_image']['name'];

    $image_query = "SELECT * from portfolio WHERE id = '$edit_id'";
    $image_query_run = mysqli_query($connection, $image_query);

    foreach ($image_query_run as $image_row) {
        $file_name = $image_row['client_image'];
        if ($edit_client_image != NULL) {
            $image_validate_ext = in_array($_FILES['portfolio_client_image']['type'], $image_ext);

            if (!$image_validate_ext) {
                $_SESSION['status'] = "File format not supported";
                $_SESSION['status_code'] = "warning";
                header('Location: portfolios.php');
                exit(0);
            }
            //update with new image and delete old image
            elseif ($image_path = $image_upload_path . "portfolio/" . $image_row['client_image']) {
                unlink($image_path);
                $info = pathinfo($_FILES['portfolio_client_image']['name']);
                $ext = $info['extension'];
                $file_name = time() . '.' . $ext;
            }
        }
    }


    $query = "UPDATE portfolio SET client_name ='$edit_client_name', client_image='$file_name' WHERE id = '$edit_id'";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        if ($edit_client_image == NULL) {
            $_SESSION['status'] = "Portfolio Updated Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: portfolios.php');
        } else {
            move_uploaded_file($_FILES['portfolio_client_image']['tmp_name'], $image_upload_path . "portfolio/" . $file_name);
            $_SESSION['status'] = "Portfolio Updated Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: portfolios.php');
        }
    } else {
        $_SESSION['status'] = "Portfolio Not Updated";
        $_SESSION['status_code'] = "error";
        header('Location: portfolios.php');
    }
}

//DELETE DATA
if (isset($_POST['portfolio_delete_btn'])) {
    $id = mysqli_real_escape_string($connection, $_POST['portfolio_delete_id']);

    $delete_image_query = "SELECT * from portfolio WHERE id = '$id'";
    $delete_image_query_run = mysqli_query($connection, $delete_image_query);

    if ($delete_image_query_run) {
        foreach ($delete_image_query_run as $image_row) {
            $delete_image = $image_row['client_image'];
        }
    }

    $delete_image_path = $image_upload_path . "portfolio/" . $delete_image;

    $query = "DELETE from portfolio WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        if (file_exists($delete_image_path)) {
            unlink($delete_image_path);
        }
        echo 200;
    } else {
        echo 500;
    }
}

/*------------------------------------------------------- PORTFOLIO US END---------------------------------------------------------------------------*/

/*  Careers */

//INSERT DATA
if (isset($_POST['save_careers_btn'])) {
    $vacancy = mysqli_real_escape_string($connection, $_POST['careers_vaccancy_name']);
    $poster_image = $_FILES['careers_poster_image']['name'];

    $image_validate_ext = in_array($_FILES['careers_poster_image']['type'], $image_ext);

    if ($image_validate_ext) {

        $info = pathinfo($_FILES['careers_poster_image']['name']);
        $ext = $info['extension'];
        $file_name = time() . '.' . $ext;

        $query = "INSERT INTO careers (`post`,`post_image`) VALUES ('$vacancy','$file_name')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            move_uploaded_file($_FILES['careers_poster_image']['tmp_name'], $image_upload_path . "career/" . $file_name);
            $_SESSION['status'] = "Vaccancy Added Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: careers.php');
        } else {
            $_SESSION['status'] = "Vaccancy Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: careers.php');
        }
    } else {
        $_SESSION['status'] = "File format not supported";
        $_SESSION['status_code'] = "warning";
        header('Location: careers.php');
    }
}

//EDIT or UPDATE 
if (isset($_POST['update_careers_btn'])) {

    $edit_id = mysqli_real_escape_string($connection, $_POST['edit_careers_id']);
    $edit_vacancy = mysqli_real_escape_string($connection, $_POST['edit_careers_vaccancy_name']);
    $edit_poster_image = $_FILES['careers_poster_image']['name'];

    $image_query = "SELECT * from careers WHERE id = '$edit_id'";
    $image_query_run = mysqli_query($connection, $image_query);

    foreach ($image_query_run as $image_row) {
        $file_name = $image_row['post_image'];
        if ($edit_poster_image != NULL) {

            $image_validate_ext = in_array($_FILES['careers_poster_image']['type'], $image_ext);

            if (!$image_validate_ext) {
                $_SESSION['status'] = "File format not supported";
                $_SESSION['status_code'] = "warning";
                header('Location: careers.php');
                exit(0);
            }
            //update with new image and delete old image
            elseif ($image_path = $image_upload_path . "career/" . $image_row['post_image']) {
                unlink($image_path);
                $info = pathinfo($_FILES['careers_poster_image']['name']);
                $ext = $info['extension'];
                $file_name = time() . '.' . $ext;
            }
        }
    }


    $query = "UPDATE careers SET post ='$edit_vacancy', post_image ='$file_name' WHERE id = '$edit_id'";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        if ($edit_poster_image == NULL) {
            $_SESSION['status'] = "Vaccancy Updated Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: careers.php');
        } else {
            move_uploaded_file($_FILES['careers_poster_image']['tmp_name'], $image_upload_path . "career/" . $file_name);
            $_SESSION['status'] = "Vaccancy Updated Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: careers.php');
        }
    } else {
        $_SESSION['status'] = "Vaccancy Not Updated";
        $_SESSION['status_code'] = "error";
        header('Location: careers.php');
    }
}

//DELETE DATA
if (isset($_POST['careers_delete_btn'])) {
    $id = mysqli_real_escape_string($connection, $_POST['careers_delete_id']);
    $delete_image_query = "SELECT * from careers WHERE id = '$id'";
    $delete_image_query_run = mysqli_query($connection, $delete_image_query);

    if ($delete_image_query_run) {
        foreach ($delete_image_query_run as $image_row) {
            $delete_image = $image_row['post_image'];
        }
    }

    $delete_image_path = $image_upload_path . "career/" . $delete_image;

    $query = "DELETE from careers WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        if (file_exists($delete_image_path)) {
            unlink($delete_image_path);
        }
        echo 200;
    } else {
        echo 500;
    }
}

/* ----------------------------- END CAREERS ------------------------------*/

/* SERVICE */

if (isset($_POST['save_service_btn'])) {

    $name = mysqli_real_escape_string($connection, $_POST['service_name']);
    $short_desc = mysqli_real_escape_string($connection, $_POST['service_short_desc']);
    $desc = mysqli_real_escape_string($connection, $_POST['service_desc']);
    $seo_keys = mysqli_real_escape_string($connection, $_POST['service_seo_keys']);
    $icon_svg = mysqli_real_escape_string($connection, $_POST['service_icon']);
    $image = $_FILES['service_image']['name'];


    $image_validate_ext = in_array($_FILES['service_image']['type'], $image_ext);

    if ($image_validate_ext) {
        $info = pathinfo($_FILES['service_image']['name']);
        $ext = $info['extension'];
        $file_name = time() . '.' . $ext;

        $query = "INSERT INTO service (`service_name`,`service_image`,`short_desc`,`description`,`seo_keywords`,`icon_svg`) VALUES ('$name','$file_name','$short_desc','$desc','$seo_keys','$icon_svg')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            move_uploaded_file($_FILES['service_image']['tmp_name'], $image_upload_path . "services/" . $file_name);
            $_SESSION['status'] = "Service Added Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: service.php');
        } else {
            $_SESSION['status'] = "service Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: service.php');
        }
    } else {
        $_SESSION['status'] = "File format not supported";
        $_SESSION['status_code'] = "warning";
        header('Location: service.php');
    }
   
}

if (isset($_POST['update_service_btn'])) {

    $edit_id = mysqli_real_escape_string($connection, $_POST['edit_service_id']);
    $edit_service_name = mysqli_real_escape_string($connection, $_POST['edit_service_name']);
    $edit_service_short_desc = mysqli_real_escape_string($connection, $_POST['edit_service_short_desc']);
    $edit_service_desc = mysqli_real_escape_string($connection, $_POST['edit_service_desc']);
    $edit_service_svg = mysqli_real_escape_string($connection, $_POST['edit_service_svg']);
    $edit_service_seo = mysqli_real_escape_string($connection, $_POST['edit_service_seo_keys']);
    
    $edit_service_image = $_FILES['service_image']['name'];

    $image_query = "SELECT * from service WHERE id = '$edit_id'";
    $image_query_run = mysqli_query($connection, $image_query);

    foreach ($image_query_run as $image_row) {
        $file_name = $image_row['service_image'];
        if ($edit_service_image != NULL) {

            $image_validate_ext = in_array($_FILES['service_image']['type'], $image_ext);

            if (!$image_validate_ext) {
                $_SESSION['status'] = "File format not supported";
                $_SESSION['status_code'] = "warning";
                header('Location: service.php');
                exit(0);
            }
            //update with new image and delete old image
            elseif ($image_path = $image_upload_path . "services/" . $image_row['service_image']) {
                unlink($image_path);
                $info = pathinfo($_FILES['service_image']['name']);
                $ext = $info['extension'];
                $file_name = time() . '.' . $ext;
            }
        }
    }

       
    $query = "UPDATE service SET service_name ='$edit_service_name', service_image ='$file_name', short_desc ='$edit_service_short_desc',
    description ='$edit_service_desc', seo_keywords ='$edit_service_seo', icon_svg ='$edit_service_svg' WHERE id = '$edit_id'";

    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        if ($edit_service_image == NULL) {
            $_SESSION['status'] = "Service Updated Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: service.php');
        } else {
            move_uploaded_file($_FILES['service_image']['tmp_name'], $image_upload_path . "services/" . $file_name);
            $_SESSION['status'] = "Service Updated Successfully";
            $_SESSION['status_code'] = "success";
            header('Location: service.php');
        }
    } else {
        $_SESSION['status'] = "Service Not Updated";
        $_SESSION['status_code'] = "error";
        header('Location: service.php');
    }
}

//DELETE SERVICE
if (isset($_POST['service_delete_btn'])) {
    $id = mysqli_real_escape_string($connection, $_POST['service_delete_id']);
    $delete_image_query = "SELECT * from service WHERE id = '$id'";
    $delete_image_query_run = mysqli_query($connection, $delete_image_query);

    if ($delete_image_query_run) {
        foreach ($delete_image_query_run as $image_row) {
            $delete_image = $image_row['service_image'];
        }
    }

    $delete_image_path = $image_upload_path . "services/" . $delete_image;

    $query = "DELETE from service WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        if (file_exists($delete_image_path)) {
            unlink($delete_image_path);
        }
        echo 200;
    } else {
        echo 500;
    }
}

/* ----------------------------- END SERVICE ------------------------------*/

/* ADDRESS */
if (isset($_POST['update_address_btn'])) {

    $address_about = mysqli_real_escape_string($connection, $_POST['about']);
    $address_mob1 = mysqli_real_escape_string($connection, $_POST['mobile1']);
    $address_mob2 = mysqli_real_escape_string($connection, $_POST['mobile2']);
    $address_email = mysqli_real_escape_string($connection, $_POST['email']);
    $address_add = mysqli_real_escape_string($connection, $_POST['address']);
    $address_twitter = mysqli_real_escape_string($connection, $_POST['twitter']);
    $address_facebook = mysqli_real_escape_string($connection, $_POST['facebook']);
    $address_linkedin = mysqli_real_escape_string($connection, $_POST['linkedin']);
    $address_pintrest = mysqli_real_escape_string($connection, $_POST['pintrest']);
    $address_discord = mysqli_real_escape_string($connection, $_POST['discord']);
    $address_google = mysqli_real_escape_string($connection, $_POST['google']);



    $query = "UPDATE address SET about_desc ='$address_about', mobile1 ='$address_mob1', mobile2 ='$address_mob2', email ='$address_email'
    , address ='$address_add', twitter ='$address_twitter', facebook ='$address_facebook', linkedin ='$address_linkedin', pintrest ='$address_pintrest'
    , discord ='$address_discord', google ='$address_google' WHERE id = '1'";

    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        $_SESSION['status'] = "Address Updated Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: address.php');
    } else {
        $_SESSION['status'] = "Address Not Updated";
        $_SESSION['status_code'] = "error";
        header('Location: address.php');
    }
}
