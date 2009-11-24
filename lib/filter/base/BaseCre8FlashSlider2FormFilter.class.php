<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Cre8FlashSlider2 filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCre8FlashSlider2FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormFilterInput(),
      'filename'     => new sfWidgetFormFilterInput(),
      'timer'        => new sfWidgetFormFilterInput(),
      'url'          => new sfWidgetFormFilterInput(),
      'rank'         => new sfWidgetFormFilterInput(),
      'text_content' => new sfWidgetFormFilterInput(),
      'text_width'   => new sfWidgetFormFilterInput(),
      'text_x_pos'   => new sfWidgetFormFilterInput(),
      'text_y_pos'   => new sfWidgetFormFilterInput(),
      'bg_alpha'     => new sfWidgetFormFilterInput(),
      'bg_colour'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'         => new sfValidatorPass(array('required' => false)),
      'filename'     => new sfValidatorPass(array('required' => false)),
      'timer'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'url'          => new sfValidatorPass(array('required' => false)),
      'rank'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'text_content' => new sfValidatorPass(array('required' => false)),
      'text_width'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'text_x_pos'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'text_y_pos'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bg_alpha'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bg_colour'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cre8_flash_slider2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cre8FlashSlider2';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'name'         => 'Text',
      'filename'     => 'Text',
      'timer'        => 'Number',
      'url'          => 'Text',
      'rank'         => 'Number',
      'text_content' => 'Text',
      'text_width'   => 'Number',
      'text_x_pos'   => 'Number',
      'text_y_pos'   => 'Number',
      'bg_alpha'     => 'Number',
      'bg_colour'    => 'Text',
    );
  }
}
