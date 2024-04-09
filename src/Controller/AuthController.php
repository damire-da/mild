<?php

namespace Mild\Controller;

use Mild\Core\Controller;
use PDO;

class AuthController extends Controller
{
    public function login(array $data)
    {
        $username = $data['username'];
        $password = $data['password'];

        $stmt = parent::$conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
          $_SESSION['user_id'] = $data['user_id'] = $user['id'];
          $_SESSION['username'] = $data['username'] = $user['username'];
          return $this->render('main.php', $data);
        } else {
          $data['error'] = 'Был введен неверный логин или пароль';
          return $this->render('main.php', $data);
        }
      }

      public function register(array $data)
      {
          $username = $data['username'];
          $email = $data['email'];
          $password = $data['password'];

          $stmt = parent::$conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
          $stmt->bindParam(':username', $username);
          $stmt->bindParam(':email', $email);
          $password = password_hash($password, PASSWORD_DEFAULT);
          $stmt->bindParam(':password', $password);
          $stmt->execute();

          return $this->render('main.php', $data);
      }
      public function logout()
      {
          session_destroy();
          header('Location: /');
      }
}
