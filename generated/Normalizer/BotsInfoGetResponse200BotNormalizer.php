<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BotsInfoGetResponse200BotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200Bot';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\BotsInfoGetResponse200Bot();
        $data = clone $data;
        if (property_exists($data, 'app_id') && $data->{'app_id'} !== null) {
            $object->setAppId($data->{'app_id'});
            unset($data->{'app_id'});
        }
        if (property_exists($data, 'deleted') && $data->{'deleted'} !== null) {
            $object->setDeleted($data->{'deleted'});
            unset($data->{'deleted'});
        }
        if (property_exists($data, 'icons') && $data->{'icons'} !== null) {
            $object->setIcons($this->denormalizer->denormalize($data->{'icons'}, 'JoliCode\\Slack\\Api\\Model\\BotsInfoGetResponse200BotIcons', 'json', $context));
            unset($data->{'icons'});
        }
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        if (property_exists($data, 'updated') && $data->{'updated'} !== null) {
            $object->setUpdated($data->{'updated'});
            unset($data->{'updated'});
        }
        if (property_exists($data, 'user_id') && $data->{'user_id'} !== null) {
            $object->setUserId($data->{'user_id'});
            unset($data->{'user_id'});
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAppId()) {
            $data->{'app_id'} = $object->getAppId();
        }
        if (null !== $object->getDeleted()) {
            $data->{'deleted'} = $object->getDeleted();
        }
        if (null !== $object->getIcons()) {
            $data->{'icons'} = $this->normalizer->normalize($object->getIcons(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getUpdated()) {
            $data->{'updated'} = $object->getUpdated();
        }
        if (null !== $object->getUserId()) {
            $data->{'user_id'} = $object->getUserId();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}
