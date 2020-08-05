<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Endpoint;

class TeamIntegrationLogs extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    /**
     * Gets the integration logs for the current team.
     *
     * @param array $queryParameters {
     *
     *     @var int $count
     *     @var string $change_type Filter logs with this change type. Defaults to all logs.
     *     @var int $app_id Filter logs to this Slack app. Defaults to all logs.
     *     @var string $token Authentication token. Requires scope: `admin`
     *     @var string $user Filter logs generated by this user’s actions. Defaults to all logs.
     *     @var int $service_id Filter logs to this service. Defaults to all logs.
     *     @var string $page
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/team.integrationLogs';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['count', 'change_type', 'app_id', 'token', 'user', 'service_id', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('count', ['int']);
        $optionsResolver->setAllowedTypes('change_type', ['string']);
        $optionsResolver->setAllowedTypes('app_id', ['int']);
        $optionsResolver->setAllowedTypes('token', ['string']);
        $optionsResolver->setAllowedTypes('user', ['string']);
        $optionsResolver->setAllowedTypes('service_id', ['int']);
        $optionsResolver->setAllowedTypes('page', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponse200|\JoliCode\Slack\Api\Model\TeamIntegrationLogsGetResponsedefault|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Slack\\Api\\Model\\TeamIntegrationLogsGetResponsedefault', 'json');
    }
}
