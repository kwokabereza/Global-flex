<?php namespace Annb\Globalflex\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'annb_globalflex_projects';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $attachMany = [
        'posters' => 'System\Models\File'
    ];

}
