<?php

namespace dicom\serviceConfigProvider;

/**
 * ProviderException 
 */
class ProviderException extends \Exception
{
    public static function emptySoapResult($section)
    {
        return new static('SOAP client returned empty result for section: ' . $section);
    }

    public static function sectionMustBeString($section)
    {
        return new static('Section must be string. You provided: ' . $section);
    }

    public static function moduleNotExists($m)
    {
        return new static("Module: '" . $m . "' dont exists!");
    }

    public static function pathParseException($path)
    {
        return new static("Cant parse given path. Expected string, found: " . var_dump($path));
    }

    public static function configIsNotSet($section)
    {
        return new static("Cant find  '" . $section . "' in config");
    }

    public static function invalidMigrationPath()
    {
        return new static("Cant parse migration path. Invalid path given.");
    }
} 