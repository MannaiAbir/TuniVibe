<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250223133849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD id INT AUTO_INCREMENT NOT NULL, DROP hebergement, CHANGE id_user idhebergement INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849558E93AD33 FOREIGN KEY (idhebergement) REFERENCES hebergement (idhebergement)');
        $this->addSql('CREATE INDEX IDX_42C849558E93AD33 ON reservation (idhebergement)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849558E93AD33');
        $this->addSql('DROP INDEX IDX_42C849558E93AD33 ON reservation');
        $this->addSql('DROP INDEX `PRIMARY` ON reservation');
        $this->addSql('ALTER TABLE reservation ADD hebergement VARCHAR(255) NOT NULL, DROP id, CHANGE idhebergement id_user INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD PRIMARY KEY (hebergement)');
    }
}
