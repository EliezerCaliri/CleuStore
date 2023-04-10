<?php

use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('itens_pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer("quantidade");
            $table->decimal("valor", 10,2);
            $table->datetime("dt_item");
            $table->timestamps();

            $table->foreignIdFor(Produto::class)->references('id')->on('produtos')->onDelete('cascade');
            $table->foreignIdFor(Pedido::class)->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_pedidos');
    }
};
