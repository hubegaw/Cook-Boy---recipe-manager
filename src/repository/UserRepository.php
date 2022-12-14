<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email, string $password): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users u WHERE email = :email AND password =:password
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
        );
    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_details (name, email, password)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getEmail(),
            $user->getPassword()
        ]);
    }
}