<?php

namespace MangoPay\Model;

class Refund
{
    /**
     * id
     * @param integer
     */
    protected $id;

    /**
     * tag
     * @param string
     */
    protected $tag;

    /**
     * creationDate
     * @param integer
     */
    protected $creationDate;

    /**
     * updateDate
     * @param integer
     */
    protected $updateDate;

    /**
     * userId
     * @param integer
     */
    protected $userId;

    /**
     * contributionId
     * @param integer
     */
    protected $contributionId;

    /**
     * isSucceeded
     * @param boolean
     */
    protected $isSucceeded;

    /**
     * isCompleted
     * @param boolean
     */
    protected $isCompleted;

    /**
     * error
     * @param
     */
    protected $error;

    /**
     * @param integer $id
     */
    protected setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer $id
     */
    protected getId() {
        return $this->id;
    }

    /**
     * @param string $tag
     */
    protected setTag($tag) {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string $tag
     */
    protected getTag() {
        return $this->tag;
    }

    /**
     * @param integer $creationDate
     */
    protected setCreationDate($creationDate) {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return integer $creationDate
     */
    protected getCreationDate() {
        return $this->creationDate;
    }

    /**
     * @param integer $updateDate
     */
    protected setUpdateDate($updateDate) {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * @return integer $updateDate
     */
    protected getUpdateDate() {
        return $this->updateDate;
    }

    /**
     * @param integer $userId
     */
    protected setUserId($userId) {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return integer $userId
     */
    protected getUserId() {
        return $this->userId;
    }

    /**
     * @param integer $contributionId
     */
    protected setContributionId($contributionId) {
        $this->contributionId = $contributionId;

        return $this;
    }

    /**
     * @return integer $contributionId
     */
    protected getContributionId() {
        return $this->contributionId;
    }

    /**
     * @param boolean $isSucceeded
     */
    protected setIsSucceeded($isSucceeded) {
        $this->isSucceeded = $isSucceeded;

        return $this;
    }

    /**
     * @return boolean $isSucceeded
     */
    protected getIsSucceeded() {
        return $this->isSucceeded;
    }

    /**
     * @param boolean $isCompleted
     */
    protected setIsCompleted($isCompleted) {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    /**
     * @return boolean $isCompleted
     */
    protected getIsCompleted() {
        return $this->isCompleted;
    }

    /**
     * @param  $error
     */
    protected setError($error) {
        $this->error = $error;

        return $this;
    }

    /**
     * @return  $error
     */
    protected getError() {
        return $this->error;
    }

}
