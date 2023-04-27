<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'target_amount',
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class, 'campaign_id', 'id');
    }

    // this is a recommended way to declare event handlers
    public static function boot()
    {
        parent::boot();

        static::deleting(function ($record) { // before delete() method call this
            $record->donations()->delete();
        });
    }
}
