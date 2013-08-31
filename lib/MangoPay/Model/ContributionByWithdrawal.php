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
    protected setId() {
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
    protected setTag() {
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
    protected setCreationDate() {
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
    protected setUpdateDate() {
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
    protected setUserId() {
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
    protected setWalletId() {
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
    protected setAmountDeclared() {
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
    protected setStatus() {
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
    protected setAmount() {
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
    protected setGeneratedReference() {
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
    protected setCommentary() {
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
    protected setBankAccountOwner() {
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
    protected setBankAccountIBAN() {
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
    protected setBankAccountBIC() {
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
