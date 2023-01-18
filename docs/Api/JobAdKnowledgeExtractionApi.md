# OpenAPI\Client\JobAdKnowledgeExtractionApi

All URIs are relative to https://api.inda.ai, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**extractJobtitlesFromJobadPOST()**](JobAdKnowledgeExtractionApi.md#extractJobtitlesFromJobadPOST) | **POST** /hr/v2/parse/jobad/jobtitles/ | Extract JobTitles from JobAd |
| [**extractLanguagesFromJobadPOST()**](JobAdKnowledgeExtractionApi.md#extractLanguagesFromJobadPOST) | **POST** /hr/v2/parse/jobad/languages/ | Extract Languages from JobAd |
| [**extractSkillsFromJobadPOST()**](JobAdKnowledgeExtractionApi.md#extractSkillsFromJobadPOST) | **POST** /hr/v2/parse/jobad/skills/ | Extract Skills from JobAd |


## `extractJobtitlesFromJobadPOST()`

```php
extractJobtitlesFromJobadPOST($job_ad_job_description_request, $src_lang, $dst_lang, $size, $min_score): \OpenAPI\Client\Model\JobAdJobTitlesResponse
```

Extract JobTitles from JobAd

This method extract job titles that are semantically related with a job advert.  The input is a json containing the structure of the advert, as described in the schema below and in the example on the right.  The field *sections* in the body contains a list of documents, which correspond to distinct sections of the advert (e.g., company description, job description, requirements); in each document, the field *content* contains the text of the section, while the field *weight* (a number between <code style='color: #333333; opacity: 0.9'>0</code> and <code style='color: #333333; opacity: 0.9'>1</code>) can be used to give different weights to the different sections in the skill extraction (e.g., a section with the requirements is probably much more relevant for the skill extraction than a section with the company description); in the absence of the field *value*, the maximum value (i.e., *weight* = <code style='color: #333333; opacity: 0.9'>1</code>) will be assumed.  The field *header* contains the information about the job title.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdKnowledgeExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_ad_job_description_request = {"Data":{"JobTitle":{"Value":"Impiegato amministrativo contabile","Details":{"Weight":0.2,"Language":"it"}},"JobDescription":{"CompanyDescription":{"Content":{"Value":"Intervieweb S.r.l. è una società IT specializzata nello sviluppo e commercializzazione di software dedicati al mondo delle Risorse Umane e in particolare al processo di recruiting. I prodotti software principali sono     - In-recruiting (www.in-recruiting.com), uno dei principali Applicant Tracking System (ATS) Recruiting software presenti sul mercato: il software viene fornito in modalità CloudSaaS e permette di gestire internamente l’intero processo di reclutamento e selezione del personale.    - Inda (www.inda.ai), un servizio di API che implementa soluzioni di Artificial Intelligence (AI) nel mondo delle Risorse Umane. Ci rivolgiamo ad un mercato B2B e i nostri clienti sono Aziende, di qualunque settore e dimensione, e Agenzie per il Lavoro. Lavoriamo sia in Italia sia all'estero. Il team Data Science, dedicato a Inda, è attualmente composto da 5 persone e sta crescendo per far fronte alla crescente domanda di nuovi sviluppi e soluzioni, anche in vista dell’obiettivo di diventare un polo di eccellenza in ambito AI nel gruppo Zucchetti, di cui Intervieweb fa parte."},"Details":{"Weight":0.11,"Language":"it"}},"PositionDescription":{"Content":{"Value":"La figura ricopre l'importante ruolo di primo contatto con i clienti e il riporto con la direzione. Parte delle mansioni sono l'organizzazione dell'archivio, la gestione e l'organizzazione, cartacea e dematerializzata, della documentazione relativa ai diversi clienti e progetti in essere Gestione e organizzazione documentazione fornitori e clienti Contabilità generale e analisi dell'andamento Fatturazione e pagamenti Contatto con lo studio commercialista e consulente del lavoro Ottimizzazione del flusso della documentazione (dall'arrivo alla condivisione e archivio della documentazione)"},"Details":{"Weight":0.99,"Language":"it"}},"PositionRequirements":{"Content":{"Value":"  Attenzione e precisione nello svolgimento di ogni compito Gestione della fatturazione e dei pagamenti Buona conoscenza della contabilità Ottima conoscenza e dimestichezza nell'utilizzo del PC e dei comuni software di contabilità Proattività e voglia di imparare e migliorarsi Capacità di gestione priorità e rispetto delle scadenze Ottime doti organizzative"},"Details":{"Weight":0.324590988127}}}}}; // \OpenAPI\Client\Model\JobAdJobDescriptionRequest
$src_lang = 'src_lang_example'; // string | Job Description language. If left empty each section's language will detected automatically.
$dst_lang = 'dst_lang_example'; // string | Extracted entities destination language. If left empty is assumed to be equal to the Job Description language.
$size = 10; // int | Number of job titles to be returned, must be greater than <code style='color: #333333; opacity: 0.9'>0</code> and smaller or equal to <code style='color: #333333; opacity: 0.9'>20</code>.
$min_score = 0.2; // float | Minimum score for the proposed job titles. The job titles with a score lower than this value will be neglected.

try {
    $result = $apiInstance->extractJobtitlesFromJobadPOST($job_ad_job_description_request, $src_lang, $dst_lang, $size, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdKnowledgeExtractionApi->extractJobtitlesFromJobadPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_ad_job_description_request** | [**\OpenAPI\Client\Model\JobAdJobDescriptionRequest**](../Model/JobAdJobDescriptionRequest.md)|  | |
| **src_lang** | **string**| Job Description language. If left empty each section&#39;s language will detected automatically. | [optional] |
| **dst_lang** | **string**| Extracted entities destination language. If left empty is assumed to be equal to the Job Description language. | [optional] |
| **size** | **int**| Number of job titles to be returned, must be greater than &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;0&lt;/code&gt; and smaller or equal to &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;20&lt;/code&gt;. | [optional] [default to 10] |
| **min_score** | **float**| Minimum score for the proposed job titles. The job titles with a score lower than this value will be neglected. | [optional] [default to 0.2] |

### Return type

[**\OpenAPI\Client\Model\JobAdJobTitlesResponse**](../Model/JobAdJobTitlesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extractLanguagesFromJobadPOST()`

```php
extractLanguagesFromJobadPOST($job_ad_job_description_request, $src_lang, $dst_lang, $size, $min_score): \OpenAPI\Client\Model\JobAdLanguagesResponse
```

Extract Languages from JobAd

This method extract job titles that are semantically related with a job advert.  The input is a json containing the structure of the advert, as described in the schema below and in the example on the right.  The field *sections* in the body contains a list of documents, which correspond to distinct sections of the advert (e.g., company description, job description, requirements); in each document, the field *content* contains the text of the section, while the field *weight* (a number between <code style='color: #333333; opacity: 0.9'>0</code> and <code style='color: #333333; opacity: 0.9'>1</code>) can be used to give different weights to the different sections in the skill extraction (e.g., a section with the requirements is probably much more relevant for the skill extraction than a section with the company description); in the absence of the field *value*, the maximum value (i.e., *weight* = <code style='color: #333333; opacity: 0.9'>1</code>) will be assumed.  The field *header* contains the information about the job title.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdKnowledgeExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_ad_job_description_request = {"Data":{"JobTitle":{"Value":"Impiegato amministrativo contabile","Details":{"Weight":0.2,"Language":"it"}},"JobDescription":{"CompanyDescription":{"Content":{"Value":"Intervieweb S.r.l. è una società IT specializzata nello sviluppo e commercializzazione di software dedicati al mondo delle Risorse Umane e in particolare al processo di recruiting. I prodotti software principali sono     - In-recruiting (www.in-recruiting.com), uno dei principali Applicant Tracking System (ATS) Recruiting software presenti sul mercato: il software viene fornito in modalità CloudSaaS e permette di gestire internamente l’intero processo di reclutamento e selezione del personale.    - Inda (www.inda.ai), un servizio di API che implementa soluzioni di Artificial Intelligence (AI) nel mondo delle Risorse Umane. Ci rivolgiamo ad un mercato B2B e i nostri clienti sono Aziende, di qualunque settore e dimensione, e Agenzie per il Lavoro. Lavoriamo sia in Italia sia all'estero. Il team Data Science, dedicato a Inda, è attualmente composto da 5 persone e sta crescendo per far fronte alla crescente domanda di nuovi sviluppi e soluzioni, anche in vista dell’obiettivo di diventare un polo di eccellenza in ambito AI nel gruppo Zucchetti, di cui Intervieweb fa parte."},"Details":{"Weight":0.11,"Language":"it"}},"PositionDescription":{"Content":{"Value":"La figura ricopre l'importante ruolo di primo contatto con i clienti e il riporto con la direzione. Parte delle mansioni sono l'organizzazione dell'archivio, la gestione e l'organizzazione, cartacea e dematerializzata, della documentazione relativa ai diversi clienti e progetti in essere Gestione e organizzazione documentazione fornitori e clienti Contabilità generale e analisi dell'andamento Fatturazione e pagamenti Contatto con lo studio commercialista e consulente del lavoro Ottimizzazione del flusso della documentazione (dall'arrivo alla condivisione e archivio della documentazione)"},"Details":{"Weight":0.99,"Language":"it"}},"PositionRequirements":{"Content":{"Value":"  Attenzione e precisione nello svolgimento di ogni compito Gestione della fatturazione e dei pagamenti Buona conoscenza della contabilità Ottima conoscenza e dimestichezza nell'utilizzo del PC e dei comuni software di contabilità Proattività e voglia di imparare e migliorarsi Capacità di gestione priorità e rispetto delle scadenze Ottime doti organizzative"},"Details":{"Weight":0.324590988127}}}}}; // \OpenAPI\Client\Model\JobAdJobDescriptionRequest
$src_lang = 'src_lang_example'; // string | Job Description language. If left empty each section's language will detected automatically.
$dst_lang = 'dst_lang_example'; // string | Extracted entities destination language. If left empty is assumed to be equal to the Job Description language.
$size = 10; // int | Number of languages to be returned, must be greater than <code style='color: #333333; opacity: 0.9'>0</code> and smaller or equal to <code style='color: #333333; opacity: 0.9'>20</code>.
$min_score = 0.2; // float | Minimum score for the proposed languages. The languages with a score lower than this value will be neglected.

try {
    $result = $apiInstance->extractLanguagesFromJobadPOST($job_ad_job_description_request, $src_lang, $dst_lang, $size, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdKnowledgeExtractionApi->extractLanguagesFromJobadPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_ad_job_description_request** | [**\OpenAPI\Client\Model\JobAdJobDescriptionRequest**](../Model/JobAdJobDescriptionRequest.md)|  | |
| **src_lang** | **string**| Job Description language. If left empty each section&#39;s language will detected automatically. | [optional] |
| **dst_lang** | **string**| Extracted entities destination language. If left empty is assumed to be equal to the Job Description language. | [optional] |
| **size** | **int**| Number of languages to be returned, must be greater than &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;0&lt;/code&gt; and smaller or equal to &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;20&lt;/code&gt;. | [optional] [default to 10] |
| **min_score** | **float**| Minimum score for the proposed languages. The languages with a score lower than this value will be neglected. | [optional] [default to 0.2] |

### Return type

[**\OpenAPI\Client\Model\JobAdLanguagesResponse**](../Model/JobAdLanguagesResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extractSkillsFromJobadPOST()`

```php
extractSkillsFromJobadPOST($job_ad_job_description_request, $src_lang, $dst_lang, $size, $min_score): \OpenAPI\Client\Model\JobAdSkillsResponse
```

Extract Skills from JobAd

This method extract job skills (both hard and soft skills) that are semantically related with a job advert.  The input is a json containing the structure of the advert, as described in the schema below and in the example on the right.  The field *sections* in the body contains a list of documents, which correspond to distinct sections of the advert (e.g., company description, job description, requirements); in each document, the field *content* contains the text of the section, while the field *weight* (a number between <code style='color: #333333; opacity: 0.9'>0</code> and <code style='color: #333333; opacity: 0.9'>1</code>) can be used to give different weights to the different sections in the skill extraction (e.g., a section with the requirements is probably much more relevant for the skill extraction than a section with the company description); in the absence of the field *value*, the maximum value (i.e., *weight* = <code style='color: #333333; opacity: 0.9'>1</code>) will be assumed.  The field *header* contains the information about the job title.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\JobAdKnowledgeExtractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_ad_job_description_request = {"Data":{"JobTitle":{"Value":"Impiegato amministrativo contabile","Details":{"Weight":0.2,"Language":"it"}},"JobDescription":{"CompanyDescription":{"Content":{"Value":"Intervieweb S.r.l. è una società IT specializzata nello sviluppo e commercializzazione di software dedicati al mondo delle Risorse Umane e in particolare al processo di recruiting. I prodotti software principali sono     - In-recruiting (www.in-recruiting.com), uno dei principali Applicant Tracking System (ATS) Recruiting software presenti sul mercato: il software viene fornito in modalità CloudSaaS e permette di gestire internamente l’intero processo di reclutamento e selezione del personale.    - Inda (www.inda.ai), un servizio di API che implementa soluzioni di Artificial Intelligence (AI) nel mondo delle Risorse Umane. Ci rivolgiamo ad un mercato B2B e i nostri clienti sono Aziende, di qualunque settore e dimensione, e Agenzie per il Lavoro. Lavoriamo sia in Italia sia all'estero. Il team Data Science, dedicato a Inda, è attualmente composto da 5 persone e sta crescendo per far fronte alla crescente domanda di nuovi sviluppi e soluzioni, anche in vista dell’obiettivo di diventare un polo di eccellenza in ambito AI nel gruppo Zucchetti, di cui Intervieweb fa parte."},"Details":{"Weight":0.11,"Language":"it"}},"PositionDescription":{"Content":{"Value":"La figura ricopre l'importante ruolo di primo contatto con i clienti e il riporto con la direzione. Parte delle mansioni sono l'organizzazione dell'archivio, la gestione e l'organizzazione, cartacea e dematerializzata, della documentazione relativa ai diversi clienti e progetti in essere Gestione e organizzazione documentazione fornitori e clienti Contabilità generale e analisi dell'andamento Fatturazione e pagamenti Contatto con lo studio commercialista e consulente del lavoro Ottimizzazione del flusso della documentazione (dall'arrivo alla condivisione e archivio della documentazione)"},"Details":{"Weight":0.99,"Language":"it"}},"PositionRequirements":{"Content":{"Value":"  Attenzione e precisione nello svolgimento di ogni compito Gestione della fatturazione e dei pagamenti Buona conoscenza della contabilità Ottima conoscenza e dimestichezza nell'utilizzo del PC e dei comuni software di contabilità Proattività e voglia di imparare e migliorarsi Capacità di gestione priorità e rispetto delle scadenze Ottime doti organizzative"},"Details":{"Weight":0.324590988127}}}}}; // \OpenAPI\Client\Model\JobAdJobDescriptionRequest
$src_lang = 'src_lang_example'; // string | Job Description language. If left empty each section's language will detected automatically.
$dst_lang = 'dst_lang_example'; // string | Extracted entities destination language. If left empty is assumed to be equal to the Job Description language.
$size = 10; // int | Number of skills to be returned, must be greater than <code style='color: #333333; opacity: 0.9'>0</code> and smaller or equal to <code style='color: #333333; opacity: 0.9'>20</code>.
$min_score = 0.2; // float | Minimum score for the proposed skills. The skills with a score lower than this value will be neglected.

try {
    $result = $apiInstance->extractSkillsFromJobadPOST($job_ad_job_description_request, $src_lang, $dst_lang, $size, $min_score);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAdKnowledgeExtractionApi->extractSkillsFromJobadPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **job_ad_job_description_request** | [**\OpenAPI\Client\Model\JobAdJobDescriptionRequest**](../Model/JobAdJobDescriptionRequest.md)|  | |
| **src_lang** | **string**| Job Description language. If left empty each section&#39;s language will detected automatically. | [optional] |
| **dst_lang** | **string**| Extracted entities destination language. If left empty is assumed to be equal to the Job Description language. | [optional] |
| **size** | **int**| Number of skills to be returned, must be greater than &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;0&lt;/code&gt; and smaller or equal to &lt;code style&#x3D;&#39;color: #333333; opacity: 0.9&#39;&gt;20&lt;/code&gt;. | [optional] [default to 10] |
| **min_score** | **float**| Minimum score for the proposed skills. The skills with a score lower than this value will be neglected. | [optional] [default to 0.2] |

### Return type

[**\OpenAPI\Client\Model\JobAdSkillsResponse**](../Model/JobAdSkillsResponse.md)

### Authorization

[APIKey](../../README.md#APIKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
