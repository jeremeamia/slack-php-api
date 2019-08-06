<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class BotsInfoGetResponse200 extends \ArrayObject
{
    /**
     * @var BotsInfoGetResponse200Bot
     */
    protected $bot;
    /**
     * @var bool
     */
    protected $ok;

    /**
     * @return BotsInfoGetResponse200Bot|null
     */
    public function getBot(): ?BotsInfoGetResponse200Bot
    {
        return $this->bot;
    }

    /**
     * @param BotsInfoGetResponse200Bot|null $bot
     *
     * @return self
     */
    public function setBot(?BotsInfoGetResponse200Bot $bot): self
    {
        $this->bot = $bot;

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
