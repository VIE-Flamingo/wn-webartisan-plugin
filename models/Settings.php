<?php namespace Winter\WebArtisan\Models;

use Config;
use Winter\Storm\Database\Model;
use Winter\Storm\Database\Traits\Validation as ValidationTrait;

class Settings extends Model
{
    use ValidationTrait;

    public $implement = [
        'System.Behaviors.SettingsModel',
    ];

    public $settingsCode = 'winter_webartisan_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'hash' => 'min:16',
    ];
}
