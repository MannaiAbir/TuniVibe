<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250211235807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
{
    // Step 1: Allow NULL values temporarily
    $this->addSql('ALTER TABLE quiz MODIFY options JSON DEFAULT NULL COMMENT \'(DC2Type:json)\'');

    // Step 2: Update existing rows to use a default value
    $this->addSql("UPDATE quiz SET options = '[]' WHERE options IS NULL");

    // Step 3: Enforce NOT NULL constraint (if needed)
    // $this->addSql('ALTER TABLE quiz MODIFY options JSON NOT NULL COMMENT \'(DC2Type:json)\'');
}

public function down(Schema $schema): void
{
    // Revert the changes
    $this->addSql('ALTER TABLE quiz MODIFY options JSON NOT NULL COMMENT \'(DC2Type:json)\'');
}
}
