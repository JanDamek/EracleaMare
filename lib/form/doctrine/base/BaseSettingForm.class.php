<?php

/**
 * Setting form base class.
 *
 * @method Setting getObject() Returns the current form's model object
 *
 * @package    dunaverde
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSettingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'SiteName'       => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'tel'            => new sfWidgetFormInputText(),
      'mobil'          => new sfWidgetFormInputText(),
      'pracovni_doba'  => new sfWidgetFormTextarea(),
      'ulice'          => new sfWidgetFormInputText(),
      'mesto'          => new sfWidgetFormInputText(),
      'web_adr'        => new sfWidgetFormInputText(),
      'ga_code'        => new sfWidgetFormInputText(),
      'google_overeni' => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'SiteName'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'tel'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'mobil'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'pracovni_doba'  => new sfValidatorString(array('required' => false)),
      'ulice'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'mesto'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'web_adr'        => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'ga_code'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'google_overeni' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('setting[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Setting';
  }

}
