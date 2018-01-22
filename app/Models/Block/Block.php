<?php namespace App\Models\Block;

/**
 * Class Block
 *
 * @author Anuj Jaha 
 */

use App\Models\BaseModel;
use App\Models\Block\Traits\Attribute\Attribute;

class Block extends BaseModel
{
    use Attribute;

    /**
     * Database Table
     *
     */
    protected $table = "data_blocks";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        'block_key',
        'title',
        'block'
    ];

    /**
     * Guarded ID Column
     *
     */
    protected $guarded = ["id"];
}