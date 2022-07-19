<?php
/**
 * FeedbackEducationExperience
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
 * FeedbackEducationExperience Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FeedbackEducationExperience implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedbackEducationExperience';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'duration' => '\OpenAPI\Client\Model\BaseDuration',
        'education_title' => '\OpenAPI\Client\Model\FeedbackEducationTitle',
        'field_of_study' => '\OpenAPI\Client\Model\FeedbackFieldOfStudy',
        'final_grade' => '\OpenAPI\Client\Model\FinalGrade',
        'education_level_code' => '\OpenAPI\Client\Model\ResumeEducationExperiencesEducationLevelCode',
        'description' => '\OpenAPI\Client\Model\Description',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'ongoing' => '\OpenAPI\Client\Model\Ongoing',
        'location' => '\OpenAPI\Client\Model\ResumeLocationsLocation',
        'organization' => '\OpenAPI\Client\Model\FeedbackOrganization',
        'courses' => '\OpenAPI\Client\Model\Text[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'duration' => null,
        'education_title' => null,
        'field_of_study' => null,
        'final_grade' => null,
        'education_level_code' => null,
        'description' => null,
        'start_date' => null,
        'end_date' => null,
        'ongoing' => null,
        'location' => null,
        'organization' => null,
        'courses' => null
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
        'duration' => 'Duration',
        'education_title' => 'EducationTitle',
        'field_of_study' => 'FieldOfStudy',
        'final_grade' => 'FinalGrade',
        'education_level_code' => 'EducationLevelCode',
        'description' => 'Description',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'ongoing' => 'Ongoing',
        'location' => 'Location',
        'organization' => 'Organization',
        'courses' => 'Courses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
        'education_title' => 'setEducationTitle',
        'field_of_study' => 'setFieldOfStudy',
        'final_grade' => 'setFinalGrade',
        'education_level_code' => 'setEducationLevelCode',
        'description' => 'setDescription',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'ongoing' => 'setOngoing',
        'location' => 'setLocation',
        'organization' => 'setOrganization',
        'courses' => 'setCourses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
        'education_title' => 'getEducationTitle',
        'field_of_study' => 'getFieldOfStudy',
        'final_grade' => 'getFinalGrade',
        'education_level_code' => 'getEducationLevelCode',
        'description' => 'getDescription',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'ongoing' => 'getOngoing',
        'location' => 'getLocation',
        'organization' => 'getOrganization',
        'courses' => 'getCourses'
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
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['education_title'] = $data['education_title'] ?? null;
        $this->container['field_of_study'] = $data['field_of_study'] ?? null;
        $this->container['final_grade'] = $data['final_grade'] ?? null;
        $this->container['education_level_code'] = $data['education_level_code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['ongoing'] = $data['ongoing'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['courses'] = $data['courses'] ?? null;
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
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets education_title
     *
     * @return \OpenAPI\Client\Model\FeedbackEducationTitle|null
     */
    public function getEducationTitle()
    {
        return $this->container['education_title'];
    }

    /**
     * Sets education_title
     *
     * @param \OpenAPI\Client\Model\FeedbackEducationTitle|null $education_title education_title
     *
     * @return self
     */
    public function setEducationTitle($education_title)
    {
        $this->container['education_title'] = $education_title;

        return $this;
    }

    /**
     * Gets field_of_study
     *
     * @return \OpenAPI\Client\Model\FeedbackFieldOfStudy|null
     */
    public function getFieldOfStudy()
    {
        return $this->container['field_of_study'];
    }

    /**
     * Sets field_of_study
     *
     * @param \OpenAPI\Client\Model\FeedbackFieldOfStudy|null $field_of_study field_of_study
     *
     * @return self
     */
    public function setFieldOfStudy($field_of_study)
    {
        $this->container['field_of_study'] = $field_of_study;

        return $this;
    }

    /**
     * Gets final_grade
     *
     * @return \OpenAPI\Client\Model\FinalGrade|null
     */
    public function getFinalGrade()
    {
        return $this->container['final_grade'];
    }

    /**
     * Sets final_grade
     *
     * @param \OpenAPI\Client\Model\FinalGrade|null $final_grade final_grade
     *
     * @return self
     */
    public function setFinalGrade($final_grade)
    {
        $this->container['final_grade'] = $final_grade;

        return $this;
    }

    /**
     * Gets education_level_code
     *
     * @return \OpenAPI\Client\Model\ResumeEducationExperiencesEducationLevelCode|null
     */
    public function getEducationLevelCode()
    {
        return $this->container['education_level_code'];
    }

    /**
     * Sets education_level_code
     *
     * @param \OpenAPI\Client\Model\ResumeEducationExperiencesEducationLevelCode|null $education_level_code education_level_code
     *
     * @return self
     */
    public function setEducationLevelCode($education_level_code)
    {
        $this->container['education_level_code'] = $education_level_code;

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
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
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
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return \OpenAPI\Client\Model\FeedbackOrganization|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \OpenAPI\Client\Model\FeedbackOrganization|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets courses
     *
     * @return \OpenAPI\Client\Model\Text[]|null
     */
    public function getCourses()
    {
        return $this->container['courses'];
    }

    /**
     * Sets courses
     *
     * @param \OpenAPI\Client\Model\Text[]|null $courses List of attended courses.
     *
     * @return self
     */
    public function setCourses($courses)
    {
        $this->container['courses'] = $courses;

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


