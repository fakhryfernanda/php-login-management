<?php

namespace fakhryfernanda\PHP\Login\Management\Repository;

use fakhryfernanda\PHP\Login\Management\Domain\User;

class UserRepository
{
    // untuk melakukan insert, kita butuh koneksi database
    // jadi kita buat koneksi terlebih dahulu
    // buat constructor untuk menginject data connection

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(User $user): User {
        $statement = $this->connection->prepare("INSERT INTO users(id, name, password) VALUES (?,?,?)");
        $statement->exec([
            $user->id, $user->username, $user->password
        ]);
        return $user;
    }
}