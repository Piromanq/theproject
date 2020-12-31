<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code', 'discription', 'name', 'image',

        'price', 'category_id','logo_image', 'title', 'meta_description', 'player', 'original_name', 'social_networks_title',
        'social_networks_url', 'social_networks_description', 'progress', 'genres',
        'number_of_episodes', 'episode_release_day', 'voice_acting',
        'rating', 'kinopoisk_id', 'kinopoisk_reting', 'FilmAction', 'FilmWestern', 'FilmCrime',
        'Action', 'Western', 'Crime', 'Detective', 'Drama', 'Historical_film', 'Comedy',
        'Melodrama', 'Musical_film', 'Thriller', 'Fantastic_movie', 'Horror', 'Catastrophe_movie', 'Russian_serials',
        'romantic', 'Fantasy','Zombie_Werewolves_Vampires', 'Sport', 'military', 'on_real_events', 'Evil_Spirits_And_Witches',
        'Netflix', 'FilmDetective', 'FilmDrama', 'FilmHistorical_film', 'FilmComedy', 'FilmMelodrama', 'FilmMusical_film', 'FilmTragedy',
        'FilmTragicomedy', 'FilmThriller', 'FilmFantastic_movie', 'FilmHorror', 'FilmCatastrophe_movie', 'Film_romantic',
        'FilmFantasy', 'FilmZombie_Werewolves_Vampires', 'FilmSport', 'Film_military', 'Film_on_real_events',
        'StageDirector', 'Country', 'Channel', 'IMDbRating', 'SingleJanr', 'ChannelImg', 'release_date', 'another_player',];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


