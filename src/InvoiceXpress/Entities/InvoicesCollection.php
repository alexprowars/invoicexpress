<?php


namespace InvoiceXpress\Entities;


/**
 * Class Account
 *
 * Lets you create, process and manage clients.
 *
 * @package InvoiceXpress\Entities
 *
 * @property string id
 * @property Invoice[] items - Company name
 * @method Invoice[] getItems() - Method to get Clients collection
 */
class InvoicesCollection extends AbstractEntityCollection
{
    /**
     * @param array $object
     * @return InvoicesCollection
     */
    protected function setInvoices($object = [])
    {
        $loop = [];
        foreach ($object as $item) {
            if (!$item instanceof Invoice) {
                $loop[] = new Invoice($item);
            } else {
                $loop[] = $item;
            }
        }
        $this->items = $loop;
        return $this;
    }
}