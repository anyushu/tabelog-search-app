<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'url',
        'name',
        'name_supplement',
        'address',
        'tel',
        'email',
        'hp',
        'longitude',
        'latitude',
        'score',
        'reviews',
        'genres',
        'seats',
        'seats_text',
        'budget_dinner',
        'budget_lunch',
        'private_room',
        'reserved',
        'smoking',
        'parking_lot',
        'equipment',
        'mobile_phone',
        'scene',
        'location',
        'service',
        'with_children',
        'dress_code',
        'all_you_can_drink',
        'course',
        'drink',
        'cuisine',
        'related_store_information',
        'related_store_url',
        'remarks',
        'opened_at',
        'online_reservation',
        'closed',
    ];
}
