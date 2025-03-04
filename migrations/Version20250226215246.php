<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250226215246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement_participation (evenements_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_29F13BE263C02CD4 (evenements_id), INDEX IDX_29F13BE2A76ED395 (user_id), PRIMARY KEY(evenements_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscription_evenement (id INT AUTO_INCREMENT NOT NULL, evenement_id INT NOT NULL, nom_complet VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, profession VARCHAR(255) NOT NULL, taille_tshirt VARCHAR(10) DEFAULT NULL, activite_groupe VARCHAR(20) DEFAULT NULL, competences LONGTEXT DEFAULT NULL, regimes_alimentaires JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', accessibilite LONGTEXT DEFAULT NULL, regles_securite TINYINT(1) NOT NULL, benevolat VARCHAR(20) DEFAULT NULL, sondage_satisfaction TINYINT(1) DEFAULT NULL, INDEX IDX_AD33AA06FD02F13 (evenement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenement_participation ADD CONSTRAINT FK_29F13BE263C02CD4 FOREIGN KEY (evenements_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_participation ADD CONSTRAINT FK_29F13BE2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE inscription_evenement ADD CONSTRAINT FK_AD33AA06FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0E1FDCE57C');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C4A76ED395');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C4BCF5E72D');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE seance');
        $this->addSql('DROP TABLE workshop');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE seance (id INT AUTO_INCREMENT NOT NULL, workshop_id INT DEFAULT NULL, titre VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', temps TIME NOT NULL COMMENT \'(DC2Type:time_immutable)\', duree INT NOT NULL, INDEX IDX_DF7DFD0E1FDCE57C (workshop_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE workshop (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, user_id INT NOT NULL, titre VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_debut DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', date_fin DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_9B6F02C4BCF5E72D (categorie_id), INDEX IDX_9B6F02C4A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0E1FDCE57C FOREIGN KEY (workshop_id) REFERENCES workshop (id)');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C4BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE evenement_participation DROP FOREIGN KEY FK_29F13BE263C02CD4');
        $this->addSql('ALTER TABLE evenement_participation DROP FOREIGN KEY FK_29F13BE2A76ED395');
        $this->addSql('ALTER TABLE inscription_evenement DROP FOREIGN KEY FK_AD33AA06FD02F13');
        $this->addSql('DROP TABLE evenement_participation');
        $this->addSql('DROP TABLE inscription_evenement');
    }
}
