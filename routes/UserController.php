<?php

class UserController{

/**
 * Checks if user have account,
 * if does, it logs him in
 */
	public function login(){

				//Make connection
				$db = Database::make();

        //Sanitize input_post
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Crypt password with md5
        $password = md5($post['password']);

        if(isset($post['login']))
				{
						$stmt = "SELECT * FROM users WHERE username = :username AND password = :password";
            $query = $db->prepare($stmt);
            $query->bindParam(':username', $post['username']);
          	$query->bindParam(':password', $password);
            $query->execute();
						if($query->rowCount() > 0){
							$_SESSION['data'] =
							[
								'logged' => true,
							];
	            Redirect::to('/');
						}else {
							Redirect::to('/login');
						}
          }
				}

	/**
	 * First checks if user with inserted email or username exists,
	 * if does exists, it refresh the page,
	 * if doesn't exists, it create new account and redirect him to login page
	 */
		public function register(){
				$db = Database::make();
				$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$password = md5($post['password']);

				if (isset($post['register'])){
						$stmt = "SELECT username, email FROM users WHERE username = :username OR email = :email";
						$query = $db->prepare($stmt);
						$query->bindParam(':username', $post['username']);
						$query->bindParam(':email', $post['email']);
						$query->execute();
						$count = count($query->fetchAll());
						if($count == 0){
								$stmt = "INSERT INTO users(username, email, password) VALUES(:username, :email, :password)";
		            $query = $db->prepare($stmt);
								$query->bindParam(':username', $post['username']);
		            $query->bindParam(':email', $post['email']);
		          	$query->bindParam(':password', $password);
		            $query->execute();
								if($db->lastInsertId()) {
										Redirect::to('/login');
								}
						} else{
							Redirect::to('/register');
					}
				}
			}

	/**
	 * Uset Session,
	 * Destroy session,
	 * Redirect user to login page
	 */
		public function logout(){
					unset($_SESSION['data']);
					session_destroy();
					Redirect::to('login');
		}
}
