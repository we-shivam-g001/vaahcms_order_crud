<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('pr_orders')) {
            Schema::create('pr_orders', function (Blueprint $table) {
                $table->bigIncrements('id')->unsigned();
                $table->uuid('uuid')->nullable()->index();

                $table->string('name')->nullable()->index();
                $table->string('slug')->nullable()->index();
                $table->boolean('is_active')->nullable()->index();
                $table->string('status')->nullable()->index();
                $table->string('amount')->nullable()->index();
                $table->string('tax')->nullable()->index();
                $table->string('total_amount')->nullable()->index();


                //----common fields
                $table->text('meta')->nullable();
                $table->bigInteger('created_by')->nullable()->index();
                $table->bigInteger('updated_by')->nullable()->index();
                $table->bigInteger('deleted_by')->nullable()->index();
                $table->timestamps();
                $table->softDeletes();
                $table->index(['created_at', 'updated_at', 'deleted_at']);
                //----/common fields

            });
        }

    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('pr_orders');
    }
}
