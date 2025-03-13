<?php


function redirect($location)
{
    header("Location: $location");
    exit;
}


function IfItIsMethod($method=NULL)
{
    if ($_SERVER['REQUEST_METHOD'] == strtoupper($method)) {
        
        return true;
    }

    return false;
}


function query($qry)
{
    global $conn;
    return mysqli_query($conn,$qry);
}


function IsLoggedIn()
{
    if (isset($_SESSION['user_role'])) {
        
        return true;
    }

    return false;
}


function LoggedInUserId()
{
    if (IsLoggedIn()) {
        
        $username = $_SESSION["username"];
        $result = query("SELECT * FROM users WHERE username = '$username'");
        query_confirm($result);
        $result_array = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) >= 1) {
            return $result_array['user_id'];
        }

    }
    return false;
}



function UserLikedThisPost($post_id = "")
{
    $result = query("SELECT * FROM likes WHERE post_id = $post_id AND user_id = ".$_SESSION["user_id"]);
    query_confirm($result);
    return mysqli_num_rows($result) >= 1 ? true : false;
}


function GetPostLikes($post_id)
{
    $result = query("SELECT * FROM likes WHERE post_id = $post_id");
    query_confirm($result);
    echo mysqli_num_rows($result);
}



function CheckIfUserIsLoggedInAndRedirect($RedirecLocation=NULL)
{
    if (IsLoggedIn()) {
        redirect($RedirecLocation);
    }
}

function users_online()
{	

    if (isset($_GET['onlineusers'])) {
        global $conn;

        if (!$conn) {
            session_start();
            include '../includes/db.php';

            $session = session_id();
            $time = time();
            $time_out_in_seconds = 30;
            $time_out = $time - $time_out_in_seconds;

            $session_select_query = "SELECT * FROM users_online WHERE session = '$session'";
            $session_select_query_result = mysqli_query($conn,$session_select_query);
            $num_rows = mysqli_num_rows($session_select_query_result);


                if ($num_rows == NULL) {
                    
                    mysqli_query($conn,"INSERT INTO users_online (session, session_time) VALUES ('$session','$time')");

                }else{

                     mysqli_query($conn,"UPDATE users_online SET session_time = '$time' WHERE session = '$session'");
                }


            $users_online_query_result = mysqli_query($conn,"SELECT * FROM users_online WHERE session_time > '$time_out'");
            echo $count_users_online = mysqli_num_rows($users_online_query_result);

        }

    }
	
	

}

users_online();

function query_confirm($result)
{	
	global $conn;
	if (!$result) {

	    die("QUERY FAILED".mysqli_error($conn));
	}

}


function insert_categories()
{	
	global $conn;
	if (isset($_POST['submit'])) {
                                   
        $cat_title = $_REQUEST['cat_title'];

        if ($cat_title == "" || empty($cat_title)) {

            echo "This field should not be empty";

        }else{

            $insert_stmt = mysqli_prepare($conn,"INSERT INTO categories (cat_title) VALUES (?)");
            mysqli_stmt_bind_param($insert_stmt,"s",$cat_title);
            mysqli_stmt_execute($insert_stmt);

            if (!$insert_stmt) {
                die("QUERY FAILED".mysqli_error($conn));
            }


        }

    }
}



function find_all_categories()
{
	global $conn;
	 $query = "SELECT * FROM categories";
	 $query_result = mysqli_query($conn,$query);

	while ($query_result_row = mysqli_fetch_assoc($query_result)) { 

	    $cat_id = $query_result_row['cat_id'];
	    $cat_title = $query_result_row['cat_title'];

	        echo "<tr>
	            <td>$cat_id</td>
	            <td>$cat_title</td>
	            <td><a href='categories.php?delete=$cat_id'>DELETE</a></td>
	            <td><a href='categories.php?edit=$cat_id'>EDIT</a></td>
	        </tr>";
	    }
}



function record_count($table)
{
    global $conn;
    $post_query = "SELECT * FROM $table";
    $post_query_result = mysqli_query($conn,$post_query);

    return mysqli_num_rows($post_query_result);
}





function check_status($table,$column,$status)
{   
    global $conn;
    $post_published_query = "SELECT * FROM $table WHERE $column = '$status'";
    $post_published_query_result = mysqli_query($conn,$post_published_query);

    return mysqli_num_rows($post_published_query_result);
}


function FetchRecords($result)
{
    return mysqli_fetch_array($result);
}




function get_user_name()
{
        
    return (isset($_SESSION['username'])) ? $_SESSION['username'] : NULL;

}




function is_admin($user_id)
{
      if (IsLoggedIn()) {

            $result = query("SELECT user_role FROM users WHERE user_id = '$user_id'");
            $query_result_row = FetchRecords($result);

            if ($query_result_row['user_role'] == 'admin') {
                return true;
            }else{
                return false;
            }
      }

      return false;
      
}




function username_exists($username)
{   
    global $conn;

    $query = "SELECT username FROM users WHERE username = '$username'";
    $query_result = mysqli_query($conn,$query);
    query_confirm($query_result);

    if (mysqli_num_rows($query_result) > 0) {
        return true;
    }else{
        return false;
    }
   
}



function email_exists($user_email)
{   
    global $conn;

    $query = "SELECT user_email FROM users WHERE user_email = '$user_email'";
    $query_result = mysqli_query($conn,$query);
    query_confirm($query_result);

    if (mysqli_num_rows($query_result) > 0) {
        return true;
    }else{
        return false;
    }
   
}


function register_user($username,$email,$password)
{
    global $conn;

        $username = mysqli_real_escape_string($conn,$_REQUEST['username']);
        $email = mysqli_real_escape_string($conn,$_REQUEST['email']);
        $password = mysqli_real_escape_string($conn,$_REQUEST['password']); // $2y$10$iusesomecrazystrings22 in default database value

        $crypt_password = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));

        $insert_query = "INSERT INTO `users` (`username`,`user_email`,`user_password`,`user_role`) VALUES ('$username','$email','$crypt_password','subscriber')";

        $insert_query_result = mysqli_query($conn,$insert_query);
        query_confirm($insert_query_result);

}




function login_user($username,$password)
{
        global $conn;
        $query = "SELECT * FROM users WHERE username = '$username'";
        $query_result = mysqli_query($conn,$query);

        while ($query_result_row = mysqli_fetch_array($query_result)) {
            if (password_verify($password, $query_result_row['user_password'])) {
                
                $_SESSION['user_id'] = $query_result_row['user_id'];
                $_SESSION['username'] = $query_result_row['username'];
                $_SESSION['user_firstname'] = $query_result_row['user_firstname'];
                $_SESSION['user_lastname'] = $query_result_row['user_lastname'];
                $_SESSION['user_role'] = $query_result_row['user_role'];
                redirect("admin");

            }else{

                return false;

            }
        }
            
        return true;

}



?>