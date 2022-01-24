<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124140038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD num_fournisseur_id INT NOT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_60349993554AD3A2 FOREIGN KEY (num_fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('CREATE INDEX IDX_60349993554AD3A2 ON contrat (num_fournisseur_id)');
        $this->addSql('ALTER TABLE convention ADD num_fournisseur_id INT NOT NULL');
        $this->addSql('ALTER TABLE convention ADD CONSTRAINT FK_8556657E554AD3A2 FOREIGN KEY (num_fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('CREATE INDEX IDX_8556657E554AD3A2 ON convention (num_fournisseur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_60349993554AD3A2');
        $this->addSql('DROP INDEX IDX_60349993554AD3A2 ON contrat');
        $this->addSql('ALTER TABLE contrat DROP num_fournisseur_id');
        $this->addSql('ALTER TABLE convention DROP FOREIGN KEY FK_8556657E554AD3A2');
        $this->addSql('DROP INDEX IDX_8556657E554AD3A2 ON convention');
        $this->addSql('ALTER TABLE convention DROP num_fournisseur_id');
    }
}
