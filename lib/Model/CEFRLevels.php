<?php
/**
 * CEFRLevels
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
 * CEFRLevels Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CEFRLevels implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CEFRLevels';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'overall' => 'string',
        'writing' => 'string',
        'reading' => 'string',
        'speaking' => 'string',
        'listening' => 'string',
        'spoken_interaction' => 'string',
        'spoken_production' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'overall' => null,
        'writing' => null,
        'reading' => null,
        'speaking' => null,
        'listening' => null,
        'spoken_interaction' => null,
        'spoken_production' => null
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
        'overall' => 'Overall',
        'writing' => 'Writing',
        'reading' => 'Reading',
        'speaking' => 'Speaking',
        'listening' => 'Listening',
        'spoken_interaction' => 'SpokenInteraction',
        'spoken_production' => 'SpokenProduction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'overall' => 'setOverall',
        'writing' => 'setWriting',
        'reading' => 'setReading',
        'speaking' => 'setSpeaking',
        'listening' => 'setListening',
        'spoken_interaction' => 'setSpokenInteraction',
        'spoken_production' => 'setSpokenProduction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'overall' => 'getOverall',
        'writing' => 'getWriting',
        'reading' => 'getReading',
        'speaking' => 'getSpeaking',
        'listening' => 'getListening',
        'spoken_interaction' => 'getSpokenInteraction',
        'spoken_production' => 'getSpokenProduction'
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

    const OVERALL_A1 = 'A1';
    const OVERALL_A2 = 'A2';
    const OVERALL_B1 = 'B1';
    const OVERALL_B2 = 'B2';
    const OVERALL_C1 = 'C1';
    const OVERALL_C2 = 'C2';
    const WRITING_A1 = 'A1';
    const WRITING_A2 = 'A2';
    const WRITING_B1 = 'B1';
    const WRITING_B2 = 'B2';
    const WRITING_C1 = 'C1';
    const WRITING_C2 = 'C2';
    const READING_A1 = 'A1';
    const READING_A2 = 'A2';
    const READING_B1 = 'B1';
    const READING_B2 = 'B2';
    const READING_C1 = 'C1';
    const READING_C2 = 'C2';
    const SPEAKING_A1 = 'A1';
    const SPEAKING_A2 = 'A2';
    const SPEAKING_B1 = 'B1';
    const SPEAKING_B2 = 'B2';
    const SPEAKING_C1 = 'C1';
    const SPEAKING_C2 = 'C2';
    const LISTENING_A1 = 'A1';
    const LISTENING_A2 = 'A2';
    const LISTENING_B1 = 'B1';
    const LISTENING_B2 = 'B2';
    const LISTENING_C1 = 'C1';
    const LISTENING_C2 = 'C2';
    const SPOKEN_INTERACTION_A1 = 'A1';
    const SPOKEN_INTERACTION_A2 = 'A2';
    const SPOKEN_INTERACTION_B1 = 'B1';
    const SPOKEN_INTERACTION_B2 = 'B2';
    const SPOKEN_INTERACTION_C1 = 'C1';
    const SPOKEN_INTERACTION_C2 = 'C2';
    const SPOKEN_PRODUCTION_A1 = 'A1';
    const SPOKEN_PRODUCTION_A2 = 'A2';
    const SPOKEN_PRODUCTION_B1 = 'B1';
    const SPOKEN_PRODUCTION_B2 = 'B2';
    const SPOKEN_PRODUCTION_C1 = 'C1';
    const SPOKEN_PRODUCTION_C2 = 'C2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOverallAllowableValues()
    {
        return [
            self::OVERALL_A1,
            self::OVERALL_A2,
            self::OVERALL_B1,
            self::OVERALL_B2,
            self::OVERALL_C1,
            self::OVERALL_C2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWritingAllowableValues()
    {
        return [
            self::WRITING_A1,
            self::WRITING_A2,
            self::WRITING_B1,
            self::WRITING_B2,
            self::WRITING_C1,
            self::WRITING_C2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReadingAllowableValues()
    {
        return [
            self::READING_A1,
            self::READING_A2,
            self::READING_B1,
            self::READING_B2,
            self::READING_C1,
            self::READING_C2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpeakingAllowableValues()
    {
        return [
            self::SPEAKING_A1,
            self::SPEAKING_A2,
            self::SPEAKING_B1,
            self::SPEAKING_B2,
            self::SPEAKING_C1,
            self::SPEAKING_C2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getListeningAllowableValues()
    {
        return [
            self::LISTENING_A1,
            self::LISTENING_A2,
            self::LISTENING_B1,
            self::LISTENING_B2,
            self::LISTENING_C1,
            self::LISTENING_C2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpokenInteractionAllowableValues()
    {
        return [
            self::SPOKEN_INTERACTION_A1,
            self::SPOKEN_INTERACTION_A2,
            self::SPOKEN_INTERACTION_B1,
            self::SPOKEN_INTERACTION_B2,
            self::SPOKEN_INTERACTION_C1,
            self::SPOKEN_INTERACTION_C2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpokenProductionAllowableValues()
    {
        return [
            self::SPOKEN_PRODUCTION_A1,
            self::SPOKEN_PRODUCTION_A2,
            self::SPOKEN_PRODUCTION_B1,
            self::SPOKEN_PRODUCTION_B2,
            self::SPOKEN_PRODUCTION_C1,
            self::SPOKEN_PRODUCTION_C2,
        ];
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
        $this->container['overall'] = $data['overall'] ?? null;
        $this->container['writing'] = $data['writing'] ?? null;
        $this->container['reading'] = $data['reading'] ?? null;
        $this->container['speaking'] = $data['speaking'] ?? null;
        $this->container['listening'] = $data['listening'] ?? null;
        $this->container['spoken_interaction'] = $data['spoken_interaction'] ?? null;
        $this->container['spoken_production'] = $data['spoken_production'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOverallAllowableValues();
        if (!is_null($this->container['overall']) && !in_array($this->container['overall'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'overall', must be one of '%s'",
                $this->container['overall'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWritingAllowableValues();
        if (!is_null($this->container['writing']) && !in_array($this->container['writing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'writing', must be one of '%s'",
                $this->container['writing'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReadingAllowableValues();
        if (!is_null($this->container['reading']) && !in_array($this->container['reading'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reading', must be one of '%s'",
                $this->container['reading'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpeakingAllowableValues();
        if (!is_null($this->container['speaking']) && !in_array($this->container['speaking'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'speaking', must be one of '%s'",
                $this->container['speaking'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getListeningAllowableValues();
        if (!is_null($this->container['listening']) && !in_array($this->container['listening'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'listening', must be one of '%s'",
                $this->container['listening'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpokenInteractionAllowableValues();
        if (!is_null($this->container['spoken_interaction']) && !in_array($this->container['spoken_interaction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spoken_interaction', must be one of '%s'",
                $this->container['spoken_interaction'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpokenProductionAllowableValues();
        if (!is_null($this->container['spoken_production']) && !in_array($this->container['spoken_production'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'spoken_production', must be one of '%s'",
                $this->container['spoken_production'],
                implode("', '", $allowedValues)
            );
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
     * Gets overall
     *
     * @return string|null
     */
    public function getOverall()
    {
        return $this->container['overall'];
    }

    /**
     * Sets overall
     *
     * @param string|null $overall overall
     *
     * @return self
     */
    public function setOverall($overall)
    {
        $allowedValues = $this->getOverallAllowableValues();
        if (!is_null($overall) && !in_array($overall, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'overall', must be one of '%s'",
                    $overall,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['overall'] = $overall;

        return $this;
    }

    /**
     * Gets writing
     *
     * @return string|null
     */
    public function getWriting()
    {
        return $this->container['writing'];
    }

    /**
     * Sets writing
     *
     * @param string|null $writing writing
     *
     * @return self
     */
    public function setWriting($writing)
    {
        $allowedValues = $this->getWritingAllowableValues();
        if (!is_null($writing) && !in_array($writing, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'writing', must be one of '%s'",
                    $writing,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['writing'] = $writing;

        return $this;
    }

    /**
     * Gets reading
     *
     * @return string|null
     */
    public function getReading()
    {
        return $this->container['reading'];
    }

    /**
     * Sets reading
     *
     * @param string|null $reading reading
     *
     * @return self
     */
    public function setReading($reading)
    {
        $allowedValues = $this->getReadingAllowableValues();
        if (!is_null($reading) && !in_array($reading, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reading', must be one of '%s'",
                    $reading,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reading'] = $reading;

        return $this;
    }

    /**
     * Gets speaking
     *
     * @return string|null
     */
    public function getSpeaking()
    {
        return $this->container['speaking'];
    }

    /**
     * Sets speaking
     *
     * @param string|null $speaking speaking
     *
     * @return self
     */
    public function setSpeaking($speaking)
    {
        $allowedValues = $this->getSpeakingAllowableValues();
        if (!is_null($speaking) && !in_array($speaking, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'speaking', must be one of '%s'",
                    $speaking,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['speaking'] = $speaking;

        return $this;
    }

    /**
     * Gets listening
     *
     * @return string|null
     */
    public function getListening()
    {
        return $this->container['listening'];
    }

    /**
     * Sets listening
     *
     * @param string|null $listening listening
     *
     * @return self
     */
    public function setListening($listening)
    {
        $allowedValues = $this->getListeningAllowableValues();
        if (!is_null($listening) && !in_array($listening, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'listening', must be one of '%s'",
                    $listening,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['listening'] = $listening;

        return $this;
    }

    /**
     * Gets spoken_interaction
     *
     * @return string|null
     */
    public function getSpokenInteraction()
    {
        return $this->container['spoken_interaction'];
    }

    /**
     * Sets spoken_interaction
     *
     * @param string|null $spoken_interaction spoken_interaction
     *
     * @return self
     */
    public function setSpokenInteraction($spoken_interaction)
    {
        $allowedValues = $this->getSpokenInteractionAllowableValues();
        if (!is_null($spoken_interaction) && !in_array($spoken_interaction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spoken_interaction', must be one of '%s'",
                    $spoken_interaction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spoken_interaction'] = $spoken_interaction;

        return $this;
    }

    /**
     * Gets spoken_production
     *
     * @return string|null
     */
    public function getSpokenProduction()
    {
        return $this->container['spoken_production'];
    }

    /**
     * Sets spoken_production
     *
     * @param string|null $spoken_production spoken_production
     *
     * @return self
     */
    public function setSpokenProduction($spoken_production)
    {
        $allowedValues = $this->getSpokenProductionAllowableValues();
        if (!is_null($spoken_production) && !in_array($spoken_production, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'spoken_production', must be one of '%s'",
                    $spoken_production,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['spoken_production'] = $spoken_production;

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


