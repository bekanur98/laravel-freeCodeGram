<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

//    protected $fillable = [
//        'title',
//        'description',
//        'url',
//        'image'
//    ];
    public function profileImage()
    {
        return ($this->image) ? '/storage/' . $this->image : 'https://www.kindpng.com/picc/m/21-214439_free-high-quality-person-icon-default-profile-picture.png';
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
