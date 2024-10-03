<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Team;
use App\Models\Gender;

class Footballist extends Model
{
    protected $table = 'footballists';
    protected $guarded = false;
    
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
}
