Project Path: /home/ramees/progs/php/sora

Source Tree:

```
sora
├── public
│   ├── images
│   │   └── sora-login.jpg
│   ├── css
│   │   ├── imports.css
│   │   └── styles.css
│   └── index.php
├── config
│   ├── database.php
│   ├── sample.php
│   ├── sora.sql
│   └── init.php
├── vendor
├── tests
│   └── sample.php
├── src
│   ├── views
│   │   └── sample.php
│   ├── core
│   │   └── application.php
│   ├── models
│   │   └── user.php
│   ├── controllers
│   │   ├── sample.php
│   │   └── user.php
│   └── helpers
│       └── sample.php
├── composer.json
└── README.md

```

`/home/ramees/progs/php/sora/public/css/styles.css`:

```````css
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
```````

`/home/ramees/progs/php/sora/public/index.php`:

```````php
<?php 
require __DIR__."/../vendor/autoload.php";


use Sora\Core\Application;
use Sora\Controllers\UserController;
use Sora\Controllers\HomeController;


$app = new Sora\Models/User();

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/login', [UserController::class, 'login']);
$app->router->post('/login', [UserController::class, 'login']);
$app->router->get('/register', [UserController::class, 'register']);
$app->router->post('/register', [UserController::class, 'register']);
$app->router->get('/logout', [UserController::class, 'logout']);

$app->run();


 
?>


```````

`/home/ramees/progs/php/sora/config/database.php`:

```````php
<?php



namespace Sora\Config;
/** Database class to return a database object */
class Database {
      public static function getConnection(): mysqli {

        $env = parse_ini_file("./.env");
        $username = $env['USERNAME'];
        $passwd = $env['PASSWORD'];
        $hostname = $env['HOSTNAME'];
        $database = $env['DATABASE'];


        /**
         * @var mysqli $mysqli object to be returned
         *
         */
        $mysqli = new \mysqli(
            $hostname,     // Database host (e.g., 'localhost')
            $username, // Database username
            $passwd, // Database password
            $database  // Database name
        );

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }
}

?>

```````

`/home/ramees/progs/php/sora/config/sora.sql`:

