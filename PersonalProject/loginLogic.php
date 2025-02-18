<?php 
	
	session_start();

	include_once('config.php');



	if(isset($_POST['submit']))
	{

		$username = $_POST['username'];

		$password = $_POST['password'];

		if (empty($username) || empty($password)) {

			echo "<script>alert('Nuk i ke plotesu te gjitha fushat.')</script>";

		}
		else{

			$sql = "SELECT id, name, username, email, password, is_admin FROM users WHERE username=:username";
			$selectUser = $conn->prepare($sql);
			$selectUser->bindParam(":username", $username);
			$selectUser->execute();

			$data = $selectUser->fetch();


			if ($data == false) {
				
				echo "Useri nuk ekziston";
			}else{

				if (password_verify($password, $data['password'])) {

					$_SESSION['user_id'] = $data['id'];
					$_SESSION['username'] = $data['username'];
					$_SESSION['email'] = $data['email'];
					$_SESSION['name'] = $data['name'];
					$_SESSION['is_admin'] = $data['is_admin'];
					
					header('Location: addfood.php');
				}
				else{
					echo "Passwordi nuk eshte valid";
				}

				if ($_SESSION['is_admin'] == 0) {
                   header("Location: menu.php");
                }else{
                   
                   if ($_SESSION['is_admin'] == 1) {
                   header("Location: addfood.php");
               }

                }

			}

		}


	}


 ?>