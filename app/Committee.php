<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $fillable = [
        'committee_id', 'committee_description'
    ];
    public $incrementing = false;

    protected $primaryKey = 'committee_id';

    /**
     * Relation of committee and events. A committee can
     * hold many events.
     */
    public function events(){
        return $this->hasMany('App\Events', 'committee_id');
    }
}
