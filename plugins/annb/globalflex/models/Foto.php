<?php namespace Annb\Globalflex\Models;

use Model;

/**
 * Model
 */
class Foto extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'annb_globalflex_fotoprojects';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
