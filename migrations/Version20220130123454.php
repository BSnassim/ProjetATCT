<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220130123454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contrat (id INT AUTO_INCREMENT NOT NULL, num_fournisseur_id INT NOT NULL, type_id INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, preavis INT NOT NULL, montant DOUBLE PRECISION NOT NULL, num_enregistrement INT NOT NULL, periodicite_entretien VARCHAR(255) NOT NULL, periodicite_facturation VARCHAR(255) NOT NULL, augmentation DOUBLE PRECISION DEFAULT NULL, libelle_pdf VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, objet VARCHAR(255) NOT NULL, INDEX IDX_60349993554AD3A2 (num_fournisseur_id), INDEX IDX_60349993C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_60349993554AD3A2 FOREIGN KEY (num_fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_60349993C54C8C93 FOREIGN KEY (type_id) REFERENCES types_contrat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contrat');
    }
}
