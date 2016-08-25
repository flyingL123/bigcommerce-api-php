<?php

namespace Bigcommerce\Api\Resources;

use Bigcommerce\Api\Resource;
use Bigcommerce\Api\Client;

/**
 * A product review.
 */
class ProductReview extends Resource
{
    protected $ignoreOnCreate = array(
        'id',
        'product_id',
    );
    
    protected $ignoreOnUpdate = array(
        'id',
        'product_id',
    );
    
    public function create()
    {
        return Client::createProductReview($this->getCreateFields());
    }
    
    public function update()
    {
        return Client::updateProductReview($this->product_id, $this->id, $this->getUpdateFields());
    }
    
    public function delete()
    {
        return Client::deleteProductReview($this->product_id, $this->id);   
    }
}
