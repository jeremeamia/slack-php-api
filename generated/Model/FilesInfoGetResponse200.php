<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class FilesInfoGetResponse200
{
    /**
     * @var mixed[]
     */
    protected $comments;
    /**
     * @var null
     */
    protected $contentHtml;
    /**
     * @var string
     */
    protected $editor;
    /**
     * @var ObjsFile
     */
    protected $file;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var ObjsPaging
     */
    protected $paging;
    /**
     * @var ObjsResponseMetadata
     */
    protected $responseMetadata;

    /**
     * @return mixed[]|null
     */
    public function getComments(): ?array
    {
        return $this->comments;
    }

    /**
     * @param mixed[]|null $comments
     *
     * @return self
     */
    public function setComments(?array $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getContentHtml()
    {
        return $this->contentHtml;
    }

    /**
     * @param null $contentHtml
     *
     * @return self
     */
    public function setContentHtml($contentHtml): self
    {
        $this->contentHtml = $contentHtml;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEditor(): ?string
    {
        return $this->editor;
    }

    /**
     * @param string|null $editor
     *
     * @return self
     */
    public function setEditor(?string $editor): self
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * @return ObjsFile|null
     */
    public function getFile(): ?ObjsFile
    {
        return $this->file;
    }

    /**
     * @param ObjsFile|null $file
     *
     * @return self
     */
    public function setFile(?ObjsFile $file): self
    {
        $this->file = $file;

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
     * @return ObjsPaging|null
     */
    public function getPaging(): ?ObjsPaging
    {
        return $this->paging;
    }

    /**
     * @param ObjsPaging|null $paging
     *
     * @return self
     */
    public function setPaging(?ObjsPaging $paging): self
    {
        $this->paging = $paging;

        return $this;
    }

    /**
     * @return ObjsResponseMetadata|null
     */
    public function getResponseMetadata(): ?ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }

    /**
     * @param ObjsResponseMetadata|null $responseMetadata
     *
     * @return self
     */
    public function setResponseMetadata(?ObjsResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
