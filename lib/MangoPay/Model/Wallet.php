<?php

namespace MangoPay\Model;

class Wallet
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
     * owners
     * @param array
     */
    protected $owners;

    /**
     * name
     * @param string
     */
    protected $name;

    /**
     * description
     * @param string
     */
    protected $description;

    /**
     * raisingGoalAmount
     * @param integer
     */
    protected $raisingGoalAmount;

    /**
     * collectedAmount
     * @param integer
     */
    protected $collectedAmount;

    /**
     * spentAmount
     * @param integer
     */
    protected $spentAmount;

    /**
     * amount
     * @param integer
     */
    protected $amount;

    /**
     * contributionLimitDate
     * @param integer
     */
    protected $contributionLimitDate;

    /**
     * isClosed
     * @param boolean
     */
    protected $isClosed;

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
     * @param array $owners
     */
    protected setOwners($owners) {
        $this->owners = $owners;

        return $this;
    }

    /**
     * @return array $owners
     */
    protected getOwners() {
        return $this->owners;
    }

    /**
     * @param string $name
     */
    protected setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string $name
     */
    protected getName() {
        return $this->name;
    }

    /**
     * @param string $description
     */
    protected setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string $description
     */
    protected getDescription() {
        return $this->description;
    }

    /**
     * @param integer $raisingGoalAmount
     */
    protected setRaisingGoalAmount($raisingGoalAmount) {
        $this->raisingGoalAmount = $raisingGoalAmount;

        return $this;
    }

    /**
     * @return integer $raisingGoalAmount
     */
    protected getRaisingGoalAmount() {
        return $this->raisingGoalAmount;
    }

    /**
     * @param integer $collectedAmount
     */
    protected setCollectedAmount($collectedAmount) {
        $this->collectedAmount = $collectedAmount;

        return $this;
    }

    /**
     * @return integer $collectedAmount
     */
    protected getCollectedAmount() {
        return $this->collectedAmount;
    }

    /**
     * @param integer $spentAmount
     */
    protected setSpentAmount($spentAmount) {
        $this->spentAmount = $spentAmount;

        return $this;
    }

    /**
     * @return integer $spentAmount
     */
    protected getSpentAmount() {
        return $this->spentAmount;
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
     * @param integer $contributionLimitDate
     */
    protected setContributionLimitDate($contributionLimitDate) {
        $this->contributionLimitDate = $contributionLimitDate;

        return $this;
    }

    /**
     * @return integer $contributionLimitDate
     */
    protected getContributionLimitDate() {
        return $this->contributionLimitDate;
    }

    /**
     * @param boolean $isClosed
     */
    protected setIsClosed($isClosed) {
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * @return boolean $isClosed
     */
    protected getIsClosed() {
        return $this->isClosed;
    }

}
