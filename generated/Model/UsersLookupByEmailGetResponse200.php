<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsersLookupByEmailGetResponse200 extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var ObjsUser
     */
    protected $user;

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
     * @return ObjsUser|null
     */
    public function getUser(): ?ObjsUser
    {
        return $this->user;
    }

    /**
     * @param ObjsUser|null $user
     *
     * @return self
     */
    public function setUser(?ObjsUser $user): self
    {
        $this->user = $user;

        return $this;
    }
}
