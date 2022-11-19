<?php

use App\Models\Classification;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classifications', function (Blueprint $table) {
            $table->id('c_id');
            $table->foreignId('parent_class')->nullable()->references('c_id')->on('classifications');
            $table->string('name');
            $table->integer('level');
            $table->timestamps();
        });
        Classification::create(['parent_class' => null, 'name' => 'Hangyák', 'level' => 1]);
        Classification::create(['parent_class' => 1, 'name' => 'Vöröshangyaformák', 'level' => 2]);
        Classification::create(['parent_class' => 2, 'name' => 'Feketehangyák', 'level' => 3]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classifications');
    }
};
