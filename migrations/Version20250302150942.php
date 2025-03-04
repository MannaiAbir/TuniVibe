<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250302150942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement_participation DROP FOREIGN KEY FK_29F13BE2A76ED395');
        $this->addSql('ALTER TABLE evenement_participation DROP FOREIGN KEY FK_29F13BE263C02CD4');
        $this->addSql('DROP TABLE evenement_participation');
        $this->addSql('ALTER TABLE evenement ADD latitude NUMERIC(9, 6) DEFAULT NULL, ADD longitude NUMERIC(9, 6) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement_participation (evenements_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_29F13BE263C02CD4 (evenements_id), INDEX IDX_29F13BE2A76ED395 (user_id), PRIMARY KEY(evenements_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE evenement_participation ADD CONSTRAINT FK_29F13BE2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement_participation ADD CONSTRAINT FK_29F13BE263C02CD4 FOREIGN KEY (evenements_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement DROP latitude, DROP longitude');
    }
}
