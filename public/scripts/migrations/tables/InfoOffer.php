<?php
    class InfoOffer {
        public const TABLE = 'info_offer';
        public const ID = 'id';
        public const NAME = 'name';
        public const EMAIL = 'email';
        public const TITLE = 'title';
        public const DESCRIPTION = 'description';
        public const CREATED_AT = 'created_at';
    
        public static function getSQLString(): string
        {
            $tableName = self::TABLE;
            $id = self::ID;
            $name = self::NAME;
            $email = self::EMAIL;
            $title = self::TITLE;
            $description = self::DESCRIPTION;
            $createdAt = self::CREATED_AT;
    
            return "CREATE TABLE IF NOT EXISTS $tableName (
                $id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                $name VARCHAR(255) NOT NULL,
                $email VARCHAR(255) NOT NULL,
                $title VARCHAR(255) NOT NULL,
                $description TEXT NOT NULL,
                $createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        }
    }
?>