<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Backstories extends Migration
{
	/**
	* Run the migrations.
    *
    * @return void
    */
    public function up()
    {
		Schema::create('stories', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->text('seo_options')->nullable();
			$table->string('title')->nullable();
			$table->text('content');
			$table->text('content_plain');
			$table->string('introduction', 250)->nullable();
			$table->string('cover_photo')->nullable();
			$table->boolean('featured')->default(0);
			$table->string('status')->default('DRAFT');
			$table->string('type')->default('story');
			$table->text('media')->nullable();
			$table->text('tags')->nullable();
			$table->text('meta')->nullable();
			$table->text('options')->nullable();
            $table->timestamps();
            $table->softDeletes();
		}
		);

		Schema::create("story_options", function (Blueprint $table) {

			$table->increments('id');
			$table->integer('story_id');
			$table->string('name');
			$table->string('description')->nullable();
			$table->string('meta');
            $table->timestamps();
            $table->softDeletes();


		}
		);

		Schema::create("story_categories", function (Blueprint $table){

			$table->increments('id');
			$table->string('name');
			$table->string("description")->nullable();
			$table->text("options")->nullable();
            $table->timestamps();
            $table->softDeletes();
		}
		);

		Schema::create("story_story_category", function(Blueprint $table){
			$table->integer('story_id');
			$table->integer('story_category_id');
			$table->primary(['story_id', 'story_category_id'], 'story_category');
            $table->timestamps();
		}
		);



		Schema::create("story_attachments", function(Blueprint $table){

			$table->increments('id');
			$table->string('name');
			$table->string("description")->nullable();
			$table->string("url")->nullable();
			$table->text("options")->nullable();
            $table->timestamps();
            $table->softDeletes();

		}
		);

		Schema::create("story_story_attachment", function(Blueprint $table){
			$table->integer('story_id');
			$table->integer('story_attachment_id');
			$table->primary(['story_id', 'story_attachment_id'], 'story_attachment');
            $table->timestamps();

		}
		);



	}



/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
		Schema::dropIfExists('stories');
		Schema::dropIfExists('story_categories');
		Schema::dropIfExists('story_story_category');
		Schema::dropIfExists('story_attachments');
		Schema::dropIfExists('story_story_attachment');
		Schema::dropIfExists('story_options');
	}
}

