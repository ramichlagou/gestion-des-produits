<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211116233113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fatam (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lignecommande2 (id INT AUTO_INCREMENT NOT NULL, qte INT DEFAULT NULL, date_c DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit ADD lignecommande2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2795058F77 FOREIGN KEY (lignecommande2_id) REFERENCES lignecommande2 (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC2795058F77 ON produit (lignecommande2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2795058F77');
        $this->addSql('DROP TABLE fatam');
        $this->addSql('DROP TABLE lignecommande2');
        $this->addSql('DROP INDEX IDX_29A5EC2795058F77 ON produit');
        $this->addSql('ALTER TABLE produit DROP lignecommande2_id');
    }
}
