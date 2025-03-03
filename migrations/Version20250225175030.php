<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250225175030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE workshop (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, user_id INT NOT NULL, titre VARCHAR(50) NOT NULL, description LONGTEXT NOT NULL, date_debut DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', date_fin DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', image VARCHAR(255) NOT NULL, INDEX IDX_9B6F02C4BCF5E72D (categorie_id), INDEX IDX_9B6F02C4A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C4BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE article CHANGE summary summary LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC7294869C');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0E1FDCE57C FOREIGN KEY (workshop_id) REFERENCES workshop (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0E1FDCE57C');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C4BCF5E72D');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C4A76ED395');
        $this->addSql('DROP TABLE workshop');
        $this->addSql('ALTER TABLE article CHANGE summary summary VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC7294869C');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
