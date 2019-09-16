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

class ObjsUserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsUserProfile();
        if (property_exists($data, 'always_active') && $data->{'always_active'} !== null) {
            $object->setAlwaysActive($data->{'always_active'});
        }
        if (property_exists($data, 'api_app_id') && $data->{'api_app_id'} !== null) {
            $object->setApiAppId($data->{'api_app_id'});
        }
        if (property_exists($data, 'avatar_hash') && $data->{'avatar_hash'} !== null) {
            $object->setAvatarHash($data->{'avatar_hash'});
        }
        if (property_exists($data, 'bot_id') && $data->{'bot_id'} !== null) {
            $object->setBotId($data->{'bot_id'});
        }
        if (property_exists($data, 'display_name') && $data->{'display_name'} !== null) {
            $object->setDisplayName($data->{'display_name'});
        }
        if (property_exists($data, 'display_name_normalized') && $data->{'display_name_normalized'} !== null) {
            $object->setDisplayNameNormalized($data->{'display_name_normalized'});
        }
        if (property_exists($data, 'email') && $data->{'email'} !== null) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'fields') && $data->{'fields'} !== null) {
            $value = $data->{'fields'};
            if (is_array($data->{'fields'})) {
                $values = [];
                foreach ($data->{'fields'} as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            } elseif (is_null($data->{'fields'})) {
                $value = $data->{'fields'};
            } elseif (isset($data->{'fields'})) {
                $value = $data->{'fields'};
            }
            $object->setFields($value);
        }
        if (property_exists($data, 'first_name') && $data->{'first_name'} !== null) {
            $object->setFirstName($data->{'first_name'});
        }
        if (property_exists($data, 'guest_channels') && $data->{'guest_channels'} !== null) {
            $object->setGuestChannels($data->{'guest_channels'});
        }
        if (property_exists($data, 'guest_expiration_ts') && $data->{'guest_expiration_ts'} !== null) {
            $object->setGuestExpirationTs($data->{'guest_expiration_ts'});
        }
        if (property_exists($data, 'guest_invited_by') && $data->{'guest_invited_by'} !== null) {
            $object->setGuestInvitedBy($data->{'guest_invited_by'});
        }
        if (property_exists($data, 'image_1024') && $data->{'image_1024'} !== null) {
            $object->setImage1024($data->{'image_1024'});
        }
        if (property_exists($data, 'image_192') && $data->{'image_192'} !== null) {
            $object->setImage192($data->{'image_192'});
        }
        if (property_exists($data, 'image_24') && $data->{'image_24'} !== null) {
            $object->setImage24($data->{'image_24'});
        }
        if (property_exists($data, 'image_32') && $data->{'image_32'} !== null) {
            $object->setImage32($data->{'image_32'});
        }
        if (property_exists($data, 'image_48') && $data->{'image_48'} !== null) {
            $object->setImage48($data->{'image_48'});
        }
        if (property_exists($data, 'image_512') && $data->{'image_512'} !== null) {
            $object->setImage512($data->{'image_512'});
        }
        if (property_exists($data, 'image_72') && $data->{'image_72'} !== null) {
            $object->setImage72($data->{'image_72'});
        }
        if (property_exists($data, 'image_original') && $data->{'image_original'} !== null) {
            $object->setImageOriginal($data->{'image_original'});
        }
        if (property_exists($data, 'is_custom_image') && $data->{'is_custom_image'} !== null) {
            $object->setIsCustomImage($data->{'is_custom_image'});
        }
        if (property_exists($data, 'last_name') && $data->{'last_name'} !== null) {
            $object->setLastName($data->{'last_name'});
        }
        if (property_exists($data, 'phone') && $data->{'phone'} !== null) {
            $object->setPhone($data->{'phone'});
        }
        if (property_exists($data, 'real_name') && $data->{'real_name'} !== null) {
            $object->setRealName($data->{'real_name'});
        }
        if (property_exists($data, 'real_name_normalized') && $data->{'real_name_normalized'} !== null) {
            $object->setRealNameNormalized($data->{'real_name_normalized'});
        }
        if (property_exists($data, 'skype') && $data->{'skype'} !== null) {
            $object->setSkype($data->{'skype'});
        }
        if (property_exists($data, 'status_emoji') && $data->{'status_emoji'} !== null) {
            $object->setStatusEmoji($data->{'status_emoji'});
        }
        if (property_exists($data, 'status_expiration') && $data->{'status_expiration'} !== null) {
            $object->setStatusExpiration($data->{'status_expiration'});
        }
        if (property_exists($data, 'status_text') && $data->{'status_text'} !== null) {
            $object->setStatusText($data->{'status_text'});
        }
        if (property_exists($data, 'status_text_canonical') && $data->{'status_text_canonical'} !== null) {
            $object->setStatusTextCanonical($data->{'status_text_canonical'});
        }
        if (property_exists($data, 'team') && $data->{'team'} !== null) {
            $object->setTeam($data->{'team'});
        }
        if (property_exists($data, 'teams') && $data->{'teams'} !== null) {
            $object->setTeams($data->{'teams'});
        }
        if (property_exists($data, 'title') && $data->{'title'} !== null) {
            $object->setTitle($data->{'title'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAlwaysActive()) {
            $data->{'always_active'} = $object->getAlwaysActive();
        }
        if (null !== $object->getApiAppId()) {
            $data->{'api_app_id'} = $object->getApiAppId();
        }
        if (null !== $object->getAvatarHash()) {
            $data->{'avatar_hash'} = $object->getAvatarHash();
        }
        if (null !== $object->getBotId()) {
            $data->{'bot_id'} = $object->getBotId();
        }
        if (null !== $object->getDisplayName()) {
            $data->{'display_name'} = $object->getDisplayName();
        }
        if (null !== $object->getDisplayNameNormalized()) {
            $data->{'display_name_normalized'} = $object->getDisplayNameNormalized();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        $value = $object->getFields();
        if (is_array($object->getFields())) {
            $values = [];
            foreach ($object->getFields() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        } elseif (is_null($object->getFields())) {
            $value = $object->getFields();
        } elseif (!is_null($object->getFields())) {
            $value = $object->getFields();
        }
        $data->{'fields'} = $value;
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        }
        if (null !== $object->getGuestChannels()) {
            $data->{'guest_channels'} = $object->getGuestChannels();
        }
        if (null !== $object->getGuestExpirationTs()) {
            $data->{'guest_expiration_ts'} = $object->getGuestExpirationTs();
        }
        if (null !== $object->getGuestInvitedBy()) {
            $data->{'guest_invited_by'} = $object->getGuestInvitedBy();
        }
        if (null !== $object->getImage1024()) {
            $data->{'image_1024'} = $object->getImage1024();
        }
        if (null !== $object->getImage192()) {
            $data->{'image_192'} = $object->getImage192();
        }
        if (null !== $object->getImage24()) {
            $data->{'image_24'} = $object->getImage24();
        }
        if (null !== $object->getImage32()) {
            $data->{'image_32'} = $object->getImage32();
        }
        if (null !== $object->getImage48()) {
            $data->{'image_48'} = $object->getImage48();
        }
        if (null !== $object->getImage512()) {
            $data->{'image_512'} = $object->getImage512();
        }
        if (null !== $object->getImage72()) {
            $data->{'image_72'} = $object->getImage72();
        }
        if (null !== $object->getImageOriginal()) {
            $data->{'image_original'} = $object->getImageOriginal();
        }
        if (null !== $object->getIsCustomImage()) {
            $data->{'is_custom_image'} = $object->getIsCustomImage();
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        }
        if (null !== $object->getPhone()) {
            $data->{'phone'} = $object->getPhone();
        }
        if (null !== $object->getRealName()) {
            $data->{'real_name'} = $object->getRealName();
        }
        if (null !== $object->getRealNameNormalized()) {
            $data->{'real_name_normalized'} = $object->getRealNameNormalized();
        }
        if (null !== $object->getSkype()) {
            $data->{'skype'} = $object->getSkype();
        }
        if (null !== $object->getStatusEmoji()) {
            $data->{'status_emoji'} = $object->getStatusEmoji();
        }
        if (null !== $object->getStatusExpiration()) {
            $data->{'status_expiration'} = $object->getStatusExpiration();
        }
        if (null !== $object->getStatusText()) {
            $data->{'status_text'} = $object->getStatusText();
        }
        if (null !== $object->getStatusTextCanonical()) {
            $data->{'status_text_canonical'} = $object->getStatusTextCanonical();
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        }
        if (null !== $object->getTeams()) {
            $data->{'teams'} = $object->getTeams();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }

        return $data;
    }
}
