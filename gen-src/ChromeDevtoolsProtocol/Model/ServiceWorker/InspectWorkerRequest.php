<?php

namespace ChromeDevtoolsProtocol\Model\ServiceWorker;

/**
 * Request for ServiceWorker.inspectWorker command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class InspectWorkerRequest implements \JsonSerializable
{
	/** @var string */
	public $versionId;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->versionId)) {
			$instance->versionId = (string)$data->versionId;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->versionId !== null) {
			$data->versionId = $this->versionId;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return InspectWorkerRequestBuilder
	 */
	public static function builder(): InspectWorkerRequestBuilder
	{
		return new InspectWorkerRequestBuilder();
	}
}
