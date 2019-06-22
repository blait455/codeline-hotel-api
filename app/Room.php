<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'room_type_id', 'room_capacity_id', 'hotel_id'
    ];

    public function type(){
        return $this->hasOne(RoomType::class, 'id', 'room_type_id');
    }
    
    public function capacity(){
        return $this->hasOne(RoomCapacity::class, 'id', 'room_capacity_id');
    }
}
