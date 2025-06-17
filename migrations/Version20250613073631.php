<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250613073631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE categories ADD parent_id INT DEFAULT NULL, ADD shop_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories ADD CONSTRAINT FK_3AF34668727ACA70 FOREIGN KEY (parent_id) REFERENCES categories (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories ADD CONSTRAINT FK_3AF346684D16C4DD FOREIGN KEY (shop_id) REFERENCES shop (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_3AF34668727ACA70 ON categories (parent_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_3AF346684D16C4DD ON categories (shop_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses ADD review_id INT DEFAULT NULL, ADD comment_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses ADD CONSTRAINT FK_A9A55A4C3E2E969B FOREIGN KEY (review_id) REFERENCES review (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses ADD CONSTRAINT FK_A9A55A4CF8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_A9A55A4C3E2E969B ON courses (review_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A9A55A4CF8697D13 ON courses (comment_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE lesson ADD courses_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE lesson ADD CONSTRAINT FK_F87474F3F9295384 FOREIGN KEY (courses_id) REFERENCES courses (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_F87474F3F9295384 ON lesson (courses_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `order` ADD payment_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `order` ADD CONSTRAINT FK_F52993984C3A3BB FOREIGN KEY (payment_id) REFERENCES payment (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_F52993984C3A3BB ON `order` (payment_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users ADD category_id INT DEFAULT NULL, ADD courses_id INT DEFAULT NULL, ADD review_id INT DEFAULT NULL, ADD comment_id INT DEFAULT NULL, ADD payment_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users ADD CONSTRAINT FK_1483A5E912469DE2 FOREIGN KEY (category_id) REFERENCES categories (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users ADD CONSTRAINT FK_1483A5E9F9295384 FOREIGN KEY (courses_id) REFERENCES courses (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users ADD CONSTRAINT FK_1483A5E93E2E969B FOREIGN KEY (review_id) REFERENCES review (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users ADD CONSTRAINT FK_1483A5E9F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users ADD CONSTRAINT FK_1483A5E94C3A3BB FOREIGN KEY (payment_id) REFERENCES payment (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1483A5E912469DE2 ON users (category_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_1483A5E9F9295384 ON users (courses_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1483A5E93E2E969B ON users (review_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1483A5E9F8697D13 ON users (comment_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1483A5E94C3A3BB ON users (payment_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668727ACA70
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories DROP FOREIGN KEY FK_3AF346684D16C4DD
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_3AF34668727ACA70 ON categories
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_3AF346684D16C4DD ON categories
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE categories DROP parent_id, DROP shop_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses DROP FOREIGN KEY FK_A9A55A4C3E2E969B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses DROP FOREIGN KEY FK_A9A55A4CF8697D13
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_A9A55A4C3E2E969B ON courses
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_A9A55A4CF8697D13 ON courses
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE courses DROP review_id, DROP comment_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE lesson DROP FOREIGN KEY FK_F87474F3F9295384
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_F87474F3F9295384 ON lesson
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE lesson DROP courses_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `order` DROP FOREIGN KEY FK_F52993984C3A3BB
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_F52993984C3A3BB ON `order`
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE `order` DROP payment_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users DROP FOREIGN KEY FK_1483A5E912469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9F9295384
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users DROP FOREIGN KEY FK_1483A5E93E2E969B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9F8697D13
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users DROP FOREIGN KEY FK_1483A5E94C3A3BB
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1483A5E912469DE2 ON users
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_1483A5E9F9295384 ON users
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1483A5E93E2E969B ON users
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1483A5E9F8697D13 ON users
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_1483A5E94C3A3BB ON users
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE users DROP category_id, DROP courses_id, DROP review_id, DROP comment_id, DROP payment_id
        SQL);
    }
}
