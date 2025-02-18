<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218140844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quiz ADD livre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE quiz ADD CONSTRAINT FK_A412FA9237D925CB FOREIGN KEY (livre_id) REFERENCES livre (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A412FA9237D925CB ON quiz (livre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE quiz DROP FOREIGN KEY FK_A412FA9237D925CB');
        $this->addSql('DROP INDEX UNIQ_A412FA9237D925CB ON quiz');
        $this->addSql('ALTER TABLE quiz DROP livre_id');
    }
}
