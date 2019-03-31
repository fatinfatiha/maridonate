<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApprovedCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('approvedCampaigns', function (Blueprint $table) {
          $table->increments('app_camp_id');
          $table->unsignedInteger('user_id');
          $table->string('title');
          $table->decimal('goal_price', 14, 2);
          $table->string('image_name', 32);
          $table->text('story');
          $table->datetime('deadline');
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
