<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250209114653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme ADD hebergement_id INT NOT NULL');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FF23BB0F66 FOREIGN KEY (hebergement_id) REFERENCES hebergement (idhebergement)');
        $this->addSql('CREATE INDEX IDX_3DDCB9FF23BB0F66 ON programme (hebergement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FF23BB0F66');
        $this->addSql('DROP INDEX IDX_3DDCB9FF23BB0F66 ON programme');
        $this->addSql('ALTER TABLE programme DROP hebergement_id');
    }
}
