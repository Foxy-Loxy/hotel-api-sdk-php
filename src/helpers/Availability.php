<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 11/4/2015
 * Time: 7:25 PM
 */

namespace hotelbeds\hotel_api_sdk\helpers;
use hotelbeds\hotel_api_sdk\model\Accommodations;
use hotelbeds\hotel_api_sdk\model\Destination;
use hotelbeds\hotel_api_sdk\model\Filter;
use hotelbeds\hotel_api_sdk\model\Geolocation;
use hotelbeds\hotel_api_sdk\model\Stay;
use hotelbeds\hotel_api_sdk\model\Boards;
use hotelbeds\hotel_api_sdk\model\Rooms;

/**
 * Class Availability
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property Stay $stay Booking length of stay element
 * @property array $occupancies In the occupancy node the following must be informed: the number of rooms, capacity, number of adults, number of children and children ages if applicable.
 * @property Destination $destination Destination element: Destination code, zone
 * @property Geolocation $geolocation Geolocation element: longitude, latitude
 * @property array $keywords Array of keywords to be searched.
 * @property array $hotels Array of code of hotels to be filtered.
 * @property string $sourceMarket Hotelbeds Group client source market
 * @property boolean $dailyRate Display the rate day by day
 * @property string $language Language of the response
 * @property Filter $filter Filters for availability
 * @property Boards $boards Boards for availability
 * @property array $accommodations Accommodations for availability
 * @property Rooms $rooms Rooms for availability
 */

class Availability extends ApiHelper
{
    /**
     * Availability constructor.
     */
    public function __construct()
    {
        $this->validFields = [
                "stay" => "hotelbeds\\hotel_api_sdk\\model\\Stay",
                "occupancies" => "array",
                "geolocation" => "hotelbeds\\hotel_api_sdk\\model\\Geolocation",
                "destination" => "hotelbeds\\hotel_api_sdk\\model\\Destination",
                "keywords" => "array",
                "hotels" => "array",
                "boards" => "hotelbeds\\hotel_api_sdk\\model\\Boards",
                "sourceMarket" => "string",
                "dailyRate" => "boolean",
                "language" => "string",
                "filter" => "hotelbeds\\hotel_api_sdk\\model\\Filter",
                "accommodations" => "array",
                "rooms" => "hotelbeds\\hotel_api_sdk\\model\\Rooms"
                ];
    }
}