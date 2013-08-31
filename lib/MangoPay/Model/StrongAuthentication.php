<?php

namespace MangoPay\Model;

class StrongAuthentication
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
     * beneficiaryId
     * @param integer
     */
    protected $beneficiaryId;

    /**
     * urlRequest
     * @param string
     */
    protected $urlRequest;

    /**
     * isDocumentsTransmitted
     * @param boolean
     */
    protected $isDocumentsTransmitted;

    /**
     * isCompleted
     * @param boolean
     */
    protected $isCompleted;

    /**
     * isSucceeded
     * @param boolean
     */
    protected $isSucceeded;

    /**
     * message
     * @param string
     */
    protected $message;

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
     * @param integer $beneficiaryId
     */
    protected setBeneficiaryId($beneficiaryId) {
        $this->beneficiaryId = $beneficiaryId;

        return $this;
    }

    /**
     * @return integer $beneficiaryId
     */
    protected getBeneficiaryId() {
        return $this->beneficiaryId;
    }

    /**
     * @param string $urlRequest
     */
    protected setUrlRequest($urlRequest) {
        $this->urlRequest = $urlRequest;

        return $this;
    }

    /**
     * @return string $urlRequest
     */
    protected getUrlRequest() {
        return $this->urlRequest;
    }

    /**
     * @param boolean $isDocumentsTransmitted
     */
    protected setIsDocumentsTransmitted($isDocumentsTransmitted) {
        $this->isDocumentsTransmitted = $isDocumentsTransmitted;

        return $this;
    }

    /**
     * @return boolean $isDocumentsTransmitted
     */
    protected getIsDocumentsTransmitted() {
        return $this->isDocumentsTransmitted;
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
     * @param string $message
     */
    protected setMessage($message) {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string $message
     */
    protected getMessage() {
        return $this->message;
    }

}
