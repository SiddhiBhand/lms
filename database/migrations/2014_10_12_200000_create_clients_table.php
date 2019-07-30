
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            
$table->string('cname')->nullable();
$table->string('constitution')->nullable();
$table->string('address')->nullable();
$table->string('city')->nullable();
$table->string('contperson')->nullable();
$table->string('email')->nullable();
$table->string('bank')->nullable();
$table->string('texposure')->nullable();
$table->string('Ratedexpo')->nullable();
$table->string('ratinghist')->nullable();
$table->string('nextfolloup')->nullable();
$table->string('industrytype')->nullable();
$table->string('purpose')->nullable();
$table->string('status')->nullable();
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
        Schema::dropIfExists('clients');
    }
}


