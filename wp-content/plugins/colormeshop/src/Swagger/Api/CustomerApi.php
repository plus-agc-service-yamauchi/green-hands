<?php
/**
 * CustomerApi
 * PHP version 5
 *
 * @category Class
 * @package  ColorMeShop\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * カラーミーショップ API
 *
 * # カラーミーショップ API  [カラーミーショップ](https://shop-pro.jp) APIでは、受注の検索や商品情報の更新を行うことができます。  ## 利用手順  はじめに、カラーミーデベロッパーアカウントを用意します。[デベロッパー登録ページ](https://api.shop-pro.jp/developers/sign_up)から登録してください。  次に、[登録ページ](https://api.shop-pro.jp/oauth/applications/new)からアプリケーション登録を行ってください。 スマートフォンのWebViewを利用する場合は、リダイレクトURIに`urn:ietf:wg:oauth:2.0:oob`を入力してください。  その後、カラーミーショップアカウントの認証ページを開きます。認証ページのURLは、`https://api.shop-pro.jp/oauth/authorize`に必要なパラメータをつけたものです。  |パラメータ名|値| |---|---| |`client_id`|アプリケーション詳細画面で確認できるクライアントID| |`response_type`|\"code\"という文字列| |`scope`| 別表参照| |`redirect_uri`|アプリケーション登録時に入力したリダイレクトURI|  `scope`は、以下のうち、アプリケーションが利用したい機能をスペース区切りで指定してください。  |スコープ|機能| |---|---| |`read_products`|商品データの参照| |`write_products`|在庫データの更新| |`read_sales`|受注・顧客データの参照| |`write_sales`|受注データの更新|  以下のようなURLとなります。  ``` https://api.shop-pro.jp/oauth/authorize?client_id=CLIENT_ID&redirect_uri=REDIRECT_URI&response_type=code&scope=read_products%20write_products ```  初めてこのページを訪れる場合は、カラーミーショップアカウントのIDとパスワードの入力を求められます。 承認ボタンを押すと、このアプリケーションがショップのデータにアクセスすることが許可され、リダイレクトURIへリダイレクトされます。  承認された場合は、`code`というクエリパラメータに認可コードが付与されます。承認がキャンセルされた、またはエラーが起きた場合は、 `error`パラメータにエラーの内容を表す文字列が与えられます。  アプリケーション登録時のリダイレクトURIに`urn:ietf:wg:oauth:2.0:oob`を指定した場合は、以下のようなURLにリダイレクトされます。 末尾のパスが認可コードになっています。  ``` https://api.shop-pro.jp/oauth/authorize/AUTH_CODE ```  認可コードの有効期限は発行から10分間です。  最後に、認可コードとアクセストークンを交換します。以下のパラメータを付けて、`https://api.shop-pro.jp/oauth/token`へリクエストを送ります。  |パラメータ名|値| |---|---| |`client_id`|アプリケーション詳細画面に表示されているクライアントID| |`client_secret`|アプリケーション詳細画面に表示されているクライアントシークレット| |`code`|取得した認可コード| |`grant_type`|\"authorization_code\"という文字列| |`redirect_uri`|アプリケーション登録時に入力したリダイレクトURI|  ```console # curl での例  $ curl -X POST \\   -d'client_id=CLIENT_ID' \\   -d'client_secret=CLIENT_SECRET' \\   -d'code=CODE' \\   -d'grant_type=authorization_code'   \\   -d'redirect_uri=REDIRECT_URI'  \\   'https://api.shop-pro.jp/oauth/token' ```  リクエストが成功すると、以下のようなJSONが返ってきます。  ```json {   \"access_token\": \"d461ab8XXXXXXXXXXXXXXXXXXXXXXXXX\",   \"token_type\": \"bearer\",   \"scope\": \"read_products write_products\" } ```  アクセストークンに有効期限はありませんが、許可済みアプリケーション一覧画面から失効させることができます。なお、同じ認可コードをアクセストークンに交換できるのは1度だけです。  取得したアクセストークンは、Authorizationヘッダに入れて使用します。以下にショップ情報を取得する際の例を示します。  ```console # curlの例  $ curl -H 'Authorization: Bearer d461ab8XXXXXXXXXXXXXXXXXXXXXXXXX' https://api.shop-pro.jp/v1/shop.json ```  ## エラー  カラーミーショップAPI v1では  - エラーコード - エラーメッセージ - ステータスコード  の配列でエラーを表現します。以下に例を示します。  ```json {   \"errors\": [     {       \"code\": 404100,       \"message\": \"レコードが見つかりませんでした。\",       \"status\": 404     }   ] } ```
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ColorMeShop\Swagger\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ColorMeShop\Swagger\ApiException;
use ColorMeShop\Swagger\Configuration;
use ColorMeShop\Swagger\HeaderSelector;
use ColorMeShop\Swagger\ObjectSerializer;

/**
 * CustomerApi Class Doc Comment
 *
 * @category Class
 * @package  ColorMeShop\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCustomer
     *
     * 顧客データの取得
     *
     * @param  int $customer_id customer_id (required)
     *
     * @throws \ColorMeShop\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ColorMeShop\Swagger\Model\InlineResponse2005
     */
    public function getCustomer($customer_id)
    {
        list($response) = $this->getCustomerWithHttpInfo($customer_id);
        return $response;
    }

    /**
     * Operation getCustomerWithHttpInfo
     *
     * 顧客データの取得
     *
     * @param  int $customer_id (required)
     *
     * @throws \ColorMeShop\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ColorMeShop\Swagger\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerWithHttpInfo($customer_id)
    {
        $returnType = '\ColorMeShop\Swagger\Model\InlineResponse2005';
        $request = $this->getCustomerRequest($customer_id);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\ColorMeShop\Swagger\Model\InlineResponse2005',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomerAsync
     *
     * 顧客データの取得
     *
     * @param  int $customer_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerAsync($customer_id)
    {
        return $this->getCustomerAsyncWithHttpInfo($customer_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerAsyncWithHttpInfo
     *
     * 顧客データの取得
     *
     * @param  int $customer_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerAsyncWithHttpInfo($customer_id)
    {
        $returnType = '\ColorMeShop\Swagger\Model\InlineResponse2005';
        $request = $this->getCustomerRequest($customer_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomer'
     *
     * @param  int $customer_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCustomerRequest($customer_id)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_id when calling getCustomer'
            );
        }

        $resourcePath = '/v1/customers/{customerId}.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                '{' . 'customerId' . '}',
                ObjectSerializer::toPathValue($customer_id),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getCustomers
     *
     * 顧客データのリストを取得
     *
     * @param  string $ids 顧客IDで検索。カンマ区切りで複数指定可能 (optional)
     * @param  string $name 顧客名で部分一致検索 (optional)
     * @param  string $furigana 顧客フリガナがで部分一致検索 (optional)
     * @param  string $mail 顧客メールアドレスで部分一致検索 (optional)
     * @param  string $postal 顧客の郵便番号で部分一致検索 (optional)
     * @param  string $tel 顧客の電話番号で部分一致検索 (optional)
     * @param  bool $mobile &#x60;true&#x60;なら会員登録済みの顧客から検索 (optional)
     * @param  string $make_date_min 指定日時以降に登録された顧客から検索 (optional)
     * @param  string $make_date_max 指定日時以前に登録された顧客から検索 (optional)
     * @param  string $update_date_min 指定日時以降に更新された顧客から検索 (optional)
     * @param  string $update_date_max 指定日時以降に更新された顧客から検索 (optional)
     *
     * @throws \ColorMeShop\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ColorMeShop\Swagger\Model\InlineResponse2004
     */
    public function getCustomers($ids = null, $name = null, $furigana = null, $mail = null, $postal = null, $tel = null, $mobile = null, $make_date_min = null, $make_date_max = null, $update_date_min = null, $update_date_max = null)
    {
        list($response) = $this->getCustomersWithHttpInfo($ids, $name, $furigana, $mail, $postal, $tel, $mobile, $make_date_min, $make_date_max, $update_date_min, $update_date_max);
        return $response;
    }

    /**
     * Operation getCustomersWithHttpInfo
     *
     * 顧客データのリストを取得
     *
     * @param  string $ids 顧客IDで検索。カンマ区切りで複数指定可能 (optional)
     * @param  string $name 顧客名で部分一致検索 (optional)
     * @param  string $furigana 顧客フリガナがで部分一致検索 (optional)
     * @param  string $mail 顧客メールアドレスで部分一致検索 (optional)
     * @param  string $postal 顧客の郵便番号で部分一致検索 (optional)
     * @param  string $tel 顧客の電話番号で部分一致検索 (optional)
     * @param  bool $mobile &#x60;true&#x60;なら会員登録済みの顧客から検索 (optional)
     * @param  string $make_date_min 指定日時以降に登録された顧客から検索 (optional)
     * @param  string $make_date_max 指定日時以前に登録された顧客から検索 (optional)
     * @param  string $update_date_min 指定日時以降に更新された顧客から検索 (optional)
     * @param  string $update_date_max 指定日時以降に更新された顧客から検索 (optional)
     *
     * @throws \ColorMeShop\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ColorMeShop\Swagger\Model\InlineResponse2004, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomersWithHttpInfo($ids = null, $name = null, $furigana = null, $mail = null, $postal = null, $tel = null, $mobile = null, $make_date_min = null, $make_date_max = null, $update_date_min = null, $update_date_max = null)
    {
        $returnType = '\ColorMeShop\Swagger\Model\InlineResponse2004';
        $request = $this->getCustomersRequest($ids, $name, $furigana, $mail, $postal, $tel, $mobile, $make_date_min, $make_date_max, $update_date_min, $update_date_max);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\ColorMeShop\Swagger\Model\InlineResponse2004',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomersAsync
     *
     * 顧客データのリストを取得
     *
     * @param  string $ids 顧客IDで検索。カンマ区切りで複数指定可能 (optional)
     * @param  string $name 顧客名で部分一致検索 (optional)
     * @param  string $furigana 顧客フリガナがで部分一致検索 (optional)
     * @param  string $mail 顧客メールアドレスで部分一致検索 (optional)
     * @param  string $postal 顧客の郵便番号で部分一致検索 (optional)
     * @param  string $tel 顧客の電話番号で部分一致検索 (optional)
     * @param  bool $mobile &#x60;true&#x60;なら会員登録済みの顧客から検索 (optional)
     * @param  string $make_date_min 指定日時以降に登録された顧客から検索 (optional)
     * @param  string $make_date_max 指定日時以前に登録された顧客から検索 (optional)
     * @param  string $update_date_min 指定日時以降に更新された顧客から検索 (optional)
     * @param  string $update_date_max 指定日時以降に更新された顧客から検索 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomersAsync($ids = null, $name = null, $furigana = null, $mail = null, $postal = null, $tel = null, $mobile = null, $make_date_min = null, $make_date_max = null, $update_date_min = null, $update_date_max = null)
    {
        return $this->getCustomersAsyncWithHttpInfo($ids, $name, $furigana, $mail, $postal, $tel, $mobile, $make_date_min, $make_date_max, $update_date_min, $update_date_max)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomersAsyncWithHttpInfo
     *
     * 顧客データのリストを取得
     *
     * @param  string $ids 顧客IDで検索。カンマ区切りで複数指定可能 (optional)
     * @param  string $name 顧客名で部分一致検索 (optional)
     * @param  string $furigana 顧客フリガナがで部分一致検索 (optional)
     * @param  string $mail 顧客メールアドレスで部分一致検索 (optional)
     * @param  string $postal 顧客の郵便番号で部分一致検索 (optional)
     * @param  string $tel 顧客の電話番号で部分一致検索 (optional)
     * @param  bool $mobile &#x60;true&#x60;なら会員登録済みの顧客から検索 (optional)
     * @param  string $make_date_min 指定日時以降に登録された顧客から検索 (optional)
     * @param  string $make_date_max 指定日時以前に登録された顧客から検索 (optional)
     * @param  string $update_date_min 指定日時以降に更新された顧客から検索 (optional)
     * @param  string $update_date_max 指定日時以降に更新された顧客から検索 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomersAsyncWithHttpInfo($ids = null, $name = null, $furigana = null, $mail = null, $postal = null, $tel = null, $mobile = null, $make_date_min = null, $make_date_max = null, $update_date_min = null, $update_date_max = null)
    {
        $returnType = '\ColorMeShop\Swagger\Model\InlineResponse2004';
        $request = $this->getCustomersRequest($ids, $name, $furigana, $mail, $postal, $tel, $mobile, $make_date_min, $make_date_max, $update_date_min, $update_date_max);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomers'
     *
     * @param  string $ids 顧客IDで検索。カンマ区切りで複数指定可能 (optional)
     * @param  string $name 顧客名で部分一致検索 (optional)
     * @param  string $furigana 顧客フリガナがで部分一致検索 (optional)
     * @param  string $mail 顧客メールアドレスで部分一致検索 (optional)
     * @param  string $postal 顧客の郵便番号で部分一致検索 (optional)
     * @param  string $tel 顧客の電話番号で部分一致検索 (optional)
     * @param  bool $mobile &#x60;true&#x60;なら会員登録済みの顧客から検索 (optional)
     * @param  string $make_date_min 指定日時以降に登録された顧客から検索 (optional)
     * @param  string $make_date_max 指定日時以前に登録された顧客から検索 (optional)
     * @param  string $update_date_min 指定日時以降に更新された顧客から検索 (optional)
     * @param  string $update_date_max 指定日時以降に更新された顧客から検索 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCustomersRequest($ids = null, $name = null, $furigana = null, $mail = null, $postal = null, $tel = null, $mobile = null, $make_date_min = null, $make_date_max = null, $update_date_min = null, $update_date_max = null)
    {

        $resourcePath = '/v1/customers.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($ids !== null) {
            $queryParams['ids'] = ObjectSerializer::toQueryValue($ids);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($furigana !== null) {
            $queryParams['furigana'] = ObjectSerializer::toQueryValue($furigana);
        }
        // query params
        if ($mail !== null) {
            $queryParams['mail'] = ObjectSerializer::toQueryValue($mail);
        }
        // query params
        if ($postal !== null) {
            $queryParams['postal'] = ObjectSerializer::toQueryValue($postal);
        }
        // query params
        if ($tel !== null) {
            $queryParams['tel'] = ObjectSerializer::toQueryValue($tel);
        }
        // query params
        if ($mobile !== null) {
            $queryParams['mobile'] = ObjectSerializer::toQueryValue($mobile);
        }
        // query params
        if ($make_date_min !== null) {
            $queryParams['make_date_min'] = ObjectSerializer::toQueryValue($make_date_min);
        }
        // query params
        if ($make_date_max !== null) {
            $queryParams['make_date_max'] = ObjectSerializer::toQueryValue($make_date_max);
        }
        // query params
        if ($update_date_min !== null) {
            $queryParams['update_date_min'] = ObjectSerializer::toQueryValue($update_date_min);
        }
        // query params
        if ($update_date_max !== null) {
            $queryParams['update_date_max'] = ObjectSerializer::toQueryValue($update_date_max);
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postCustomers
     *
     * 顧客データを追加
     *
     * @param  \ColorMeShop\Swagger\Model\Customer $customer customer (required)
     *
     * @throws \ColorMeShop\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ColorMeShop\Swagger\Model\InlineResponse2005
     */
    public function postCustomers($customer)
    {
        list($response) = $this->postCustomersWithHttpInfo($customer);
        return $response;
    }

    /**
     * Operation postCustomersWithHttpInfo
     *
     * 顧客データを追加
     *
     * @param  \ColorMeShop\Swagger\Model\Customer $customer (required)
     *
     * @throws \ColorMeShop\Swagger\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ColorMeShop\Swagger\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCustomersWithHttpInfo($customer)
    {
        $returnType = '\ColorMeShop\Swagger\Model\InlineResponse2005';
        $request = $this->postCustomersRequest($customer);

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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\ColorMeShop\Swagger\Model\InlineResponse2005',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postCustomersAsync
     *
     * 顧客データを追加
     *
     * @param  \ColorMeShop\Swagger\Model\Customer $customer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCustomersAsync($customer)
    {
        return $this->postCustomersAsyncWithHttpInfo($customer)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postCustomersAsyncWithHttpInfo
     *
     * 顧客データを追加
     *
     * @param  \ColorMeShop\Swagger\Model\Customer $customer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postCustomersAsyncWithHttpInfo($customer)
    {
        $returnType = '\ColorMeShop\Swagger\Model\InlineResponse2005';
        $request = $this->postCustomersRequest($customer);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postCustomers'
     *
     * @param  \ColorMeShop\Swagger\Model\Customer $customer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postCustomersRequest($customer)
    {
        // verify the required parameter 'customer' is set
        if ($customer === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer when calling postCustomers'
            );
        }

        $resourcePath = '/v1/customers.json';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($customer)) {
            $_tempBody = $customer;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
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
