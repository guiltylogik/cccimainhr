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
            $table->string('first_name');
            $table->string('other_name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('dob');
            $table->string('marital_status');
            $table->text('res_address');
            $table->string('postal_address');
            $table->string('phone');
            $table->string('office_number');
            $table->string('other_number');
            $table->string('profession');
            $table->string('position');
            $table->text('office_address');
            $table->string('emergency_contact_person');
            $table->string('emergency_contact_number');
            $table->string('emergency_contact_address');
            $table->string('name_of_spouse');
            $table->string('number_of_children');
            $table->string('children_names');
            $table->string('hear_about_us');
            $table->string('ministries');
            $table->string('group_n_dept');
            $table->string('branch');
            $table->string('cov_fam_name');
            $table->string('covenant_leader');
            $table->string('covenant_leader_num');
            $table->string('date_received');
            $table->string('reviced_rec_date');
            $table->string('reviced_rec_time');
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
