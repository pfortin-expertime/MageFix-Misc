<?php

namespace MageFix\Misc\Rewrite\Email;

class Template extends \Magento\Email\Model\Template
{
    protected $area;
   
    /**
     * Store the area associated with a template so that it will be returned by getDesignConfig and getDesignParams
     *
     * @param string $templateId
     * @return $this
     * @throws \Magento\Framework\Exception\MailException
     */
    public function setForcedArea($templateId)
    {
        if (!isset($this->area)) {
            $this->area = $this->emailConfig->getTemplateArea($templateId);
        }
        return $this;
    }
}
