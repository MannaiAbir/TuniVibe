<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250221195404 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849558E93AD33');
        $this->addSql('DROP INDEX IDX_42C849558E93AD33 ON reservation');
        $this->addSql('ALTER TABLE reservation ADD hebergement VARCHAR(255) NOT NULL, DROP id, DROP idhebergement, DROP PRIMARY KEY, ADD PRIMARY KEY (hebergement)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD id INT AUTO_INCREMENT NOT NULL, ADD idhebergement INT NOT NULL, DROP hebergement, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849558E93AD33 FOREIGN KEY (idhebergement) REFERENCES hebergement (idhebergement)');
        $this->addSql('CREATE INDEX IDX_42C849558E93AD33 ON reservation (idhebergement)');
    }
}
