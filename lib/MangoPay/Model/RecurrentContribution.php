<?php

namespace MangoPay\Model;

class RecurrentContribution
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
     * isEnabled
     * @param boolean
     */
    protected $isEnabled;

    /**
     * paymentURL
     * @param string
     */
    protected $paymentURL;

    /**
     * templateURL
     * @param string
     */
    protected $templateURL;

    /**
     * returnURL
     * @param string
     */
    protected $returnURL;

    /**
     * error
     * @param
     */
    protected $error;

    /**
     * culture
     * @param string
     */
    protected $culture;

    /**
     * startDate
     * @param integer
     */
    protected $startDate;

    /**
     * frequencyCode
     * @param string
     */
    protected $frequencyCode;

    /**
     * numberOfExecutions
     * @param integer
     */
    protected $numberOfExecutions;

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
     * @param boolean $isEnabled
     */
    protected setIsEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * @return boolean $isEnabled
     */
    protected getIsEnabled() {
        return $this->isEnabled;
    }

    /**
     * @param string $paymentURL
     */
    protected setPaymentURL($paymentURL) {
        $this->paymentURL = $paymentURL;

        return $this;
    }

    /**
     * @return string $paymentURL
     */
    protected getPaymentURL() {
        return $this->paymentURL;
    }

    /**
     * @param string $templateURL
     */
    protected setTemplateURL($templateURL) {
        $this->templateURL = $templateURL;

        return $this;
    }

    /**
     * @return string $templateURL
     */
    protected getTemplateURL() {
        return $this->templateURL;
    }

    /**
     * @param string $returnURL
     */
    protected setReturnURL($returnURL) {
        $this->returnURL = $returnURL;

        return $this;
    }

    /**
     * @return string $returnURL
     */
    protected getReturnURL() {
        return $this->returnURL;
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

    /**
     * @param integer $startDate
     */
    protected setStartDate($startDate) {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return integer $startDate
     */
    protected getStartDate() {
        return $this->startDate;
    }

    /**
     * @param string $frequencyCode
     */
    protected setFrequencyCode($frequencyCode) {
        $this->frequencyCode = $frequencyCode;

        return $this;
    }

    /**
     * @return string $frequencyCode
     */
    protected getFrequencyCode() {
        return $this->frequencyCode;
    }

    /**
     * @param integer $numberOfExecutions
     */
    protected setNumberOfExecutions($numberOfExecutions) {
        $this->numberOfExecutions = $numberOfExecutions;

        return $this;
    }

    /**
     * @return integer $numberOfExecutions
     */
    protected getNumberOfExecutions() {
        return $this->numberOfExecutions;
    }

}
