<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218140609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP INDEX UNIQ_B6F7494E37D925CB, ADD INDEX IDX_B6F7494E37D925CB (livre_id)');
        $this->addSql('ALTER TABLE question CHANGE livre_id livre_id INT NOT NULL, CHANGE quiz_id quiz_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP INDEX IDX_B6F7494E37D925CB, ADD UNIQUE INDEX UNIQ_B6F7494E37D925CB (livre_id)');
        $this->addSql('ALTER TABLE question CHANGE livre_id livre_id INT DEFAULT NULL, CHANGE quiz_id quiz_id INT NOT NULL');
    }
}
