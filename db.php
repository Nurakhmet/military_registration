<?php  
	try {
		$connection=new PDO('mysql:host=localhost;dbname=military', 'root', '');
	} catch (PDOException $e) {
		echo $e->getMessage();
		
	}
	function addUser($email, $password, $name, $surname){
		global $connection;
		$query=$connection->prepare("INSERT INTO users(id, email, password, name, surname) VALUES(NULL, :email,:password,:name,:surname)");
		$rows=$query->execute(array("email"=>$email, "password"=>$password,"name"=>$name,"surname"=>$surname));
		return $rows>0;
	}
	function getUser($email){
		global $connection;
		$query=$connection->prepare("SELECT * FROM users where email=:email");
		$query->execute(array("email"=>$email));
		$result=$query->fetch();
		return $result;
	}

		function getAllUser(){
		global $connection;
		$query=$connection->prepare("SELECT * FROM users");
		$query->execute(array());
		$result=$query->fetchAll();

		return $result;
	}


		function getAllUserTable(){
		global $connection;
		$query=$connection->prepare("SELECT * FROM users INTO OUTFILE 'data.txt'");
		$query->execute(array());
		$result=$query->fetchAll();

		return $result;
	}

	// function updateProfile($name, $surname, $id){
	// 	global $connection;
	// 	$query=$connection->prepare("UPDATE users 
	// 		SET name=:name,
	// 			surname=:surname
	// 			WHERE id=:id
	// 		 ");
	// 	$rows=$query->execute(array("name"=>$name, "surname"=>$surname,"id"=>$id));
	// 	return $rows>0;
	// }

	function updateProfile($name, $surname, $id, $uid, $fid, $photoId_url){
		global $connection;
		$query=$connection->prepare("UPDATE users 
			SET name=:name,
				surname=:surname, university_id =:uid, faculty_id=:fid, id=:id, photoId_url=:photoId_url
                                
				WHERE id=:id
			 ");
		$rows=$query->execute(array("name"=>$name, "surname"=>$surname,"id"=>$id,"uid"=>$uid,"fid"=>$fid, "photoId_url"=>$photoId_url));
		return $rows>0;
	}

	function updatePassword($password, $id){
		global $connection;
		$query=$connection->prepare("UPDATE users 
			SET password=:password
				WHERE id=:id
			 ");
		$rows=$query->execute(array("password"=>$password,"id"=>$id));
		return $rows>0;
	}


	function addPost($user_id, $title, $description, $full_text){
		global $connection;
		$query=$connection->prepare("INSERT INTO posts(id, user_id, title, description, full_text, post_date) VALUES(NULL, :user_id, :title,  :description, :full_text, now())");
		$rows=$query->execute(array("user_id"=>$user_id, "title"=>$title, "description"=>$description, "full_text"=>$full_text));
		return $rows>0;

	}


	function getPost($id){
		global $connection;
		$query=$connection->prepare("SELECT id, user_id, title, description, full_text, post_date FROM posts where user_id=:id order by post_date DESC");
		$query->execute(array("id"=>$id));
		$result=$query->fetchAll();
		return $result;
	}

	function getUsersPosts(){
		global $connection;
		$query=$connection->prepare("SELECT * FROM users LEFT OUTER JOIN posts
				ON users.id = posts.user_id order by post_date DESC");
		$query->execute();
		$result=$query->fetchAll();
		return $result;
	}

	function getUserId($id){
		global $connection;
		$query=$connection->prepare("SELECT * FROM users where id=:id");
		$query->execute(array("id"=>$id));
		$result=$query->fetch();
		return $result;
	}

	function updatePost($title, $description, $full_text, $user_id, $id){
		global $connection;
		$query=$connection->prepare("UPDATE posts 
			SET title=:title, description=:description, full_text=:full_text
				WHERE id=:id AND user_id=:user_id
			 ");
		$rows=$query->execute(array("title"=>$title, "description"=>$description, "full_text"=>$full_text, "user_id"=>$user_id,"id"=>$id));
		return $rows>0;
	}

	function deletePost($id,$user_id){
		global $connection;
		$query=$connection->prepare("DELETE FROM posts where id=:id AND user_id=:user_id");
		$rows=$query->execute(array("id"=>$id,"user_id"=>$user_id));
		return $rows>0;
	}

	function getUniversity($id){
		global $connection;
		$query=$connection->prepare("SELECT * FROM universities where id=:id");
		$query->execute(array("id"=>$id));
		$result=$query->fetch();
		return $result;
	}
          function getFaculty($id){
		global $connection;
		$query=$connection->prepare("SELECT * FROM faculties where id=:id");
		$query->execute(array("id"=>$id));
		$result=$query->fetch();
		return $result;
	}

	function getFaculties(){
		global $connection;
		$query=$connection->prepare("SELECT * FROM faculties");
		$query->execute();
		$result=$query->fetchAll();
		return $result;
	}
         function getUniversities(){
		global $connection;
		$query=$connection->prepare("SELECT * FROM universities");
		$query->execute();
		$result=$query->fetchAll();
		return $result;
	}

	function getMessages($id){
		global $connection;
		$query=$connection->prepare("SELECT * FROM messages where to_id=:id ORDER by msg_date DESC");
		$query->execute(array("id"=>$id));
		$result=$query->fetchAll();
		return $result;
	}

	function writeMessage($t, $msg, $to, $from){
		global $connection;
		$query=$connection->prepare("INSERT INTO messages(id,from_id,to_id,title,message,msg_date) VALUES(NULL, :fid,:tid,:t,:msg, NULL)");
		$rows=$query->execute(array("fid"=>$from, "tid"=>$to,"msg"=>$msg,"t"=>$t));
		return $rows>0;
	}



?>