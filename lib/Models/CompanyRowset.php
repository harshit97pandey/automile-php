<?php

namespace Automile\Sdk\Models;

/**
 * Company Rowset Model
 */
class CompanyRowset extends ModelRowsetAbstract
{

    /**
     * Create new model to be added into the rowset
     * @param array|object $properties
     * @return Company
     */
    public function getModel($properties)
    {
        return new Company($properties);
    }

}
