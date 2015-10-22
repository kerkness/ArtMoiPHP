<?php

/**
 * Helper class to aid with debugging and error logging.
 *
 * @package    ArtMoi
 * @subpackage  Helpers
 * @category   Helpers
 * @author     Ryan Mayberry
 * @copyright  (c) 2015 ArtMoi
 */
class ArtMoi_Debug
{
    /**
     * Returns a var_dump of the provided object.
     *
     * @param null $object
     *
     * @return string
     */
    public static function objectContents($object=null)
    {
        if( is_string($object) )
        {
            return $object;
        }

        ob_start();                    // start buffer capture
        var_dump( $object );           // dump the values
        $contents = ob_get_contents(); // put the buffer into a variable
        ob_end_clean();                // end capture

        return $contents;
    }

    /**
     * Writes the object contents to the error log.
     *
     * @param null $object
     */
    public static function log( $object=null ){
        error_log( "Moi Debug :: " . self::objectContents($object) ) . "\nCalled From :: " . self::objectContents(debug_backtrace());        // log contents of the result of var_dump( $object )
    }

    /**
     * Prints the object contents on screen.
     *
     * @param null $object
     */
    public static function vars($object=null)
    {
        echo "<pre>";
        echo self::objectContents($object);
        echo "</pre>";
    }

}