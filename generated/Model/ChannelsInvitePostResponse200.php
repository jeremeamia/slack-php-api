<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ChannelsInvitePostResponse200
{
    /**
     * @var ObjsChannel
     */
    protected $channel;
    /**
     * @var bool
     */
    protected $ok;

    /**
     * @return ObjsChannel|null
     */
    public function getChannel(): ?ObjsChannel
    {
        return $this->channel;
    }

    /**
     * @param ObjsChannel|null $channel
     *
     * @return self
     */
    public function setChannel(?ObjsChannel $channel): self
    {
        $this->channel = $channel;

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
}
