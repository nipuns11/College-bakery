<?php 
	require_once 'WPEateryDAO.php';
	require_once 'AdminUser.php';
	session_start();
    if(isset($_SESSION['websiteUser'])){
        if($_SESSION['websiteUser']->isAuthenticated()){
            session_write_close();
            header('Location:restricted.php');
        }
    }
    $missingFields = false;
	if(isset($_POST['submit'])){
		if(isset($_POST['username']) && isset($_POST['password'])){
			if($_POST['username'] != '' && $_POST['password'] != ''){
				$wpeaterydao = new WPEateryDAO();
				$adminuser = $wpeaterydao->add_user($_POST['username'], $_POST['password']);
				if($adminuser != WPEateryDAO::$DATABASE_ERROR){
					$userAdded = true;
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Adding a user</title>
	</head>
	<body>
	<?php if(isset($userAdded)){
			if($userAdded){
				echo 'User Added!';
			}
	}?>
		<form name="adduser" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			<table>
				<tr>
					<td>Username:</td>
					<td><input name="username" id="username" type="text"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" id="submit" value="Add a User"></td>
				</tr>
			</table>
		</form>
	</body>
</html>