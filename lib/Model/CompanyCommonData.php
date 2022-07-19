<?php
/**
 * CompanyCommonData
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
 * CompanyCommonData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CompanyCommonData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyCommonData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\OpenAPI\Client\Model\CompanyCommonType',
        'size' => '\OpenAPI\Client\Model\Size',
        'description' => '\OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr',
        'headquarters' => '\OpenAPI\Client\Model\Headquarter[]',
        'branches' => '\OpenAPI\Client\Model\Branch[]',
        'industries' => '\OpenAPI\Client\Model\CompanyCommonIndustry[]',
        'specialties' => '\OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr[]',
        'founded' => '\OpenAPI\Client\Model\FoundationYear',
        'logo' => '\OpenAPI\Client\Model\JobadLinkLink',
        'link' => '\OpenAPI\Client\Model\JobadLinkLink',
        'products' => '\OpenAPI\Client\Model\Asset[]',
        'services' => '\OpenAPI\Client\Model\Asset[]',
        'related_companies' => '\OpenAPI\Client\Model\RelatedCompany[]',
        'name' => '\OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'size' => null,
        'description' => null,
        'headquarters' => null,
        'branches' => null,
        'industries' => null,
        'specialties' => null,
        'founded' => null,
        'logo' => null,
        'link' => null,
        'products' => null,
        'services' => null,
        'related_companies' => null,
        'name' => null
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
        'type' => 'Type',
        'size' => 'Size',
        'description' => 'Description',
        'headquarters' => 'Headquarters',
        'branches' => 'Branches',
        'industries' => 'Industries',
        'specialties' => 'Specialties',
        'founded' => 'Founded',
        'logo' => 'Logo',
        'link' => 'Link',
        'products' => 'Products',
        'services' => 'Services',
        'related_companies' => 'RelatedCompanies',
        'name' => 'Name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'size' => 'setSize',
        'description' => 'setDescription',
        'headquarters' => 'setHeadquarters',
        'branches' => 'setBranches',
        'industries' => 'setIndustries',
        'specialties' => 'setSpecialties',
        'founded' => 'setFounded',
        'logo' => 'setLogo',
        'link' => 'setLink',
        'products' => 'setProducts',
        'services' => 'setServices',
        'related_companies' => 'setRelatedCompanies',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'size' => 'getSize',
        'description' => 'getDescription',
        'headquarters' => 'getHeadquarters',
        'branches' => 'getBranches',
        'industries' => 'getIndustries',
        'specialties' => 'getSpecialties',
        'founded' => 'getFounded',
        'logo' => 'getLogo',
        'link' => 'getLink',
        'products' => 'getProducts',
        'services' => 'getServices',
        'related_companies' => 'getRelatedCompanies',
        'name' => 'getName'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['headquarters'] = $data['headquarters'] ?? null;
        $this->container['branches'] = $data['branches'] ?? null;
        $this->container['industries'] = $data['industries'] ?? null;
        $this->container['specialties'] = $data['specialties'] ?? null;
        $this->container['founded'] = $data['founded'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['products'] = $data['products'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
        $this->container['related_companies'] = $data['related_companies'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets type
     *
     * @return \OpenAPI\Client\Model\CompanyCommonType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\CompanyCommonType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets size
     *
     * @return \OpenAPI\Client\Model\Size|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \OpenAPI\Client\Model\Size|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets headquarters
     *
     * @return \OpenAPI\Client\Model\Headquarter[]|null
     */
    public function getHeadquarters()
    {
        return $this->container['headquarters'];
    }

    /**
     * Sets headquarters
     *
     * @param \OpenAPI\Client\Model\Headquarter[]|null $headquarters Company headquarters.
     *
     * @return self
     */
    public function setHeadquarters($headquarters)
    {
        $this->container['headquarters'] = $headquarters;

        return $this;
    }

    /**
     * Gets branches
     *
     * @return \OpenAPI\Client\Model\Branch[]|null
     */
    public function getBranches()
    {
        return $this->container['branches'];
    }

    /**
     * Sets branches
     *
     * @param \OpenAPI\Client\Model\Branch[]|null $branches Company branches.
     *
     * @return self
     */
    public function setBranches($branches)
    {
        $this->container['branches'] = $branches;

        return $this;
    }

    /**
     * Gets industries
     *
     * @return \OpenAPI\Client\Model\CompanyCommonIndustry[]|null
     */
    public function getIndustries()
    {
        return $this->container['industries'];
    }

    /**
     * Sets industries
     *
     * @param \OpenAPI\Client\Model\CompanyCommonIndustry[]|null $industries Company industries. Check the [Standardized Data](https://api.inda.ai/hr/docs/v2/#tag/Standardized-Data) section for more details.
     *
     * @return self
     */
    public function setIndustries($industries)
    {
        $this->container['industries'] = $industries;

        return $this;
    }

    /**
     * Gets specialties
     *
     * @return \OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr[]|null
     */
    public function getSpecialties()
    {
        return $this->container['specialties'];
    }

    /**
     * Sets specialties
     *
     * @param \OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr[]|null $specialties Keywords useful to provide additional detail about company industries.
     *
     * @return self
     */
    public function setSpecialties($specialties)
    {
        $this->container['specialties'] = $specialties;

        return $this;
    }

    /**
     * Gets founded
     *
     * @return \OpenAPI\Client\Model\FoundationYear|null
     */
    public function getFounded()
    {
        return $this->container['founded'];
    }

    /**
     * Sets founded
     *
     * @param \OpenAPI\Client\Model\FoundationYear|null $founded founded
     *
     * @return self
     */
    public function setFounded($founded)
    {
        $this->container['founded'] = $founded;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \OpenAPI\Client\Model\JobadLinkLink|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \OpenAPI\Client\Model\JobadLinkLink|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \OpenAPI\Client\Model\JobadLinkLink|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \OpenAPI\Client\Model\JobadLinkLink|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \OpenAPI\Client\Model\Asset[]|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \OpenAPI\Client\Model\Asset[]|null $products Company main products.
     *
     * @return self
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \OpenAPI\Client\Model\Asset[]|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \OpenAPI\Client\Model\Asset[]|null $services Services provided by the company.
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets related_companies
     *
     * @return \OpenAPI\Client\Model\RelatedCompany[]|null
     */
    public function getRelatedCompanies()
    {
        return $this->container['related_companies'];
    }

    /**
     * Sets related_companies
     *
     * @param \OpenAPI\Client\Model\RelatedCompany[]|null $related_companies Details about related companies.
     *
     * @return self
     */
    public function setRelatedCompanies($related_companies)
    {
        $this->container['related_companies'] = $related_companies;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \OpenAPI\Client\Model\BaseEmploymentsValueModelStrictStr $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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


