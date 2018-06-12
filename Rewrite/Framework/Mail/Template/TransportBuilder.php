<?php

namespace MageFix\Misc\Rewrite\Framework\Mail\Template;

class TransportBuilder extends \Magento\Framework\Mail\Template\TransportBuilder
{
    /**
     * @param $from
     * @param $store
     * @return $this
     * @throws \Magento\Framework\Exception\MailException
     */
    public function setFromByStore($from, $store)
    {
        $result = $this->_senderResolver->resolve($from, $store);
        $this->message->setFrom($result['email'], $result['name']);

        return $this;
    }
}