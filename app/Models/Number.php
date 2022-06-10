<?php

namespace App\Models;

use Arr;
use ArrayAccess;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
 * @property int $id
 * @property int $contact_id
 * @property string $number
 * @property string $type
 * @property-read Contact $contact
 *
 * @see Number::getTypeTextAttribute()
 * @property-read $type_text
 */
class Number extends Model
{
    use HasFactory;

    const TYPE_MOBILE = 'mobile';
    const TYPE_WORK = 'work';
    const TYPE_HOME = 'home';
    const TYPE_BASIC = 'basic';
    const TYPE_BUSINESS_FAX = 'business_fax';
    const TYPE_HOME_FAX = 'home_fax';
    const TYPE_PAGER = 'pager';
    const TYPE_ANOTHER = 'another';


    protected $fillable = [
        'contact_id',
        'number',
        'type'
    ];

    /**
     * @return HasOne
     */
    public function contact(): HasOne
    {
        return $this->hasOne(Contact::class, 'id', 'contact_id');
    }

    /**
     * @return array|ArrayAccess|mixed
     */
    public function getTypeTextAttribute()
    {
        $types = [
            Number::TYPE_MOBILE => 'Мобильный',
            Number::TYPE_WORK => 'Рабочий',
            Number::TYPE_HOME => 'Домашний',
            Number::TYPE_BASIC => 'Основной',
            Number::TYPE_BUSINESS_FAX => 'Рабочий факс',
            Number::TYPE_HOME_FAX => 'Домашний факс',
            Number::TYPE_PAGER => 'Пейджер',
            Number::TYPE_ANOTHER => 'Другой',
        ];
        return Arr::get($types, $this->type, 'Мобильный');
    }
}
