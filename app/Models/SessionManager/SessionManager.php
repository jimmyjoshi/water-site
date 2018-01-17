<?php namespace App\Models\SessionManager;

/**
 * Class SessionManager
 *
 * @author Anuj Jaha 
 */

use App\Models\BaseModel;

class SessionManager extends BaseModel
{
    /**
     * Database Table
     *
     */
    protected $table = "session_managers";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        'user_id',
        'session_id',
        'ip_address'
    ];

    /**
     * Guarded ID Column
     *
     */
    protected $guarded = ["id"];
}