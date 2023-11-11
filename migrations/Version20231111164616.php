<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231111164616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE grupos_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE grupos (id INT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE aulas_estancias DROP categoria');
        $this->addSql('ALTER TABLE aulas_estancias ALTER descripcion DROP NOT NULL');
        $this->addSql('ALTER TABLE departamentos ALTER descripcion DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE grupos_id_seq CASCADE');
        $this->addSql('DROP TABLE grupos');
        $this->addSql('ALTER TABLE departamentos ALTER descripcion SET NOT NULL');
        $this->addSql('ALTER TABLE aulas_estancias ADD categoria VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE aulas_estancias ALTER descripcion SET NOT NULL');
    }
}
