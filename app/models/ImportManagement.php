<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ImportManagement extends Eloquent  {

    use SoftDeletingTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'import_management';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = array('id_customer', 'customer_name','import_day','import_month','import_year','id_vote',
        'license_plate','weights_total_tons','vehicle_weight_tons','fresh_weight_tons','percentage_humus',
        'percentage_oversize','percentage_shells','weights_minus_tons','production_locations');
    protected $dates = ['deleted_at'];
}
