<?php

/**
 * Stranka filter form base class.
 *
 * @package    dunaverde
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStrankaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'              => new sfWidgetFormFilterInput(),
      'link_h1'           => new sfWidgetFormFilterInput(),
      'title_seo'         => new sfWidgetFormFilterInput(),
      'keywords'          => new sfWidgetFormFilterInput(),
      'description'       => new sfWidgetFormFilterInput(),
      'title_str'         => new sfWidgetFormFilterInput(),
      'top_img'           => new sfWidgetFormFilterInput(),
      'top_img_title'     => new sfWidgetFormFilterInput(),
      'top_img_alt'       => new sfWidgetFormFilterInput(),
      'popis_levy'        => new sfWidgetFormFilterInput(),
      'popis_pravy'       => new sfWidgetFormFilterInput(),
      'region'            => new sfWidgetFormFilterInput(),
      'vzdalenost'        => new sfWidgetFormFilterInput(),
      'img1'              => new sfWidgetFormFilterInput(),
      'img1_title'        => new sfWidgetFormFilterInput(),
      'img1_alt'          => new sfWidgetFormFilterInput(),
      'img2'              => new sfWidgetFormFilterInput(),
      'img2_title'        => new sfWidgetFormFilterInput(),
      'img2_alt'          => new sfWidgetFormFilterInput(),
      'img3'              => new sfWidgetFormFilterInput(),
      'img3_title'        => new sfWidgetFormFilterInput(),
      'img3_alt'          => new sfWidgetFormFilterInput(),
      'img4'              => new sfWidgetFormFilterInput(),
      'img4_title'        => new sfWidgetFormFilterInput(),
      'img4_alt'          => new sfWidgetFormFilterInput(),
      'promo1_title'      => new sfWidgetFormFilterInput(),
      'promo1_img'        => new sfWidgetFormFilterInput(),
      'promo1_img_title'  => new sfWidgetFormFilterInput(),
      'promo1_img_alt'    => new sfWidgetFormFilterInput(),
      'promo1_gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery1'), 'add_empty' => true)),
      'promo1_star'       => new sfWidgetFormFilterInput(),
      'promo1_popis'      => new sfWidgetFormFilterInput(),
      'promo1_cena'       => new sfWidgetFormFilterInput(),
      'promo1_link'       => new sfWidgetFormFilterInput(),
      'promo2_title'      => new sfWidgetFormFilterInput(),
      'promo2_img'        => new sfWidgetFormFilterInput(),
      'promo2_img_title'  => new sfWidgetFormFilterInput(),
      'promo2_img_alt'    => new sfWidgetFormFilterInput(),
      'promo2_gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery2'), 'add_empty' => true)),
      'promo2_star'       => new sfWidgetFormFilterInput(),
      'promo2_popis'      => new sfWidgetFormFilterInput(),
      'promo2_cena'       => new sfWidgetFormFilterInput(),
      'promo2_link'       => new sfWidgetFormFilterInput(),
      'promo3_title'      => new sfWidgetFormFilterInput(),
      'promo3_img'        => new sfWidgetFormFilterInput(),
      'promo3_img_title'  => new sfWidgetFormFilterInput(),
      'promo3_img_alt'    => new sfWidgetFormFilterInput(),
      'promo3_gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery3'), 'add_empty' => true)),
      'promo3_star'       => new sfWidgetFormFilterInput(),
      'promo3_popis'      => new sfWidgetFormFilterInput(),
      'promo3_cena'       => new sfWidgetFormFilterInput(),
      'promo3_link'       => new sfWidgetFormFilterInput(),
      'promo4_title'      => new sfWidgetFormFilterInput(),
      'promo4_img'        => new sfWidgetFormFilterInput(),
      'promo4_img_title'  => new sfWidgetFormFilterInput(),
      'promo4_img_alt'    => new sfWidgetFormFilterInput(),
      'promo4_gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery4'), 'add_empty' => true)),
      'promo4_star'       => new sfWidgetFormFilterInput(),
      'promo4_popis'      => new sfWidgetFormFilterInput(),
      'promo4_cena'       => new sfWidgetFormFilterInput(),
      'promo4_link'       => new sfWidgetFormFilterInput(),
      'baner1_img'        => new sfWidgetFormFilterInput(),
      'baner1_img_title'  => new sfWidgetFormFilterInput(),
      'baner1_img_alt'    => new sfWidgetFormFilterInput(),
      'baner1_link'       => new sfWidgetFormFilterInput(),
      'baner2_img'        => new sfWidgetFormFilterInput(),
      'baner2_img_title'  => new sfWidgetFormFilterInput(),
      'baner2_img_alt'    => new sfWidgetFormFilterInput(),
      'baner2_link'       => new sfWidgetFormFilterInput(),
      'baner3_img'        => new sfWidgetFormFilterInput(),
      'baner3_img_title'  => new sfWidgetFormFilterInput(),
      'baner3_img_alt'    => new sfWidgetFormFilterInput(),
      'baner3_link'       => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'              => new sfValidatorPass(array('required' => false)),
      'link_h1'           => new sfValidatorPass(array('required' => false)),
      'title_seo'         => new sfValidatorPass(array('required' => false)),
      'keywords'          => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'title_str'         => new sfValidatorPass(array('required' => false)),
      'top_img'           => new sfValidatorPass(array('required' => false)),
      'top_img_title'     => new sfValidatorPass(array('required' => false)),
      'top_img_alt'       => new sfValidatorPass(array('required' => false)),
      'popis_levy'        => new sfValidatorPass(array('required' => false)),
      'popis_pravy'       => new sfValidatorPass(array('required' => false)),
      'region'            => new sfValidatorPass(array('required' => false)),
      'vzdalenost'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'img1'              => new sfValidatorPass(array('required' => false)),
      'img1_title'        => new sfValidatorPass(array('required' => false)),
      'img1_alt'          => new sfValidatorPass(array('required' => false)),
      'img2'              => new sfValidatorPass(array('required' => false)),
      'img2_title'        => new sfValidatorPass(array('required' => false)),
      'img2_alt'          => new sfValidatorPass(array('required' => false)),
      'img3'              => new sfValidatorPass(array('required' => false)),
      'img3_title'        => new sfValidatorPass(array('required' => false)),
      'img3_alt'          => new sfValidatorPass(array('required' => false)),
      'img4'              => new sfValidatorPass(array('required' => false)),
      'img4_title'        => new sfValidatorPass(array('required' => false)),
      'img4_alt'          => new sfValidatorPass(array('required' => false)),
      'promo1_title'      => new sfValidatorPass(array('required' => false)),
      'promo1_img'        => new sfValidatorPass(array('required' => false)),
      'promo1_img_title'  => new sfValidatorPass(array('required' => false)),
      'promo1_img_alt'    => new sfValidatorPass(array('required' => false)),
      'promo1_gallery_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery1'), 'column' => 'id')),
      'promo1_star'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promo1_popis'      => new sfValidatorPass(array('required' => false)),
      'promo1_cena'       => new sfValidatorPass(array('required' => false)),
      'promo1_link'       => new sfValidatorPass(array('required' => false)),
      'promo2_title'      => new sfValidatorPass(array('required' => false)),
      'promo2_img'        => new sfValidatorPass(array('required' => false)),
      'promo2_img_title'  => new sfValidatorPass(array('required' => false)),
      'promo2_img_alt'    => new sfValidatorPass(array('required' => false)),
      'promo2_gallery_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery2'), 'column' => 'id')),
      'promo2_star'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promo2_popis'      => new sfValidatorPass(array('required' => false)),
      'promo2_cena'       => new sfValidatorPass(array('required' => false)),
      'promo2_link'       => new sfValidatorPass(array('required' => false)),
      'promo3_title'      => new sfValidatorPass(array('required' => false)),
      'promo3_img'        => new sfValidatorPass(array('required' => false)),
      'promo3_img_title'  => new sfValidatorPass(array('required' => false)),
      'promo3_img_alt'    => new sfValidatorPass(array('required' => false)),
      'promo3_gallery_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery3'), 'column' => 'id')),
      'promo3_star'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promo3_popis'      => new sfValidatorPass(array('required' => false)),
      'promo3_cena'       => new sfValidatorPass(array('required' => false)),
      'promo3_link'       => new sfValidatorPass(array('required' => false)),
      'promo4_title'      => new sfValidatorPass(array('required' => false)),
      'promo4_img'        => new sfValidatorPass(array('required' => false)),
      'promo4_img_title'  => new sfValidatorPass(array('required' => false)),
      'promo4_img_alt'    => new sfValidatorPass(array('required' => false)),
      'promo4_gallery_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery4'), 'column' => 'id')),
      'promo4_star'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promo4_popis'      => new sfValidatorPass(array('required' => false)),
      'promo4_cena'       => new sfValidatorPass(array('required' => false)),
      'promo4_link'       => new sfValidatorPass(array('required' => false)),
      'baner1_img'        => new sfValidatorPass(array('required' => false)),
      'baner1_img_title'  => new sfValidatorPass(array('required' => false)),
      'baner1_img_alt'    => new sfValidatorPass(array('required' => false)),
      'baner1_link'       => new sfValidatorPass(array('required' => false)),
      'baner2_img'        => new sfValidatorPass(array('required' => false)),
      'baner2_img_title'  => new sfValidatorPass(array('required' => false)),
      'baner2_img_alt'    => new sfValidatorPass(array('required' => false)),
      'baner2_link'       => new sfValidatorPass(array('required' => false)),
      'baner3_img'        => new sfValidatorPass(array('required' => false)),
      'baner3_img_title'  => new sfValidatorPass(array('required' => false)),
      'baner3_img_alt'    => new sfValidatorPass(array('required' => false)),
      'baner3_link'       => new sfValidatorPass(array('required' => false)),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('stranka_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Stranka';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'name'              => 'Text',
      'link_h1'           => 'Text',
      'title_seo'         => 'Text',
      'keywords'          => 'Text',
      'description'       => 'Text',
      'title_str'         => 'Text',
      'top_img'           => 'Text',
      'top_img_title'     => 'Text',
      'top_img_alt'       => 'Text',
      'popis_levy'        => 'Text',
      'popis_pravy'       => 'Text',
      'region'            => 'Text',
      'vzdalenost'        => 'Number',
      'img1'              => 'Text',
      'img1_title'        => 'Text',
      'img1_alt'          => 'Text',
      'img2'              => 'Text',
      'img2_title'        => 'Text',
      'img2_alt'          => 'Text',
      'img3'              => 'Text',
      'img3_title'        => 'Text',
      'img3_alt'          => 'Text',
      'img4'              => 'Text',
      'img4_title'        => 'Text',
      'img4_alt'          => 'Text',
      'promo1_title'      => 'Text',
      'promo1_img'        => 'Text',
      'promo1_img_title'  => 'Text',
      'promo1_img_alt'    => 'Text',
      'promo1_gallery_id' => 'ForeignKey',
      'promo1_star'       => 'Number',
      'promo1_popis'      => 'Text',
      'promo1_cena'       => 'Text',
      'promo1_link'       => 'Text',
      'promo2_title'      => 'Text',
      'promo2_img'        => 'Text',
      'promo2_img_title'  => 'Text',
      'promo2_img_alt'    => 'Text',
      'promo2_gallery_id' => 'ForeignKey',
      'promo2_star'       => 'Number',
      'promo2_popis'      => 'Text',
      'promo2_cena'       => 'Text',
      'promo2_link'       => 'Text',
      'promo3_title'      => 'Text',
      'promo3_img'        => 'Text',
      'promo3_img_title'  => 'Text',
      'promo3_img_alt'    => 'Text',
      'promo3_gallery_id' => 'ForeignKey',
      'promo3_star'       => 'Number',
      'promo3_popis'      => 'Text',
      'promo3_cena'       => 'Text',
      'promo3_link'       => 'Text',
      'promo4_title'      => 'Text',
      'promo4_img'        => 'Text',
      'promo4_img_title'  => 'Text',
      'promo4_img_alt'    => 'Text',
      'promo4_gallery_id' => 'ForeignKey',
      'promo4_star'       => 'Number',
      'promo4_popis'      => 'Text',
      'promo4_cena'       => 'Text',
      'promo4_link'       => 'Text',
      'baner1_img'        => 'Text',
      'baner1_img_title'  => 'Text',
      'baner1_img_alt'    => 'Text',
      'baner1_link'       => 'Text',
      'baner2_img'        => 'Text',
      'baner2_img_title'  => 'Text',
      'baner2_img_alt'    => 'Text',
      'baner2_link'       => 'Text',
      'baner3_img'        => 'Text',
      'baner3_img_title'  => 'Text',
      'baner3_img_alt'    => 'Text',
      'baner3_link'       => 'Text',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
      'slug'              => 'Text',
    );
  }
}
