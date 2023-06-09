<?php

class DBProvider {
    const SERVER_NAME = "db";
    const USER_NAME = "campus";
    const PASSWORD = "pass";
    const DB_NAME = "campus";
    
    private $connection;

    public function __construct()
    {
        $this->openConnection();
    }

    public function openConnection(): void
    {
        $this->connection = mysqli_connect(self::SERVER_NAME, self::USER_NAME, self::PASSWORD, self::DB_NAME);

        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getRealString(string $value): string
    {
        return mysqli_real_escape_string($this->connection, $value);
    }

    public function getLastId(): int
    {
        return mysqli_insert_id($this->connection);
    }

    public function request(string $query): mysqli_result|bool
    {
        return mysqli_query($this->connection, $query);
    }

    public function closeConnection(): void
    {
        mysqli_close($this->connection);
    }
}
