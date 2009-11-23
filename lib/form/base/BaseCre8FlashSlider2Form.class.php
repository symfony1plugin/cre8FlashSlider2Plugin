<?php

/**
 * Cre8FlashSlider2 form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCre8FlashSlider2Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'name'     => new sfWidgetFormInput(),
      'filename' => new sfWidgetFormInput(),
      'url'      => new sfWidgetFormInput(),
      'rank'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorPropelChoice(array('model' => 'Cre8FlashSlider2', 'column' => 'id', 'required' => false)),
      'name'     => new sfValidatorString(array('max_length' => 60)),
      'filename' => new sfValidatorString(array('max_length' => 128)),
      'url'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'rank'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cre8_flash_slider2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cre8FlashSlider2';
  }


}
