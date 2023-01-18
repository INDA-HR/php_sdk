<?php
/**
 * OccupationsApi
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

namespace OpenAPI\Client\inda_hr;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * OccupationsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OccupationsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'similarJobtitlesGET' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation similarJobtitlesGET
     *
     * Similar JobTitles
     *
     * @param  string $query Input job title to be analyzed (required)
     * @param  int $size Number of similar job titles to return. (optional, default to 10)
     * @param  float $min_score Minimum pertinence score. (optional, default to 0.5)
     * @param  string $src_lang Optional. Language of the input job titles.If missing, the detected language is assumed as &#x60;src_lang&#x60;. (optional)
     * @param  string $dst_lang Optional. Destination language in which the output job titles are translated.If missing, the input or detected &#x60;src_lang&#x60; is assumed as &#x60;dst_lang&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['similarJobtitlesGET'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\SimilarEntitiesResponse|\OpenAPI\Client\Model\ErrorModel|\OpenAPI\Client\Model\HTTPValidationError
     */
    public function similarJobtitlesGET($query, $size = 10, $min_score = 0.5, $src_lang = null, $dst_lang = null, string $contentType = self::contentTypes['similarJobtitlesGET'][0])
    {
        list($response) = $this->similarJobtitlesGETWithHttpInfo($query, $size, $min_score, $src_lang, $dst_lang, $contentType);
        return $response;
    }

    /**
     * Operation similarJobtitlesGETWithHttpInfo
     *
     * Similar JobTitles
     *
     * @param  string $query Input job title to be analyzed (required)
     * @param  int $size Number of similar job titles to return. (optional, default to 10)
     * @param  float $min_score Minimum pertinence score. (optional, default to 0.5)
     * @param  string $src_lang Optional. Language of the input job titles.If missing, the detected language is assumed as &#x60;src_lang&#x60;. (optional)
     * @param  string $dst_lang Optional. Destination language in which the output job titles are translated.If missing, the input or detected &#x60;src_lang&#x60; is assumed as &#x60;dst_lang&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['similarJobtitlesGET'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\SimilarEntitiesResponse|\OpenAPI\Client\Model\ErrorModel|\OpenAPI\Client\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function similarJobtitlesGETWithHttpInfo($query, $size = 10, $min_score = 0.5, $src_lang = null, $dst_lang = null, string $contentType = self::contentTypes['similarJobtitlesGET'][0])
    {
        $request = $this->similarJobtitlesGETRequest($query, $size, $min_score, $src_lang, $dst_lang, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\SimilarEntitiesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\SimilarEntitiesResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\SimilarEntitiesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ErrorModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\OpenAPI\Client\Model\HTTPValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\HTTPValidationError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\HTTPValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\SimilarEntitiesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\SimilarEntitiesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation similarJobtitlesGETAsync
     *
     * Similar JobTitles
     *
     * @param  string $query Input job title to be analyzed (required)
     * @param  int $size Number of similar job titles to return. (optional, default to 10)
     * @param  float $min_score Minimum pertinence score. (optional, default to 0.5)
     * @param  string $src_lang Optional. Language of the input job titles.If missing, the detected language is assumed as &#x60;src_lang&#x60;. (optional)
     * @param  string $dst_lang Optional. Destination language in which the output job titles are translated.If missing, the input or detected &#x60;src_lang&#x60; is assumed as &#x60;dst_lang&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['similarJobtitlesGET'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function similarJobtitlesGETAsync($query, $size = 10, $min_score = 0.5, $src_lang = null, $dst_lang = null, string $contentType = self::contentTypes['similarJobtitlesGET'][0])
    {
        return $this->similarJobtitlesGETAsyncWithHttpInfo($query, $size, $min_score, $src_lang, $dst_lang, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation similarJobtitlesGETAsyncWithHttpInfo
     *
     * Similar JobTitles
     *
     * @param  string $query Input job title to be analyzed (required)
     * @param  int $size Number of similar job titles to return. (optional, default to 10)
     * @param  float $min_score Minimum pertinence score. (optional, default to 0.5)
     * @param  string $src_lang Optional. Language of the input job titles.If missing, the detected language is assumed as &#x60;src_lang&#x60;. (optional)
     * @param  string $dst_lang Optional. Destination language in which the output job titles are translated.If missing, the input or detected &#x60;src_lang&#x60; is assumed as &#x60;dst_lang&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['similarJobtitlesGET'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function similarJobtitlesGETAsyncWithHttpInfo($query, $size = 10, $min_score = 0.5, $src_lang = null, $dst_lang = null, string $contentType = self::contentTypes['similarJobtitlesGET'][0])
    {
        $returnType = '\OpenAPI\Client\Model\SimilarEntitiesResponse';
        $request = $this->similarJobtitlesGETRequest($query, $size, $min_score, $src_lang, $dst_lang, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'similarJobtitlesGET'
     *
     * @param  string $query Input job title to be analyzed (required)
     * @param  int $size Number of similar job titles to return. (optional, default to 10)
     * @param  float $min_score Minimum pertinence score. (optional, default to 0.5)
     * @param  string $src_lang Optional. Language of the input job titles.If missing, the detected language is assumed as &#x60;src_lang&#x60;. (optional)
     * @param  string $dst_lang Optional. Destination language in which the output job titles are translated.If missing, the input or detected &#x60;src_lang&#x60; is assumed as &#x60;dst_lang&#x60;. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['similarJobtitlesGET'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function similarJobtitlesGETRequest($query, $size = 10, $min_score = 0.5, $src_lang = null, $dst_lang = null, string $contentType = self::contentTypes['similarJobtitlesGET'][0])
    {

        // verify the required parameter 'query' is set
        if ($query === null || (is_array($query) && count($query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $query when calling similarJobtitlesGET'
            );
        }

        if ($size !== null && $size > 20) {
            throw new \InvalidArgumentException('invalid value for "$size" when calling OccupationsApi.similarJobtitlesGET, must be smaller than or equal to 20.');
        }
        
        if ($min_score !== null && $min_score < 0.0) {
            throw new \InvalidArgumentException('invalid value for "$min_score" when calling OccupationsApi.similarJobtitlesGET, must be bigger than or equal to 0.0.');
        }
        



        $resourcePath = '/hr/v2/occupations/similar/semantic/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $size,
            'size', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $min_score,
            'min_score', // param base name
            'number', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $query,
            'query', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $src_lang,
            'src_lang', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $dst_lang,
            'dst_lang', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
