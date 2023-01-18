<?php
/**
 * JobTitleHeaderDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * INDA HR - INtelligent Data Analysis for HR
 *
 * # Introduction  **INDA (INtelligent Data Analysis)** is an [Intervieweb](https://www.intervieweb.it/hrm/)  AI solution provided as a RESTful API.  The INDA pricing model is *credits-based*, which means that a certain number of credits is associated to each API request. Hence, users have to purchase a certain amount of credits (established according to their needs) which will be reduced  at each API call. INDA accepts and processes a user's request only if their credits quota is grater than - or,  at least, equal to - the number of credits required by that request. To obtain further details on the pricing, please visit our [site](https://inda.ai) or contact us.    INDA HR embraces a wide range of functionalities to manage the main elements of a recruitment process:   + [**candidate**](https://api.inda.ai/hr/docs/v2/#tag/Resume-Management) (hereafter also referred to as **resume** or **applicant**), or rather a  person looking for a job;  + [**job advertisement**](https://api.inda.ai/hr/docs/v2/#tag/JobAd-Management) (hereafter also referred to as **job ad**), which is a document   that collects all the main information and details about a job vacancy;  + [**application**](https://api.inda.ai/hr/docs/v2/#tag/Application-Management), that binds candidates to job ads; it is generated whenever a  candidate applies for a job.  Each of them has a specific set of methods that grants users the ability to create, read, update and delete the relative  documents, plus some special features based on AI approaches (such as *document parsing* or *semantic search*). They can be explored in their respective sections.  Data about the listed document types can be enriched by connecting them to other INDA supported entities, such as  [**companies**](https://api.inda.ai/hr/docs/v2/#tag/Company-Management) and [**universities**](https://api.inda.ai/hr/docs/v2/#tag/Universities), so that recruiters may  get a better and more detailed idea on the candidates' experiences and acquired skills.  All the functionalities mentioned above are meant to help recruiters during the talent acquisition process,  by exploiting the power of AI systems. Among the advantages a recruiter has by using this kind of systems, tackling the bias problem is surely one of the  most relevant. Bias in recruitment is a serious issue that affect both recruiters and candidates, since it may cause wrong hiring  decisions. As we care a lot about this problem, we are constantly working on reduce the bias in original data so that INDA  results may be as fair as possible. As of now, in order to tackle the bias issue, INDA automatically ignores specific fields (such as name, gender, age  and nationality) during the initial processing of each candidate data.  Furthermore, we decided to let users collect data of various types, including personal or sensitive details, but we  do not allow their usage if it is different from statistical purposes; our aim is to discourage recruiters from  focusing on candidates' personal information, and to put their attention on the candidate's skills and abilities.    We want to help recruiters to prevent any kind of bias while searching for the most valuable candidates they really need.    The following documentation is addressed both to developers, in order to provide all technical details for INDA integration, and to managers, to guide them in the exploration of the implementation possibilities.  The host of the API is [https://api.inda.ai/hr/v2/](https://api.inda.ai/hr/v2/). We recommend to check the API version and build (displayed near the documentation title). You can contact us at support@intervieweb.it in case of problems, suggestions, or particular needs.  The search panel on the left can be used to navigate through the documentation and provides an overview of the API structure. On the right, you can find (*i*) the url of the method, (*ii*) an example of request body (if present), and (*iii*) an example of response for each response code. Finally, in the central section of each API method, you can find (*i*) a general description of the purpose of the method, (*ii*) details on parameters and request body schema (if present), and (*iii*) details on response schema, error models, and error codes.
 *
 * The version of the OpenAPI document: 2.2.0
 * Contact: info@intervieweb.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
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
 * JobTitleHeaderDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JobTitleHeaderDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobTitleHeaderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text_positions' => '\OpenAPI\Client\Model\TextPosition[]',
        'raw_value' => 'string',
        'raw_values' => '\OpenAPI\Client\Model\TextDetails[]',
        'is_validated' => 'bool',
        'entity_type' => 'string',
        'proficiency_level' => 'string',
        'category' => 'string',
        'code' => 'array<string,string>',
        'weight' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'text_positions' => null,
        'raw_value' => null,
        'raw_values' => null,
        'is_validated' => null,
        'entity_type' => null,
        'proficiency_level' => null,
        'category' => null,
        'code' => null,
        'weight' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'text_positions' => false,
		'raw_value' => false,
		'raw_values' => false,
		'is_validated' => false,
		'entity_type' => false,
		'proficiency_level' => false,
		'category' => false,
		'code' => false,
		'weight' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text_positions' => 'TextPositions',
        'raw_value' => 'RawValue',
        'raw_values' => 'RawValues',
        'is_validated' => 'IsValidated',
        'entity_type' => 'EntityType',
        'proficiency_level' => 'ProficiencyLevel',
        'category' => 'Category',
        'code' => 'Code',
        'weight' => 'Weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text_positions' => 'setTextPositions',
        'raw_value' => 'setRawValue',
        'raw_values' => 'setRawValues',
        'is_validated' => 'setIsValidated',
        'entity_type' => 'setEntityType',
        'proficiency_level' => 'setProficiencyLevel',
        'category' => 'setCategory',
        'code' => 'setCode',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text_positions' => 'getTextPositions',
        'raw_value' => 'getRawValue',
        'raw_values' => 'getRawValues',
        'is_validated' => 'getIsValidated',
        'entity_type' => 'getEntityType',
        'proficiency_level' => 'getProficiencyLevel',
        'category' => 'getCategory',
        'code' => 'getCode',
        'weight' => 'getWeight'
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
        $this->setIfExists('text_positions', $data ?? [], null);
        $this->setIfExists('raw_value', $data ?? [], null);
        $this->setIfExists('raw_values', $data ?? [], null);
        $this->setIfExists('is_validated', $data ?? [], false);
        $this->setIfExists('entity_type', $data ?? [], null);
        $this->setIfExists('proficiency_level', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], 0.8);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['weight']) && ($this->container['weight'] > 1.0)) {
            $invalidProperties[] = "invalid value for 'weight', must be smaller than or equal to 1.0.";
        }

        if (!is_null($this->container['weight']) && ($this->container['weight'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'weight', must be bigger than or equal to 0.0.";
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
     * Gets text_positions
     *
     * @return \OpenAPI\Client\Model\TextPosition[]|null
     * @deprecated
     */
    public function getTextPositions()
    {
        return $this->container['text_positions'];
    }

    /**
     * Sets text_positions
     *
     * @param \OpenAPI\Client\Model\TextPosition[]|null $text_positions text_positions
     *
     * @return self
     * @deprecated
     */
    public function setTextPositions($text_positions)
    {
        if (is_null($text_positions)) {
            throw new \InvalidArgumentException('non-nullable text_positions cannot be null');
        }
        $this->container['text_positions'] = $text_positions;

        return $this;
    }

    /**
     * Gets raw_value
     *
     * @return string|null
     * @deprecated
     */
    public function getRawValue()
    {
        return $this->container['raw_value'];
    }

    /**
     * Sets raw_value
     *
     * @param string|null $raw_value raw_value
     *
     * @return self
     * @deprecated
     */
    public function setRawValue($raw_value)
    {
        if (is_null($raw_value)) {
            throw new \InvalidArgumentException('non-nullable raw_value cannot be null');
        }
        $this->container['raw_value'] = $raw_value;

        return $this;
    }

    /**
     * Gets raw_values
     *
     * @return \OpenAPI\Client\Model\TextDetails[]|null
     */
    public function getRawValues()
    {
        return $this->container['raw_values'];
    }

    /**
     * Sets raw_values
     *
     * @param \OpenAPI\Client\Model\TextDetails[]|null $raw_values raw_values
     *
     * @return self
     */
    public function setRawValues($raw_values)
    {
        if (is_null($raw_values)) {
            throw new \InvalidArgumentException('non-nullable raw_values cannot be null');
        }
        $this->container['raw_values'] = $raw_values;

        return $this;
    }

    /**
     * Gets is_validated
     *
     * @return bool|null
     */
    public function getIsValidated()
    {
        return $this->container['is_validated'];
    }

    /**
     * Sets is_validated
     *
     * @param bool|null $is_validated is_validated
     *
     * @return self
     */
    public function setIsValidated($is_validated)
    {
        if (is_null($is_validated)) {
            throw new \InvalidArgumentException('non-nullable is_validated cannot be null');
        }
        $this->container['is_validated'] = $is_validated;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string|null $entity_type entity_type
     *
     * @return self
     */
    public function setEntityType($entity_type)
    {
        if (is_null($entity_type)) {
            throw new \InvalidArgumentException('non-nullable entity_type cannot be null');
        }
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets proficiency_level
     *
     * @return string|null
     */
    public function getProficiencyLevel()
    {
        return $this->container['proficiency_level'];
    }

    /**
     * Sets proficiency_level
     *
     * @param string|null $proficiency_level proficiency_level
     *
     * @return self
     */
    public function setProficiencyLevel($proficiency_level)
    {
        if (is_null($proficiency_level)) {
            throw new \InvalidArgumentException('non-nullable proficiency_level cannot be null');
        }
        $this->container['proficiency_level'] = $proficiency_level;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets code
     *
     * @return array<string,string>|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param array<string,string>|null $code <code style='color: #333333; opacity: 0.9'>Details.RawValues</code> may be mapped to several knowledge bases' entities.The <code style='color: #333333; opacity: 0.9'>Value</code> field is the label of the main knowledge base entity to which they are mapped.The main knowledge base can be the default one - named <code style='color: #333333; opacity: 0.9'>INDA</code> - or the tenant's own taxonomy - named after the tenant itself.This object contains details about the destination entities: each field name is a knowledge base name and its value is the ID which identifies the destination entity in that knowledge base.
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight Weight of the main job title. Used for mathing purposes.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }

        if (($weight > 1.0)) {
            throw new \InvalidArgumentException('invalid value for $weight when calling JobTitleHeaderDetails., must be smaller than or equal to 1.0.');
        }
        if (($weight < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $weight when calling JobTitleHeaderDetails., must be bigger than or equal to 0.0.');
        }

        $this->container['weight'] = $weight;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


