<?php
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
                
				include('../model/config.php');
            
                $email = $_POST['email'];
                
                $sql = "SELECT division_id FROM division WHERE email='$email'";
                
                if ($result = mysqli_query($connect, $sql)) {
                    if(mysqli_num_rows($result) > 0) {
                        echo '<script type="text/javascript">';
					echo 'alert("The division is existing !");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
                    } else {
                        echo '<script type="text/javascript">';
					echo 'alert("No match!");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
                    }
				} else {
                    echo '<script type="text/javascript">';
					echo 'alert("Successful !");';
                    echo 'window.location="../view/pages/staff_center_back.php";';
					echo '</script>';
                }

            }
?>