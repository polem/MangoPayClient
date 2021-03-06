<?php

namespace MangoPay\Model;

class Contribution
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
     * walletId
     * @param integer
     */
    protected $walletId;

    /**
     * amount
     * @param integer
     */
    protected $amount;

    /**
     * clientFeeAmount
     * @param integer
     */
    protected $clientFeeAmount;

    /**
     * leetchiFeeAmount
     * @param integer
     */
    protected $leetchiFeeAmount;

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
     * paymentCardId
     * @param integer
     */
    protected $paymentCardId;

    /**
     * type
     * @param string
     */
    protected $type;

    /**
     * answerCode
     * @param string
     */
    protected $answerCode;

    /**
     * answerMessage
     * @param string
     */
    protected $answerMessage;

    /**
     * culture
     * @param string
     */
    protected $culture;

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
     * @param integer $walletId
     */
    protected setWalletId($walletId) {
        $this->walletId = $walletId;

        return $this;
    }

    /**
     * @return integer $walletId
     */
    protected getWalletId() {
        return $this->walletId;
    }

    /**
     * @param integer $amount
     */
    protected setAmount($amount) {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return integer $amount
     */
    protected getAmount() {
        return $this->amount;
    }

    /**
     * @param integer $clientFeeAmount
     */
    protected setClientFeeAmount($clientFeeAmount) {
        $this->clientFeeAmount = $clientFeeAmount;

        return $this;
    }

    /**
     * @return integer $clientFeeAmount
     */
    protected getClientFeeAmount() {
        return $this->clientFeeAmount;
    }

    /**
     * @param integer $leetchiFeeAmount
     */
    protected setLeetchiFeeAmount($leetchiFeeAmount) {
        $this->leetchiFeeAmount = $leetchiFeeAmount;

        return $this;
    }

    /**
     * @return integer $leetchiFeeAmount
     */
    protected getLeetchiFeeAmount() {
        return $this->leetchiFeeAmount;
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

    /**
     * @param integer $paymentCardId
     */
    protected setPaymentCardId($paymentCardId) {
        $this->paymentCardId = $paymentCardId;

        return $this;
    }

    /**
     * @return integer $paymentCardId
     */
    protected getPaymentCardId() {
        return $this->paymentCardId;
    }

    /**
     * @param string $type
     */
    protected setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string $type
     */
    protected getType() {
        return $this->type;
    }

    /**
     * @param string $answerCode
     */
    protected setAnswerCode($answerCode) {
        $this->answerCode = $answerCode;

        return $this;
    }

    /**
     * @return string $answerCode
     */
    protected getAnswerCode() {
        return $this->answerCode;
    }

    /**
     * @param string $answerMessage
     */
    protected setAnswerMessage($answerMessage) {
        $this->answerMessage = $answerMessage;

        return $this;
    }

    /**
     * @return string $answerMessage
     */
    protected getAnswerMessage() {
        return $this->answerMessage;
    }

    /**
     * @param string $culture
     */
    protected setCulture($culture) {
        $this->culture = $culture;

        return $this;
    }

    /**
     * @return string $culture
     */
    protected getCulture() {
        return $this->culture;
    }

}
