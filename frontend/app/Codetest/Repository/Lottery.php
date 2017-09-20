<?php

namespace App\Codetest\Repository;


use Cache;
use GuzzleHttp\Client;

/**
 * Class Lottery
 * This class retrieves API data for lotteries
 *
 * @package App\Codetest\Repository
 */
class Lottery
{
    /**
     * Lottery API endpoint that we use to retrieve data
     *
     * @var string
     */
    protected $apiEndpoint;

    /**
     * @var Client HTTP client
     */
    protected $client;

    /**
     * @var int Number of minutes to cache API response for
     */
    protected $defaultCacheExpiry = 60;

    /**
     * Lottery constructor.
     * @param Client $client
     * @param string $apiEndpoint
     */
    public function __construct(Client $client, $apiEndpoint)
    {
        $this->client = $client;
        $this->apiEndpoint = $apiEndpoint;
    }

    /**
     * Get all lotteries
     *
     * @return \Illuminate\Support\Collection
     */
    public function getLotteries()
    {
        return collect(
            array_get($this->getCachedApiResponse(), 'result')
        );
    }

    /**
     * Get cached API response
     * If cache is missing generate new cache
     *
     * @return array
     */
    protected function getCachedApiResponse()
    {
        return (array)Cache::remember('lotteries', $this->defaultCacheExpiry, function () {
            return $this->getFreshApiResponse();
        });
    }

    /**
     * Get fresh API response for lotteries
     *
     * @return array
     */
    protected function getFreshApiResponse()
    {
        return json_decode(
            $this
                ->client
                ->get($this->apiEndpoint)
                ->getBody(),
            true
        );
    }
}