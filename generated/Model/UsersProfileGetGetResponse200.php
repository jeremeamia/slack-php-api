<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsersProfileGetGetResponse200 extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var ObjsUserProfile
     */
    protected $profile;

    /**
     * @return bool|null
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * @param bool|null $ok
     *
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * @return ObjsUserProfile|null
     */
    public function getProfile(): ?ObjsUserProfile
    {
        return $this->profile;
    }

    /**
     * @param ObjsUserProfile|null $profile
     *
     * @return self
     */
    public function setProfile(?ObjsUserProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }
}
