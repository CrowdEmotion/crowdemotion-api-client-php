<?php
/**
 * Stats
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CloudEmotion API v1
 *
 * CrowdEmotion API
 *
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Stats Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Stats implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'media' => 'int',
        'visited' => 'int',
        'started' => 'int',
        'partial' => 'int',
        'completes' => 'int',
        'processed' => 'int',
        'failed' => 'int',
        'unprocessed' => 'int',
        'last_updated' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'media' => 'media',
        'visited' => 'visited',
        'started' => 'started',
        'partial' => 'partial',
        'completes' => 'completes',
        'processed' => 'processed',
        'failed' => 'failed',
        'unprocessed' => 'unprocessed',
        'last_updated' => 'lastUpdated'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'media' => 'setMedia',
        'visited' => 'setVisited',
        'started' => 'setStarted',
        'partial' => 'setPartial',
        'completes' => 'setCompletes',
        'processed' => 'setProcessed',
        'failed' => 'setFailed',
        'unprocessed' => 'setUnprocessed',
        'last_updated' => 'setLastUpdated'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'media' => 'getMedia',
        'visited' => 'getVisited',
        'started' => 'getStarted',
        'partial' => 'getPartial',
        'completes' => 'getCompletes',
        'processed' => 'getProcessed',
        'failed' => 'getFailed',
        'unprocessed' => 'getUnprocessed',
        'last_updated' => 'getLastUpdated'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['visited'] = isset($data['visited']) ? $data['visited'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['partial'] = isset($data['partial']) ? $data['partial'] : null;
        $this->container['completes'] = isset($data['completes']) ? $data['completes'] : null;
        $this->container['processed'] = isset($data['processed']) ? $data['processed'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['unprocessed'] = isset($data['unprocessed']) ? $data['unprocessed'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['media'] === null) {
            $invalid_properties[] = "'media' can't be null";
        }
        if ($this->container['visited'] === null) {
            $invalid_properties[] = "'visited' can't be null";
        }
        if ($this->container['started'] === null) {
            $invalid_properties[] = "'started' can't be null";
        }
        if ($this->container['partial'] === null) {
            $invalid_properties[] = "'partial' can't be null";
        }
        if ($this->container['completes'] === null) {
            $invalid_properties[] = "'completes' can't be null";
        }
        if ($this->container['processed'] === null) {
            $invalid_properties[] = "'processed' can't be null";
        }
        if ($this->container['failed'] === null) {
            $invalid_properties[] = "'failed' can't be null";
        }
        if ($this->container['unprocessed'] === null) {
            $invalid_properties[] = "'unprocessed' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalid_properties[] = "'last_updated' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['media'] === null) {
            return false;
        }
        if ($this->container['visited'] === null) {
            return false;
        }
        if ($this->container['started'] === null) {
            return false;
        }
        if ($this->container['partial'] === null) {
            return false;
        }
        if ($this->container['completes'] === null) {
            return false;
        }
        if ($this->container['processed'] === null) {
            return false;
        }
        if ($this->container['failed'] === null) {
            return false;
        }
        if ($this->container['unprocessed'] === null) {
            return false;
        }
        if ($this->container['last_updated'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets media
     * @return int
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     * @param int $media 
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets visited
     * @return int
     */
    public function getVisited()
    {
        return $this->container['visited'];
    }

    /**
     * Sets visited
     * @param int $visited 
     * @return $this
     */
    public function setVisited($visited)
    {
        $this->container['visited'] = $visited;

        return $this;
    }

    /**
     * Gets started
     * @return int
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     * @param int $started 
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets partial
     * @return int
     */
    public function getPartial()
    {
        return $this->container['partial'];
    }

    /**
     * Sets partial
     * @param int $partial 
     * @return $this
     */
    public function setPartial($partial)
    {
        $this->container['partial'] = $partial;

        return $this;
    }

    /**
     * Gets completes
     * @return int
     */
    public function getCompletes()
    {
        return $this->container['completes'];
    }

    /**
     * Sets completes
     * @param int $completes 
     * @return $this
     */
    public function setCompletes($completes)
    {
        $this->container['completes'] = $completes;

        return $this;
    }

    /**
     * Gets processed
     * @return int
     */
    public function getProcessed()
    {
        return $this->container['processed'];
    }

    /**
     * Sets processed
     * @param int $processed 
     * @return $this
     */
    public function setProcessed($processed)
    {
        $this->container['processed'] = $processed;

        return $this;
    }

    /**
     * Gets failed
     * @return int
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     * @param int $failed 
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets unprocessed
     * @return int
     */
    public function getUnprocessed()
    {
        return $this->container['unprocessed'];
    }

    /**
     * Sets unprocessed
     * @param int $unprocessed 
     * @return $this
     */
    public function setUnprocessed($unprocessed)
    {
        $this->container['unprocessed'] = $unprocessed;

        return $this;
    }

    /**
     * Gets last_updated
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     * @param string $last_updated 
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

