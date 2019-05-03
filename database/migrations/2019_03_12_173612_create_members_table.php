<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->char('firstname', 32);
            $table->char('other_name', 32)->nullable();
            $table->char('surname', 32);
            $table->string('slug');
            $table->string('email')->unique()->nullable();
            $table->date('dob')->nullable();
            $table->char('gender', 11)->nullable();
            $table->char('marital_status', 12)->nullable();
            $table->string('res_address')->nullable();
            $table->string('postal_address', 32)->nullable();
            $table->char('phone', 16)->nullbale();
            $table->char('office_number', 16)->nullable();
            $table->char('other_number', 16)->nullable();
            $table->string('profession', 100)->nullable();
            $table->char('position', 32)->nullable();
            $table->string('office_address')->nullable();
            $table->string('emergency_contact_person')->nullable();
            $table->char('emergency_contact_number')->nullable();
            $table->string('emergency_contact_address')->nullable();
            $table->string('name_of_spouse')->nullable();
            $table->tinyInteger('number_of_children')->nullable();
            $table->string('children_names')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('branch')->nullable();
            $table->string('cov_fam_name')->nullable();
            $table->string('covenant_leader')->nullable();
            $table->char('covenant_leader_num', 16)->nullable();
            $table->date('date_received')->nullable();
            $table->date('revised_rec_date')->nullable();
            $table->time('revised_rec_time')->nullable();
            $table->char('added_by');
            $table->char('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('members');
    }
}
