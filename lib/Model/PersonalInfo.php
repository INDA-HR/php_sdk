<?php
/**
 * PersonalInfo
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
 * The version of the OpenAPI document: 2.0.0
 * Contact: info@intervieweb.it
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
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
 * PersonalInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PersonalInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PersonalInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'person_name' => '\OpenAPI\Client\Model\ResumePersonNamePersonName',
        'birthdate' => '\DateTime',
        'age' => '\OpenAPI\Client\Model\Age',
        'nationalities' => '\OpenAPI\Client\Model\Nationality[]',
        'citizenships' => '\OpenAPI\Client\Model\Citizenship[]',
        'gender' => '\OpenAPI\Client\Model\Gender',
        'disability' => '\OpenAPI\Client\Model\Disability',
        'protected_groups' => '\OpenAPI\Client\Model\ProtectedGroup[]',
        'marital_status' => '\OpenAPI\Client\Model\MaritalStatus',
        'number_of_children' => '\OpenAPI\Client\Model\NumberOfChildren'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'person_name' => null,
        'birthdate' => null,
        'age' => null,
        'nationalities' => null,
        'citizenships' => null,
        'gender' => null,
        'disability' => null,
        'protected_groups' => null,
        'marital_status' => null,
        'number_of_children' => null
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
        'person_name' => 'PersonName',
        'birthdate' => 'Birthdate',
        'age' => 'Age',
        'nationalities' => 'Nationalities',
        'citizenships' => 'Citizenships',
        'gender' => 'Gender',
        'disability' => 'Disability',
        'protected_groups' => 'ProtectedGroups',
        'marital_status' => 'MaritalStatus',
        'number_of_children' => 'NumberOfChildren'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'person_name' => 'setPersonName',
        'birthdate' => 'setBirthdate',
        'age' => 'setAge',
        'nationalities' => 'setNationalities',
        'citizenships' => 'setCitizenships',
        'gender' => 'setGender',
        'disability' => 'setDisability',
        'protected_groups' => 'setProtectedGroups',
        'marital_status' => 'setMaritalStatus',
        'number_of_children' => 'setNumberOfChildren'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'person_name' => 'getPersonName',
        'birthdate' => 'getBirthdate',
        'age' => 'getAge',
        'nationalities' => 'getNationalities',
        'citizenships' => 'getCitizenships',
        'gender' => 'getGender',
        'disability' => 'getDisability',
        'protected_groups' => 'getProtectedGroups',
        'marital_status' => 'getMaritalStatus',
        'number_of_children' => 'getNumberOfChildren'
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
        $this->container['person_name'] = $data['person_name'] ?? null;
        $this->container['birthdate'] = $data['birthdate'] ?? null;
        $this->container['age'] = $data['age'] ?? null;
        $this->container['nationalities'] = $data['nationalities'] ?? null;
        $this->container['citizenships'] = $data['citizenships'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['disability'] = $data['disability'] ?? null;
        $this->container['protected_groups'] = $data['protected_groups'] ?? null;
        $this->container['marital_status'] = $data['marital_status'] ?? null;
        $this->container['number_of_children'] = $data['number_of_children'] ?? null;
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
     * Gets person_name
     *
     * @return \OpenAPI\Client\Model\ResumePersonNamePersonName|null
     */
    public function getPersonName()
    {
        return $this->container['person_name'];
    }

    /**
     * Sets person_name
     *
     * @param \OpenAPI\Client\Model\ResumePersonNamePersonName|null $person_name person_name
     *
     * @return self
     */
    public function setPersonName($person_name)
    {
        $this->container['person_name'] = $person_name;

        return $this;
    }

    /**
     * Gets birthdate
     *
     * @return \DateTime|null
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param \DateTime|null $birthdate birthdate
     *
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets age
     *
     * @return \OpenAPI\Client\Model\Age|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param \OpenAPI\Client\Model\Age|null $age age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets nationalities
     *
     * @return \OpenAPI\Client\Model\Nationality[]|null
     */
    public function getNationalities()
    {
        return $this->container['nationalities'];
    }

    /**
     * Sets nationalities
     *
     * @param \OpenAPI\Client\Model\Nationality[]|null $nationalities Person's list of nationalities.
     *
     * @return self
     */
    public function setNationalities($nationalities)
    {
        $this->container['nationalities'] = $nationalities;

        return $this;
    }

    /**
     * Gets citizenships
     *
     * @return \OpenAPI\Client\Model\Citizenship[]|null
     */
    public function getCitizenships()
    {
        return $this->container['citizenships'];
    }

    /**
     * Sets citizenships
     *
     * @param \OpenAPI\Client\Model\Citizenship[]|null $citizenships Person's list of citizenships.
     *
     * @return self
     */
    public function setCitizenships($citizenships)
    {
        $this->container['citizenships'] = $citizenships;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \OpenAPI\Client\Model\Gender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \OpenAPI\Client\Model\Gender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets disability
     *
     * @return \OpenAPI\Client\Model\Disability|null
     */
    public function getDisability()
    {
        return $this->container['disability'];
    }

    /**
     * Sets disability
     *
     * @param \OpenAPI\Client\Model\Disability|null $disability disability
     *
     * @return self
     */
    public function setDisability($disability)
    {
        $this->container['disability'] = $disability;

        return $this;
    }

    /**
     * Gets protected_groups
     *
     * @return \OpenAPI\Client\Model\ProtectedGroup[]|null
     */
    public function getProtectedGroups()
    {
        return $this->container['protected_groups'];
    }

    /**
     * Sets protected_groups
     *
     * @param \OpenAPI\Client\Model\ProtectedGroup[]|null $protected_groups Protected groups to which the person belongs. Check the [Standardized Data](https://api.inda.ai/hr/docs/v2/#tag/Standardized-Data) section for more details.
     *
     * @return self
     */
    public function setProtectedGroups($protected_groups)
    {
        $this->container['protected_groups'] = $protected_groups;

        return $this;
    }

    /**
     * Gets marital_status
     *
     * @return \OpenAPI\Client\Model\MaritalStatus|null
     */
    public function getMaritalStatus()
    {
        return $this->container['marital_status'];
    }

    /**
     * Sets marital_status
     *
     * @param \OpenAPI\Client\Model\MaritalStatus|null $marital_status marital_status
     *
     * @return self
     */
    public function setMaritalStatus($marital_status)
    {
        $this->container['marital_status'] = $marital_status;

        return $this;
    }

    /**
     * Gets number_of_children
     *
     * @return \OpenAPI\Client\Model\NumberOfChildren|null
     */
    public function getNumberOfChildren()
    {
        return $this->container['number_of_children'];
    }

    /**
     * Sets number_of_children
     *
     * @param \OpenAPI\Client\Model\NumberOfChildren|null $number_of_children number_of_children
     *
     * @return self
     */
    public function setNumberOfChildren($number_of_children)
    {
        $this->container['number_of_children'] = $number_of_children;

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


