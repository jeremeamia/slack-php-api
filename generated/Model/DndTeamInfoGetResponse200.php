<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class DndTeamInfoGetResponse200 extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $cached;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var mixed[]
     */
    protected $users;

    /**
     * @return bool|null
     */
    public function getCached(): ?bool
    {
        return $this->cached;
    }

    /**
     * @param bool|null $cached
     *
     * @return self
     */
    public function setCached(?bool $cached): self
    {
        $this->cached = $cached;

        return $this;
    }

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
     * @return mixed[]|null
     */
    public function getUsers(): ?\ArrayObject
    {
        return $this->users;
    }

    /**
     * @param mixed[]|null $users
     *
     * @return self
     */
    public function setUsers(?\ArrayObject $users): self
    {
        $this->users = $users;

        return $this;
    }
}
