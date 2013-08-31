<?php

namespace MangoPay\Model;

class Withdrawal
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
     * amountWithoutFees
     * @param integer
     */
    protected $amountWithoutFees;

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
     * beneficiaryId
     * @param integer
     */
    protected $beneficiaryId;

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
     * @param integer $amountWithoutFees
     */
    protected setAmountWithoutFees($amountWithoutFees) {
        $this->amountWithoutFees = $amountWithoutFees;

        return $this;
    }

    /**
     * @return integer $amountWithoutFees
     */
    protected getAmountWithoutFees() {
        return $this->amountWithoutFees;
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
