<?php

namespace InvoiceXpress\Api;

use InvoiceXpress\Auth;
use InvoiceXpress\Client\Client;
use InvoiceXpress\Entities\SequencesCollection as EntityCollection;
use InvoiceXpress\Exceptions\InvalidResponse;
use InvoiceXpress\Traits\ApiResource;

class Sequences
{
	/**
	 * @param Auth $auth
	 * @param int $page
	 * @param int $per_page
	 * @return EntityCollection
	 * @throws InvalidResponse
	 */
	public static function list(Auth $auth)
	{
		$request = new Client($auth);
		$response = $request->get('/sequences.json');
		if ($response->isOk()) {
			return new EntityCollection($response->getBody());
		}
		throw new InvalidResponse($response, $request);
	}
}
