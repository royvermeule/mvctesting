<?php
    class FormatTextHelper
    {

        //Formats the text in a way it is readeble
        public static function ConvertStringToJsonFormat(mixed $strData)
        {
            $json = json_encode($strData, JSON_PRETTY_PRINT);

            echo "<pre>" . $json . "<pre/>";
        }
    }