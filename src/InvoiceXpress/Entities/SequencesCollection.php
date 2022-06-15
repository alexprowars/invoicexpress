<?php

namespace InvoiceXpress\Entities;

class SequencesCollection extends AbstractEntityCollection
{
	/**
	 * @param array $object
	 * @return SequencesCollection
	 */
	protected function setSequences($object = [])
	{
		$loop = [];
		foreach ($object as $item) {
			if (!$item instanceof Sequence) {
				$loop[] = new Sequence($item);
			} else {
				$loop[] = $item;
			}
		}
		$this->items = $loop;

		return $this;
	}
}
