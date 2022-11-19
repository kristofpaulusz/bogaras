<?php

use App\Models\Species;
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
        Schema::create('species', function (Blueprint $table) {
            $table->id('sp_id');
            $table->string('name');
            $table->string('nomenclature');
            $table->foreignId('classification')->references('c_id')->on('classifications');
            $table->timestamps();
        });
        Species::create(['name' => 'Közönséges Feketehangya', 'nomenclature' => 'Lasius niger', 'classification' => 3]);
        Species::create(['name' => 'Kerti Feketehangya', 'nomenclature' => 'Lasius neglectus', 'classification' => 3]);
        Species::create(['name' => 'Vöröstorú Feketehangya', 'nomenclature' => 'Lasius emarginatus', 'classification' => 3]);
    }

    public function down()
    {
        Schema::dropIfExists('species');
    }
};
