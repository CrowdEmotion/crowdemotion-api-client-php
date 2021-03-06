<?php
/**
 * Tags
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
 * Tags Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tags implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tags';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'duration' => 'int',
        'name' => 'string',
        't' => 'int',
        'x' => 'string',
        'y' => 'string',
        'media_id' => 'int',
        'time_created' => '\DateTime',
        'uuid' => 'string',
        'version' => 'int',
        'created' => 'bool',
        'modified' => 'bool'
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
        'id' => 'id',
        'duration' => 'duration',
        'name' => 'name',
        't' => 't',
        'x' => 'x',
        'y' => 'y',
        'media_id' => 'media_id',
        'time_created' => 'timeCreated',
        'uuid' => 'uuid',
        'version' => 'version',
        'created' => 'created',
        'modified' => 'modified'
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
        'id' => 'setId',
        'duration' => 'setDuration',
        'name' => 'setName',
        't' => 'setT',
        'x' => 'setX',
        'y' => 'setY',
        'media_id' => 'setMediaId',
        'time_created' => 'setTimeCreated',
        'uuid' => 'setUuid',
        'version' => 'setVersion',
        'created' => 'setCreated',
        'modified' => 'setModified'
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
        'id' => 'getId',
        'duration' => 'getDuration',
        'name' => 'getName',
        't' => 'getT',
        'x' => 'getX',
        'y' => 'getY',
        'media_id' => 'getMediaId',
        'time_created' => 'getTimeCreated',
        'uuid' => 'getUuid',
        'version' => 'getVersion',
        'created' => 'getCreated',
        'modified' => 'getModified'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['t'] = isset($data['t']) ? $data['t'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['media_id'] = isset($data['media_id']) ? $data['media_id'] : null;
        $this->container['time_created'] = isset($data['time_created']) ? $data['time_created'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalid_properties[] = "'duration' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['t'] === null) {
            $invalid_properties[] = "'t' can't be null";
        }
        if ($this->container['x'] === null) {
            $invalid_properties[] = "'x' can't be null";
        }
        if ($this->container['y'] === null) {
            $invalid_properties[] = "'y' can't be null";
        }
        if ($this->container['media_id'] === null) {
            $invalid_properties[] = "'media_id' can't be null";
        }
        if ($this->container['time_created'] === null) {
            $invalid_properties[] = "'time_created' can't be null";
        }
        if ($this->container['uuid'] === null) {
            $invalid_properties[] = "'uuid' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalid_properties[] = "'version' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalid_properties[] = "'modified' can't be null";
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['t'] === null) {
            return false;
        }
        if ($this->container['x'] === null) {
            return false;
        }
        if ($this->container['y'] === null) {
            return false;
        }
        if ($this->container['media_id'] === null) {
            return false;
        }
        if ($this->container['time_created'] === null) {
            return false;
        }
        if ($this->container['uuid'] === null) {
            return false;
        }
        if ($this->container['version'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration 
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets t
     * @return int
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     * @param int $t 
     * @return $this
     */
    public function setT($t)
    {
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets x
     * @return string
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     * @param string $x 
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     * @return string
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     * @param string $y 
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets media_id
     * @return int
     */
    public function getMediaId()
    {
        return $this->container['media_id'];
    }

    /**
     * Sets media_id
     * @param int $media_id 
     * @return $this
     */
    public function setMediaId($media_id)
    {
        $this->container['media_id'] = $media_id;

        return $this;
    }

    /**
     * Gets time_created
     * @return \DateTime
     */
    public function getTimeCreated()
    {
        return $this->container['time_created'];
    }

    /**
     * Sets time_created
     * @param \DateTime $time_created 
     * @return $this
     */
    public function setTimeCreated($time_created)
    {
        $this->container['time_created'] = $time_created;

        return $this;
    }

    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid 
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param int $version 
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets created
     * @return bool
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param bool $created 
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     * @return bool
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param bool $modified 
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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


