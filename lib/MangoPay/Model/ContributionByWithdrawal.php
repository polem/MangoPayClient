<?php

namespace MangoPay\Model;

class ContributionByWithdrawal
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
     * amountDeclared
     * @param integer
     */
    protected $amountDeclared;

    /**
     * status
     * @param string
     */
    protected $status;

    /**
     * amount
     * @param integer
     */
    protected $amount;

    /**
     * generatedReference
     * @param string
     */
    protected $generatedReference;

    /**
     * commentary
     * @param string
     */
    protected $commentary;

    /**
     * bankAccountOwner
     * @param string
     */
    protected $bankAccountOwner;

    /**
     * bankAccountIBAN
     * @param string
     */
    protected $bankAccountIBAN;

    /**
     * bankAccountBIC
     * @param string
     */
    protected $bankAccountBIC;

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
     * @param integer $amountDeclared
     */
    protected setAmountDeclared($amountDeclared) {
        $this->amountDeclared = $amountDeclared;

        return $this;
    }

    /**
     * @return integer $amountDeclared
     */
    protected getAmountDeclared() {
        return $this->amountDeclared;
    }

    /**
     * @param string $status
     */
    protected setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string $status
     */
    protected getStatus() {
        return $this->status;
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
     * @param string $generatedReference
     */
    protected setGeneratedReference($generatedReference) {
        $this->generatedReference = $generatedReference;

        return $this;
    }

    /**
     * @return string $generatedReference
     */
    protected getGeneratedReference() {
        return $this->generatedReference;
    }

    /**
     * @param string $commentary
     */
    protected setCommentary($commentary) {
        $this->commentary = $commentary;

        return $this;
    }

    /**
     * @return string $commentary
     */
    protected getCommentary() {
        return $this->commentary;
    }

    /**
     * @param string $bankAccountOwner
     */
    protected setBankAccountOwner($bankAccountOwner) {
        $this->bankAccountOwner = $bankAccountOwner;

        return $this;
    }

    /**
     * @return string $bankAccountOwner
     */
    protected getBankAccountOwner() {
        return $this->bankAccountOwner;
    }

    /**
     * @param string $bankAccountIBAN
     */
    protected setBankAccountIBAN($bankAccountIBAN) {
        $this->bankAccountIBAN = $bankAccountIBAN;

        return $this;
    }

    /**
     * @return string $bankAccountIBAN
     */
    protected getBankAccountIBAN() {
        return $this->bankAccountIBAN;
    }

    /**
     * @param string $bankAccountBIC
     */
    protected setBankAccountBIC($bankAccountBIC) {
        $this->bankAccountBIC = $bankAccountBIC;

        return $this;
    }

    /**
     * @return string $bankAccountBIC
     */
    protected getBankAccountBIC() {
        return $this->bankAccountBIC;
    }

}
