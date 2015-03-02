<?php

namespace dicom\serviceConfigProvider;

/**
 * StructureProvider 
 */
class StructureProvider 
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * constructor
     */
    public function __construct(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * Создать новый справочник на сервисе конфигов
     */
    public function addRoot($name, $type, $require = false, $index = [], $view = [], $additionalParams = [])
    {
        return $this->soapClient->addRoot($name, $type, $require, $index, $view, $additionalParams);
    }

    /**
     * добавить колонку
     */
    public function add($name, $type, $path, $require = false, $index = [], $view = [], $additionalParams = [])
    {
        return $this->soapClient->add($name, $type, $path, $require, $index, $view, $additionalParams);
    }

    /**
     * Удалить справочник с сервиса конфигов
     */
    public function deleteRoot($refbook)
    {
        return $this->soapClient->deleteRoot($refbook);
    }
} 