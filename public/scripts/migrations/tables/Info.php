<?php
    class Info {
        public const TABLE = 'info';
        public const ID = 'id';
        public const TITLE = 'title';
        public const DESCRIPTION = 'description';
        public const IMAGE_PATH = 'image_path';
        public const CREATED_AT = 'created_at';

        public static function getSQLString(): string
        {
            $tableName = self::TABLE;
            $id = self::ID;
            $title = self::TITLE;
            $description = self::DESCRIPTION;
            $imagePath = self::IMAGE_PATH;
            $createdAt = self::CREATED_AT;

            return "CREATE TABLE IF NOT EXISTS $tableName (
                $id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                $title VARCHAR(255) NOT NULL,
                $description TEXT NOT NULL,
                $imagePath VARCHAR(255) NOT NULL,
                $createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
        }
    }
?>