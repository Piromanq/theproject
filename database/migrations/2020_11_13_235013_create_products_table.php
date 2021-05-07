<?php

use Illuminate\Database\Migrations\Migration;










use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_id');
            $table->string('name');
            $table->string('code');
            $table->text('discription')->nullable();
            $table->text('ChannelImg')->nullable();
            $table->string('SingleJanr')->nullable();
            $table->string('StageDirector')->nullable();
            $table->string('Country')->nullable();
            $table->string('Channel')->nullable();
            $table->string('release_date')->nullable();
            $table->text('image')->nullable();
            $table->string('voice_acting')->nullable();
            $table->string('episode_release_day')->nullable();
            $table->string('number_of_episodes')->nullable();
            $table->string('genres')->nullable();
            $table->tinyInteger('rating')->nullable();
            $table->integer('kinopoisk_id')->nullable();
            $table->tinyInteger('kinopoisk_reting')->nullable();
            $table->tinyInteger('IMDbRating')->nullable();
            $table->text('logo_image')->nullable();
            $table->string('title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('player')->nullable();
            $table->string('original_name')->nullable();
            $table->string('social_networks_title')->nullable();
            $table->string('social_networks_url')->nullable();
            $table->text('social_networks_description')->nullable();
            $table->string('another_player')->nullable();
            $table->tinyInteger('FilmAction')->nullable();
            $table->tinyInteger('FilmWestern')->nullable();
            $table->tinyInteger('FilmCrime')->nullable();
            $table->tinyInteger('Action')->nullable();
            $table->tinyInteger('Western')->nullable();
            $table->tinyInteger('Crime')->nullable();
            $table->tinyInteger('Detective')->nullable();
            $table->tinyInteger('Drama')->nullable();
            $table->tinyInteger('Historical_film')->nullable();
            $table->tinyInteger('Comedy')->nullable();
            $table->tinyInteger('Melodrama')->nullable();
            $table->tinyInteger('Musical_film')->nullable();
            $table->tinyInteger('Thriller')->nullable();
            $table->tinyInteger('Fantastic_movie')->nullable();
            $table->tinyInteger('Horror')->nullable();
            $table->tinyInteger('Catastrophe_movie')->nullable();
            $table->tinyInteger('Russian_serials')->nullable();
            $table->tinyInteger('romantic')->nullable();
            $table->tinyInteger('Fantasy')->nullable();
            $table->tinyInteger('Zombie_Werewolves_Vampires')->nullable();
            $table->tinyInteger('Sport')->nullable();
            $table->tinyInteger('military')->nullable();
            $table->tinyInteger('on_real_events')->nullable();
            $table->tinyInteger('Evil_Spirits_And_Witches')->nullable();
            $table->tinyInteger('Netflix')->nullable();
            $table->tinyInteger('FilmDetective')->nullable();
            $table->tinyInteger('FilmDrama')->nullable();
            $table->tinyInteger('FilmHistorical_film')->nullable();
            $table->tinyInteger('FilmComedy')->nullable();
            $table->tinyInteger('FilmMelodrama')->nullable();
            $table->tinyInteger('FilmMusical_film')->nullable();
            $table->tinyInteger('FilmTragedy')->nullable();
            $table->tinyInteger('FilmTragicomedy')->nullable();
            $table->tinyInteger('FilmThriller')->nullable();
            $table->tinyInteger('FilmFantastic_movie')->nullable();
            $table->tinyInteger('FilmHorror')->nullable();
            $table->tinyInteger('FilmCatastrophe_movie')->nullable();
            $table->tinyInteger('Film_romantic')->nullable();
            $table->tinyInteger('FilmFantasy')->nullable();
            $table->tinyInteger('FilmZombie_Werewolves_Vampires');
            $table->tinyInteger('FilmSport')->nullable();
            $table->tinyInteger('Film_military')->nullable();
            $table->tinyInteger('Film_on_real_events')->nullable();
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('category_id');
            $table->dropColumn('name');
            $table->dropColumn('code');
            $table->dropColumn('discription');
            $table->dropColumn('image');
            $table->dropColumn('StageDirector');
            $table->dropColumn('Country');
            $table->dropColumn('Channel');
            $table->dropColumn('release_date');
            $table->dropColumn('voice_acting');
            $table->dropColumn('episode_release_day');
            $table->dropColumn('number_of_episodes');
            $table->dropColumn('genres');
            $table->dropColumn('rating');
            $table->dropColumn('kinopoisk_id');
            $table->dropColumn('kinopoisk_reting');
            $table->dropColumn('IMDbRating');
            $table->dropColumn('logo_image');
            $table->dropColumn('title');
            $table->dropColumn('meta_description');
            $table->dropColumn('player');
            $table->dropColumn('original_name');
            $table->dropColumn('social_networks_title');
            $table->dropColumn('social_networks_url');
            $table->dropColumn('social_networks_description');
            $table->dropColumn('another_player');
            $table->dropColumn('FilmAction');
            $table->dropColumn('FilmWestern');
            $table->dropColumn('FilmCrime');
            $table->dropColumn('Action');
            $table->dropColumn('Western');
            $table->dropColumn('Crime');
            $table->dropColumn('Detective');
            $table->dropColumn('Drama');
            $table->dropColumn('Historical_film');
            $table->dropColumn('Comedy');
            $table->dropColumn('Melodrama');
            $table->dropColumn('Musical_film');
            $table->dropColumn('Thriller');
            $table->dropColumn('Fantastic_movie');
            $table->dropColumn('Horror');
            $table->dropColumn('Catastrophe_movie');
            $table->dropColumn('Russian_serials');
            $table->dropColumn('romantic');
            $table->dropColumn('Fantasy');
            $table->dropColumn('Zombie_Werewolves_Vampires');
            $table->dropColumn('Sport');
            $table->dropColumn('military');
            $table->dropColumn('on_real_events');
            $table->dropColumn('Evil_Spirits_And_Witches');
            $table->dropColumn('Netflix');
            $table->dropColumn('FilmDetective');
            $table->dropColumn('FilmDrama');
            $table->dropColumn('FilmHistorical_film');
            $table->dropColumn('FilmComedy');
            $table->dropColumn('FilmMelodrama');
            $table->dropColumn('FilmMusical_film');
            $table->dropColumn('FilmTragedy');
            $table->dropColumn('FilmTragicomedy');
            $table->dropColumn('FilmThriller');
            $table->dropColumn('FilmFantastic_movie');
            $table->dropColumn('FilmHorror');
            $table->dropColumn('FilmCatastrophe_movie');
            $table->dropColumn('Film_romantic');
            $table->dropColumn('FilmFantasy');
            $table->dropColumn('FilmZombie_Werewolves_Vampires');
            $table->dropColumn('FilmSport');
            $table->dropColumn('Film_military');
            $table->dropColumn('Film_on_real_events');
        });
    }
}
