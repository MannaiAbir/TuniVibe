<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250224093033 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE demande_workshop (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, workshop_id INT NOT NULL, statut VARCHAR(20) NOT NULL, INDEX IDX_DD364B06FB88E14F (utilisateur_id), INDEX IDX_DD364B061FDCE57C (workshop_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE demande_workshop ADD CONSTRAINT FK_DD364B06FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE demande_workshop ADD CONSTRAINT FK_DD364B061FDCE57C FOREIGN KEY (workshop_id) REFERENCES workshop (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande_workshop DROP FOREIGN KEY FK_DD364B06FB88E14F');
        $this->addSql('ALTER TABLE demande_workshop DROP FOREIGN KEY FK_DD364B061FDCE57C');
        $this->addSql('DROP TABLE demande_workshop');
    }
}
