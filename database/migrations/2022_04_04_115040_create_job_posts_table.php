<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->string('slug', 150);
            $table->string('company_name', 150);
            $table->string('job_location', 150);
            $table->string('req_degree', 255);
            $table->string('experience', 100);
            $table->string('employment_status', 100);
            $table->string('age', 100);
            $table->string('vacancy', 50);
            $table->string('salary', 10);
            $table->date('published_on', 55);
            $table->date('deadline', 55);
            $table->text('report', 300);
            $table->text('description')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('job_posts');
    }
}
