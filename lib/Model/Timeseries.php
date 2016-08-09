<?php
/**
 * Timeseries
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
 * Timeseries Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Timeseries implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Timeseries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'response_id' => 'int',
        'metric_id' => 'int',
        'metric_name' => 'string',
        'start_index' => 'int',
        'end_index' => 'int',
        'step_size' => 'int',
        'custom_message' => 'string',
        'data' => 'int[]'
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
        'response_id' => 'responseId',
        'metric_id' => 'metricId',
        'metric_name' => 'metricName',
        'start_index' => 'startIndex',
        'end_index' => 'endIndex',
        'step_size' => 'stepSize',
        'custom_message' => 'customMessage',
        'data' => 'data'
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
        'response_id' => 'setResponseId',
        'metric_id' => 'setMetricId',
        'metric_name' => 'setMetricName',
        'start_index' => 'setStartIndex',
        'end_index' => 'setEndIndex',
        'step_size' => 'setStepSize',
        'custom_message' => 'setCustomMessage',
        'data' => 'setData'
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
        'response_id' => 'getResponseId',
        'metric_id' => 'getMetricId',
        'metric_name' => 'getMetricName',
        'start_index' => 'getStartIndex',
        'end_index' => 'getEndIndex',
        'step_size' => 'getStepSize',
        'custom_message' => 'getCustomMessage',
        'data' => 'getData'
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
        $this->container['response_id'] = isset($data['response_id']) ? $data['response_id'] : null;
        $this->container['metric_id'] = isset($data['metric_id']) ? $data['metric_id'] : null;
        $this->container['metric_name'] = isset($data['metric_name']) ? $data['metric_name'] : null;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : null;
        $this->container['end_index'] = isset($data['end_index']) ? $data['end_index'] : null;
        $this->container['step_size'] = isset($data['step_size']) ? $data['step_size'] : null;
        $this->container['custom_message'] = isset($data['custom_message']) ? $data['custom_message'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['response_id'] === null) {
            $invalid_properties[] = "'response_id' can't be null";
        }
        if ($this->container['metric_id'] === null) {
            $invalid_properties[] = "'metric_id' can't be null";
        }
        if ($this->container['metric_name'] === null) {
            $invalid_properties[] = "'metric_name' can't be null";
        }
        if ($this->container['start_index'] === null) {
            $invalid_properties[] = "'start_index' can't be null";
        }
        if ($this->container['end_index'] === null) {
            $invalid_properties[] = "'end_index' can't be null";
        }
        if ($this->container['step_size'] === null) {
            $invalid_properties[] = "'step_size' can't be null";
        }
        if ($this->container['custom_message'] === null) {
            $invalid_properties[] = "'custom_message' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalid_properties[] = "'data' can't be null";
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
        if ($this->container['response_id'] === null) {
            return false;
        }
        if ($this->container['metric_id'] === null) {
            return false;
        }
        if ($this->container['metric_name'] === null) {
            return false;
        }
        if ($this->container['start_index'] === null) {
            return false;
        }
        if ($this->container['end_index'] === null) {
            return false;
        }
        if ($this->container['step_size'] === null) {
            return false;
        }
        if ($this->container['custom_message'] === null) {
            return false;
        }
        if ($this->container['data'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets response_id
     * @return int
     */
    public function getResponseId()
    {
        return $this->container['response_id'];
    }

    /**
     * Sets response_id
     * @param int $response_id 
     * @return $this
     */
    public function setResponseId($response_id)
    {
        $this->container['response_id'] = $response_id;

        return $this;
    }

    /**
     * Gets metric_id
     * @return int
     */
    public function getMetricId()
    {
        return $this->container['metric_id'];
    }

    /**
     * Sets metric_id
     * @param int $metric_id 
     * @return $this
     */
    public function setMetricId($metric_id)
    {
        $this->container['metric_id'] = $metric_id;

        return $this;
    }

    /**
     * Gets metric_name
     * @return string
     */
    public function getMetricName()
    {
        return $this->container['metric_name'];
    }

    /**
     * Sets metric_name
     * @param string $metric_name 
     * @return $this
     */
    public function setMetricName($metric_name)
    {
        $this->container['metric_name'] = $metric_name;

        return $this;
    }

    /**
     * Gets start_index
     * @return int
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     * @param int $start_index 
     * @return $this
     */
    public function setStartIndex($start_index)
    {
        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets end_index
     * @return int
     */
    public function getEndIndex()
    {
        return $this->container['end_index'];
    }

    /**
     * Sets end_index
     * @param int $end_index 
     * @return $this
     */
    public function setEndIndex($end_index)
    {
        $this->container['end_index'] = $end_index;

        return $this;
    }

    /**
     * Gets step_size
     * @return int
     */
    public function getStepSize()
    {
        return $this->container['step_size'];
    }

    /**
     * Sets step_size
     * @param int $step_size 
     * @return $this
     */
    public function setStepSize($step_size)
    {
        $this->container['step_size'] = $step_size;

        return $this;
    }

    /**
     * Gets custom_message
     * @return string
     */
    public function getCustomMessage()
    {
        return $this->container['custom_message'];
    }

    /**
     * Sets custom_message
     * @param string $custom_message 
     * @return $this
     */
    public function setCustomMessage($custom_message)
    {
        $this->container['custom_message'] = $custom_message;

        return $this;
    }

    /**
     * Gets data
     * @return int[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param int[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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

