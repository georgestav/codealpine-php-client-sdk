<?php
/**
 * ClimbingQuestionnaireAnalysis
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Codealpine
 *
 * The codealpine API description
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ClimbingQuestionnaireAnalysis Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ClimbingQuestionnaireAnalysis implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClimbingQuestionnaireAnalysis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'message' => 'string',
        'min_value' => 'float',
        'max_value' => 'float',
        'questionnaire' => '\OpenAPI\Client\Model\ClimbingQuestionnaire',
        'user_response' => '\OpenAPI\Client\Model\ClimbingQuestionnaireUser'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'message' => null,
        'min_value' => null,
        'max_value' => null,
        'questionnaire' => null,
        'user_response' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'message' => 'message',
        'min_value' => 'minValue',
        'max_value' => 'maxValue',
        'questionnaire' => 'questionnaire',
        'user_response' => 'userResponse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'message' => 'setMessage',
        'min_value' => 'setMinValue',
        'max_value' => 'setMaxValue',
        'questionnaire' => 'setQuestionnaire',
        'user_response' => 'setUserResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'message' => 'getMessage',
        'min_value' => 'getMinValue',
        'max_value' => 'getMaxValue',
        'questionnaire' => 'getQuestionnaire',
        'user_response' => 'getUserResponse'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['min_value'] = $data['min_value'] ?? null;
        $this->container['max_value'] = $data['max_value'] ?? null;
        $this->container['questionnaire'] = $data['questionnaire'] ?? null;
        $this->container['user_response'] = $data['user_response'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['min_value'] === null) {
            $invalidProperties[] = "'min_value' can't be null";
        }
        if ($this->container['max_value'] === null) {
            $invalidProperties[] = "'max_value' can't be null";
        }
        if ($this->container['questionnaire'] === null) {
            $invalidProperties[] = "'questionnaire' can't be null";
        }
        if ($this->container['user_response'] === null) {
            $invalidProperties[] = "'user_response' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return float
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param float $min_value min_value
     *
     * @return self
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return float
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param float $max_value max_value
     *
     * @return self
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets questionnaire
     *
     * @return \OpenAPI\Client\Model\ClimbingQuestionnaire
     */
    public function getQuestionnaire()
    {
        return $this->container['questionnaire'];
    }

    /**
     * Sets questionnaire
     *
     * @param \OpenAPI\Client\Model\ClimbingQuestionnaire $questionnaire questionnaire
     *
     * @return self
     */
    public function setQuestionnaire($questionnaire)
    {
        $this->container['questionnaire'] = $questionnaire;

        return $this;
    }

    /**
     * Gets user_response
     *
     * @return \OpenAPI\Client\Model\ClimbingQuestionnaireUser
     */
    public function getUserResponse()
    {
        return $this->container['user_response'];
    }

    /**
     * Sets user_response
     *
     * @param \OpenAPI\Client\Model\ClimbingQuestionnaireUser $user_response user_response
     *
     * @return self
     */
    public function setUserResponse($user_response)
    {
        $this->container['user_response'] = $user_response;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


