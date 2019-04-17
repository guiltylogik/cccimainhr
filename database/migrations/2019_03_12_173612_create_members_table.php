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
            $table->string('image');
            $table->string('first_name', 100);
            $table->string('other_name', 100)->nullable();
            $table->string('surname', 100);
            $table->string('email')->unique()->nullable();
            $table->date('dob')->nullable();
            $table->string('marital_status', 12);
            $table->string('res_address')->nullable();
            $table->string('postal_address', 32)->nullable();
            $table->integer('phone');
            $table->integer('office_number')->nullable();
            $table->integer('other_number')->nullable();
            $table->string('profession', 100);
            $table->string('position', 100)->nullable();
            $table->string('office_address')->nullable();
            $table->string('emergency_contact_person')->nullable();
            $table->integer('emergency_contact_number')->nullable();
            $table->string('emergency_contact_address')->nullable();
            $table->string('name_of_spouse')->nullable();
            $table->tinyInteger('number_of_children')->nullable();
            $table->string('children_names')->nullable();
            $table->string('hear_about_us')->nullable();
            $table->string('ministries')->nullable();
            $table->string('group_n_dept')->nullable();
            $table->string('branch')->nullable();
            $table->string('cov_fam_name')->nullable();
            $table->string('covenant_leader')->nullable();
            $table->integer('covenant_leader_num')->nullable();
            $table->date('date_received');
            $table->date('reviced_rec_date');
            $table->time('reviced_rec_time');
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
