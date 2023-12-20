<?php
/**
 * WorkExperience
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
use http\Encoding\Stream\Enbrotli;
use OpenAPI\Client\Model\Interface\ModelModeInterface;
use \OpenAPI\Client\ObjectSerializer;

/**
 * WorkExperience Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WorkExperience implements ModelModeInterface, ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WorkExperience';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seniority' => '\OpenAPI\Client\Model\BaseSeniority',
        'duration' => '\OpenAPI\Client\Model\BaseDuration',
        'position_title' => '\OpenAPI\Client\Model\OptionalResumeJobTitle',
        'description' => '\OpenAPI\Client\Model\Description',
        'start_date' => '\OpenAPI\Client\Model\StartDate',
        'end_date' => '\OpenAPI\Client\Model\EndDate',
        'ongoing' => '\OpenAPI\Client\Model\Ongoing',
        'location' => '\OpenAPI\Client\Model\ResumeLocationsLocation',
        'remote_working' => '\OpenAPI\Client\Model\RemoteWorking',
        'employer' => '\OpenAPI\Client\Model\Organization',
        'industries' => '\OpenAPI\Client\Model\ResumeWorkExperiencesIndustry[]',
        'skills' => '\OpenAPI\Client\Model\OptionalResumeSkill[]',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seniority' => null,
        'duration' => null,
        'position_title' => null,
        'description' => null,
        'start_date' => null,
        'end_date' => null,
        'ongoing' => null,
        'location' => null,
        'remote_working' => null,
        'employer' => null,
        'industries' => null,
        'skills' => null,
        'id' => 'uuid4'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'seniority' => false,
		'duration' => false,
		'position_title' => false,
		'description' => false,
		'start_date' => false,
		'end_date' => false,
		'ongoing' => false,
		'location' => false,
		'remote_working' => false,
		'employer' => false,
		'industries' => false,
		'skills' => false,
		'id' => false
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
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function getAllowedModes()
    {
        return self::ALLOWED_MODES;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return string
     */
    public static function getModeOverwrite()
    {
        return self::MODE_OVERWRITE;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return string
     */
    public static function getModeAppend()
    {
        return self::MODE_APPEND;
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
        'seniority' => 'Seniority',
        'duration' => 'Duration',
        'position_title' => 'PositionTitle',
        'description' => 'Description',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'ongoing' => 'Ongoing',
        'location' => 'Location',
        'remote_working' => 'RemoteWorking',
        'employer' => 'Employer',
        'industries' => 'Industries',
        'skills' => 'Skills',
        'id' => 'ID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seniority' => 'setSeniority',
        'duration' => 'setDuration',
        'position_title' => 'setPositionTitle',
        'description' => 'setDescription',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'ongoing' => 'setOngoing',
        'location' => 'setLocation',
        'remote_working' => 'setRemoteWorking',
        'employer' => 'setEmployer',
        'industries' => 'setIndustries',
        'skills' => 'setSkills',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seniority' => 'getSeniority',
        'duration' => 'getDuration',
        'position_title' => 'getPositionTitle',
        'description' => 'getDescription',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'ongoing' => 'getOngoing',
        'location' => 'getLocation',
        'remote_working' => 'getRemoteWorking',
        'employer' => 'getEmployer',
        'industries' => 'getIndustries',
        'skills' => 'getSkills',
        'id' => 'getId'
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
        $this->setIfExists('seniority', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('position_title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('ongoing', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('remote_working', $data ?? [], null);
        $this->setIfExists('employer', $data ?? [], null);
        $this->setIfExists('industries', $data ?? [], null);
        $this->setIfExists('skills', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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
     * Gets seniority
     *
     * @return \OpenAPI\Client\Model\BaseSeniority|null
     */
    public function getSeniority()
    {
        return $this->container['seniority'];
    }

    /**
     * Sets seniority
     *
     * @param \OpenAPI\Client\Model\BaseSeniority|null $seniority seniority
     *
     * @return self
     */
    public function setSeniority($seniority)
    {
        if (is_null($seniority)) {
            throw new \InvalidArgumentException('non-nullable seniority cannot be null');
        }
        $this->container['seniority'] = $seniority;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return \OpenAPI\Client\Model\BaseDuration|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param \OpenAPI\Client\Model\BaseDuration|null $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets position_title
     *
     * @return \OpenAPI\Client\Model\OptionalResumeJobTitle|null
     */
    public function getPositionTitle()
    {
        return $this->container['position_title'];
    }

    /**
     * Sets position_title
     *
     * @param \OpenAPI\Client\Model\OptionalResumeJobTitle|null $position_title position_title
     *
     * @return self
     */
    public function setPositionTitle($position_title)
    {
        if (is_null($position_title)) {
            throw new \InvalidArgumentException('non-nullable position_title cannot be null');
        }
        $this->container['position_title'] = $position_title;

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
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return StartDate|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param StartDate|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return EndDate|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param EndDate|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets ongoing
     *
     * @return \OpenAPI\Client\Model\Ongoing|null
     */
    public function getOngoing()
    {
        return $this->container['ongoing'];
    }

    /**
     * Sets ongoing
     *
     * @param \OpenAPI\Client\Model\Ongoing|null $ongoing ongoing
     *
     * @return self
     */
    public function setOngoing($ongoing)
    {
        if (is_null($ongoing)) {
            throw new \InvalidArgumentException('non-nullable ongoing cannot be null');
        }
        $this->container['ongoing'] = $ongoing;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \OpenAPI\Client\Model\ResumeLocationsLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\ResumeLocationsLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets remote_working
     *
     * @return \OpenAPI\Client\Model\RemoteWorking|null
     */
    public function getRemoteWorking()
    {
        return $this->container['remote_working'];
    }

    /**
     * Sets remote_working
     *
     * @param \OpenAPI\Client\Model\RemoteWorking|null $remote_working remote_working
     *
     * @return self
     */
    public function setRemoteWorking($remote_working)
    {
        if (is_null($remote_working)) {
            throw new \InvalidArgumentException('non-nullable remote_working cannot be null');
        }
        $this->container['remote_working'] = $remote_working;

        return $this;
    }

    /**
     * Gets employer
     *
     * @return \OpenAPI\Client\Model\Organization|null
     */
    public function getEmployer()
    {
        return $this->container['employer'];
    }

    /**
     * Sets employer
     *
     * @param \OpenAPI\Client\Model\Organization|null $employer employer
     *
     * @return self
     */
    public function setEmployer($employer)
    {
        if (is_null($employer)) {
            throw new \InvalidArgumentException('non-nullable employer cannot be null');
        }
        $this->container['employer'] = $employer;

        return $this;
    }

    /**
     * Gets industries
     *
     * @return \OpenAPI\Client\Model\ResumeWorkExperiencesIndustry[]|null
     */
    public function getIndustries()
    {
        return $this->container['industries'];
    }

    /**
     * Sets industries
     *
     * @param \OpenAPI\Client\Model\ResumeWorkExperiencesIndustry[]|null $industries Industries related to the experience. Check the [Standardized Data](https://api.inda.ai/hr/docs/v2/#tag/Standardized-Data) section for more details.
     *
     * @return self
     */
    public function setIndustries($industries)
    {
        if (is_null($industries)) {
            throw new \InvalidArgumentException('non-nullable industries cannot be null');
        }
        $this->container['industries'] = $industries;

        return $this;
    }

    /**
     * Gets skills
     *
     * @return \OpenAPI\Client\Model\OptionalResumeSkill[]|null
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     *
     * @param \OpenAPI\Client\Model\OptionalResumeSkill[]|null $skills Skills related to the experience.
     *
     * @param string $mode {@see self::MODE_OVERWRITE|self::MODE_APPEND}
     *
     * @return self
     */
    public function setSkills($skills, $mode = self::MODE_OVERWRITE)
    {
        if (is_null($skills)) {
            throw new \InvalidArgumentException('non-nullable skills cannot be null');
        }
        if (!in_array($mode, self::ALLOWED_MODES)) {
            throw new \InvalidArgumentException('Invalid mode');
        }

        switch ($mode) {
            case self::MODE_OVERWRITE:
                if (!is_countable($skills)) {
                    $skills = [$skills];
                }
                $this->container['skills'] = $skills;
                break;
            case self::MODE_APPEND:
                if (!is_countable($skills)) {
                    $skills = [$skills];
                }
                $this->container['skills'] = array_merge($skills, $this->container['skills'] ?: []);
                break;
        }

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier for the current experience.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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


