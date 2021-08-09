<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('productos');
        $table->addColumn('imagen', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('imagen_larga', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('titulo_ES', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('titulo_EN', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('descripcion_corta_EN', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        $table->addColumn('descripcion_corta_ES', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        $table->addColumn('descripcion_larga_EN', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('descripcion_larga_ES', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
