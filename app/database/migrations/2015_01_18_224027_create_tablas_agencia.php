<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablasAgencia extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('cedula')->unique();
			$table->string('nombres',45);
			$table->string('apellidos',50);
			$table->string('ciudad',60);
			$table->string('direccion',200);
			$table->string('telefono',15);
			$table->string('celular',10);
			$table->string('correo',100);
			$table->string('username')->unique();
			$table->string('password');
			$table->string('nivel');

			$table->timestamps();
		});	

		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('cedula')->unique();
			$table->string('nombres',45);
			$table->string('apellidos',50);
			$table->string('ciudad',60);
			$table->string('direccion',200);
			$table->string('telefono',15);
			$table->string('celular',10);
			$table->string('correo',100);
			$table->string('password');

			$table->timestamps();
		});

		Schema::create('reservas', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->date('fecha');
			$table->string('estado');
			$table
				->integer('cliente_id')
				->foreign('cliente_id')
				->references('id')
				->on('clientes')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table->timestamps();
		});

		Schema::create('aerolineas', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('nombre',60);
			$table->string('ruc',15)->unique();

			$table->timestamps();
		});

		Schema::create('aviones', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('descripcion',300);
			$table->string('tipo',45);
			$table->string('placa',15)->unique();

			$table->timestamps();
		});

		Schema::create('vuelos', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('numero',15);
			$table->date('fecha');
			$table->time('hora_salida');
			$table->time('hora_llegada');
			$table->string('origen',45);
			$table->string('destino',45);
			$table->string('puerta_embarque',15);
			$table
				->integer('aerolinea_id')
				->foreign('aerolinea_id')
				->references('id')
				->on('aerolineas')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table
				->integer('avion_id')
				->foreign('avion_id')
				->references('id')
				->on('aviones')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();

			$table->timestamps();
		});

		Schema::create('detalle_reservas', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('puesto');
			$table->smallInteger('cantidad');
			$table->float('valor');
			$table
				->integer('reserva_id')
				->foreign('reserva_id')
				->references('id')
				->on('reservas')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table
				->integer('vuelo_id')
				->foreign('vuelo_id')
				->references('id')
				->on('vuelos')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();

			$table->timestamps();
		});

		Schema::create('categorias', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('descripcion',300);
			$table->float('valor');
			$table
				->integer('avion_id')
				->foreign('avion_id')
				->references('id')
				->on('aviones')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table->timestamps();
		});

		Schema::create('puestos', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('numero',10);
			$table
				->integer('categoria_id')
				->foreign('categoria_id')
				->references('id')
				->on('categorias')
				->onDelete('cascade')
				->onUpdate('cascade')
				->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('clientes');
		Schema::drop('reservas');
		Schema::drop('aerolineas');
		Schema::drop('aviones');
		Schema::drop('vuelos');
		Schema::drop('detalle_reservas');
		Schema::drop('categorias');
		Schema::drop('puestos');

	}

}
