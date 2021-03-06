<?php

namespace Bigcommerce\Api\Resources;

use Bigcommerce\Api\Resource;
use Bigcommerce\Api\Client;

/**
 * A stock keeping unit for a product.
 */
class Sku extends Resource
{
	protected $ignoreOnCreate = array(
		'product_id',
	);

	protected $ignoreOnUpdate = array(
		'id',
		'product_id',
	);

	public function create()
	{
		return Client::createResource('/products/' . $this->product_id . '/skus' , $this->getCreateFields());
	}

	public function update()
	{
		Client::updateResource('/products/' . $this->product_id . '/skus/' . $this->id , $this->getUpdateFields());
	}
}
