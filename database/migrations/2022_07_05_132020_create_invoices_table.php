<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('mode'); // modo 1- Entrada 0 - Saida
            $table->string('type'); //tipo 1 Unica 2 Parcela
            $table->string('description')->nullable();                 
            $table->double('price');
            $table->string('status'); // paid para pago unpaid em espera
            $table->date('day_payment'); // dia de vencimento
            $table->integer('service')->nullable(); // id do serviço
            $table->integer('quote')->nullable(); // numero da parcela
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
        Schema::dropIfExists('invoices');
    }
}
