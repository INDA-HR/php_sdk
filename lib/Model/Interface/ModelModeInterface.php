<?php
namespace OpenAPI\Client\Model\Interface;
interface ModelModeInterface {
    public const MODE_OVERWRITE = 'overwrite';

    public const MODE_APPEND = 'append';

    public const ALLOWED_MODES = [
        self::MODE_OVERWRITE,
        self::MODE_APPEND
    ];

    public static function getAllowedModes();

    public static function  getModeOverwrite();

    public static function  getModeAppend();
}