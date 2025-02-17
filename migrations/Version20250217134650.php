<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250217134650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table Tax';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tax (
            id SERIAL PRIMARY KEY,
            country_code VARCHAR(2) NOT NULL,
            rate DECIMAL(5, 2) NOT NULL
        )');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tax');
    }
}
