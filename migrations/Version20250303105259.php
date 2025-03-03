<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250303105259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE telechargement DROP FOREIGN KEY FK_E8C7D809FB88E14F');
        $this->addSql('ALTER TABLE tentative_quiz DROP FOREIGN KEY FK_A66F2D8FB88E14F');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, date_creation DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP INDEX IDX_E8C7D809FB88E14F ON telechargement');
        $this->addSql('ALTER TABLE telechargement CHANGE utilisateur_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE telechargement ADD CONSTRAINT FK_E8C7D809A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E8C7D809A76ED395 ON telechargement (user_id)');
        $this->addSql('DROP INDEX IDX_A66F2D8FB88E14F ON tentative_quiz');
        $this->addSql('ALTER TABLE tentative_quiz CHANGE utilisateur_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tentative_quiz ADD CONSTRAINT FK_A66F2D8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A66F2D8A76ED395 ON tentative_quiz (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE telechargement DROP FOREIGN KEY FK_E8C7D809A76ED395');
        $this->addSql('ALTER TABLE tentative_quiz DROP FOREIGN KEY FK_A66F2D8A76ED395');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_creation DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_E8C7D809A76ED395 ON telechargement');
        $this->addSql('ALTER TABLE telechargement CHANGE user_id utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE telechargement ADD CONSTRAINT FK_E8C7D809FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_E8C7D809FB88E14F ON telechargement (utilisateur_id)');
        $this->addSql('DROP INDEX IDX_A66F2D8A76ED395 ON tentative_quiz');
        $this->addSql('ALTER TABLE tentative_quiz CHANGE user_id utilisateur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tentative_quiz ADD CONSTRAINT FK_A66F2D8FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_A66F2D8FB88E14F ON tentative_quiz (utilisateur_id)');
    }
}
