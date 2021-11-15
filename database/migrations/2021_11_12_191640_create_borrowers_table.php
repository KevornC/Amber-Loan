<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('telephone');
            $table->string('trn');
            $table->string('national_id');
            $table->string('passport_photo');
            $table->string('address');
            $table->string('business_name');
            $table->foreignId('business_type')->constrained('rates','id');
            $table->float('loan_amount',10,2);
            $table->BigInteger('repayment_period')->unsigned();
            $table->string('LoanOfficer')->nullable();
            $table->string('status')->default('Pending');
            $table->date('ApprovedByDate')->nullable();
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
        Schema::dropIfExists('borrowers');
    }
}
