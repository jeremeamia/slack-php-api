<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsUserTeamProfile
{
    /**
     * @var ObjsTeamProfileField[]
     */
    protected $fields;

    /**
     * @return ObjsTeamProfileField[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @param ObjsTeamProfileField[]|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }
}
