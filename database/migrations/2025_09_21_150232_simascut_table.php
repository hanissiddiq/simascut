<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
         Schema::create('seksis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('status');
            $table->timestamps();
            $table->softDeletes();
        });
         Schema::create('jabatans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('status');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('cutis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('status');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('kuota_cutis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('used_leave')->default(0); // Menghitung sisa cuti yang sudah digunakan
            $table->integer('remaining_leave')->default(12); // Cuti tahunan
            $table->timestamps();
        });

        Schema::create('request_cutis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('cuti_id')->constrained('cutis')->onDelete('cascade');
            // $table->enum('leave_type', ['Tahunan', 'Besar', 'Sakit', 'Melahirkan', 'Alasan Penting', 'Diluar Tanggungan Negara']);
            $table->date('start_date');
            $table->date('end_date');
            $table->text('reason');
            // $table->text('status', ['Pending', 'Approved by Seksi', 'Approved by HRD', 'Rejected']);
            $table->text('status'); //['Pending', 'Approved by Seksi', 'Approved by HRD', 'Rejected']);
            $table->timestamps();
        });


        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('seksi_id')->constrained('seksis')->onDelete('cascade');
            $table->foreignId('jabatan_id')->constrained('jabatans')->onDelete('cascade');
            $table->text('photo_profile')->nullable();
            $table->string('address')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('post_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('user_details');
        Schema::dropIfExists('request_cutis');
        Schema::dropIfExists('kuota_cutis');
        Schema::dropIfExists('cutis');
        Schema::dropIfExists('seksis');
        Schema::dropIfExists('jabatans');
    }
};
