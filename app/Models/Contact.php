<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $name
 * @property string $description
 *
 * @property-read Collection|Number[] $numbers
 * @method static paginate(int $int)
 * @method static inRandomOrder()
 */
class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function numbers(){
        return $this->hasMany(Number::class);
    }
}
