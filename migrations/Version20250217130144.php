<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217130144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hebergement (idhebergement INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, capacite INT NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(idhebergement)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (id INT AUTO_INCREMENT NOT NULL, hebergement_id INT NOT NULL, nom VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, description LONGTEXT DEFAULT \'\' NOT NULL, lieu LONGTEXT DEFAULT NULL, INDEX IDX_3DDCB9FF23BB0F66 (hebergement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seance (id INT AUTO_INCREMENT NOT NULL, workshop_id INT DEFAULT NULL, titre VARCHAR(50) NOT NULL, date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', temps TIME NOT NULL COMMENT \'(DC2Type:time_immutable)\', duree INT NOT NULL, INDEX IDX_DF7DFD0E1FDCE57C (workshop_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', username VARCHAR(255) NOT NULL, numero_telephone VARCHAR(20) NOT NULL, adresse VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE workshop (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, user_id INT NOT NULL, titre VARCHAR(50) NOT NULL, description LONGTEXT NOT NULL, date_debut DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', date_fin DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', image VARCHAR(255) NOT NULL, INDEX IDX_9B6F02C4BCF5E72D (categorie_id), INDEX IDX_9B6F02C4A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FF23BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (idhebergement)');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0E1FDCE57C FOREIGN KEY (workshop_id) REFERENCES workshop (id)');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C4BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FF23BB0F66');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0E1FDCE57C');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C4BCF5E72D');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C4A76ED395');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE hebergement');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE seance');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE workshop');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
