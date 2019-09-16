<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ChannelsSetPurposePostResponse200
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var string
     */
    protected $purpose;

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
     * @return string|null
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    /**
     * @param string|null $purpose
     *
     * @return self
     */
    public function setPurpose(?string $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }
}
