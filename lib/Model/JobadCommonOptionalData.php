<?php
/**
 * JobadCommonOptionalData
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
 * JobadCommonOptionalData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JobadCommonOptionalData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobadCommonOptionalData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'job_title' => '\OpenAPI\Client\Model\JobTitleHeader',
        'job_description' => '\OpenAPI\Client\Model\OptionalJobDescription',
        'employer_id' => 'string',
        'contact_info' => '\OpenAPI\Client\Model\JobadContactInfoContactInfo[]',
        'job_locations' => '\OpenAPI\Client\Model\BaseLocationsLocation[]',
        'relocation_preferences' => '\OpenAPI\Client\Model\RelocationPreferences',
        'remote_working' => '\OpenAPI\Client\Model\JobAdRemoteWorking',
        'experience' => '\OpenAPI\Client\Model\Experience',
        'education' => '\OpenAPI\Client\Model\OptionalRequiredAndPreferredEducation',
        'skills' => '\OpenAPI\Client\Model\OptionalRequiredAndPreferredConstrainedListValue',
        'languages' => '\OpenAPI\Client\Model\OptionalRequiredAndPreferredListJobAdLanguage',
        'related_job_titles' => '\OpenAPI\Client\Model\OptionalJobAdJobTitle[]',
        'employment' => '\OpenAPI\Client\Model\JobTitleEmployment',
        'contract' => '\OpenAPI\Client\Model\OptionalJobAdContract',
        'publisher' => '\OpenAPI\Client\Model\OptionalPublisher',
        'job_shift' => '\OpenAPI\Client\Model\JobShift',
        'number_of_openings' => '\OpenAPI\Client\Model\ValueModelInt',
        'link' => '\OpenAPI\Client\Model\OptionalLink',
        'advertisement_sites' => '\OpenAPI\Client\Model\JobadLinkLink[]',
        'salary' => '\OpenAPI\Client\Model\OptionalJobAdSalary',
        'benefits' => '\OpenAPI\Client\Model\JobAdBenefit[]',
        'expiration_date' => '\OpenAPI\Client\Model\ValueModelDatetime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'job_title' => null,
        'job_description' => null,
        'employer_id' => 'uuid4',
        'contact_info' => null,
        'job_locations' => null,
        'relocation_preferences' => null,
        'remote_working' => null,
        'experience' => null,
        'education' => null,
        'skills' => null,
        'languages' => null,
        'related_job_titles' => null,
        'employment' => null,
        'contract' => null,
        'publisher' => null,
        'job_shift' => null,
        'number_of_openings' => null,
        'link' => null,
        'advertisement_sites' => null,
        'salary' => null,
        'benefits' => null,
        'expiration_date' => null
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
        'job_title' => 'JobTitle',
        'job_description' => 'JobDescription',
        'employer_id' => 'EmployerID',
        'contact_info' => 'ContactInfo',
        'job_locations' => 'JobLocations',
        'relocation_preferences' => 'RelocationPreferences',
        'remote_working' => 'RemoteWorking',
        'experience' => 'Experience',
        'education' => 'Education',
        'skills' => 'Skills',
        'languages' => 'Languages',
        'related_job_titles' => 'RelatedJobTitles',
        'employment' => 'Employment',
        'contract' => 'Contract',
        'publisher' => 'Publisher',
        'job_shift' => 'JobShift',
        'number_of_openings' => 'NumberOfOpenings',
        'link' => 'Link',
        'advertisement_sites' => 'AdvertisementSites',
        'salary' => 'Salary',
        'benefits' => 'Benefits',
        'expiration_date' => 'ExpirationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'job_title' => 'setJobTitle',
        'job_description' => 'setJobDescription',
        'employer_id' => 'setEmployerId',
        'contact_info' => 'setContactInfo',
        'job_locations' => 'setJobLocations',
        'relocation_preferences' => 'setRelocationPreferences',
        'remote_working' => 'setRemoteWorking',
        'experience' => 'setExperience',
        'education' => 'setEducation',
        'skills' => 'setSkills',
        'languages' => 'setLanguages',
        'related_job_titles' => 'setRelatedJobTitles',
        'employment' => 'setEmployment',
        'contract' => 'setContract',
        'publisher' => 'setPublisher',
        'job_shift' => 'setJobShift',
        'number_of_openings' => 'setNumberOfOpenings',
        'link' => 'setLink',
        'advertisement_sites' => 'setAdvertisementSites',
        'salary' => 'setSalary',
        'benefits' => 'setBenefits',
        'expiration_date' => 'setExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'job_title' => 'getJobTitle',
        'job_description' => 'getJobDescription',
        'employer_id' => 'getEmployerId',
        'contact_info' => 'getContactInfo',
        'job_locations' => 'getJobLocations',
        'relocation_preferences' => 'getRelocationPreferences',
        'remote_working' => 'getRemoteWorking',
        'experience' => 'getExperience',
        'education' => 'getEducation',
        'skills' => 'getSkills',
        'languages' => 'getLanguages',
        'related_job_titles' => 'getRelatedJobTitles',
        'employment' => 'getEmployment',
        'contract' => 'getContract',
        'publisher' => 'getPublisher',
        'job_shift' => 'getJobShift',
        'number_of_openings' => 'getNumberOfOpenings',
        'link' => 'getLink',
        'advertisement_sites' => 'getAdvertisementSites',
        'salary' => 'getSalary',
        'benefits' => 'getBenefits',
        'expiration_date' => 'getExpirationDate'
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
        $this->container['job_title'] = $data['job_title'] ?? null;
        $this->container['job_description'] = $data['job_description'] ?? null;
        $this->container['employer_id'] = $data['employer_id'] ?? null;
        $this->container['contact_info'] = $data['contact_info'] ?? null;
        $this->container['job_locations'] = $data['job_locations'] ?? null;
        $this->container['relocation_preferences'] = $data['relocation_preferences'] ?? null;
        $this->container['remote_working'] = $data['remote_working'] ?? null;
        $this->container['experience'] = $data['experience'] ?? null;
        $this->container['education'] = $data['education'] ?? null;
        $this->container['skills'] = $data['skills'] ?? null;
        $this->container['languages'] = $data['languages'] ?? null;
        $this->container['related_job_titles'] = $data['related_job_titles'] ?? null;
        $this->container['employment'] = $data['employment'] ?? null;
        $this->container['contract'] = $data['contract'] ?? null;
        $this->container['publisher'] = $data['publisher'] ?? null;
        $this->container['job_shift'] = $data['job_shift'] ?? null;
        $this->container['number_of_openings'] = $data['number_of_openings'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['advertisement_sites'] = $data['advertisement_sites'] ?? null;
        $this->container['salary'] = $data['salary'] ?? null;
        $this->container['benefits'] = $data['benefits'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['related_job_titles']) && (count($this->container['related_job_titles']) > 6)) {
            $invalidProperties[] = "invalid value for 'related_job_titles', number of items must be less than or equal to 6.";
        }

        if (!is_null($this->container['related_job_titles']) && (count($this->container['related_job_titles']) < 1)) {
            $invalidProperties[] = "invalid value for 'related_job_titles', number of items must be greater than or equal to 1.";
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
     * Gets job_title
     *
     * @return \OpenAPI\Client\Model\JobTitleHeader|null
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param \OpenAPI\Client\Model\JobTitleHeader|null $job_title job_title
     *
     * @return self
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets job_description
     *
     * @return \OpenAPI\Client\Model\OptionalJobDescription|null
     */
    public function getJobDescription()
    {
        return $this->container['job_description'];
    }

    /**
     * Sets job_description
     *
     * @param \OpenAPI\Client\Model\OptionalJobDescription|null $job_description job_description
     *
     * @return self
     */
    public function setJobDescription($job_description)
    {
        $this->container['job_description'] = $job_description;

        return $this;
    }

    /**
     * Gets employer_id
     *
     * @return string|null
     */
    public function getEmployerId()
    {
        return $this->container['employer_id'];
    }

    /**
     * Sets employer_id
     *
     * @param string|null $employer_id CompanyID of the employer company.
     *
     * @return self
     */
    public function setEmployerId($employer_id)
    {
        $this->container['employer_id'] = $employer_id;

        return $this;
    }

    /**
     * Gets contact_info
     *
     * @return \OpenAPI\Client\Model\JobadContactInfoContactInfo[]|null
     */
    public function getContactInfo()
    {
        return $this->container['contact_info'];
    }

    /**
     * Sets contact_info
     *
     * @param \OpenAPI\Client\Model\JobadContactInfoContactInfo[]|null $contact_info Whom to contact for the job position.
     *
     * @return self
     */
    public function setContactInfo($contact_info)
    {
        $this->container['contact_info'] = $contact_info;

        return $this;
    }

    /**
     * Gets job_locations
     *
     * @return \OpenAPI\Client\Model\BaseLocationsLocation[]|null
     */
    public function getJobLocations()
    {
        return $this->container['job_locations'];
    }

    /**
     * Sets job_locations
     *
     * @param \OpenAPI\Client\Model\BaseLocationsLocation[]|null $job_locations Locations of the opened position.
     *
     * @return self
     */
    public function setJobLocations($job_locations)
    {
        $this->container['job_locations'] = $job_locations;

        return $this;
    }

    /**
     * Gets relocation_preferences
     *
     * @return \OpenAPI\Client\Model\RelocationPreferences|null
     */
    public function getRelocationPreferences()
    {
        return $this->container['relocation_preferences'];
    }

    /**
     * Sets relocation_preferences
     *
     * @param \OpenAPI\Client\Model\RelocationPreferences|null $relocation_preferences relocation_preferences
     *
     * @return self
     */
    public function setRelocationPreferences($relocation_preferences)
    {
        $this->container['relocation_preferences'] = $relocation_preferences;

        return $this;
    }

    /**
     * Gets remote_working
     *
     * @return \OpenAPI\Client\Model\JobAdRemoteWorking|null
     */
    public function getRemoteWorking()
    {
        return $this->container['remote_working'];
    }

    /**
     * Sets remote_working
     *
     * @param \OpenAPI\Client\Model\JobAdRemoteWorking|null $remote_working remote_working
     *
     * @return self
     */
    public function setRemoteWorking($remote_working)
    {
        $this->container['remote_working'] = $remote_working;

        return $this;
    }

    /**
     * Gets experience
     *
     * @return \OpenAPI\Client\Model\Experience|null
     */
    public function getExperience()
    {
        return $this->container['experience'];
    }

    /**
     * Sets experience
     *
     * @param \OpenAPI\Client\Model\Experience|null $experience experience
     *
     * @return self
     */
    public function setExperience($experience)
    {
        $this->container['experience'] = $experience;

        return $this;
    }

    /**
     * Gets education
     *
     * @return \OpenAPI\Client\Model\OptionalRequiredAndPreferredEducation|null
     */
    public function getEducation()
    {
        return $this->container['education'];
    }

    /**
     * Sets education
     *
     * @param \OpenAPI\Client\Model\OptionalRequiredAndPreferredEducation|null $education education
     *
     * @return self
     */
    public function setEducation($education)
    {
        $this->container['education'] = $education;

        return $this;
    }

    /**
     * Gets skills
     *
     * @return \OpenAPI\Client\Model\OptionalRequiredAndPreferredConstrainedListValue|null
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     *
     * @param \OpenAPI\Client\Model\OptionalRequiredAndPreferredConstrainedListValue|null $skills skills
     *
     * @return self
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return \OpenAPI\Client\Model\OptionalRequiredAndPreferredListJobAdLanguage|null
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param \OpenAPI\Client\Model\OptionalRequiredAndPreferredListJobAdLanguage|null $languages languages
     *
     * @return self
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets related_job_titles
     *
     * @return \OpenAPI\Client\Model\OptionalJobAdJobTitle[]|null
     */
    public function getRelatedJobTitles()
    {
        return $this->container['related_job_titles'];
    }

    /**
     * Sets related_job_titles
     *
     * @param \OpenAPI\Client\Model\OptionalJobAdJobTitle[]|null $related_job_titles Additional Job Titles related to the opened position.
     *
     * @return self
     */
    public function setRelatedJobTitles($related_job_titles)
    {

        if (!is_null($related_job_titles) && (count($related_job_titles) > 6)) {
            throw new \InvalidArgumentException('invalid value for $related_job_titles when calling JobadCommonOptionalData., number of items must be less than or equal to 6.');
        }
        if (!is_null($related_job_titles) && (count($related_job_titles) < 1)) {
            throw new \InvalidArgumentException('invalid length for $related_job_titles when calling JobadCommonOptionalData., number of items must be greater than or equal to 1.');
        }
        $this->container['related_job_titles'] = $related_job_titles;

        return $this;
    }

    /**
     * Gets employment
     *
     * @return \OpenAPI\Client\Model\JobTitleEmployment|null
     */
    public function getEmployment()
    {
        return $this->container['employment'];
    }

    /**
     * Sets employment
     *
     * @param \OpenAPI\Client\Model\JobTitleEmployment|null $employment employment
     *
     * @return self
     */
    public function setEmployment($employment)
    {
        $this->container['employment'] = $employment;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \OpenAPI\Client\Model\OptionalJobAdContract|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \OpenAPI\Client\Model\OptionalJobAdContract|null $contract contract
     *
     * @return self
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets publisher
     *
     * @return \OpenAPI\Client\Model\OptionalPublisher|null
     */
    public function getPublisher()
    {
        return $this->container['publisher'];
    }

    /**
     * Sets publisher
     *
     * @param \OpenAPI\Client\Model\OptionalPublisher|null $publisher publisher
     *
     * @return self
     */
    public function setPublisher($publisher)
    {
        $this->container['publisher'] = $publisher;

        return $this;
    }

    /**
     * Gets job_shift
     *
     * @return \OpenAPI\Client\Model\JobShift|null
     */
    public function getJobShift()
    {
        return $this->container['job_shift'];
    }

    /**
     * Sets job_shift
     *
     * @param \OpenAPI\Client\Model\JobShift|null $job_shift job_shift
     *
     * @return self
     */
    public function setJobShift($job_shift)
    {
        $this->container['job_shift'] = $job_shift;

        return $this;
    }

    /**
     * Gets number_of_openings
     *
     * @return \OpenAPI\Client\Model\ValueModelInt|null
     */
    public function getNumberOfOpenings()
    {
        return $this->container['number_of_openings'];
    }

    /**
     * Sets number_of_openings
     *
     * @param \OpenAPI\Client\Model\ValueModelInt|null $number_of_openings number_of_openings
     *
     * @return self
     */
    public function setNumberOfOpenings($number_of_openings)
    {
        $this->container['number_of_openings'] = $number_of_openings;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \OpenAPI\Client\Model\OptionalLink|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \OpenAPI\Client\Model\OptionalLink|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets advertisement_sites
     *
     * @return \OpenAPI\Client\Model\JobadLinkLink[]|null
     */
    public function getAdvertisementSites()
    {
        return $this->container['advertisement_sites'];
    }

    /**
     * Sets advertisement_sites
     *
     * @param \OpenAPI\Client\Model\JobadLinkLink[]|null $advertisement_sites Advertising sites for the job offer.
     *
     * @return self
     */
    public function setAdvertisementSites($advertisement_sites)
    {
        $this->container['advertisement_sites'] = $advertisement_sites;

        return $this;
    }

    /**
     * Gets salary
     *
     * @return \OpenAPI\Client\Model\OptionalJobAdSalary|null
     */
    public function getSalary()
    {
        return $this->container['salary'];
    }

    /**
     * Sets salary
     *
     * @param \OpenAPI\Client\Model\OptionalJobAdSalary|null $salary salary
     *
     * @return self
     */
    public function setSalary($salary)
    {
        $this->container['salary'] = $salary;

        return $this;
    }

    /**
     * Gets benefits
     *
     * @return \OpenAPI\Client\Model\JobAdBenefit[]|null
     */
    public function getBenefits()
    {
        return $this->container['benefits'];
    }

    /**
     * Sets benefits
     *
     * @param \OpenAPI\Client\Model\JobAdBenefit[]|null $benefits Offered benefits.
     *
     * @return self
     */
    public function setBenefits($benefits)
    {
        $this->container['benefits'] = $benefits;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \OpenAPI\Client\Model\ValueModelDatetime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \OpenAPI\Client\Model\ValueModelDatetime|null $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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


