<?php

namespace Automile\Sdk\Types;

/**
 * ContentType Enum
 */
class ContentType implements Type
{

    const IMAGE = 0;
    const PDF = 1;
    const VOICE = 2;
    const EXCEL = 3;
    const WORD = 4;

    /**
     * determine content type by file extension
     * @param string $filename
     * @return int
     */
    public static function getByFilename($filename)
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        switch ($ext)
        {
            case 'jpg':
            case 'jpeg':
            case 'png':
            case 'gif':
            case 'tiff':
            case 'bmp':
                return self::IMAGE;

            case 'pdf':
                return self::PDF;

            case 'xls':
            case 'xlsx':
                return self::EXCEL;

            case 'mp3':
            case 'wav':
            case 'ogg':
                return self::VOICE;

            case 'doc':
            case 'docx':
                return self::WORD;
        }
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isValid($value)
    {
        return in_array($value, rante(0, 4));
    }

}
