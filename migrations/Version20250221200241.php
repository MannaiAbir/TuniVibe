<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250221200241 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD idUser INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_42C84955FE6E88D7 ON reservation (idUser)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955FE6E88D7');
        $this->addSql('DROP INDEX IDX_42C84955FE6E88D7 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP idUser');
    }
}
