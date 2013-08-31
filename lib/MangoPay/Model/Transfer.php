<?php

namespace MangoPay\Model;

class Transfer
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
     * payerId
     * @param integer
     */
    protected $payerId;

    /**
     * beneficiaryId
     * @param integer
     */
    protected $beneficiaryId;

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
     * payerWalletId
     * @param integer
     */
    protected $payerWalletId;

    /**
     * beneficiaryWalletId
     * @param integer
     */
    protected $beneficiaryWalletId;

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
     * @param integer $payerId
     */
    protected setPayerId($payerId) {
        $this->payerId = $payerId;

        return $this;
    }

    /**
     * @return integer $payerId
     */
    protected getPayerId() {
        return $this->payerId;
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
     * @param integer $payerWalletId
     */
    protected setPayerWalletId($payerWalletId) {
        $this->payerWalletId = $payerWalletId;

        return $this;
    }

    /**
     * @return integer $payerWalletId
     */
    protected getPayerWalletId() {
        return $this->payerWalletId;
    }

    /**
     * @param integer $beneficiaryWalletId
     */
    protected setBeneficiaryWalletId($beneficiaryWalletId) {
        $this->beneficiaryWalletId = $beneficiaryWalletId;

        return $this;
    }

    /**
     * @return integer $beneficiaryWalletId
     */
    protected getBeneficiaryWalletId() {
        return $this->beneficiaryWalletId;
    }

}
