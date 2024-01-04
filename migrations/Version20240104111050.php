<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240104111050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE planet (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, light_years_from_earth DOUBLE PRECISION NOT NULL, image_filename VARCHAR(255) NOT NULL, is_in_milky_way TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voyage (id INT AUTO_INCREMENT NOT NULL, planet_id INT NOT NULL, purpose VARCHAR(255) NOT NULL, wormhole_upgrade TINYINT(1) NOT NULL, leave_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_3F9D8955A25E9820 (planet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D8955A25E9820 FOREIGN KEY (planet_id) REFERENCES planet (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D8955A25E9820');
        $this->addSql('DROP TABLE planet');
        $this->addSql('DROP TABLE voyage');
    }
}
