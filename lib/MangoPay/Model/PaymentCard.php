<?php

namespace MangoPay\Model;

class PaymentCard
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
     * ownerId
     * @param integer
     */
    protected $ownerId;

    /**
     * cardNumber
     * @param string
     */
    protected $cardNumber;

    /**
     * redirectURL
     * @param string
     */
    protected $redirectURL;

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
     * @param integer $ownerId
     */
    protected setOwnerId() {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * @return integer $ownerId
     */
    protected getOwnerId() {
        return $this->ownerId;
    }

    /**
     * @param string $cardNumber
     */
    protected setCardNumber() {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string $cardNumber
     */
    protected getCardNumber() {
        return $this->cardNumber;
    }

    /**
     * @param string $redirectURL
     */
    protected setRedirectURL() {
        $this->redirectURL = $redirectURL;

        return $this;
    }

    /**
     * @return string $redirectURL
     */
    protected getRedirectURL() {
        return $this->redirectURL;
    }

    /**
     * @param string $templateURL
     */
    protected setTemplateURL() {
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
    protected setReturnURL() {
        $this->returnURL = $returnURL;

        return $this;
    }

    /**
     * @return string $returnURL
     */
    protected getReturnURL() {
        return $this->returnURL;
    }

}
