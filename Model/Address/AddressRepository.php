<?php

/**
 * @author   dzgok  <dgokdunek@tmobtech.com>
 * @license  https://raw.githubusercontent.com/tappz/magento2/master/LICENCE
 *
 * @link     http://t-appz.com/
 */

namespace TmobLabs\Tappz\Model\Address;

use TmobLabs\Tappz\API\AddressRepositoryInterface;

/**
 * Class AddressRepository.
 */
class AddressRepository implements AddressRepositoryInterface
{
    /**
     * @var AddressCollector
     */
    private $_addressCollector;

    /**
     * AddressRepository constructor.
     *
     * @param AddressCollector $addressCollector
     */
    public function __construct(
        AddressCollector $addressCollector
    ) {
        $this->_addressCollector = $addressCollector;
    }

    /**
     * @return array|string
     */
    public function createAddress()
    {
        $result = $this->_addressCollector->createAddress();

        return $result;
    }

    /**
     * @return array|string
     */
    public function editAddress()
    {
        $result = $this->_addressCollector->editAddress();

        return $result;
    }

    /**
     * @return array|string
     */
    public function deleteAddress()
    {
        $result = $this->_addressCollector->deleteAddress();

        return $result;
    }

    /**
     * @param $addressId
     *
     * @return array
     */
    public function getAddress($addressId)
    {
        $result = $this->_addressCollector->getAddressById($addressId);

        return $result;
    }
}
