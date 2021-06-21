<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawfirmLawyersTable extends Migration
{
    
    public function up()
    {
        Schema::create('lawfirm_lawyers', function (Blueprint $table) {
            $table->foreignId('lawfirm_id')->constrained();
            $table->foreignId('lawyer_id')->constrained();
            $table->primary(['lawfirm_id','lawyer_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lawfirm_lawyers');
    }
}
