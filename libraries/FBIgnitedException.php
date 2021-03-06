<?php
/**
 * Facebook Ignited by Dark Prospect Games
 *
 * PHP version 5
 *
 * @category  FBIgnited
 * @package   FBIgnited
 * @author    Alfonso E Martinez, III <admin@darkprospect.net>
 * @copyright 2011-2013 Dark Prospect Games, LLC
 * @license   BSD https://darkprospect.net/BSD-License.txt
 * @link      https://github.com/DarkProspectGames/Facebook-Ignited
 */
/**
 * Facebook Ignited by Dark Prospect Games
 *
 * Facebook Ignited, an open source extension and wrapper for the Facebook PHP SDK contained
 * within a CodeIgniter Library. It takes several common functionalities in the Facebook
 * Documentation and creates methods for the user to quickly code a Facebook Site or
 * Application with the ease of CodeIgniter.
 *
 * Do Not Edit This File, Could Cause Disruption of App
 *
 * @category FBIgnited
 * @package  FBIgnitedException
 * @author   Alfonso E Martinez, III <admin@darkprospect.net>
 * @license  BSD https://darkprospect.net/BSD-License.txt
 * @version  Release: 1.3.2
 * @link     https://github.com/DarkProspectGames/ObsidianMoonEngine
 */
class FBIgnitedException extends Exception
{

    /**
     * Constructor for Facebook Ignited Exception
     *
     * This extends the standard Exception class in order
     *
     * @param null      $message   The exception message
     * @param Exception $previous  Pass the Exception class to FBIgnitedException
     * @param bool      $error_log Determines whether or not we will log the error in error_log
     */
    public function __construct($message = null, Exception $previous = null, $error_log = true)
    {
        if ($message != null) {
            $this->message = $message;
        }

        if ($previous instanceof Exception) {
            if ($message == null) {
                $this->message = $previous->getMessage();
            }

            $this->code = $previous->getCode();
        }

        if ($error_log === true) {
            error_log('FBIgnitedException: ' . $this->message);
        }

        parent::__construct($this->message, $this->code);
    }

    /**
     * Returns When Treated As String
     *
     * Allows a class to decide how it will react when it is treated like a string.
     *
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

}
