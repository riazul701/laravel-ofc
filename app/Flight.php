<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
//    protected $connection = 'mysql_2';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'my_flights';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
//    protected $primaryKey = 'flight_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
//    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
//    protected $keyType = 'string';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
//    public $timestamps = false;

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
//    protected $dateFormat = 'U';

//    const CREATED_AT = 'creation_date';
//    const UPDATED_AT = 'last_update';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
//    protected $attributes = [
//        'is_delayed' => true
//    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = ['name'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
//    protected $guarded = ['price'];
    protected $guarded = [];

    use SoftDeletes;
}
