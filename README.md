![alt text](https://inda.ai/wp-content/uploads/2022/09/inda-hr-php.png)


# Introduction

**INDA (INtelligent Data Analysis)** is an [Intervieweb](https://www.intervieweb.it/hrm/) 
AI solution provided as a RESTful API.

The INDA pricing model is *credits-based*, which means that a certain number of credits is associated to each API request.
Hence, users have to purchase a certain amount of credits (established according to their needs) which will be reduced 
at each API call. INDA accepts and processes a user's request only if their credits quota is greater than - or, 
at least, equal to - the number of credits required by that request.
To obtain further details on the pricing, please visit our [site](https://inda.ai) or contact us.



INDA HR embraces a wide range of functionalities to manage the main elements of a recruitment process: 
 + [**candidate**](https://api.inda.ai/hr/docs/v2/#tag/Resume-Management) (hereafter also referred to as **resume** or **applicant**), or rather a 
person looking for a job;
 + [**job advertisement**](https://api.inda.ai/hr/docs/v2/#tag/JobAd-Management) (hereafter also referred to as **job ad**), which is a document 
 that collects all the main information and details about a job vacancy;
 + [**application**](https://api.inda.ai/hr/docs/v2/#tag/Application-Management), that binds candidates to job ads; it is generated whenever a 
candidate applies for a job.

Each of them has a specific set of methods that grants users the ability to create, read, update and delete the relative 
documents, plus some special features based on AI approaches (such as *document parsing* or *semantic search*).
They can be explored in their respective sections.

Data about the listed document types can be enriched by connecting them to other INDA supported entities, such as 
[**companies**](https://api.inda.ai/hr/docs/v2/#tag/Company-Management) and [**universities**](https://api.inda.ai/hr/docs/v2/#tag/Universities), so that recruiters may 
get a better and more detailed idea on the candidates' experiences and acquired skills.

All the functionalities mentioned above are meant to help recruiters during the talent acquisition process, 
by exploiting the power of AI systems.
Among the advantages a recruiter has by using this kind of systems, tackling the bias problem is surely one of the 
most relevant.
Bias in recruitment is a serious issue that affect both recruiters and candidates, since it may cause wrong hiring 
decisions.
As we care a lot about this problem, we are constantly working on reduce the bias in original data so that INDA 
results may be as fair as possible.
As of now, in order to tackle the bias issue, INDA automatically ignores specific fields (such as name, gender, age 
and nationality) during the initial processing of each candidate data.

Furthermore, we decided to let users collect data of various types, including personal or sensitive details, but we 
do not allow their usage if it is different from statistical purposes; our aim is to discourage recruiters from 
focusing on candidates' personal information, and to put their attention on the candidate's skills and abilities.  

We want to help recruiters to prevent any kind of bias while searching for the most valuable candidates they really need.



The following documentation is addressed both to developers, in order to provide all technical details for INDA integration,
and to managers, to guide them in the exploration of the implementation possibilities.

The host of the API is <span style="color:blue">https<area>://api.inda.ai/hr/v2</span>.
We recommend to check the API version and build (displayed near the documentation title).
You can contact us at support@intervieweb.it in case of problems, suggestions, or particular needs.



For more information, please visit [https://inda.ai](https://inda.ai).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/INDA-HR/php_sdk.git"
    }
  ],
  "require": {
    "inda-hr/php_sdk": "2.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: APIKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$indexname = 'indexname_example'; // string
$jobad_id = new \OpenAPI\Client\Model\AnyOfStringString(); // AnyOfStringString
$resume_id = 'resume_id_example'; // string
$base_application_request = {"Data":{"Objective":{"Value":"PHP developer looking for a position at a small independent company."},"ProfessionalSummary":{"Value":"Software engineer with 3+ years experience and a particular interest for solving complex problems."},"DesiredSalary":{"Amount":{"Value":34000},"Currency":{"Value":"USD"},"Frequency":{"Value":"YEARLY"},"Type":{"Value":"GROSS"}},"DesiredBenefits":[{"Value":"vouchers"},{"Value":"pc"},{"Value":"phone"}],"OriginLinks":[{"Label":{"Value":"LinkedIn"},"URL":{"Value":"https://www.linkedin.com/jobs/view/php-developer-at-new-york-23415417368"}}]},"HiringDetails":{"ApplicationDate":"2021-04-12","HiringPipeline":[{"Date":"2021-04-12T09:20:23","Status":"APPLIED"}]}}; // \OpenAPI\Client\Model\BaseApplicationRequest

try {
    $result = $apiInstance->addApplicationPOST($indexname, $jobad_id, $resume_id, $base_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->addApplicationPOST: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.inda.ai*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationManagementApi* | [**addApplicationPOST**](docs/Api/ApplicationManagementApi.md#addapplicationpost) | **POST** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/ | Add Application
*ApplicationManagementApi* | [**addApplicationStagePOST**](docs/Api/ApplicationManagementApi.md#addapplicationstagepost) | **POST** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/hiring-pipeline/stage/ | Add Application Stage
*ApplicationManagementApi* | [**applicationStatusGET**](docs/Api/ApplicationManagementApi.md#applicationstatusget) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/status/ | Application Status
*ApplicationManagementApi* | [**applyPOST**](docs/Api/ApplicationManagementApi.md#applypost) | **POST** /hr/v2/index/{indexname}/jobad/{jobad_id}/apply/ | Apply
*ApplicationManagementApi* | [**deleteApplicantsDELETE**](docs/Api/ApplicationManagementApi.md#deleteapplicantsdelete) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resumes/ | Delete Applicants
*ApplicationManagementApi* | [**deleteApplicationDELETE**](docs/Api/ApplicationManagementApi.md#deleteapplicationdelete) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/ | Delete Application
*ApplicationManagementApi* | [**deleteApplicationStageDELETE**](docs/Api/ApplicationManagementApi.md#deleteapplicationstagedelete) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/hiring-pipeline/stage/ | Delete Application Stage
*ApplicationManagementApi* | [**deleteApplicationsDELETE**](docs/Api/ApplicationManagementApi.md#deleteapplicationsdelete) | **DELETE** /hr/v2/index/{indexname}/resume/{resume_id}/applications/jobads/ | Delete Applications
*ApplicationManagementApi* | [**getApplicantsGET**](docs/Api/ApplicationManagementApi.md#getapplicantsget) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resumes/ | Get Applicants
*ApplicationManagementApi* | [**getApplicationGET**](docs/Api/ApplicationManagementApi.md#getapplicationget) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/ | Get Application
*ApplicationManagementApi* | [**getApplicationsGET**](docs/Api/ApplicationManagementApi.md#getapplicationsget) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/applications/jobads/ | Get Applications
*ApplicationManagementApi* | [**patchApplicationPATCH**](docs/Api/ApplicationManagementApi.md#patchapplicationpatch) | **PATCH** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resume/{resume_id}/ | Patch Application
*AuthenticationApi* | [**logInPOST**](docs/Api/AuthenticationApi.md#loginpost) | **POST** /hr/v2/auth/login/ | Log In
*ClearCacheApi* | [**clearSearchResultsDELETE**](docs/Api/ClearCacheApi.md#clearsearchresultsdelete) | **DELETE** /hr/v2/index/{indexname}/resumes/search/scroll/ | Clear Search Results
*CompanyManagementApi* | [**addCompanyPOST**](docs/Api/CompanyManagementApi.md#addcompanypost) | **POST** /hr/v2/company/ | Add Company
*CompanyManagementApi* | [**companyAutocompleteGET**](docs/Api/CompanyManagementApi.md#companyautocompleteget) | **GET** /hr/v2/company/name/search/autocomplete/ | Company Autocomplete
*CompanyManagementApi* | [**getCompanyGET**](docs/Api/CompanyManagementApi.md#getcompanyget) | **GET** /hr/v2/company/{company_id}/ | Get Company
*CompanyManagementApi* | [**patchCompanyPATCH**](docs/Api/CompanyManagementApi.md#patchcompanypatch) | **PATCH** /hr/v2/company/{company_id}/ | Patch Company
*CreditsManagementApi* | [**searchCreditsPOST**](docs/Api/CreditsManagementApi.md#searchcreditspost) | **POST** /hr/v2/index/{indexname}/credits/ | Search Credits
*CustomizationsApi* | [**customizeResumesPOST**](docs/Api/CustomizationsApi.md#customizeresumespost) | **POST** /hr/v2/index/{indexname}/resumes/customize/ | Customize Resumes
*CustomizationsApi* | [**getResumeCustomizationsGET**](docs/Api/CustomizationsApi.md#getresumecustomizationsget) | **GET** /hr/v2/index/{indexname}/resumes/mapping/ | Get Resume Customizations
*ESCOApi* | [**escoOccupationsHierarchyGET**](docs/Api/ESCOApi.md#escooccupationshierarchyget) | **GET** /hr/v2/occupations/similar/esco/hierarchy/ | ESCO Occupations Hierarchy
*ESCOApi* | [**escoSkillsHierarchyGET**](docs/Api/ESCOApi.md#escoskillshierarchyget) | **GET** /hr/v2/skills/similar/esco/hierarchy/ | ESCO Skills Hierarchy
*ESCOApi* | [**fromDescriptionToEscoOccupationsPOST**](docs/Api/ESCOApi.md#fromdescriptiontoescooccupationspost) | **POST** /hr/v2/occupations/description/match/esco/ | From description to ESCO Occupations
*ESCOApi* | [**fromDescriptionToEscoSkillsPOST**](docs/Api/ESCOApi.md#fromdescriptiontoescoskillspost) | **POST** /hr/v2/skills/description/match/esco/ | From description to ESCO Skills
*ESCOApi* | [**mappingEscoGET**](docs/Api/ESCOApi.md#mappingescoget) | **GET** /hr/v2/occupations/mapping/esco/ | Mapping ESCO
*ESCOApi* | [**mappingIscoGET**](docs/Api/ESCOApi.md#mappingiscoget) | **GET** /hr/v2/occupations/mapping/isco/ | Mapping ISCO
*ESCOApi* | [**mappingIstatCp2011GET**](docs/Api/ESCOApi.md#mappingistatcp2011get) | **GET** /hr/v2/occupations/mapping/istat/ | Mapping ISTAT-CP2011
*ESCOApi* | [**mappingOnetGET**](docs/Api/ESCOApi.md#mappingonetget) | **GET** /hr/v2/occupations/mapping/onet/ | Mapping O*NET
*ESCOApi* | [**similarEscoOccupationsGET**](docs/Api/ESCOApi.md#similarescooccupationsget) | **GET** /hr/v2/occupations/similar/esco/ | Similar ESCO Occupations
*ESCOApi* | [**similarEscoSkillsGET**](docs/Api/ESCOApi.md#similarescoskillsget) | **GET** /hr/v2/skills/similar/esco/ | Similar ESCO Skills
*FailuresApi* | [**getFailuresGET**](docs/Api/FailuresApi.md#getfailuresget) | **GET** /hr/v2/index/{indexname}/failures/ | Get Failures
*FeedbackApi* | [**infoExtractionFeedbackPOST**](docs/Api/FeedbackApi.md#infoextractionfeedbackpost) | **POST** /hr/v2/feedback/index/{indexname}/resume/{resume_id}/parse/data/ | Info Extraction Feedback
*FeedbackApi* | [**semanticSearchFeedbackPOST**](docs/Api/FeedbackApi.md#semanticsearchfeedbackpost) | **POST** /hr/v2/feedback/index/{indexname}/resume/{resume_id}/search/semantic/ | Semantic Search Feedback
*JobAdKnowledgeExtractionApi* | [**extractJobtitlesFromJobadPOST**](docs/Api/JobAdKnowledgeExtractionApi.md#extractjobtitlesfromjobadpost) | **POST** /hr/v2/parse/jobad/jobtitles/ | Extract JobTitles from JobAd
*JobAdKnowledgeExtractionApi* | [**extractSkillsFromJobadPOST**](docs/Api/JobAdKnowledgeExtractionApi.md#extractskillsfromjobadpost) | **POST** /hr/v2/parse/jobad/skills/ | Extract Skills from JobAd
*JobAdManagementApi* | [**addJobadPOST**](docs/Api/JobAdManagementApi.md#addjobadpost) | **POST** /hr/v2/index/{indexname}/jobad/ | Add JobAd
*JobAdManagementApi* | [**deleteJobadDELETE**](docs/Api/JobAdManagementApi.md#deletejobaddelete) | **DELETE** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Delete JobAd
*JobAdManagementApi* | [**getJobadGET**](docs/Api/JobAdManagementApi.md#getjobadget) | **GET** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Get JobAd
*JobAdManagementApi* | [**getJobadsGET**](docs/Api/JobAdManagementApi.md#getjobadsget) | **GET** /hr/v2/index/{indexname}/jobads/ | Get JobAds
*JobAdManagementApi* | [**patchJobadPATCH**](docs/Api/JobAdManagementApi.md#patchjobadpatch) | **PATCH** /hr/v2/index/{indexname}/jobad/{jobad_id}/ | Patch JobAd
*JobAdSearchApi* | [**fullTextSearchOnJobadsPOST**](docs/Api/JobAdSearchApi.md#fulltextsearchonjobadspost) | **POST** /hr/v2/index/{indexname}/jobads/search/full-text/ | Full-Text Search on JobAds
*JobAdSearchApi* | [**searchApplicationsPOST**](docs/Api/JobAdSearchApi.md#searchapplicationspost) | **POST** /hr/v2/index/{indexname}/resume/{resume_id}/applications/jobads/search/ | Search Applications
*JobAdToResumesApi* | [**matchResumesEvidenceFromIndexedJobadPOST**](docs/Api/JobAdToResumesApi.md#matchresumesevidencefromindexedjobadpost) | **POST** /hr/v2/index/{indexname}/resumes/matching/jobad/{jobad_id}/evidence/ | Match Resumes Evidence from indexed JobAd
*JobAdToResumesApi* | [**matchResumesEvidencePOST**](docs/Api/JobAdToResumesApi.md#matchresumesevidencepost) | **POST** /hr/v2/index/{indexname}/resumes/matching/jobad/evidence/ | Match Resumes Evidence
*JobAdToResumesApi* | [**matchResumesFromIndexedJobadPOST**](docs/Api/JobAdToResumesApi.md#matchresumesfromindexedjobadpost) | **POST** /hr/v2/index/{indexname}/resumes/matching/jobad/{jobad_id}/ | Match Resumes from indexed JobAd
*JobAdToResumesApi* | [**matchResumesPOST**](docs/Api/JobAdToResumesApi.md#matchresumespost) | **POST** /hr/v2/index/{indexname}/resumes/matching/jobad/ | Match Resumes
*KeywordsSearchApi* | [**keywordsAutocompleteGET**](docs/Api/KeywordsSearchApi.md#keywordsautocompleteget) | **GET** /hr/v2/keywords/search/autocomplete/ | Keywords Autocomplete
*KeywordsSearchApi* | [**similarWordsInResumePOST**](docs/Api/KeywordsSearchApi.md#similarwordsinresumepost) | **POST** /hr/v2/index/{indexname}/resume/{resume_id}/keywords/search/semantic/ | Similar Words in Resume
*KeywordsSearchApi* | [**similarWordsPOST**](docs/Api/KeywordsSearchApi.md#similarwordspost) | **POST** /hr/v2/keywords/search/semantic/ | Similar Words
*MappingCareerCausewaysApi* | [**careerRecommendationPOST**](docs/Api/MappingCareerCausewaysApi.md#careerrecommendationpost) | **POST** /hr/v2/resume/career/occupation/recommendation/ | Career Recommendation
*MappingCareerCausewaysApi* | [**occupationActivitiesComparisonPOST**](docs/Api/MappingCareerCausewaysApi.md#occupationactivitiescomparisonpost) | **POST** /hr/v2/resume/career/occupation/activities/comparison/ | Occupation Activities Comparison
*MappingCareerCausewaysApi* | [**occupationSkillComparisonPOST**](docs/Api/MappingCareerCausewaysApi.md#occupationskillcomparisonpost) | **POST** /hr/v2/resume/career/occupation/skills/comparison/ | Occupation Skill Comparison
*MappingCareerCausewaysApi* | [**upskillingSimulatorPOST**](docs/Api/MappingCareerCausewaysApi.md#upskillingsimulatorpost) | **POST** /hr/v2/resume/career/simulator/upskilling/ | Upskilling simulator
*OccupationsApi* | [**similarJobtitlesGET**](docs/Api/OccupationsApi.md#similarjobtitlesget) | **GET** /hr/v2/occupations/similar/semantic/ | Similar JobTitles
*ResumeImportApi* | [**awsImportPOST**](docs/Api/ResumeImportApi.md#awsimportpost) | **POST** /hr/v2/index/{indexname}/resumes/import/aws/ | Aws Import
*ResumeImportApi* | [**importStatusGET**](docs/Api/ResumeImportApi.md#importstatusget) | **GET** /hr/v2/index/{indexname}/resumes/import/aws/status/ | Import Status
*ResumeManagementApi* | [**addResumePOST**](docs/Api/ResumeManagementApi.md#addresumepost) | **POST** /hr/v2/index/{indexname}/resume/ | Add Resume
*ResumeManagementApi* | [**deletePicDELETE**](docs/Api/ResumeManagementApi.md#deletepicdelete) | **DELETE** /hr/v2/index/{indexname}/resume/{resume_id}/pic/ | Delete Pic
*ResumeManagementApi* | [**deleteResumeDELETE**](docs/Api/ResumeManagementApi.md#deleteresumedelete) | **DELETE** /hr/v2/index/{indexname}/resume/{resume_id}/ | Delete Resume
*ResumeManagementApi* | [**getCvGET**](docs/Api/ResumeManagementApi.md#getcvget) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/document/ | Get CV
*ResumeManagementApi* | [**getCvTextGET**](docs/Api/ResumeManagementApi.md#getcvtextget) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/text/ | Get CV Text
*ResumeManagementApi* | [**getPicGET**](docs/Api/ResumeManagementApi.md#getpicget) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/pic/ | Get Pic
*ResumeManagementApi* | [**getResumeGET**](docs/Api/ResumeManagementApi.md#getresumeget) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/ | Get Resume
*ResumeManagementApi* | [**patchResumePATCH**](docs/Api/ResumeManagementApi.md#patchresumepatch) | **PATCH** /hr/v2/index/{indexname}/resume/{resume_id}/ | Patch Resume
*ResumeManagementApi* | [**resumeStatusGET**](docs/Api/ResumeManagementApi.md#resumestatusget) | **GET** /hr/v2/index/{indexname}/resume/{resume_id}/status/ | Resume Status
*ResumeManagementApi* | [**updatePicPUT**](docs/Api/ResumeManagementApi.md#updatepicput) | **PUT** /hr/v2/index/{indexname}/resume/{resume_id}/pic/ | Update Pic
*ResumeManagementApi* | [**updateResumePUT**](docs/Api/ResumeManagementApi.md#updateresumeput) | **PUT** /hr/v2/index/{indexname}/resume/{resume_id}/ | Update Resume
*ResumeParsingApi* | [**anonymizeCvPOST**](docs/Api/ResumeParsingApi.md#anonymizecvpost) | **POST** /hr/v2/parse/resume/anonymize/ | Anonymize CV
*ResumeParsingApi* | [**bulkMapEntityPOST**](docs/Api/ResumeParsingApi.md#bulkmapentitypost) | **POST** /hr/v2/keywords/bulk/map/entity/ | Bulk Map Entity
*ResumeParsingApi* | [**mapEntityPOST**](docs/Api/ResumeParsingApi.md#mapentitypost) | **POST** /hr/v2/keywords/map/entity/ | Map Entity
*ResumeParsingApi* | [**parseResumePOST**](docs/Api/ResumeParsingApi.md#parseresumepost) | **POST** /hr/v2/parse/resume/data/ | Parse Resume
*ResumeParsingApi* | [**textExtractionPOST**](docs/Api/ResumeParsingApi.md#textextractionpost) | **POST** /hr/v2/parse/resume/text/ | Text Extraction
*ResumeSearchApi* | [**fullTextSearchOnResumesPOST**](docs/Api/ResumeSearchApi.md#fulltextsearchonresumespost) | **POST** /hr/v2/index/{indexname}/resumes/search/full-text/ | Full-Text Search on Resumes
*ResumeSearchApi* | [**searchApplicantsPOST**](docs/Api/ResumeSearchApi.md#searchapplicantspost) | **POST** /hr/v2/index/{indexname}/jobad/{jobad_id}/applications/resumes/search/ | Search Applicants
*ResumeSearchApi* | [**searchResumesEvidencePOST**](docs/Api/ResumeSearchApi.md#searchresumesevidencepost) | **POST** /hr/v2/index/{indexname}/resumes/search/semantic/evidence/ | Search Resumes Evidence
*ResumeSearchApi* | [**searchResumesPOST**](docs/Api/ResumeSearchApi.md#searchresumespost) | **POST** /hr/v2/index/{indexname}/resumes/search/semantic/ | Search Resumes
*ResumeToJobAdsApi* | [**matchJobadsEvidenceFromIndexedResumePOST**](docs/Api/ResumeToJobAdsApi.md#matchjobadsevidencefromindexedresumepost) | **POST** /hr/v2/index/{indexname}/jobads/matching/resume/{resume_id}/evidence/ | Match JobAds Evidence from indexed Resume
*ResumeToJobAdsApi* | [**matchJobadsEvidencePOST**](docs/Api/ResumeToJobAdsApi.md#matchjobadsevidencepost) | **POST** /hr/v2/index/{indexname}/jobads/matching/resume/evidence/ | Match JobAds Evidence
*ResumeToJobAdsApi* | [**matchJobadsFromIndexedResumePOST**](docs/Api/ResumeToJobAdsApi.md#matchjobadsfromindexedresumepost) | **POST** /hr/v2/index/{indexname}/jobads/matching/resume/{resume_id}/ | Match JobAds from indexed Resume
*ResumeToJobAdsApi* | [**matchJobadsPOST**](docs/Api/ResumeToJobAdsApi.md#matchjobadspost) | **POST** /hr/v2/index/{indexname}/jobads/matching/resume/ | Match JobAds
*ResumeToResumesApi* | [**similarResumesPOST**](docs/Api/ResumeToResumesApi.md#similarresumespost) | **POST** /hr/v2/index/{indexname}/resumes/matching/resume/{resume_id}/ | Similar Resumes
*SkillsApi* | [**similarSkillsGET**](docs/Api/SkillsApi.md#similarskillsget) | **GET** /hr/v2/skills/similar/semantic/ | Similar Skills
*SkillsApi* | [**skillsClassificationPOST**](docs/Api/SkillsApi.md#skillsclassificationpost) | **POST** /hr/v2/skills/classification/ | Skills Classification
*StandardizedDataApi* | [**getCompanySizeGET**](docs/Api/StandardizedDataApi.md#getcompanysizeget) | **GET** /hr/v2/data/company/size/ | Get Company Size
*StandardizedDataApi* | [**getCompanyTypeGET**](docs/Api/StandardizedDataApi.md#getcompanytypeget) | **GET** /hr/v2/data/company/type/ | Get Company Type
*StandardizedDataApi* | [**getContractTypeGET**](docs/Api/StandardizedDataApi.md#getcontracttypeget) | **GET** /hr/v2/data/contract/type/ | Get Contract Type
*StandardizedDataApi* | [**getDisabilityGET**](docs/Api/StandardizedDataApi.md#getdisabilityget) | **GET** /hr/v2/data/disability/ | Get Disability
*StandardizedDataApi* | [**getEducationTitleGET**](docs/Api/StandardizedDataApi.md#geteducationtitleget) | **GET** /hr/v2/data/education/title/ | Get Education Title
*StandardizedDataApi* | [**getEmailLabelGET**](docs/Api/StandardizedDataApi.md#getemaillabelget) | **GET** /hr/v2/data/email/label/ | Get Email Label
*StandardizedDataApi* | [**getEmploymentTypeGET**](docs/Api/StandardizedDataApi.md#getemploymenttypeget) | **GET** /hr/v2/data/employment/type/ | Get Employment Type
*StandardizedDataApi* | [**getFieldOfStudyGET**](docs/Api/StandardizedDataApi.md#getfieldofstudyget) | **GET** /hr/v2/data/education/field-of-study/ | Get Field Of Study
*StandardizedDataApi* | [**getGenderGET**](docs/Api/StandardizedDataApi.md#getgenderget) | **GET** /hr/v2/data/gender/ | Get Gender
*StandardizedDataApi* | [**getIndustriesGET**](docs/Api/StandardizedDataApi.md#getindustriesget) | **GET** /hr/v2/data/industries/ | Get Industries
*StandardizedDataApi* | [**getJobFunctionGET**](docs/Api/StandardizedDataApi.md#getjobfunctionget) | **GET** /hr/v2/data/job/function/ | Get Job Function
*StandardizedDataApi* | [**getJobshiftTypeGET**](docs/Api/StandardizedDataApi.md#getjobshifttypeget) | **GET** /hr/v2/data/jobshift/type/ | Get Jobshift Type
*StandardizedDataApi* | [**getLicenseCodeGET**](docs/Api/StandardizedDataApi.md#getlicensecodeget) | **GET** /hr/v2/data/license/type/{license_type}/code/ | Get License Code
*StandardizedDataApi* | [**getLicenseTypeGET**](docs/Api/StandardizedDataApi.md#getlicensetypeget) | **GET** /hr/v2/data/license/type/ | Get License Type
*StandardizedDataApi* | [**getLinkLabelGET**](docs/Api/StandardizedDataApi.md#getlinklabelget) | **GET** /hr/v2/data/link/label/ | Get Link Label
*StandardizedDataApi* | [**getMaritalStatusGET**](docs/Api/StandardizedDataApi.md#getmaritalstatusget) | **GET** /hr/v2/data/marital-status/ | Get Marital Status
*StandardizedDataApi* | [**getNamePrefixGET**](docs/Api/StandardizedDataApi.md#getnameprefixget) | **GET** /hr/v2/data/name/prefix/ | Get Name Prefix
*StandardizedDataApi* | [**getNameSuffixGET**](docs/Api/StandardizedDataApi.md#getnamesuffixget) | **GET** /hr/v2/data/name/suffix/ | Get Name Suffix
*StandardizedDataApi* | [**getPatentStatusGET**](docs/Api/StandardizedDataApi.md#getpatentstatusget) | **GET** /hr/v2/data/patent/status/ | Get Patent Status
*StandardizedDataApi* | [**getPhoneLabelGET**](docs/Api/StandardizedDataApi.md#getphonelabelget) | **GET** /hr/v2/data/phone/label/ | Get Phone Label
*StandardizedDataApi* | [**getProtectedGroupGET**](docs/Api/StandardizedDataApi.md#getprotectedgroupget) | **GET** /hr/v2/data/protected-group/ | Get Protected Group
*StandardizedDataApi* | [**getRemoteWorkingGET**](docs/Api/StandardizedDataApi.md#getremoteworkingget) | **GET** /hr/v2/data/employment/remote-working/ | Get Remote Working
*StandardizedDataApi* | [**getSalaryFrequencyGET**](docs/Api/StandardizedDataApi.md#getsalaryfrequencyget) | **GET** /hr/v2/data/salary/frequency/ | Get Salary Frequency
*StandardizedDataApi* | [**getSalaryTypeGET**](docs/Api/StandardizedDataApi.md#getsalarytypeget) | **GET** /hr/v2/data/salary/type/ | Get Salary Type
*StandardizedDataApi* | [**getSeniorityLevelGET**](docs/Api/StandardizedDataApi.md#getsenioritylevelget) | **GET** /hr/v2/data/seniority/level/ | Get Seniority Level
*StartingWithIndicesApi* | [**mostRecentResumesGET**](docs/Api/StartingWithIndicesApi.md#mostrecentresumesget) | **GET** /hr/v2/index/{indexname}/resumes/latest/ | Most Recent Resumes
*StartingWithIndicesApi* | [**statsIndexGET**](docs/Api/StartingWithIndicesApi.md#statsindexget) | **GET** /hr/v2/index/{indexname}/stats/ | Stats Index
*UniversitiesApi* | [**getUniversityGET**](docs/Api/UniversitiesApi.md#getuniversityget) | **GET** /hr/v2/university/{university_id}/ | Get University
*UniversitiesApi* | [**universityAutocompleteGET**](docs/Api/UniversitiesApi.md#universityautocompleteget) | **GET** /hr/v2/university/name/search/autocomplete/ | University Autocomplete
*UtilitiesApi* | [**clearIndexCacheDELETE**](docs/Api/UtilitiesApi.md#clearindexcachedelete) | **DELETE** /hr/v2/index/{indexname}/cache/ | Clear Index Cache
*UtilitiesApi* | [**healthStatusGET**](docs/Api/UtilitiesApi.md#healthstatusget) | **GET** /hr/v2/ | Health Status

## Models

- [Achievement](docs/Model/Achievement.md)
- [Activity](docs/Model/Activity.md)
- [ActivityComparison](docs/Model/ActivityComparison.md)
- [Age](docs/Model/Age.md)
- [AllowedOutput](docs/Model/AllowedOutput.md)
- [ApplicationCommonData](docs/Model/ApplicationCommonData.md)
- [ApplicationCommonOptionalData](docs/Model/ApplicationCommonOptionalData.md)
- [ApplicationID](docs/Model/ApplicationID.md)
- [ApplicationIDResponse](docs/Model/ApplicationIDResponse.md)
- [ApplicationResponsesStatus](docs/Model/ApplicationResponsesStatus.md)
- [ApplicationStatusRequest](docs/Model/ApplicationStatusRequest.md)
- [ApplyItemRequest](docs/Model/ApplyItemRequest.md)
- [Asset](docs/Model/Asset.md)
- [AutocompleteResponse](docs/Model/AutocompleteResponse.md)
- [Award](docs/Model/Award.md)
- [AwsCredentials](docs/Model/AwsCredentials.md)
- [BaseApplicationRequest](docs/Model/BaseApplicationRequest.md)
- [BaseCandidateSearchQuery](docs/Model/BaseCandidateSearchQuery.md)
- [BaseDetails](docs/Model/BaseDetails.md)
- [BaseDuration](docs/Model/BaseDuration.md)
- [BaseEmploymentsIndustry](docs/Model/BaseEmploymentsIndustry.md)
- [BaseEmploymentsValueModelStrictStr](docs/Model/BaseEmploymentsValueModelStrictStr.md)
- [BaseFile](docs/Model/BaseFile.md)
- [BaseFileDoc](docs/Model/BaseFileDoc.md)
- [BaseItemIdResponse](docs/Model/BaseItemIdResponse.md)
- [BaseJobAdSearchQuery](docs/Model/BaseJobAdSearchQuery.md)
- [BaseJobPreferencesRangeFloat](docs/Model/BaseJobPreferencesRangeFloat.md)
- [BaseJobPreferencesValueModelFloat](docs/Model/BaseJobPreferencesValueModelFloat.md)
- [BaseJobadMatchingEvidenceQuery](docs/Model/BaseJobadMatchingEvidenceQuery.md)
- [BaseJobadMatchingQuery](docs/Model/BaseJobadMatchingQuery.md)
- [BaseLocationsLocation](docs/Model/BaseLocationsLocation.md)
- [BaseLocationsValueModelStrictStr](docs/Model/BaseLocationsValueModelStrictStr.md)
- [BaseModelsErrorModel](docs/Model/BaseModelsErrorModel.md)
- [BaseModelsName](docs/Model/BaseModelsName.md)
- [BasePhoneNumbersValueModelStrictStr](docs/Model/BasePhoneNumbersValueModelStrictStr.md)
- [BaseResponse](docs/Model/BaseResponse.md)
- [BaseResumeMatchingEvidenceQuery](docs/Model/BaseResumeMatchingEvidenceQuery.md)
- [BaseResumeMatchingQuery](docs/Model/BaseResumeMatchingQuery.md)
- [BaseSalariesRangeFloat](docs/Model/BaseSalariesRangeFloat.md)
- [BaseSalariesType](docs/Model/BaseSalariesType.md)
- [BaseSalariesValueModelFloat](docs/Model/BaseSalariesValueModelFloat.md)
- [BaseSeniority](docs/Model/BaseSeniority.md)
- [BinaryItemResponse](docs/Model/BinaryItemResponse.md)
- [BinaryPicResponse](docs/Model/BinaryPicResponse.md)
- [BoolBaseModel](docs/Model/BoolBaseModel.md)
- [Branch](docs/Model/Branch.md)
- [BroaderLevelJobtitle](docs/Model/BroaderLevelJobtitle.md)
- [BroaderLevelSkill](docs/Model/BroaderLevelSkill.md)
- [BucketItem](docs/Model/BucketItem.md)
- [CEFRLevels](docs/Model/CEFRLevels.md)
- [CVAttachmentDocument](docs/Model/CVAttachmentDocument.md)
- [CacheDeletion](docs/Model/CacheDeletion.md)
- [CandidateSearchQuery](docs/Model/CandidateSearchQuery.md)
- [CareerTransitionRequest](docs/Model/CareerTransitionRequest.md)
- [Certification](docs/Model/Certification.md)
- [Check](docs/Model/Check.md)
- [Citizenship](docs/Model/Citizenship.md)
- [ClassificationMappingEscoResponse](docs/Model/ClassificationMappingEscoResponse.md)
- [ClassificationMappingIscoResponse](docs/Model/ClassificationMappingIscoResponse.md)
- [ClassificationMappingIstatResponse](docs/Model/ClassificationMappingIstatResponse.md)
- [ClassificationMappingOnetResponse](docs/Model/ClassificationMappingOnetResponse.md)
- [CompanyAutocomplete](docs/Model/CompanyAutocomplete.md)
- [CompanyAutocompleteResponse](docs/Model/CompanyAutocompleteResponse.md)
- [CompanyCommonData](docs/Model/CompanyCommonData.md)
- [CompanyCommonIndustry](docs/Model/CompanyCommonIndustry.md)
- [CompanyCommonLocation](docs/Model/CompanyCommonLocation.md)
- [CompanyCommonOptionalData](docs/Model/CompanyCommonOptionalData.md)
- [CompanyCommonType](docs/Model/CompanyCommonType.md)
- [CompanyIDResponse](docs/Model/CompanyIDResponse.md)
- [CompanyRequest](docs/Model/CompanyRequest.md)
- [ContractType](docs/Model/ContractType.md)
- [CountStats](docs/Model/CountStats.md)
- [Currency](docs/Model/Currency.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFields](docs/Model/CustomFields.md)
- [CustomizedFields](docs/Model/CustomizedFields.md)
- [Date](docs/Model/Date.md)
- [DateBody](docs/Model/DateBody.md)
- [Degrees](docs/Model/Degrees.md)
- [DeleteApplicationResponse](docs/Model/DeleteApplicationResponse.md)
- [DeleteApplicationsResponse](docs/Model/DeleteApplicationsResponse.md)
- [DeleteCandidatesResponse](docs/Model/DeleteCandidatesResponse.md)
- [DeleteItemResponse](docs/Model/DeleteItemResponse.md)
- [DeleteJobAdResponse](docs/Model/DeleteJobAdResponse.md)
- [Description](docs/Model/Description.md)
- [DescriptionInput](docs/Model/DescriptionInput.md)
- [Disability](docs/Model/Disability.md)
- [DisabilityLevelCode](docs/Model/DisabilityLevelCode.md)
- [DocsBucketItem](docs/Model/DocsBucketItem.md)
- [DocsImportAttachments](docs/Model/DocsImportAttachments.md)
- [DocsImportItemRequest](docs/Model/DocsImportItemRequest.md)
- [DocsImportResume](docs/Model/DocsImportResume.md)
- [DocsSearchQuery](docs/Model/DocsSearchQuery.md)
- [DocumentAnonymizationResponse](docs/Model/DocumentAnonymizationResponse.md)
- [DocumentTextResponse](docs/Model/DocumentTextResponse.md)
- [DrivingLicenseTypeCode](docs/Model/DrivingLicenseTypeCode.md)
- [DurationRange](docs/Model/DurationRange.md)
- [DurationValue](docs/Model/DurationValue.md)
- [DurationValueRange](docs/Model/DurationValueRange.md)
- [ESCOOccupationValue](docs/Model/ESCOOccupationValue.md)
- [Education](docs/Model/Education.md)
- [EducationExperience](docs/Model/EducationExperience.md)
- [EducationExperiencesSummary](docs/Model/EducationExperiencesSummary.md)
- [EducationLevelCodeValue](docs/Model/EducationLevelCodeValue.md)
- [EducationTitle](docs/Model/EducationTitle.md)
- [EmploymentType](docs/Model/EmploymentType.md)
- [EntityBaseDetails](docs/Model/EntityBaseDetails.md)
- [EntityInput](docs/Model/EntityInput.md)
- [EntityMapping](docs/Model/EntityMapping.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [EscoCommonSkill](docs/Model/EscoCommonSkill.md)
- [EscoJobtitleResponse](docs/Model/EscoJobtitleResponse.md)
- [EscoMapping](docs/Model/EscoMapping.md)
- [EscoSkillResponse](docs/Model/EscoSkillResponse.md)
- [Event](docs/Model/Event.md)
- [EvidenceRequest](docs/Model/EvidenceRequest.md)
- [Experience](docs/Model/Experience.md)
- [ExtendedStandardDataItem](docs/Model/ExtendedStandardDataItem.md)
- [ExtractionItem](docs/Model/ExtractionItem.md)
- [ExtractionResponsesAttachments](docs/Model/ExtractionResponsesAttachments.md)
- [FeedbackAttachments](docs/Model/FeedbackAttachments.md)
- [FeedbackBaseItem](docs/Model/FeedbackBaseItem.md)
- [FeedbackData](docs/Model/FeedbackData.md)
- [FeedbackEducationExperience](docs/Model/FeedbackEducationExperience.md)
- [FeedbackEducationTitle](docs/Model/FeedbackEducationTitle.md)
- [FeedbackEntityInput](docs/Model/FeedbackEntityInput.md)
- [FeedbackExtractionItem](docs/Model/FeedbackExtractionItem.md)
- [FeedbackFieldOfStudy](docs/Model/FeedbackFieldOfStudy.md)
- [FeedbackInfoItem](docs/Model/FeedbackInfoItem.md)
- [FeedbackJobTitle](docs/Model/FeedbackJobTitle.md)
- [FeedbackLanguage](docs/Model/FeedbackLanguage.md)
- [FeedbackOrganization](docs/Model/FeedbackOrganization.md)
- [FeedbackOrganizationName](docs/Model/FeedbackOrganizationName.md)
- [FeedbackResponse](docs/Model/FeedbackResponse.md)
- [FeedbackWorkExperience](docs/Model/FeedbackWorkExperience.md)
- [File](docs/Model/File.md)
- [FileItemRequest](docs/Model/FileItemRequest.md)
- [FilterField](docs/Model/FilterField.md)
- [FinalGrade](docs/Model/FinalGrade.md)
- [FinalGradeValue](docs/Model/FinalGradeValue.md)
- [FoundCandidatesResponse](docs/Model/FoundCandidatesResponse.md)
- [FoundDocsResponse](docs/Model/FoundDocsResponse.md)
- [FoundJobAdsResponse](docs/Model/FoundJobAdsResponse.md)
- [FoundationYear](docs/Model/FoundationYear.md)
- [Frequency](docs/Model/Frequency.md)
- [Gender](docs/Model/Gender.md)
- [GeoCoordinates](docs/Model/GeoCoordinates.md)
- [GeoLocation](docs/Model/GeoLocation.md)
- [GetApplicationResponse](docs/Model/GetApplicationResponse.md)
- [GetApplicationsResponse](docs/Model/GetApplicationsResponse.md)
- [GetCandidatesResponse](docs/Model/GetCandidatesResponse.md)
- [GetCompanyResponse](docs/Model/GetCompanyResponse.md)
- [GetExtendedStandardDataResponse](docs/Model/GetExtendedStandardDataResponse.md)
- [GetItemResponse](docs/Model/GetItemResponse.md)
- [GetJobAdResponse](docs/Model/GetJobAdResponse.md)
- [GetJobAdsResponse](docs/Model/GetJobAdsResponse.md)
- [GetStandardDataResponse](docs/Model/GetStandardDataResponse.md)
- [GetUniversityResponse](docs/Model/GetUniversityResponse.md)
- [GroupByAdvanced](docs/Model/GroupByAdvanced.md)
- [GroupByAdvancedAPICalls](docs/Model/GroupByAdvancedAPICalls.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [Headquarter](docs/Model/Headquarter.md)
- [HighestEducationTitle](docs/Model/HighestEducationTitle.md)
- [HiringDetails](docs/Model/HiringDetails.md)
- [HiringPipelineStage](docs/Model/HiringPipelineStage.md)
- [HistoryDetail](docs/Model/HistoryDetail.md)
- [ID](docs/Model/ID.md)
- [IdEntityErrors](docs/Model/IdEntityErrors.md)
- [IdEntityInput](docs/Model/IdEntityInput.md)
- [IdEntityMapping](docs/Model/IdEntityMapping.md)
- [Image](docs/Model/Image.md)
- [ImageMetadata](docs/Model/ImageMetadata.md)
- [ImportErrorResponse](docs/Model/ImportErrorResponse.md)
- [ImportItemRequest](docs/Model/ImportItemRequest.md)
- [ImportItemResponse](docs/Model/ImportItemResponse.md)
- [ImportResponse](docs/Model/ImportResponse.md)
- [ImportStatus](docs/Model/ImportStatus.md)
- [IndexCacheDeletionResponse](docs/Model/IndexCacheDeletionResponse.md)
- [IndexCreditsInfo](docs/Model/IndexCreditsInfo.md)
- [IndexedDocumentFailure](docs/Model/IndexedDocumentFailure.md)
- [IndexedDocumentFailuresResponse](docs/Model/IndexedDocumentFailuresResponse.md)
- [Industries](docs/Model/Industries.md)
- [IndustryDetails](docs/Model/IndustryDetails.md)
- [IscoMapping](docs/Model/IscoMapping.md)
- [IstatMapping](docs/Model/IstatMapping.md)
- [ItemIdResponse](docs/Model/ItemIdResponse.md)
- [JobAdBenefit](docs/Model/JobAdBenefit.md)
- [JobAdContract](docs/Model/JobAdContract.md)
- [JobAdEntitiesInput](docs/Model/JobAdEntitiesInput.md)
- [JobAdFullTextSearch](docs/Model/JobAdFullTextSearch.md)
- [JobAdIDResponse](docs/Model/JobAdIDResponse.md)
- [JobAdJobTitle](docs/Model/JobAdJobTitle.md)
- [JobAdJobTitleDetails](docs/Model/JobAdJobTitleDetails.md)
- [JobAdJobTitlesResponse](docs/Model/JobAdJobTitlesResponse.md)
- [JobAdLanguage](docs/Model/JobAdLanguage.md)
- [JobAdLanguageDetails](docs/Model/JobAdLanguageDetails.md)
- [JobAdMatchingData](docs/Model/JobAdMatchingData.md)
- [JobAdRemoteWorking](docs/Model/JobAdRemoteWorking.md)
- [JobAdRemoteWorkingType](docs/Model/JobAdRemoteWorkingType.md)
- [JobAdRequest](docs/Model/JobAdRequest.md)
- [JobAdSalary](docs/Model/JobAdSalary.md)
- [JobAdSearchQuery](docs/Model/JobAdSearchQuery.md)
- [JobAdSkill](docs/Model/JobAdSkill.md)
- [JobAdSkillDetails](docs/Model/JobAdSkillDetails.md)
- [JobAdSkillsResponse](docs/Model/JobAdSkillsResponse.md)
- [JobDescription](docs/Model/JobDescription.md)
- [JobShift](docs/Model/JobShift.md)
- [JobShiftType](docs/Model/JobShiftType.md)
- [JobTitleEmployment](docs/Model/JobTitleEmployment.md)
- [JobTitleHeader](docs/Model/JobTitleHeader.md)
- [JobTitleHeaderDetails](docs/Model/JobTitleHeaderDetails.md)
- [JobadCommonData](docs/Model/JobadCommonData.md)
- [JobadCommonMinimalData](docs/Model/JobadCommonMinimalData.md)
- [JobadCommonOptionalData](docs/Model/JobadCommonOptionalData.md)
- [JobadCommonPublicMetadata](docs/Model/JobadCommonPublicMetadata.md)
- [JobadContactInfoContactInfo](docs/Model/JobadContactInfoContactInfo.md)
- [JobadContactInfoName](docs/Model/JobadContactInfoName.md)
- [JobadContactInfoPersonName](docs/Model/JobadContactInfoPersonName.md)
- [JobadContactInfoPrefix](docs/Model/JobadContactInfoPrefix.md)
- [JobadContactInfoSuffix](docs/Model/JobadContactInfoSuffix.md)
- [JobadEducationEducationLevelCode](docs/Model/JobadEducationEducationLevelCode.md)
- [JobadEmailAddressAddress](docs/Model/JobadEmailAddressAddress.md)
- [JobadEmailAddressEmailAddress](docs/Model/JobadEmailAddressEmailAddress.md)
- [JobadEmailAddressEmailLabel](docs/Model/JobadEmailAddressEmailLabel.md)
- [JobadLinkLink](docs/Model/JobadLinkLink.md)
- [JobadLinkLinkLabel](docs/Model/JobadLinkLinkLabel.md)
- [JobadLinkURL](docs/Model/JobadLinkURL.md)
- [JobadMatchingEvidenceQuery](docs/Model/JobadMatchingEvidenceQuery.md)
- [JobadMatchingQuery](docs/Model/JobadMatchingQuery.md)
- [JobadPhoneNumbersNumber](docs/Model/JobadPhoneNumbersNumber.md)
- [JobadPhoneNumbersPhoneLabel](docs/Model/JobadPhoneNumbersPhoneLabel.md)
- [JobadPhoneNumbersPhoneNumber](docs/Model/JobadPhoneNumbersPhoneNumber.md)
- [JobadRequestsMetadata](docs/Model/JobadRequestsMetadata.md)
- [JobadRequestsSimpleTerm](docs/Model/JobadRequestsSimpleTerm.md)
- [JobadSectionsValueModelStrictStr](docs/Model/JobadSectionsValueModelStrictStr.md)
- [Jobfunctions](docs/Model/Jobfunctions.md)
- [Jobtitle](docs/Model/Jobtitle.md)
- [JobtitleDetail](docs/Model/JobtitleDetail.md)
- [Keyword](docs/Model/Keyword.md)
- [KeywordsOut](docs/Model/KeywordsOut.md)
- [KeywordsResponse](docs/Model/KeywordsResponse.md)
- [License](docs/Model/License.md)
- [LicenseType](docs/Model/LicenseType.md)
- [LoginData](docs/Model/LoginData.md)
- [MappingResponse](docs/Model/MappingResponse.md)
- [MaritalStatus](docs/Model/MaritalStatus.md)
- [MatchEvidenceEducation](docs/Model/MatchEvidenceEducation.md)
- [MatchEvidenceExperience](docs/Model/MatchEvidenceExperience.md)
- [MatchEvidenceTerm](docs/Model/MatchEvidenceTerm.md)
- [MatchEvidenceTerms](docs/Model/MatchEvidenceTerms.md)
- [MatchJobAdEvidenceElement](docs/Model/MatchJobAdEvidenceElement.md)
- [MatchJobAdEvidenceResponse](docs/Model/MatchJobAdEvidenceResponse.md)
- [MatchResumeEvidenceElement](docs/Model/MatchResumeEvidenceElement.md)
- [MatchResumeEvidenceResponse](docs/Model/MatchResumeEvidenceResponse.md)
- [MatchingDocumentAttachment](docs/Model/MatchingDocumentAttachment.md)
- [MatchingEducation](docs/Model/MatchingEducation.md)
- [MatchingExperience](docs/Model/MatchingExperience.md)
- [MatchingJobAdDocument](docs/Model/MatchingJobAdDocument.md)
- [MatchingJobadMatchingPublicMetadata](docs/Model/MatchingJobadMatchingPublicMetadata.md)
- [MatchingResumeDocument](docs/Model/MatchingResumeDocument.md)
- [MatchingResumeMatchingPublicMetadata](docs/Model/MatchingResumeMatchingPublicMetadata.md)
- [MilitaryService](docs/Model/MilitaryService.md)
- [MinimalPublicAttachments](docs/Model/MinimalPublicAttachments.md)
- [MongoDBGeoLocation](docs/Model/MongoDBGeoLocation.md)
- [MostRecentItem](docs/Model/MostRecentItem.md)
- [MostRecentResponse](docs/Model/MostRecentResponse.md)
- [MostSimilarJobtitleResponseCategorized](docs/Model/MostSimilarJobtitleResponseCategorized.md)
- [MostSimilarSkillResponseCategorized](docs/Model/MostSimilarSkillResponseCategorized.md)
- [MultiEntityInput](docs/Model/MultiEntityInput.md)
- [MultiEntityMapping](docs/Model/MultiEntityMapping.md)
- [Nationality](docs/Model/Nationality.md)
- [NumberOfChildren](docs/Model/NumberOfChildren.md)
- [OccupationHierarchy](docs/Model/OccupationHierarchy.md)
- [OccupationSkillsComparisonRequest](docs/Model/OccupationSkillsComparisonRequest.md)
- [OccupationsSkillsComparison](docs/Model/OccupationsSkillsComparison.md)
- [OnetMapping](docs/Model/OnetMapping.md)
- [Ongoing](docs/Model/Ongoing.md)
- [OptionalAcademicCounseling](docs/Model/OptionalAcademicCounseling.md)
- [OptionalAcademicCounselingDetails](docs/Model/OptionalAcademicCounselingDetails.md)
- [OptionalAccreditations](docs/Model/OptionalAccreditations.md)
- [OptionalAccreditationsDetails](docs/Model/OptionalAccreditationsDetails.md)
- [OptionalAdmissionOffice](docs/Model/OptionalAdmissionOffice.md)
- [OptionalAdmissionOfficeDetails](docs/Model/OptionalAdmissionOfficeDetails.md)
- [OptionalAdmissions](docs/Model/OptionalAdmissions.md)
- [OptionalCVAttachmentSlimDocument](docs/Model/OptionalCVAttachmentSlimDocument.md)
- [OptionalCareerServices](docs/Model/OptionalCareerServices.md)
- [OptionalCareerServicesDetails](docs/Model/OptionalCareerServicesDetails.md)
- [OptionalCarnegieClassification](docs/Model/OptionalCarnegieClassification.md)
- [OptionalDistanceLearning](docs/Model/OptionalDistanceLearning.md)
- [OptionalDistanceLearningDetails](docs/Model/OptionalDistanceLearningDetails.md)
- [OptionalEscoJobtitleMatchCategorized](docs/Model/OptionalEscoJobtitleMatchCategorized.md)
- [OptionalEscoMatchDetails](docs/Model/OptionalEscoMatchDetails.md)
- [OptionalEscoOccupationMatch](docs/Model/OptionalEscoOccupationMatch.md)
- [OptionalEscoOccupationSkill](docs/Model/OptionalEscoOccupationSkill.md)
- [OptionalEscoSkill](docs/Model/OptionalEscoSkill.md)
- [OptionalEscoSkillMatch](docs/Model/OptionalEscoSkillMatch.md)
- [OptionalEscoSkillMatchCategorized](docs/Model/OptionalEscoSkillMatchCategorized.md)
- [OptionalFacilitiesAndServices](docs/Model/OptionalFacilitiesAndServices.md)
- [OptionalFinancialAids](docs/Model/OptionalFinancialAids.md)
- [OptionalFinancialAidsDetails](docs/Model/OptionalFinancialAidsDetails.md)
- [OptionalFrequency](docs/Model/OptionalFrequency.md)
- [OptionalHousing](docs/Model/OptionalHousing.md)
- [OptionalHousingDetails](docs/Model/OptionalHousingDetails.md)
- [OptionalInstitutionalHospital](docs/Model/OptionalInstitutionalHospital.md)
- [OptionalInstitutionalHospitalDetails](docs/Model/OptionalInstitutionalHospitalDetails.md)
- [OptionalJobAdContract](docs/Model/OptionalJobAdContract.md)
- [OptionalJobAdJobTitle](docs/Model/OptionalJobAdJobTitle.md)
- [OptionalJobAdJobTitleDetails](docs/Model/OptionalJobAdJobTitleDetails.md)
- [OptionalJobAdSalary](docs/Model/OptionalJobAdSalary.md)
- [OptionalJobAdSkill](docs/Model/OptionalJobAdSkill.md)
- [OptionalJobAdSkillDetails](docs/Model/OptionalJobAdSkillDetails.md)
- [OptionalJobDescription](docs/Model/OptionalJobDescription.md)
- [OptionalJobShift](docs/Model/OptionalJobShift.md)
- [OptionalJobShiftType](docs/Model/OptionalJobShiftType.md)
- [OptionalLibrary](docs/Model/OptionalLibrary.md)
- [OptionalLibraryDetails](docs/Model/OptionalLibraryDetails.md)
- [OptionalLink](docs/Model/OptionalLink.md)
- [OptionalMetadata](docs/Model/OptionalMetadata.md)
- [OptionalPhoneNumber](docs/Model/OptionalPhoneNumber.md)
- [OptionalPublisher](docs/Model/OptionalPublisher.md)
- [OptionalRequiredAndPreferredConstrainedListValue](docs/Model/OptionalRequiredAndPreferredConstrainedListValue.md)
- [OptionalRequiredAndPreferredEducation](docs/Model/OptionalRequiredAndPreferredEducation.md)
- [OptionalRequiredAndPreferredListJobAdLanguage](docs/Model/OptionalRequiredAndPreferredListJobAdLanguage.md)
- [OptionalRequiredAndPreferredMatchEvidenceTerms](docs/Model/OptionalRequiredAndPreferredMatchEvidenceTerms.md)
- [OptionalRequiredAndPreferredSeniorityValue](docs/Model/OptionalRequiredAndPreferredSeniorityValue.md)
- [OptionalRequiredAndPreferredUnionDurationValueDurationRange](docs/Model/OptionalRequiredAndPreferredUnionDurationValueDurationRange.md)
- [OptionalResumeContract](docs/Model/OptionalResumeContract.md)
- [OptionalResumeSalary](docs/Model/OptionalResumeSalary.md)
- [OptionalSection](docs/Model/OptionalSection.md)
- [OptionalSizeAndProfile](docs/Model/OptionalSizeAndProfile.md)
- [OptionalSportFacilities](docs/Model/OptionalSportFacilities.md)
- [OptionalSportFacilitiesDetails](docs/Model/OptionalSportFacilitiesDetails.md)
- [OptionalStudyAbroad](docs/Model/OptionalStudyAbroad.md)
- [OptionalStudyAbroadDetails](docs/Model/OptionalStudyAbroadDetails.md)
- [OptionalTuition](docs/Model/OptionalTuition.md)
- [OptionalType](docs/Model/OptionalType.md)
- [Organization](docs/Model/Organization.md)
- [Other](docs/Model/Other.md)
- [Overview](docs/Model/Overview.md)
- [ParseResumeTextFile](docs/Model/ParseResumeTextFile.md)
- [PatchApplicationRequest](docs/Model/PatchApplicationRequest.md)
- [PatchApplicationResponse](docs/Model/PatchApplicationResponse.md)
- [PatchCompanyRequest](docs/Model/PatchCompanyRequest.md)
- [PatchCompanyResponse](docs/Model/PatchCompanyResponse.md)
- [PatchItemRequest](docs/Model/PatchItemRequest.md)
- [PatchItemResponse](docs/Model/PatchItemResponse.md)
- [PatchJobAdRequest](docs/Model/PatchJobAdRequest.md)
- [PatchJobAdResponse](docs/Model/PatchJobAdResponse.md)
- [Patent](docs/Model/Patent.md)
- [PatentStatus](docs/Model/PatentStatus.md)
- [PersonLocation](docs/Model/PersonLocation.md)
- [PersonalInfo](docs/Model/PersonalInfo.md)
- [PicAttachmentImage](docs/Model/PicAttachmentImage.md)
- [PreferredConstrainedListValue](docs/Model/PreferredConstrainedListValue.md)
- [PreferredDurationValue](docs/Model/PreferredDurationValue.md)
- [PreferredEducation](docs/Model/PreferredEducation.md)
- [PreferredEducationTitle](docs/Model/PreferredEducationTitle.md)
- [PreferredEducationTitleDetails](docs/Model/PreferredEducationTitleDetails.md)
- [ProficiencyLevelCode](docs/Model/ProficiencyLevelCode.md)
- [ProfileSummary](docs/Model/ProfileSummary.md)
- [Project](docs/Model/Project.md)
- [ProtectedGroup](docs/Model/ProtectedGroup.md)
- [PublicAttachments](docs/Model/PublicAttachments.md)
- [PublicMetadataModel](docs/Model/PublicMetadataModel.md)
- [Publication](docs/Model/Publication.md)
- [Publisher](docs/Model/Publisher.md)
- [QueryFilters](docs/Model/QueryFilters.md)
- [QueryTerm](docs/Model/QueryTerm.md)
- [RangeDatetime](docs/Model/RangeDatetime.md)
- [RangeModelDatetime](docs/Model/RangeModelDatetime.md)
- [RangeModelFloat](docs/Model/RangeModelFloat.md)
- [RangeModelInt](docs/Model/RangeModelInt.md)
- [Rank](docs/Model/Rank.md)
- [Reference](docs/Model/Reference.md)
- [RelatedCompany](docs/Model/RelatedCompany.md)
- [RelatedTerms](docs/Model/RelatedTerms.md)
- [Relation](docs/Model/Relation.md)
- [RelocationBoolBaseModel](docs/Model/RelocationBoolBaseModel.md)
- [RelocationPreferences](docs/Model/RelocationPreferences.md)
- [RemoteWorking](docs/Model/RemoteWorking.md)
- [RemoteWorkingFrequencyRange](docs/Model/RemoteWorkingFrequencyRange.md)
- [RemoteWorkingFrequencyValue](docs/Model/RemoteWorkingFrequencyValue.md)
- [RequiredAndPreferredConstrainedListValue](docs/Model/RequiredAndPreferredConstrainedListValue.md)
- [RequiredConstrainedListValue](docs/Model/RequiredConstrainedListValue.md)
- [RequiredDurationValue](docs/Model/RequiredDurationValue.md)
- [RequiredEducation](docs/Model/RequiredEducation.md)
- [RequiredEducationTitle](docs/Model/RequiredEducationTitle.md)
- [RequiredEducationTitleDetails](docs/Model/RequiredEducationTitleDetails.md)
- [ResumeAttachmentDocument](docs/Model/ResumeAttachmentDocument.md)
- [ResumeBenefit](docs/Model/ResumeBenefit.md)
- [ResumeCommonData](docs/Model/ResumeCommonData.md)
- [ResumeCommonMinimalData](docs/Model/ResumeCommonMinimalData.md)
- [ResumeCommonPublicMetadata](docs/Model/ResumeCommonPublicMetadata.md)
- [ResumeContactInfoContactInfo](docs/Model/ResumeContactInfoContactInfo.md)
- [ResumeContract](docs/Model/ResumeContract.md)
- [ResumeEducationExperiencesEducationLevelCode](docs/Model/ResumeEducationExperiencesEducationLevelCode.md)
- [ResumeEmailAddressAddress](docs/Model/ResumeEmailAddressAddress.md)
- [ResumeEmailAddressEmailAddress](docs/Model/ResumeEmailAddressEmailAddress.md)
- [ResumeEmailAddressEmailLabel](docs/Model/ResumeEmailAddressEmailLabel.md)
- [ResumeEmployment](docs/Model/ResumeEmployment.md)
- [ResumeJobTitle](docs/Model/ResumeJobTitle.md)
- [ResumeJobTitleDetails](docs/Model/ResumeJobTitleDetails.md)
- [ResumeLanguage](docs/Model/ResumeLanguage.md)
- [ResumeLanguageDetails](docs/Model/ResumeLanguageDetails.md)
- [ResumeLinkLink](docs/Model/ResumeLinkLink.md)
- [ResumeLinkLinkLabel](docs/Model/ResumeLinkLinkLabel.md)
- [ResumeLinkURL](docs/Model/ResumeLinkURL.md)
- [ResumeLocationsLocation](docs/Model/ResumeLocationsLocation.md)
- [ResumeMatchingEvidenceQuery](docs/Model/ResumeMatchingEvidenceQuery.md)
- [ResumeMatchingQuery](docs/Model/ResumeMatchingQuery.md)
- [ResumePersonNamePersonName](docs/Model/ResumePersonNamePersonName.md)
- [ResumePersonNamePrefix](docs/Model/ResumePersonNamePrefix.md)
- [ResumePersonNameSuffix](docs/Model/ResumePersonNameSuffix.md)
- [ResumePhoneNumbersNumber](docs/Model/ResumePhoneNumbersNumber.md)
- [ResumePhoneNumbersPhoneLabel](docs/Model/ResumePhoneNumbersPhoneLabel.md)
- [ResumePhoneNumbersPhoneNumber](docs/Model/ResumePhoneNumbersPhoneNumber.md)
- [ResumeRemoteWorkingFrequencyRange](docs/Model/ResumeRemoteWorkingFrequencyRange.md)
- [ResumeRemoteWorkingFrequencyValue](docs/Model/ResumeRemoteWorkingFrequencyValue.md)
- [ResumeRemoteWorkingType](docs/Model/ResumeRemoteWorkingType.md)
- [ResumeRequestsAttachments](docs/Model/ResumeRequestsAttachments.md)
- [ResumeRequestsDocument](docs/Model/ResumeRequestsDocument.md)
- [ResumeRequestsMetadata](docs/Model/ResumeRequestsMetadata.md)
- [ResumeResponsesStatus](docs/Model/ResumeResponsesStatus.md)
- [ResumeSalary](docs/Model/ResumeSalary.md)
- [ResumeSkill](docs/Model/ResumeSkill.md)
- [ResumeSkillDetails](docs/Model/ResumeSkillDetails.md)
- [ResumeWorkExperiencesIndustry](docs/Model/ResumeWorkExperiencesIndustry.md)
- [Role](docs/Model/Role.md)
- [SearchCandidateElement](docs/Model/SearchCandidateElement.md)
- [SearchCreditsRequest](docs/Model/SearchCreditsRequest.md)
- [SearchEvidence](docs/Model/SearchEvidence.md)
- [SearchJobAdElement](docs/Model/SearchJobAdElement.md)
- [SearchJobAdMatchResponse](docs/Model/SearchJobAdMatchResponse.md)
- [SearchResumeElement](docs/Model/SearchResumeElement.md)
- [SearchResumeMatchResponse](docs/Model/SearchResumeMatchResponse.md)
- [SearchTerm](docs/Model/SearchTerm.md)
- [Section](docs/Model/Section.md)
- [SectionDetails](docs/Model/SectionDetails.md)
- [SemanticCommonSimpleTerm](docs/Model/SemanticCommonSimpleTerm.md)
- [SemanticFeedbackRequest](docs/Model/SemanticFeedbackRequest.md)
- [SemanticHistoryBody](docs/Model/SemanticHistoryBody.md)
- [SeniorityLevelCode](docs/Model/SeniorityLevelCode.md)
- [SeniorityValue](docs/Model/SeniorityValue.md)
- [SimilarDocsSearchQuery](docs/Model/SimilarDocsSearchQuery.md)
- [SimilarEntitiesResponse](docs/Model/SimilarEntitiesResponse.md)
- [SimilarEntity](docs/Model/SimilarEntity.md)
- [SimilarWordsQuery](docs/Model/SimilarWordsQuery.md)
- [Size](docs/Model/Size.md)
- [SkillComparison](docs/Model/SkillComparison.md)
- [SkillDetail](docs/Model/SkillDetail.md)
- [SkillDetails](docs/Model/SkillDetails.md)
- [SkillHierarchy](docs/Model/SkillHierarchy.md)
- [SkillsClassificationRequest](docs/Model/SkillsClassificationRequest.md)
- [SkillsClassificationResponse](docs/Model/SkillsClassificationResponse.md)
- [SkillsComparisonValue](docs/Model/SkillsComparisonValue.md)
- [SkillsResponsesSkill](docs/Model/SkillsResponsesSkill.md)
- [SlimBaseDetails](docs/Model/SlimBaseDetails.md)
- [SlimBaseResponse](docs/Model/SlimBaseResponse.md)
- [SlimData](docs/Model/SlimData.md)
- [SlimDocument](docs/Model/SlimDocument.md)
- [SlimOptionalEscoSkillMatchCategorized](docs/Model/SlimOptionalEscoSkillMatchCategorized.md)
- [SlimSkill](docs/Model/SlimSkill.md)
- [SlimSkillDetail](docs/Model/SlimSkillDetail.md)
- [StandardDataItem](docs/Model/StandardDataItem.md)
- [StatsIndex](docs/Model/StatsIndex.md)
- [StatsInfo](docs/Model/StatsInfo.md)
- [StudyAreas](docs/Model/StudyAreas.md)
- [SuiteResponse](docs/Model/SuiteResponse.md)
- [Text](docs/Model/Text.md)
- [TextFile](docs/Model/TextFile.md)
- [TextPosition](docs/Model/TextPosition.md)
- [TextResponse](docs/Model/TextResponse.md)
- [Title](docs/Model/Title.md)
- [TokenResponse](docs/Model/TokenResponse.md)
- [TraditionalDocsSearchQuery](docs/Model/TraditionalDocsSearchQuery.md)
- [TransitionRecommendationValue](docs/Model/TransitionRecommendationValue.md)
- [TransitionRecommendations](docs/Model/TransitionRecommendations.md)
- [UniversityAutocomplete](docs/Model/UniversityAutocomplete.md)
- [UniversityAutocompleteResponse](docs/Model/UniversityAutocompleteResponse.md)
- [UniversityContactsContactInfo](docs/Model/UniversityContactsContactInfo.md)
- [UniversityContactsLink](docs/Model/UniversityContactsLink.md)
- [UniversityContactsPhoneNumber](docs/Model/UniversityContactsPhoneNumber.md)
- [UniversityData](docs/Model/UniversityData.md)
- [UniversityLocationsLocation](docs/Model/UniversityLocationsLocation.md)
- [UniversityPublicMetadata](docs/Model/UniversityPublicMetadata.md)
- [UpdateItemRequest](docs/Model/UpdateItemRequest.md)
- [UpdatePicRequest](docs/Model/UpdatePicRequest.md)
- [UploadStats](docs/Model/UploadStats.md)
- [Upskilling](docs/Model/Upskilling.md)
- [UpskillingRequest](docs/Model/UpskillingRequest.md)
- [ValidatedFloatValueModel](docs/Model/ValidatedFloatValueModel.md)
- [ValidatedIntegerValueModel](docs/Model/ValidatedIntegerValueModel.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValueModelBytes](docs/Model/ValueModelBytes.md)
- [ValueModelConstrainedIntValue](docs/Model/ValueModelConstrainedIntValue.md)
- [ValueModelDatetime](docs/Model/ValueModelDatetime.md)
- [ValueModelGeoLocation](docs/Model/ValueModelGeoLocation.md)
- [ValueModelInt](docs/Model/ValueModelInt.md)
- [ValueModelListStr](docs/Model/ValueModelListStr.md)
- [ValueModelMongoDBGeoLocation](docs/Model/ValueModelMongoDBGeoLocation.md)
- [ValueModelStr](docs/Model/ValueModelStr.md)
- [ValueModelUnionDatetimeDate](docs/Model/ValueModelUnionDatetimeDate.md)
- [WeightedQueryTerm](docs/Model/WeightedQueryTerm.md)
- [WorkActivityComparison](docs/Model/WorkActivityComparison.md)
- [WorkActivityComparisonRequest](docs/Model/WorkActivityComparisonRequest.md)
- [WorkActivityComparisonValue](docs/Model/WorkActivityComparisonValue.md)
- [WorkExperience](docs/Model/WorkExperience.md)
- [WorkExperiencesSummary](docs/Model/WorkExperiencesSummary.md)

## Authorization

### APIKey

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@intervieweb.it

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `>= 2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
