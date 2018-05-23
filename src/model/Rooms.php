<?php
/**
 * Created by PhpStorm.
 * User: thedjaney@gmail.com
 * Date: 7/11/17
 * Time: 3:31 PM
 */

namespace hotelbeds\hotel_api_sdk\model;

/**
 * Class Rooms
 * @package hotelbeds\hotel_api_sdk\model
 * @property boolean included
 * @property array room
 *
 */
class Rooms extends ApiModel
{
    public function __construct()
    {
        $this->validFields = [
            "included" => "boolean",
            "room" => "array",
        ];

    }
}