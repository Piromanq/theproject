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
        'rating', 'kinopoisk_id', 'kinopoisk_reting', 'Molten', 'Repousse', 'Radius13',
        'R13', 'R14', 'R15', 'R16', 'R17', 'R18', 'R19',
        'R20', 'Filter175X65', 'Filter175X70', 'Filter185X60', 'Filter185X65', 'Filter195X60', 'Filter195X65',
        'Filter205X55', 'Filter205X60','Filter215X55', 'Filter215X60', 'Filter215X65', 'Filter225X55', 'Filter225X60', 'Filter235X55',
        'Filter235X60', 'summer', 'winter', 'Radius14', 'Radius15', 'Radius16', 'Radius17', 'mounting_holes_4', 'mounting_holes_5', 'hole_diameter_98',
        'hole_diameter_100', 'hole_diameter_105', 'hole_diameter_108', 'hole_diameter_110', 'hole_diameter_112', 'hole_diameter_114_3',
        'hole_diameter_139', 'center_hole_diameter_58_6', 'center_hole_diameter_60_1', 'center_hole_diameter_66_1', 'center_hole_diameter_98_1',
        'StageDirector', 'Country', 'Channel', 'IMDbRating', 'SingleJanr', 'ChannelImg', 'release_date', 'another_player',
        'speed_index', 'increased_lifting_capacity', 'RunFlat_technology', 'vehicle_type', 'design', 'design', 'sealing_method',];

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



    public function setR13Attribute($value)
    {
        $this->attributes['R13'] = $value === 'on' ? 1 : 0;
    }
    public function isR13(){
        return $this->R13 === 1;
    }

    public function setR14Attribute($value)
    {
        $this->attributes['R14'] = $value === 'on' ? 1 : 0;
    }
    public function isR14(){
        return $this->R14 === 1;
    }

    public function setR15Attribute($value)
    {
        $this->attributes['R15'] = $value === 'on' ? 1 : 0;
    }
    public function isR15(){
        return $this->R15 === 1;
    }

    public function setR16Attribute($value)
    {
        $this->attributes['R16'] = $value === 'on' ? 1 : 0;
    }
    public function isR16(){
        return $this->R16 === 1;
    }

    public function setR17Attribute($value)
    {
        $this->attributes['R17'] = $value === 'on' ? 1 : 0;
    }
    public function isR17(){
        return $this->R17 === 1;
    }

    public function setR18Attribute($value)
    {
        $this->attributes['R18'] = $value === 'on' ? 1 : 0;
    }
    public function isR18(){
        return $this->R18 === 1;
    }

    public function setR19Attribute($value)
    {
        $this->attributes['R19'] = $value === 'on' ? 1 : 0;
    }
    public function isR19(){
        return $this->R19 === 1;
    }

    public function setR20Attribute($value)
    {
        $this->attributes['R20'] = $value === 'on' ? 1 : 0;
    }
    public function isR20(){
        return $this->R20 === 1;
    }

    public function setFilter175X65Attribute($value)
    {
        $this->attributes['Filter175X65'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter175X65(){
        return $this->Filter175X65 === 1;
    }

    public function setFilter175X70Attribute($value)
    {
        $this->attributes['Filter175X70'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter175X70(){
        return $this->Filter175X70 === 1;
    }

    public function setFilter185X60Attribute($value)
    {
        $this->attributes['Filter185X60'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter185X60(){
        return $this->Filter185X60 === 1;
    }

    public function setFilter185X65Attribute($value)
    {
        $this->attributes['Filter185X65'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter185X65(){
        return $this->Filter185X65 === 1;
    }


    public function setFilter195X60Attribute($value)
    {
        $this->attributes['Filter195X60'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter195X60(){
        return $this->Filter195X60 === 1;
    }

    public function setFilter195X65Attribute($value)
    {
        $this->attributes['Filter195X65'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter195X65(){
        return $this->Filter195X65 === 1;
    }

    public function setFilter205X55Attribute($value)
    {
        $this->attributes['Filter205X55'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter205X55(){
        return $this->Filter205X55 === 1;
    }


    public function setFilter205X60Attribute($value)
    {
        $this->attributes['Filter205X60'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter205X60(){
        return $this->Filter205X60 === 1;
    }

    public function setFilter215X55Attribute($value)
    {
        $this->attributes['Filter215X55'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter215X55(){
        return $this->Filter215X55 === 1;
    }

    public function setFilter215X60Attribute($value)
    {
        $this->attributes['Filter215X60'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter215X60(){
        return $this->Filter215X60 === 1;
    }

    public function setFilter215X65Attribute($value)
    {
        $this->attributes['Filter215X65'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter215X65(){
        return $this->Filter215X65 === 1;
    }

    public function setFilter225X55Attribute($value)
    {
        $this->attributes['Filter225X55'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter225X55(){
        return $this->Filter225X55 === 1;
    }

    public function setFilter225X60Attribute($value)
    {
        $this->attributes['Filter225X60'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter225X60(){
        return $this->Filter225X60 === 1;
    }

    public function setFilter235X55Attribute($value)
    {
        $this->attributes['Filter235X55'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter235X55(){
        return $this->Filter235X55 === 1;
    }


    public function setFilter235X60Attribute($value)
    {
        $this->attributes['Filter235X60'] = $value === 'on' ? 1 : 0;
    }
    public function isFilter235X60(){
        return $this->Filter235X60 === 1;
    }

    public function setSummerAttribute($value)
    {
        $this->attributes['summer'] = $value === 'on' ? 1 : 0;
    }
    public function isSummer(){
        return $this->summer === 1;
    }

    public function setWinterAttribute($value)
    {
        $this->attributes['winter'] = $value === 'on' ? 1 : 0;
    }
    public function isWinter(){
        return $this->winter === 1;
    }

    /*Диски*/

    public function setMoltenAttribute($value)
    {
        $this->attributes['Molten'] = $value === 'on' ? 1 : 0;
    }
    public function isMolten(){
        return $this->Molten === 1;
    }
    public function setRepousseAttribute($value)
    {
        $this->attributes['Repousse'] = $value === 'on' ? 1 : 0;
    }
    public function isRepousse(){
        return $this->Repousse === 1;
    }
    public function setRadius13Attribute($value)
    {
        $this->attributes['Radius13'] = $value === 'on' ? 1 : 0;
    }
    public function isRadius13(){
        return $this->Radius13 === 1;
    }

    public function setRadius14Attribute($value)
    {
        $this->attributes['Radius14'] = $value === 'on' ? 1 : 0;
    }
    public function isRadius14(){
        return $this->Radius14 === 1;
    }

    public function setRadius15Attribute($value)
    {
        $this->attributes['Radius15'] = $value === 'on' ? 1 : 0;
    }
    public function isRadius15(){
        return $this->Radius15 === 1;
    }

    public function setRadius16Attribute($value)
    {
        $this->attributes['Radius16'] = $value === 'on' ? 1 : 0;
    }
    public function isRadius16(){
        return $this->Radius16 === 1;
    }

    public function setRadius17Attribute($value)
    {
        $this->attributes['Radius17'] = $value === 'on' ? 1 : 0;
    }
    public function isRadius17(){
        return $this->Radius17 === 1;
    }

    public function setMountingHoles4Attribute($value)
    {
        $this->attributes['mounting_holes_4'] = $value === 'on' ? 1 : 0;
    }
    public function isMounting_holes_4(){
        return $this->mounting_holes_4 === 1;
    }


    public function setMountingHoles5Attribute($value)
    {
        $this->attributes['mounting_holes_5'] = $value === 'on' ? 1 : 0;
    }
    public function isMounting_holes_5(){
        return $this->mounting_holes_5 === 1;
    }

    public function setHoleDiameter98Attribute($value)
    {
        $this->attributes['hole_diameter_98'] = $value === 'on' ? 1 : 0;
    }
    public function isHole_diameter_98(){
        return $this->hole_diameter_98 === 1;
    }

    public function setHoleDiameter100Attribute($value)
    {
        $this->attributes['hole_diameter_100'] = $value === 'on' ? 1 : 0;
    }
    public function isHole_diameter_100(){
        return $this->hole_diameter_100 === 1;
    }

    public function setHoleDiameter105Attribute($value)
    {
        $this->attributes['hole_diameter_105'] = $value === 'on' ? 1 : 0;
    }
    public function isHole_diameter_105(){
        return $this->hole_diameter_105 === 1;
    }

    public function setHoleDiameter108Attribute($value)
    {
        $this->attributes['hole_diameter_108'] = $value === 'on' ? 1 : 0;
    }
    public function isHole_diameter_108(){
        return $this->hole_diameter_108 === 1;
    }

    public function setHoleDiameter110Attribute($value)
    {
        $this->attributes['hole_diameter_110'] = $value === 'on' ? 1 : 0;
    }
    public function isHole_diameter_110(){
        return $this->hole_diameter_110 === 1;
    }

    public function setHoleDiameter112Attribute($value)
    {
        $this->attributes['hole_diameter_112'] = $value === 'on' ? 1 : 0;
    }
    public function isHole_diameter_112(){
        return $this->hole_diameter_112 === 1;
    }

    public function setHoleDiameter1143Attribute($value)
    {
        $this->attributes['hole_diameter_114_3'] = $value === 'on' ? 1 : 0;
    }
    public function isHole_diameter_114_3(){
        return $this->hole_diameter_114_3 === 1;
    }

    public function setHoleDiameter139Attribute($value)
    {
        $this->attributes['hole_diameter_139'] = $value === 'on' ? 1 : 0;
    }
    public function isHole_diameter_139(){
        return $this->hole_diameter_139 === 1;
    }

    public function setCenterHoleDiameter586Attribute($value)
    {
        $this->attributes['center_hole_diameter_58_6'] = $value === 'on' ? 1 : 0;
    }
    public function isCenter_hole_diameter_58_6(){
        return $this->center_hole_diameter_58_6 === 1;
    }

    public function setCenterHoleDiameter601Attribute($value)
    {
        $this->attributes['center_hole_diameter_60_1'] = $value === 'on' ? 1 : 0;
    }
    public function isCenter_hole_diameter_60_1(){
        return $this->center_hole_diameter_60_1 === 1;
    }

    public function setCenterHoleDiameter661Attribute($value)
    {
        $this->attributes['center_hole_diameter_66_1'] = $value === 'on' ? 1 : 0;
    }
    public function isCenter_hole_diameter_66_1(){
        return $this->center_hole_diameter_66_1 === 1;
    }

    public function setCenterHoleDiameter981Attribute($value)
    {
        $this->attributes['center_hole_diameter_98_1'] = $value === 'on' ? 1 : 0;
    }
    public function isCenter_hole_diameter_98_1(){
        return $this->center_hole_diameter_98_1 === 1;
    }

}
