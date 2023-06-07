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
        
        public static function defaultInsert(): string
        {
            $tableName = self::TABLE;
            $id = self::ID;
            $title = self::TITLE;
            $description = self::DESCRIPTION;
            $imagePath = self::IMAGE_PATH;
            $createdAt = self::CREATED_AT;

            return "INSERT INTO $tableName ($title,$description,$imagePath)
            VALUES("Важлива інформація для вступників та керівників закладів освіти","Шановні друзі, війна змінила наші життя, і певні події складно планувати. Однак якщо ви цього року розглядаєте можливість вступати до закладів вищої освіти України (бакалаврський ступінь), будь ласка, ознайомтеся з інформацією, поданою за посиланням нижче.","-"),
            ("Розподіл додаткових балів","Список розподілу додаткових балів літо 2022 (2-ий семестр 2021/2022 н.р. 1-ий семестр 2021/2022 н.р.)","-"),
            ("Порядок оформления контракних договорів","На протязі 10 робочих днів потрібно під`їхати в 35 корпус КПІ,кімната 203, з 11-00 до 17-00 для укладння контракту. На підписанні повинен бути здобувач освіти та його представник, в разі якщо здобувачу менше 18 років. P документів потрібно мати паспорт та ідентифікаційний код здобувачу та представнику.","-"),
            ("Відкритий конкурс на міжнародні наукові стажування для студентів ІПСА","Наразі відкриті 9 вакансій для наукових стажувань наших студентів у французьких лабораторіях Loria (University of Lorraine & Jean Lamour Institute). Ви можете подати заявку до 1 грудня! За програмою запропонована заробітна плата (550 євро/місяць), яка може бути доповнена грантом Erasmus+. Термін стажування - 5-6 місяців (початок стажування лютий-березень 2022)","-"),
            ("Курс .NET для студентів факультету ІПСА","Profile-me розробляє власний продукт для спрощення процесу найму працівників: структурує співбесіди, автоматизує рутинні задачі рекрутерів, тощо. Компанія розпочинає курс з .NET 5.0, з подальшим віддаленим працевлаштуванням найкращих слухачів.","-")
            ;)";
        }
    }
?>