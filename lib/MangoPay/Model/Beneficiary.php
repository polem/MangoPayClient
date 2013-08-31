<?php

namespace MangoPay\Model;

class Beneficiary
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
     * bankAccountOwnerName
     * @param string
     */
    protected $bankAccountOwnerName;

    /**
     * bankAccountOwnerAddress
     * @param string
     */
    protected $bankAccountOwnerAddress;

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
     * @param string $bankAccountOwnerName
     */
    protected setBankAccountOwnerName($bankAccountOwnerName) {
        $this->bankAccountOwnerName = $bankAccountOwnerName;

        return $this;
    }

    /**
     * @return string $bankAccountOwnerName
     */
    protected getBankAccountOwnerName() {
        return $this->bankAccountOwnerName;
    }

    /**
     * @param string $bankAccountOwnerAddress
     */
    protected setBankAccountOwnerAddress($bankAccountOwnerAddress) {
        $this->bankAccountOwnerAddress = $bankAccountOwnerAddress;

        return $this;
    }

    /**
     * @return string $bankAccountOwnerAddress
     */
    protected getBankAccountOwnerAddress() {
        return $this->bankAccountOwnerAddress;
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
