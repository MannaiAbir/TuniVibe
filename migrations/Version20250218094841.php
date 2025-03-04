<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218094841 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activites (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, lieu VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, is_visible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenements_activites (evenements_id INT NOT NULL, activites_id INT NOT NULL, INDEX IDX_460B5EF663C02CD4 (evenements_id), INDEX IDX_460B5EF65B8C31B7 (activites_id), PRIMARY KEY(evenements_id, activites_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement_participation (evenements_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_29F13BE263C02CD4 (evenements_id), INDEX IDX_29F13BE2A76ED395 (user_id), PRIMARY KEY(evenements_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenements_activites ADD CONSTRAINT FK_460B5EF663C02CD4 FOREIGN KEY (evenements_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenements_activites ADD CONSTRAINT FK_460B5EF65B8C31B7 FOREIGN KEY (activites_id) REFERENCES activites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_participation ADD CONSTRAINT FK_29F13BE263C02CD4 FOREIGN KEY (evenements_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_participation ADD CONSTRAINT FK_29F13BE2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenements_activites DROP FOREIGN KEY FK_460B5EF663C02CD4');
        $this->addSql('ALTER TABLE evenements_activites DROP FOREIGN KEY FK_460B5EF65B8C31B7');
        $this->addSql('ALTER TABLE evenement_participation DROP FOREIGN KEY FK_29F13BE263C02CD4');
        $this->addSql('ALTER TABLE evenement_participation DROP FOREIGN KEY FK_29F13BE2A76ED395');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE evenements_activites');
        $this->addSql('DROP TABLE evenement_participation');
    }
}
