<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180122141746 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE app_listing (listing_id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, brand VARCHAR(100) NOT NULL, type VARCHAR(100) NOT NULL, fit VARCHAR(100) NOT NULL, color VARCHAR(100) NOT NULL, cost VARCHAR(65) NOT NULL, bullet_one VARCHAR(100) NOT NULL, bullet_two VARCHAR(100) NOT NULL, description VARCHAR(100) NOT NULL, master_id VARCHAR(100) NOT NULL, user_id VARCHAR(100) NOT NULL, created DATETIME NOT NULL, updated DATETIME NOT NULL, PRIMARY KEY(listing_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE app_master (master_id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, user_id VARCHAR(100) NOT NULL, filename VARCHAR(255) NOT NULL, created DATETIME NOT NULL, updated DATETIME NOT NULL, PRIMARY KEY(master_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE app_listing');
        $this->addSql('DROP TABLE app_master');
    }
}
