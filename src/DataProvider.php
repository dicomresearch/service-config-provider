<?php

namespace dicom\serviceConfigProvider;

/**
 * DataProvider 
 */
class DataProvider
{
    private $soapClient;

    function __construct($soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * Get data from section
     *
     * @param string $section
     * @return mixed
     * @throws ProviderException
     */
    public function get($section, $criteria=[])
    {
        if (! is_string($section)) {
            throw ProviderException::sectionMustBeString($section);
        }

        return $this->soapClient->findOne($section, $criteria);
    }

    /**
     * Find data into config service
     *
     * @param string $section
     * @param array $criteria
     * @param array $fields
     * @param int $startsFrom
     * @param null $limit
     * @param null $sort
     * @return mixed
     */
    public function find($section, array $criteria = [],  $fields = [], $startsFrom = 0, $limit = null, $sort = null)
    {
        return $this->soapClient->find($section, $criteria, $fields, $startsFrom, $limit, $sort);
    }

    /**
     * Создание, изменения, удаление записи в справочнике ($section)
     *
     * @param $section
     * @param array $data
     * @return mixed
     */
    public function modify($section, array $data)
    {
        $this->soapClient->modify($section, $data);
    }
}