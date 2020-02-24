<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DonationDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('donation', function (Blueprint $table) {
        $table->increments('donation_id');
        $table->unsignedInteger('user_id');
        $table->unsignedInteger('campaign_id');
        $table->string('amount');
        $table->string('transactionDate');
        $table->string('receipt');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('campaign_id')->references('app_camp_id')->on('approvedcampaigns')->onDelete('cascade');
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
