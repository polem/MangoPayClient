<?php

namespace MangoPay\Model;

class User
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
     * email
     * @param string
     */
    protected $email;

    /**
     * firstName
     * @param string
     */
    protected $firstName;

    /**
     * lastname
     * @param string
     */
    protected $lastname;

    /**
     * hasRegisteredMeansOfPayment
     * @param boolean
     */
    protected $hasRegisteredMeansOfPayment;

    /**
     * canRegisterMeanOfPayment
     * @param boolean
     */
    protected $canRegisterMeanOfPayment;

    /**
     * iP
     * @param string
     */
    protected $iP;

    /**
     * birthday
     * @param integer
     */
    protected $birthday;

    /**
     * nationality
     * @param string
     */
    protected $nationality;

    /**
     * personType
     * @param string
     */
    protected $personType;

    /**
     * personalWalletAmount
     * @param integer
     */
    protected $personalWalletAmount;

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
     * @param string $email
     */
    protected setEmail() {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string $email
     */
    protected getEmail() {
        return $this->email;
    }

    /**
     * @param string $firstName
     */
    protected setFirstName() {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string $firstName
     */
    protected getFirstName() {
        return $this->firstName;
    }

    /**
     * @param string $lastname
     */
    protected setLastname() {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string $lastname
     */
    protected getLastname() {
        return $this->lastname;
    }

    /**
     * @param boolean $hasRegisteredMeansOfPayment
     */
    protected setHasRegisteredMeansOfPayment() {
        $this->hasRegisteredMeansOfPayment = $hasRegisteredMeansOfPayment;

        return $this;
    }

    /**
     * @return boolean $hasRegisteredMeansOfPayment
     */
    protected getHasRegisteredMeansOfPayment() {
        return $this->hasRegisteredMeansOfPayment;
    }

    /**
     * @param boolean $canRegisterMeanOfPayment
     */
    protected setCanRegisterMeanOfPayment() {
        $this->canRegisterMeanOfPayment = $canRegisterMeanOfPayment;

        return $this;
    }

    /**
     * @return boolean $canRegisterMeanOfPayment
     */
    protected getCanRegisterMeanOfPayment() {
        return $this->canRegisterMeanOfPayment;
    }

    /**
     * @param string $iP
     */
    protected setIP() {
        $this->iP = $iP;

        return $this;
    }

    /**
     * @return string $iP
     */
    protected getIP() {
        return $this->iP;
    }

    /**
     * @param integer $birthday
     */
    protected setBirthday() {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @return integer $birthday
     */
    protected getBirthday() {
        return $this->birthday;
    }

    /**
     * @param string $nationality
     */
    protected setNationality() {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * @return string $nationality
     */
    protected getNationality() {
        return $this->nationality;
    }

    /**
     * @param string $personType
     */
    protected setPersonType() {
        $this->personType = $personType;

        return $this;
    }

    /**
     * @return string $personType
     */
    protected getPersonType() {
        return $this->personType;
    }

    /**
     * @param integer $personalWalletAmount
     */
    protected setPersonalWalletAmount() {
        $this->personalWalletAmount = $personalWalletAmount;

        return $this;
    }

    /**
     * @return integer $personalWalletAmount
     */
    protected getPersonalWalletAmount() {
        return $this->personalWalletAmount;
    }

}
