<?php
namespace Vendor\Ext\Finisher;

use In2code\Powermail\Domain\Model\Mail;
use In2code\Powermail\Finisher\AbstractFinisher;

/**
 * Class DoSomethingFinisher
 *
 * @package Vendor\Ext\Finisher
 */
class DoSomethingFinisher extends AbstractFinisher {

	/**
	 * @var Mail
	 */
	protected $mail;

	/**
	 * @var array
	 */
	protected $configuration;

	/**
	 * @var array
	 */
	protected $settings;

	/**
	 * Will be called always at first
	 *
	 * @return void
	 */
	public function initializeFinisher() {
	}

	/**
	 * Will be called before myFinisher()
	 *
	 * @return void
	 */
	public function initializeMyFinisher() {
	}

	/**
	 * MyFinisher
	 *
	 * @return void
	 */
	public function myFinisher() {
		// get value from configuration
		$foo = $this->configuration['foo'];

		// get subject
		$subject = $this->getMail()->getSubject();

		// ...
	}
}