public function scopeByCode ($query, $code){
        return $query->where('code', $code);
}


    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }



    public function isFilmAction(){
        return $this->FilmAction === 1;
    }

    public function isFilmWestern(){
        return $this->FilmWestern === 1;
    }

    public function isFilmCrime(){
        return $this->FilmCrime === 1;
    }

    public function isFilmDetective(){
        return $this->FilmDetective === 1;
    }

    public function isFilmDrama(){
        return $this->FilmDrama === 1;
    }

    public function isFilmHistorical_film(){
        return $this->FilmHistorical_film === 1;
    }

    public function isFilmComedy(){
        return $this->FilmComedy === 1;
    }

    public function isFilmMelodrama(){
        return $this->FilmMelodrama === 1;
    }

    public function isFilmMusical_film(){
        return $this->FilmMusical_film === 1;
    }

    public function isFilmTragicomedy(){
        return $this->FilmTragicomedy === 1;
    }

    public function isFilmThriller(){
        return $this->FilmThriller === 1;
    }

    public function isFilmFantastic_movie(){
        return $this->FilmFantastic_movie === 1;
    }

    public function isFilmHorror(){
        return $this->FilmHorror === 1;
    }

    public function isFilmCatastrophe_movie(){
        return $this->FilmCatastrophe_movie === 1;
    }

    public function isFilm_romantic(){
        return $this->Film_romantic === 1;
    }

    public function isFilmFantasy(){
        return $this->FilmFantasy === 1;
    }

    public function isFilmZombie_Werewolves_Vampires(){
        return $this->FilmZombie_Werewolves_Vampires === 1;
    }

    public function isFilmSport(){
        return $this->FilmSport === 1;
    }

    public function isFilm_military(){
        return $this->Film_military === 1;
    }

    public function isFilm_on_real_events(){
        return $this->Film_on_real_events === 1;
    }







    public function isAction(){
        return $this->Action === 1;
    }

    public function isWestern(){
        return $this->Western === 1;
    }

    public function isCrime(){
        return $this->Crime === 1;
    }

    public function isDetective(){
        return $this->Detective === 1;
    }

    public function isDrama(){
        return $this->Drama === 1;
    }

    public function isHistorical_film(){
        return $this->Historical_film === 1;
    }

    public function isComedy(){
        return $this->Comedy === 1;
    }

    public function isMelodrama(){
        return $this->Melodrama === 1;
    }

    public function isMusical_film(){
        return $this->Musical_film === 1;
    }

    public function isThriller(){
        return $this->Thriller === 1;
    }

    public function isFantastic_movie(){
        return $this->Fantastic_movie === 1;
    }

    public function isHorror(){
        return $this->Horror === 1;
    }

    public function isCatastrophe_movie(){
        return $this->Catastrophe_movie === 1;
    }

    public function isRussian_serials(){
        return $this->Russian_serials === 1;
    }

    public function isRomantic(){
        return $this->Romantic === 1;
    }

    public function isFantasy(){
        return $this->Fantasy === 1;
    }

    public function isZombie_Werewolves_Vampires(){
        return $this->Zombie_Werewolves_Vampires === 1;
    }

    public function isSport(){
        return $this->Sport === 1;
    }

    public function isMilitary(){
        return $this->Military === 1;
    }

    public function isOn_real_events(){
        return $this->On_real_events === 1;
    }

    public function isEvil_Spirits_And_Witches(){
        return $this->Evil_Spirits_And_Witches === 1;
    }

    public function isNetflix(){
        return $this->Netflix === 1;
    }


    public function setFilmActionAttribute($value)
    {
        $this->attributes['FilmAction'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmWesternAttribute($value)
    {
        $this->attributes['FilmWestern'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmCrimeAttribute($value)
    {
        $this->attributes['FilmCrime'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmDetectiveAttribute($value)
    {
        $this->attributes['FilmDetective'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmDramaAttribute($value)
    {
        $this->attributes['FilmDrama'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmHistoricalFilmAttribute($value)
    {
        $this->attributes['FilmHistorical_film'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmComedyAttribute($value)
    {
        $this->attributes['FilmComedy'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmMelodramaAttribute($value)
    {
        $this->attributes['FilmMelodrama'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmMusicalFilmAttribute($value)
    {
        $this->attributes['FilmMusical_film'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmTragedyAttribute($value)
    {
        $this->attributes['FilmTragedy'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmTragicomedyAttribute($value)
    {
        $this->attributes['FilmTragicomedy'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmThrillerAttribute($value)
    {
        $this->attributes['FilmThriller'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmFantasticMovieAttribute($value)
    {
        $this->attributes['FilmFantastic_movie'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmHorrorAttribute($value)
    {
        $this->attributes['FilmHorror'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmCatastropheMovieAttribute($value)
    {
        $this->attributes['FilmCatastrophe_movie'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmRomanticAttribute($value)
    {
        $this->attributes['Film_romantic'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmFantasyAttribute($value)
    {
        $this->attributes['FilmFantasy'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmZombieWerewolvesVampiresAttribute($value)
    {
        $this->attributes['FilmZombie_Werewolves_Vampires'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmSportAttribute($value)
    {
        $this->attributes['FilmSport'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmMilitaryAttribute($value)
    {
        $this->attributes['Film_military'] = $value === 'on' ? 1 : 0;
    }

    public function setFilmOnRealEventsAttribute($value)
    {
        $this->attributes['Film_on_real_events'] = $value === 'on' ? 1 : 0;
    }





    public function setActionAttribute($value)
    {
        $this->attributes['Action'] = $value === 'on' ? 1 : 0;
    }

    public function setWesternAttribute($value)
    {
        $this->attributes['Western'] = $value === 'on' ? 1 : 0;
    }

    public function setCrimeAttribute($value)
    {
        $this->attributes['Crime'] = $value === 'on' ? 1 : 0;

    }

    public function setDetectiveAttribute($value)
    {
        $this->attributes['Detective'] = $value === 'on' ? 1 : 0;
    }

    public function setDramaAttribute($value)
    {
        $this->attributes['Drama'] = $value === 'on' ? 1 : 0;
    }

    public function setHistoricalFilmAttribute($value)
    {
        $this->attributes['Historical_film'] = $value === 'on' ? 1 : 0;
    }

    public function setComedyAttribute($value)
    {
        $this->attributes['Comedy'] = $value === 'on' ? 1 : 0;
    }

    public function setMelodramaAttribute($value)
    {
        $this->attributes['Melodrama'] = $value === 'on' ? 1 : 0;
    }

    public function setMusicalFilmAttribute($value)
    {
        $this->attributes['Musical_film'] = $value === 'on' ? 1 : 0;
    }

    public function setThrillerAttribute($value)
    {
        $this->attributes['Thriller'] = $value === 'on' ? 1 : 0;
    }

    public function setFantasticMovieAttribute($value)
    {
        $this->attributes['Fantastic_movie'] = $value === 'on' ? 1 : 0;
    }

    public function setHorrorAttribute($value)
    {
        $this->attributes['Horror'] = $value === 'on' ? 1 : 0;
    }

    public function setCatastrophe_movieAttribute($value)
    {
        $this->attributes['Catastrophe_movie'] = $value === 'on' ? 1 : 0;
    }

    public function setRussianSerialsAttribute($value)
    {
        $this->attributes['Russian_serials'] = $value === 'on' ? 1 : 0;
    }

    public function setRomanticAttribute($value)
    {
        $this->attributes['romantic'] = $value === 'on' ? 1 : 0;
    }

    public function setFantasyAttribute($value)
    {
        $this->attributes['Fantasy'] = $value === 'on' ? 1 : 0;
    }

    public function setZombieWerewolvesVampiresAttribute($value)
    {
        $this->attributes['Zombie_Werewolves_Vampires'] = $value === 'on' ? 1 : 0;
    }

    public function setSportAttribute($value)
    {
        $this->attributes['Sport'] = $value === 'on' ? 1 : 0;
    }

    public function setMilitaryAttribute($value)
    {
        $this->attributes['military'] = $value === 'on' ? 1 : 0;
    }

    public function setOnRealEventsAttribute($value)
    {
        $this->attributes['on_real_events'] = $value === 'on' ? 1 : 0;
    }

    public function setEvilSpiritsAndWitchesAttribute($value)
    {
        $this->attributes['Evil_Spirits_And_Witches'] = $value === 'on' ? 1 : 0;
    }

    public function setNetflixAttribute($value)
    {
        $this->attributes['Netflix'] = $value === 'on' ? 1 : 0;
    }

}
