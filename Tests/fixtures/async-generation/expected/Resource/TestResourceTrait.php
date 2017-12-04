<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Resource;

use Jane\OpenApiRuntime\Client\QueryParam;

trait TestResourceTrait
{
    /**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Jane\OpenApi\Tests\Expected\Model\Schema|\Jane\OpenApi\Tests\Expected\Model\Error
     */
    public function getTest($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/test';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Schema', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
            }
        }

        return $response;
    }

    /**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Amp\Promise<\Psr\Http\Message\ResponseInterface|\Jane\OpenApi\Tests\Expected\Model\Schema|\Jane\OpenApi\Tests\Expected\Model\Error>
     */
    public function getTestAsync($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return \Amp\call(function ($parameters = [], $fetch = self::FETCH_OBJECT) {
            $queryParam = new QueryParam();
            $url = '/test';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
            $response = (yield $this->httpClient->sendAsyncRequest($request));
            if (self::FETCH_OBJECT == $fetch) {
                if ('200' == $response->getStatusCode()) {
                    return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Schema', 'json');
                }
                if ('400' == $response->getStatusCode()) {
                    return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
                }
                if ('404' == $response->getStatusCode()) {
                    return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
                }
            }

            return $response;
        }, $parameters, $fetch);
    }

    /**
     * @param int    $id         id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Jane\OpenApi\Tests\Expected\Model\TestIdGetResponse200|\Jane\OpenApi\Tests\Expected\Model\Error
     */
    public function getTestById($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/test/{id}';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\TestIdGetResponse200', 'json');
            }
            if ('400' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
            }
            if ('404' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
            }
        }

        return $response;
    }

    /**
     * @param int    $id         id
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Amp\Promise<\Psr\Http\Message\ResponseInterface|\Jane\OpenApi\Tests\Expected\Model\TestIdGetResponse200|\Jane\OpenApi\Tests\Expected\Model\Error>
     */
    public function getTestByIdAsync($id, $parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return \Amp\call(function ($id, $parameters = [], $fetch = self::FETCH_OBJECT) {
            $queryParam = new QueryParam();
            $url = '/test/{id}';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
            $response = (yield $this->httpClient->sendAsyncRequest($request));
            if (self::FETCH_OBJECT == $fetch) {
                if ('200' == $response->getStatusCode()) {
                    return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\TestIdGetResponse200', 'json');
                }
                if ('400' == $response->getStatusCode()) {
                    return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
                }
                if ('404' == $response->getStatusCode()) {
                    return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Error', 'json');
                }
            }

            return $response;
        }, $id, $parameters, $fetch);
    }

    /**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|\Jane\OpenApi\Tests\Expected\Model\Schema[]
     */
    public function getTestList($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/test-list';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Schema[]', 'json');
            }
        }

        return $response;
    }

    /**
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Amp\Promise<\Psr\Http\Message\ResponseInterface|\Jane\OpenApi\Tests\Expected\Model\Schema[]>
     */
    public function getTestListAsync($parameters = [], $fetch = self::FETCH_OBJECT)
    {
        return \Amp\call(function ($parameters = [], $fetch = self::FETCH_OBJECT) {
            $queryParam = new QueryParam();
            $url = '/test-list';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
            $response = (yield $this->httpClient->sendAsyncRequest($request));
            if (self::FETCH_OBJECT == $fetch) {
                if ('200' == $response->getStatusCode()) {
                    return $this->serializer->deserialize((string) $response->getBody(), 'Jane\\OpenApi\\Tests\\Expected\\Model\\Schema[]', 'json');
                }
            }

            return $response;
        }, $parameters, $fetch);
    }
}
