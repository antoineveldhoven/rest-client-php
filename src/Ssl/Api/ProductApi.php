<?php
/**
 * ProductApi
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SSL
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Ssl\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Openprovider\Api\Rest\Client\Base\ApiException;
use Openprovider\Api\Rest\Client\Base\Configuration;
use Openprovider\Api\Rest\Client\Base\HeaderSelector;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;

/**
 * ProductApi Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductApi
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

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation getProduct
     *
     * Get product
     *
     * @param  int $id Object id (required)
     *
     * @throws \Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Openprovider\Api\Rest\Client\Ssl\Model\ProductGetProductResponse|\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError
     */
    public function getProduct($id)
    {
        list($response) = $this->getProductWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getProductWithHttpInfo
     *
     * Get product
     *
     * @param  int $id Object id (required)
     *
     * @throws Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Openprovider\Api\Rest\Client\Ssl\Model\ProductGetProductResponse|\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductWithHttpInfo($id)
    {
        $request = $this->getProductRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Openprovider\Api\Rest\Client\Ssl\Model\ProductGetProductResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Ssl\Model\ProductGetProductResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Openprovider\Api\Rest\Client\Ssl\Model\ProductGetProductResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Openprovider\Api\Rest\Client\Ssl\Model\ProductGetProductResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductAsync
     *
     * Get product
     *
     * @param  int $id Object id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsync($id)
    {
        return $this->getProductAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductAsyncWithHttpInfo
     *
     * Get product
     *
     * @param  int $id Object id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsyncWithHttpInfo($id)
    {
        $returnType = '\Openprovider\Api\Rest\Client\Ssl\Model\ProductGetProductResponse';
        $request = $this->getProductRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProduct'
     *
     * @param  int $id Object id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProductRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getProduct'
            );
        }

        $resourcePath = '/v1beta/ssl/products/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listProducts
     *
     * List products
     *
     * @param  int $limit Search query limit. (optional)
     * @param  int $offset Search query offset. (optional)
     * @param  bool $with_price Returns product price in the response. (optional)
     * @param  bool $with_supported_software Returns a list of supported software patforms. (optional)
     * @param  bool $with_description Returns a description for each product, if exists. (optional)
     * @param  string $order_by_name The name. (optional)
     * @param  string $order_by_brand_name The brand name. (optional)
     * @param  string $order_by_category The category. (optional)
     * @param  string $order_by_sub_category The sub category. (optional)
     * @param  string $order_by_brand_seqno The brand seqno. (optional)
     * @param  string $order_by_product_seqno The product seqno. (optional)
     *
     * @throws \Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Openprovider\Api\Rest\Client\Ssl\Model\ProductListProductsResponse|\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError
     */
    public function listProducts($limit = null, $offset = null, $with_price = null, $with_supported_software = null, $with_description = null, $order_by_name = null, $order_by_brand_name = null, $order_by_category = null, $order_by_sub_category = null, $order_by_brand_seqno = null, $order_by_product_seqno = null)
    {
        list($response) = $this->listProductsWithHttpInfo($limit, $offset, $with_price, $with_supported_software, $with_description, $order_by_name, $order_by_brand_name, $order_by_category, $order_by_sub_category, $order_by_brand_seqno, $order_by_product_seqno);
        return $response;
    }

    /**
     * Operation listProductsWithHttpInfo
     *
     * List products
     *
     * @param  int $limit Search query limit. (optional)
     * @param  int $offset Search query offset. (optional)
     * @param  bool $with_price Returns product price in the response. (optional)
     * @param  bool $with_supported_software Returns a list of supported software patforms. (optional)
     * @param  bool $with_description Returns a description for each product, if exists. (optional)
     * @param  string $order_by_name The name. (optional)
     * @param  string $order_by_brand_name The brand name. (optional)
     * @param  string $order_by_category The category. (optional)
     * @param  string $order_by_sub_category The sub category. (optional)
     * @param  string $order_by_brand_seqno The brand seqno. (optional)
     * @param  string $order_by_product_seqno The product seqno. (optional)
     *
     * @throws Openprovider\Api\Rest\Client\Base\ApiException; on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Openprovider\Api\Rest\Client\Ssl\Model\ProductListProductsResponse|\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listProductsWithHttpInfo($limit = null, $offset = null, $with_price = null, $with_supported_software = null, $with_description = null, $order_by_name = null, $order_by_brand_name = null, $order_by_category = null, $order_by_sub_category = null, $order_by_brand_seqno = null, $order_by_product_seqno = null)
    {
        $request = $this->listProductsRequest($limit, $offset, $with_price, $with_supported_software, $with_description, $order_by_name, $order_by_brand_name, $order_by_category, $order_by_sub_category, $order_by_brand_seqno, $order_by_product_seqno);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Openprovider\Api\Rest\Client\Ssl\Model\ProductListProductsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Ssl\Model\ProductListProductsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Openprovider\Api\Rest\Client\Ssl\Model\ProductListProductsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Openprovider\Api\Rest\Client\Ssl\Model\ProductListProductsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Openprovider\Api\Rest\Client\Ssl\Model\ErrorError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listProductsAsync
     *
     * List products
     *
     * @param  int $limit Search query limit. (optional)
     * @param  int $offset Search query offset. (optional)
     * @param  bool $with_price Returns product price in the response. (optional)
     * @param  bool $with_supported_software Returns a list of supported software patforms. (optional)
     * @param  bool $with_description Returns a description for each product, if exists. (optional)
     * @param  string $order_by_name The name. (optional)
     * @param  string $order_by_brand_name The brand name. (optional)
     * @param  string $order_by_category The category. (optional)
     * @param  string $order_by_sub_category The sub category. (optional)
     * @param  string $order_by_brand_seqno The brand seqno. (optional)
     * @param  string $order_by_product_seqno The product seqno. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listProductsAsync($limit = null, $offset = null, $with_price = null, $with_supported_software = null, $with_description = null, $order_by_name = null, $order_by_brand_name = null, $order_by_category = null, $order_by_sub_category = null, $order_by_brand_seqno = null, $order_by_product_seqno = null)
    {
        return $this->listProductsAsyncWithHttpInfo($limit, $offset, $with_price, $with_supported_software, $with_description, $order_by_name, $order_by_brand_name, $order_by_category, $order_by_sub_category, $order_by_brand_seqno, $order_by_product_seqno)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listProductsAsyncWithHttpInfo
     *
     * List products
     *
     * @param  int $limit Search query limit. (optional)
     * @param  int $offset Search query offset. (optional)
     * @param  bool $with_price Returns product price in the response. (optional)
     * @param  bool $with_supported_software Returns a list of supported software patforms. (optional)
     * @param  bool $with_description Returns a description for each product, if exists. (optional)
     * @param  string $order_by_name The name. (optional)
     * @param  string $order_by_brand_name The brand name. (optional)
     * @param  string $order_by_category The category. (optional)
     * @param  string $order_by_sub_category The sub category. (optional)
     * @param  string $order_by_brand_seqno The brand seqno. (optional)
     * @param  string $order_by_product_seqno The product seqno. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listProductsAsyncWithHttpInfo($limit = null, $offset = null, $with_price = null, $with_supported_software = null, $with_description = null, $order_by_name = null, $order_by_brand_name = null, $order_by_category = null, $order_by_sub_category = null, $order_by_brand_seqno = null, $order_by_product_seqno = null)
    {
        $returnType = '\Openprovider\Api\Rest\Client\Ssl\Model\ProductListProductsResponse';
        $request = $this->listProductsRequest($limit, $offset, $with_price, $with_supported_software, $with_description, $order_by_name, $order_by_brand_name, $order_by_category, $order_by_sub_category, $order_by_brand_seqno, $order_by_product_seqno);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listProducts'
     *
     * @param  int $limit Search query limit. (optional)
     * @param  int $offset Search query offset. (optional)
     * @param  bool $with_price Returns product price in the response. (optional)
     * @param  bool $with_supported_software Returns a list of supported software patforms. (optional)
     * @param  bool $with_description Returns a description for each product, if exists. (optional)
     * @param  string $order_by_name The name. (optional)
     * @param  string $order_by_brand_name The brand name. (optional)
     * @param  string $order_by_category The category. (optional)
     * @param  string $order_by_sub_category The sub category. (optional)
     * @param  string $order_by_brand_seqno The brand seqno. (optional)
     * @param  string $order_by_product_seqno The product seqno. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listProductsRequest($limit = null, $offset = null, $with_price = null, $with_supported_software = null, $with_description = null, $order_by_name = null, $order_by_brand_name = null, $order_by_category = null, $order_by_sub_category = null, $order_by_brand_seqno = null, $order_by_product_seqno = null)
    {

        $resourcePath = '/v1beta/ssl/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($with_price !== null) {
            $queryParams['with_price'] = ObjectSerializer::toQueryValue($with_price);
        }
        // query params
        if ($with_supported_software !== null) {
            $queryParams['with_supported_software'] = ObjectSerializer::toQueryValue($with_supported_software);
        }
        // query params
        if ($with_description !== null) {
            $queryParams['with_description'] = ObjectSerializer::toQueryValue($with_description);
        }
        // query params
        if ($order_by_name !== null) {
            $queryParams['order_by.name'] = ObjectSerializer::toQueryValue($order_by_name);
        }
        // query params
        if ($order_by_brand_name !== null) {
            $queryParams['order_by.brand_name'] = ObjectSerializer::toQueryValue($order_by_brand_name);
        }
        // query params
        if ($order_by_category !== null) {
            $queryParams['order_by.category'] = ObjectSerializer::toQueryValue($order_by_category);
        }
        // query params
        if ($order_by_sub_category !== null) {
            $queryParams['order_by.sub_category'] = ObjectSerializer::toQueryValue($order_by_sub_category);
        }
        // query params
        if ($order_by_brand_seqno !== null) {
            $queryParams['order_by.brand_seqno'] = ObjectSerializer::toQueryValue($order_by_brand_seqno);
        }
        // query params
        if ($order_by_product_seqno !== null) {
            $queryParams['order_by.product_seqno'] = ObjectSerializer::toQueryValue($order_by_product_seqno);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
