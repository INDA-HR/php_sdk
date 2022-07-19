<?php
/**
 * Patent
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
 * Patent Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Patent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Patent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'patent_title' => '\OpenAPI\Client\Model\Title',
        'patent_id' => '\OpenAPI\Client\Model\Text',
        'patent_status' => '\OpenAPI\Client\Model\PatentStatus',
        'description' => '\OpenAPI\Client\Model\Description',
        'inventor_names' => '\OpenAPI\Client\Model\ResumePersonNamePersonName[]',
        'issuing_authority' => '\OpenAPI\Client\Model\Organization'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'patent_title' => null,
        'patent_id' => null,
        'patent_status' => null,
        'description' => null,
        'inventor_names' => null,
        'issuing_authority' => null
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
        'patent_title' => 'PatentTitle',
        'patent_id' => 'PatentID',
        'patent_status' => 'PatentStatus',
        'description' => 'Description',
        'inventor_names' => 'InventorNames',
        'issuing_authority' => 'IssuingAuthority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'patent_title' => 'setPatentTitle',
        'patent_id' => 'setPatentId',
        'patent_status' => 'setPatentStatus',
        'description' => 'setDescription',
        'inventor_names' => 'setInventorNames',
        'issuing_authority' => 'setIssuingAuthority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'patent_title' => 'getPatentTitle',
        'patent_id' => 'getPatentId',
        'patent_status' => 'getPatentStatus',
        'description' => 'getDescription',
        'inventor_names' => 'getInventorNames',
        'issuing_authority' => 'getIssuingAuthority'
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
        $this->container['patent_title'] = $data['patent_title'] ?? null;
        $this->container['patent_id'] = $data['patent_id'] ?? null;
        $this->container['patent_status'] = $data['patent_status'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['inventor_names'] = $data['inventor_names'] ?? null;
        $this->container['issuing_authority'] = $data['issuing_authority'] ?? null;
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
     * Gets patent_title
     *
     * @return \OpenAPI\Client\Model\Title|null
     */
    public function getPatentTitle()
    {
        return $this->container['patent_title'];
    }

    /**
     * Sets patent_title
     *
     * @param \OpenAPI\Client\Model\Title|null $patent_title patent_title
     *
     * @return self
     */
    public function setPatentTitle($patent_title)
    {
        $this->container['patent_title'] = $patent_title;

        return $this;
    }

    /**
     * Gets patent_id
     *
     * @return \OpenAPI\Client\Model\Text|null
     */
    public function getPatentId()
    {
        return $this->container['patent_id'];
    }

    /**
     * Sets patent_id
     *
     * @param \OpenAPI\Client\Model\Text|null $patent_id patent_id
     *
     * @return self
     */
    public function setPatentId($patent_id)
    {
        $this->container['patent_id'] = $patent_id;

        return $this;
    }

    /**
     * Gets patent_status
     *
     * @return \OpenAPI\Client\Model\PatentStatus|null
     */
    public function getPatentStatus()
    {
        return $this->container['patent_status'];
    }

    /**
     * Sets patent_status
     *
     * @param \OpenAPI\Client\Model\PatentStatus|null $patent_status patent_status
     *
     * @return self
     */
    public function setPatentStatus($patent_status)
    {
        $this->container['patent_status'] = $patent_status;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \OpenAPI\Client\Model\Description|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\Client\Model\Description|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets inventor_names
     *
     * @return \OpenAPI\Client\Model\ResumePersonNamePersonName[]|null
     */
    public function getInventorNames()
    {
        return $this->container['inventor_names'];
    }

    /**
     * Sets inventor_names
     *
     * @param \OpenAPI\Client\Model\ResumePersonNamePersonName[]|null $inventor_names List of the patent inventors.
     *
     * @return self
     */
    public function setInventorNames($inventor_names)
    {
        $this->container['inventor_names'] = $inventor_names;

        return $this;
    }

    /**
     * Gets issuing_authority
     *
     * @return \OpenAPI\Client\Model\Organization|null
     */
    public function getIssuingAuthority()
    {
        return $this->container['issuing_authority'];
    }

    /**
     * Sets issuing_authority
     *
     * @param \OpenAPI\Client\Model\Organization|null $issuing_authority issuing_authority
     *
     * @return self
     */
    public function setIssuingAuthority($issuing_authority)
    {
        $this->container['issuing_authority'] = $issuing_authority;

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


