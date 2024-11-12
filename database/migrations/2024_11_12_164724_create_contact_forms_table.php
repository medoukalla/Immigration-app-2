use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 256);
            $table->string('last_name', 256);
            $table->string('email', 256);
            $table->string('phone', 256);
            $table->string('service_interest', 256)->nullable();
            $table->string('nationality', 256)->nullable();
            $table->string('residence', 256)->nullable();
            $table->text('situation_description')->nullable();
            $table->timestamps();  // Creates `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_forms');
    }
}
