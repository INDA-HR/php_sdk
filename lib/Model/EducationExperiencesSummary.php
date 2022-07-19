<?php
/**
 * EducationExperiencesSummary
 *
 * PHP version 7.3
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
 * The version of the OpenAPI document: 2.28194
 * Contact: info@intervieweb.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * EducationExperiencesSummary Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EducationExperiencesSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EducationExperiencesSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'education_experiences_count' => '\OpenAPI\Client\Model\ValidatedIntegerValueModel',
        'education_experiences_average_duration' => '\OpenAPI\Client\Model\ValidatedIntegerValueModel',
        'education_experiences_total_duration' => '\OpenAPI\Client\Model\ValidatedIntegerValueModel',
        'highest_education_title' => '\OpenAPI\Client\Model\HighestEducationTitle',
        'highest_education_level_code' => '\OpenAPI\Client\Model\ResumeEducationExperiencesEducationLevelCode'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'education_experiences_count' => null,
        'education_experiences_average_duration' => null,
        'education_experiences_total_duration' => null,
        'highest_education_title' => null,
        'highest_education_level_code' => null
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
        'education_experiences_count' => 'EducationExperiencesCount',
        'education_experiences_average_duration' => 'EducationExperiencesAverageDuration',
        'education_experiences_total_duration' => 'EducationExperiencesTotalDuration',
        'highest_education_title' => 'HighestEducationTitle',
        'highest_education_level_code' => 'HighestEducationLevelCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'education_experiences_count' => 'setEducationExperiencesCount',
        'education_experiences_average_duration' => 'setEducationExperiencesAverageDuration',
        'education_experiences_total_duration' => 'setEducationExperiencesTotalDuration',
        'highest_education_title' => 'setHighestEducationTitle',
        'highest_education_level_code' => 'setHighestEducationLevelCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'education_experiences_count' => 'getEducationExperiencesCount',
        'education_experiences_average_duration' => 'getEducationExperiencesAverageDuration',
        'education_experiences_total_duration' => 'getEducationExperiencesTotalDuration',
        'highest_education_title' => 'getHighestEducationTitle',
        'highest_education_level_code' => 'getHighestEducationLevelCode'
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
        $this->container['education_experiences_count'] = $data['education_experiences_count'] ?? null;
        $this->container['education_experiences_average_duration'] = $data['education_experiences_average_duration'] ?? null;
        $this->container['education_experiences_total_duration'] = $data['education_experiences_total_duration'] ?? null;
        $this->container['highest_education_title'] = $data['highest_education_title'] ?? null;
        $this->container['highest_education_level_code'] = $data['highest_education_level_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets education_experiences_count
     *
     * @return \OpenAPI\Client\Model\ValidatedIntegerValueModel|null
     */
    public function getEducationExperiencesCount()
    {
        return $this->container['education_experiences_count'];
    }

    /**
     * Sets education_experiences_count
     *
     * @param \OpenAPI\Client\Model\ValidatedIntegerValueModel|null $education_experiences_count education_experiences_count
     *
     * @return self
     */
    public function setEducationExperiencesCount($education_experiences_count)
    {
        $this->container['education_experiences_count'] = $education_experiences_count;

        return $this;
    }

    /**
     * Gets education_experiences_average_duration
     *
     * @return \OpenAPI\Client\Model\ValidatedIntegerValueModel|null
     */
    public function getEducationExperiencesAverageDuration()
    {
        return $this->container['education_experiences_average_duration'];
    }

    /**
     * Sets education_experiences_average_duration
     *
     * @param \OpenAPI\Client\Model\ValidatedIntegerValueModel|null $education_experiences_average_duration education_experiences_average_duration
     *
     * @return self
     */
    public function setEducationExperiencesAverageDuration($education_experiences_average_duration)
    {
        $this->container['education_experiences_average_duration'] = $education_experiences_average_duration;

        return $this;
    }

    /**
     * Gets education_experiences_total_duration
     *
     * @return \OpenAPI\Client\Model\ValidatedIntegerValueModel|null
     */
    public function getEducationExperiencesTotalDuration()
    {
        return $this->container['education_experiences_total_duration'];
    }

    /**
     * Sets education_experiences_total_duration
     *
     * @param \OpenAPI\Client\Model\ValidatedIntegerValueModel|null $education_experiences_total_duration education_experiences_total_duration
     *
     * @return self
     */
    public function setEducationExperiencesTotalDuration($education_experiences_total_duration)
    {
        $this->container['education_experiences_total_duration'] = $education_experiences_total_duration;

        return $this;
    }

    /**
     * Gets highest_education_title
     *
     * @return \OpenAPI\Client\Model\HighestEducationTitle|null
     */
    public function getHighestEducationTitle()
    {
        return $this->container['highest_education_title'];
    }

    /**
     * Sets highest_education_title
     *
     * @param \OpenAPI\Client\Model\HighestEducationTitle|null $highest_education_title highest_education_title
     *
     * @return self
     */
    public function setHighestEducationTitle($highest_education_title)
    {
        $this->container['highest_education_title'] = $highest_education_title;

        return $this;
    }

    /**
     * Gets highest_education_level_code
     *
     * @return \OpenAPI\Client\Model\ResumeEducationExperiencesEducationLevelCode|null
     */
    public function getHighestEducationLevelCode()
    {
        return $this->container['highest_education_level_code'];
    }

    /**
     * Sets highest_education_level_code
     *
     * @param \OpenAPI\Client\Model\ResumeEducationExperiencesEducationLevelCode|null $highest_education_level_code highest_education_level_code
     *
     * @return self
     */
    public function setHighestEducationLevelCode($highest_education_level_code)
    {
        $this->container['highest_education_level_code'] = $highest_education_level_code;

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