```````sql
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2024 at 04:56 PM
-- Server version: 11.4.2-MariaDB
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sora`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `follower_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `idx_comments_post_id` (`post_id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`follower_id`,`followed_id`),
  ADD KEY `idx_follows_follower_id` (`follower_id`),
  ADD KEY `idx_follows_followed_id` (`followed_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`post_id`),
  ADD KEY `idx_likes_post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_posts_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `firstname` (`firstname`,`lastname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_ibfk_1` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `follows_ibfk_2` FOREIGN KEY (`followed_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```````

`/home/ramees/progs/php/sora/config/init.php`:

```````php
<?php

define("ROOT", __DIR__."/../../");
define("APPROOT", __DIR__."/../../public/");

?>

```````

`/home/ramees/progs/php/sora/src/core/application.php`:

```````php
<?php

namespace Sora\Core;

class Application {
  public $router;


  public function __construct(){
    $router = new router();
  }

  public function run(){
    $this->router->dispatch();
  }
}
?>

```````

`/home/ramees/progs/php/sora/src/models/user.php`:

```````php
<?php                                         
namespace Sora\Models;
require_once __DIR__."../../vendor/autoload.php"; 
/** User class for handling user-related operations                                       
 */

class User {  

		/** @var mysqli $db Database connection object */                                                  
	  private $db;    

		/**                                                                                     
		* Constructor for User Class                                                                                                                                                 
		* @param mysqli $db The database connection object 
		*/                                                                                     
		public function __construct(mysqli $db ) {                                                        
		$this->db = $db;                                                                        
		} 

		/**                                                                                     
		* Register a new user                                                                                                                                                     
		* @param string[] $data An associative array containing user registration data.           
		*                     Expected keys: 'firstName', 'LastName',        
		*                                     'username', 'email',           
		*                                     'password', 'confirmPassword'.                                                                                                                   
		* @return (bool|string[]) An associative array with keys:                                        
		*             'success' (bool) - Whether the registration was successful.              
		*             'error' (string[])  - Any error messages if registration failed.            
		*/                                                                                     
		public function register(array $data): array {              
      $validatedResult = validateUserRegistration($data);
      if (!$validatedResult['isValid']) {
				return [
					'success' => 'false',
					'error'   => $validatedResult['error'],
					'user' => null
				];
			}
			$username  = $data['username'];
			$email = $data['email'];
			$firstName = $data['firstName'];
			$lastName = $data['lastName'];
			$password = $data['password'];
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);

			$stmt = $this->db->prepare("insert into users('firstname', 'lastname', 'username', 'email', 'password') 
				                          values(?,?,?,?,?)");
			$stmt->bind_param("sssss", $firstName, $lastName, $username, $email, $hashed_password);
			if($stmt->execute()){
				$query = $this->db->prepare("select id from users where username = ?");
				$query->bind_param("s", $username);
				$query->execute();
				$result = $query->get_result();
				$user = $result->fetch_assoc();
				return [
					'success' => true,
					'error'   => null,
					'user' => $user,
				];
			}
			else {
				return [
					'success' => false,
					'error'   => ["cannot register user try again later."],
					'user' => null
				];
			}

		}                                                                                       

		/**                                                                                     
		* Authenticate a user                                                                  
		* @param string $username The username of the user                                     
		* @param string $password The 	password of the user                                    
		* @return string[] An array of user data if login is successful or null if it fails.
		* Expected keys: 'success' (bool),
		*                 'message' (string) - Login status message. 
		*                 'user'  (array) - user details.
		*/                                                                                     
		public function authenticate(string $username, string $password): ?array { 
       $stmt = $this->db->prepare("SELECT id, username, password FROM users where username = ?");
       $stmt->bind_param("s", $username);     
 			 $stmt->execute();
 			 $result = $stmt->get_result();

 			 if ($result->num_rows() === 0) {
				 return [
					 'success' => false,
					 'message' => 'INVALID_DETAILS_ERROR',
				 ];
			 } 

			 $user = result->fetch_assoc();

			 if(password_verify($password, $user['password'])) {

				 return [
					 'success' => true,
					 'message' => 'LOGIN_SUCCESSFUL',
					 'user' => $user,
				 ];
				 
			 }
			 else {
				 return [
					 'success' => false,
					 'message' => 'INVALID_PASSWORD_ERROR',
				 ];
			 }
		                                                               
		}


    


		/**                                                                                     
		* Find a user by email address                                                         
		* @param string $email email address to search for                                     
		* return string[]|null An array of user data if found, or null if not found.              
		*/                                                                                     
		public function findUserByEmail(string $email): array|null {                                               
			$stmt = $this->db->prepare("select * from users where email=? limit 1"); 
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows() === 0) {
				return null;
			}
			else {
				$user = $result->fetch_assoc();
				return $user;
			}
		}                                                                                       
	
		/**                                                                                     
		* validate user registration data.                                                     
		* @param string[] $data An associative array containing user registration data.           
		*                    Expected keys: 'firstName', 'LastName',         
		*                                    'username', 'email' ,            
		*                                     'password', 'confirmPassword'.                             
		* @return (bool|string[])[] An associative array with keys:                                        
		*               'isValid' (bool) - Whether the data is valid.                          
		*                'error' (?array) - Any validation error messages.                      
		*/                                                                                     
		private function validateUserRegistration(array $data): array {                                
			$username = $data['username'];
			$firstName = $data['firstName'];
			$lastName = $data['lastName'];
			$password = $data['password'];
			return [
				'isValid' => true,
				'error' => null
			];

		} 

}                                                                                         
                                                                                      
                                                                                      
?>

```````

`/home/ramees/progs/php/sora/src/controllers/user.php`:

```````php
<?php

namespace Sora\Controllers;
require_once __DIR__ . "../../vendor/autoload.php";


/** Controller class for User Model
 *
 */
class userController {

  /**@var Sora\Models\User $userModel user model object
   */
  private $userModel;
  
  /**Constructor for User Controller
   */

  public function __construct() {
  /** @var mysqli $db object returned from Sora\Config\Database::get_connection()
   */
  $db = Sora\Config\Database::get_connection();
  $this->userModel = new Sora\Models\User($db);

    
  }

  public function logout() {
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
  }

  public function isLoggedin(): bool{
    return isset($_SESSION['user_id']);
  }


  public function register(): array {
    $response =  $userModel->register($_POST);
    if($respone['success'] === true) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['user_id'] = $response['user']['id'];
      header('Location: home.php');
    }
    else{
      $errors = $response['error'];
      include 'views/register.php';
    }
  }

  public function login() {
    $username = $_POST['username'];
    $passwd = $_POST['password'];
    $this->userModel->authenticate($username, $password);
  }

}

```````

`/home/ramees/progs/php/sora/composer.json`:

```````json
{   "name": "7h3cyb3rm0nk/sora",
    "description": "Micro blogging Social media platfrom for cs department U.C College",
    "type": "project",
    "require-dev": {
        "phpunit/phpunit": "^11"
    },

    "autoload": {
        "psr-4": {
            "Sora\\": "/src/"
        }
    }
}

```````

`/home/ramees/progs/php/sora/README.md`:

```````md
# സൊറ 
Micro blogging Social media platform for cs department U.C College

```````