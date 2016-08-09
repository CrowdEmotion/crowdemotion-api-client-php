<?php
/**
 * TimeseriesApi
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

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * TimeseriesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeseriesApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.crowdemotion.co.uk/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return TimeseriesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation timeseriesDelete
     *
     * Delete a Timeseries
     *
     * @param int $response_id ID of the Response associated to the TimeSeries. (required)
     * @param int $metric_id ID of the Metric of the Timeseries to be deleted. (optional)
     * @return string
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function timeseriesDelete($response_id, $metric_id = null)
    {
        list($response) = $this->timeseriesDeleteWithHttpInfo($response_id, $metric_id);
        return $response;
    }

    /**
     * Operation timeseriesDeleteWithHttpInfo
     *
     * Delete a Timeseries
     *
     * @param int $response_id ID of the Response associated to the TimeSeries. (required)
     * @param int $metric_id ID of the Metric of the Timeseries to be deleted. (optional)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function timeseriesDeleteWithHttpInfo($response_id, $metric_id = null)
    {
        // verify the required parameter 'response_id' is set
        if ($response_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $response_id when calling timeseriesDelete');
        }
        // parse inputs
        $resourcePath = "/timeseries";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($response_id !== null) {
            $queryParams['response_id'] = $this->apiClient->getSerializer()->toQueryValue($response_id);
        }
        // query params
        if ($metric_id !== null) {
            $queryParams['metric_id'] = $this->apiClient->getSerializer()->toQueryValue($metric_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/timeseries'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation timeseriesGet
     *
     * Get all recorded timeseries for a Response
     *
     * @param int $response_id ID of the Response associated to the TimeSeries. (required)
     * @param int $metric_id ID of the Metric associated to the TimeSeries. (optional)
     * @param bool $normalize Return data beetwen 0 and 1. Default: false. (optional)
     * @param string $format If value is &#39;csv&#39; then data is passed back in CSV format insted of the default time-series format. Example: csv. (optional)
     * @return \Swagger\Client\Model\Timeseries[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function timeseriesGet($response_id, $metric_id = null, $normalize = null, $format = null)
    {
        list($response) = $this->timeseriesGetWithHttpInfo($response_id, $metric_id, $normalize, $format);
        return $response;
    }

    /**
     * Operation timeseriesGetWithHttpInfo
     *
     * Get all recorded timeseries for a Response
     *
     * @param int $response_id ID of the Response associated to the TimeSeries. (required)
     * @param int $metric_id ID of the Metric associated to the TimeSeries. (optional)
     * @param bool $normalize Return data beetwen 0 and 1. Default: false. (optional)
     * @param string $format If value is &#39;csv&#39; then data is passed back in CSV format insted of the default time-series format. Example: csv. (optional)
     * @return Array of \Swagger\Client\Model\Timeseries[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function timeseriesGetWithHttpInfo($response_id, $metric_id = null, $normalize = null, $format = null)
    {
        // verify the required parameter 'response_id' is set
        if ($response_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $response_id when calling timeseriesGet');
        }
        // parse inputs
        $resourcePath = "/timeseries";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($response_id !== null) {
            $queryParams['response_id'] = $this->apiClient->getSerializer()->toQueryValue($response_id);
        }
        // query params
        if ($metric_id !== null) {
            $queryParams['metric_id'] = $this->apiClient->getSerializer()->toQueryValue($metric_id);
        }
        // query params
        if ($normalize !== null) {
            $queryParams['normalize'] = $this->apiClient->getSerializer()->toQueryValue($normalize);
        }
        // query params
        if ($format !== null) {
            $queryParams['format'] = $this->apiClient->getSerializer()->toQueryValue($format);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Timeseries[]',
                '/timeseries'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Timeseries[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Timeseries[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
