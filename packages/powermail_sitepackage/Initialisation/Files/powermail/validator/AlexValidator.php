<?php
namespace Vendor\Ext\Domain\Model;

use In2code\Powermail\Domain\Model\Mail;
use In2code\Powermail\Domain\Validator\AbstractValidator;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Error\Result;
use TYPO3\CMS\Extbase\Error\Error;
use TYPO3\CMS\Extbase\Object\Exception;

/**
 * Class AlexValidator
 */
class AlexValidator extends AbstractValidator
{

    /**
     * Field to check - select by {markername}
     *
     * @var string
     */
    protected $fieldMarker = 'firstname';

    /**
     * Validator configuration
     *
     * @var array
     */
    protected array $configuration = [];

    /**
     * Check if value in Firstname-Field is allowed
     *
     * @param Mail $mail
     * @return Result
     * @throws Exception
     */
    public function validate($mail): Result
    {
        $this->result = new Result();
        if ((int) $this->configuration['form'] === $mail->getForm()->getUid()) {
            $this->isValid($mail);
        }
        return $this->result;
    }

    protected function isValid($mail): void
    {
        foreach ($mail->getAnswers() as $answer) {
            if ($answer->getField()->getMarker() === $this->fieldMarker && !$this->isAllowedValue($answer->getValue())) {
                $this->result->addError(new Error('Firstname must be "Alexander"', 112345, ['marker' => $this->fieldMarker]));
            }
        }
    }

    /**
     * Check if this value is allowed
     *
     * @return bool
     */
    protected function isAllowedValue($value)
    {
        $allowedValues = GeneralUtility::trimExplode(',', $this->configuration['allowedValues'], true);
        return in_array(strtolower($value), $allowedValues);
    }
}
