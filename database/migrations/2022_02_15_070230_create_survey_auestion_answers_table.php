<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\App\Models\SurveyQuestion;

use Illuminate\App\Models\SurveyAnswer;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_auestion_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('survey_questions_id');
            $table->unsignedBigInteger('survey_answers_id');
            $table->text('answer');
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
        Schema::dropIfExists('survey_auestion_answers');
    }
};
