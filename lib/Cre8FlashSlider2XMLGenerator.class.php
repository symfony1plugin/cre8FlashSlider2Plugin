<?php

class Cre8FlashSlider2XMLGenerator
{
  static public function updateAndSave()
  {
    
    $filePath = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'cre8_flash_slider2_data.xml';
    
    $dom = new DOMDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    
    $root = $dom->appendChild(new DOMElement('slider'));
    
    $root->appendChild(new DOMAttr('width', sfConfig::get('app_cre8_flash_slider2_width', 468)));
    $root->appendChild(new DOMAttr('height', sfConfig::get('app_cre8_flash_slider2_height', 268)));
    $root->appendChild(new DOMAttr('autoplay', sfConfig::get('app_cre8_flash_slider2_autoplay', 1)));
    $root->appendChild(new DOMAttr('delay', sfConfig::get('app_cre8_flash_slider2_delay', 5000)));
    $root->appendChild(new DOMAttr('showButtons', sfConfig::get('app_cre8_flash_slider2_showButtons', 1)));
    $root->appendChild(new DOMAttr('showSlideButtons', sfConfig::get('app_cre8_flash_slider2_showSlideButtons', 1)));
    $root->appendChild(new DOMAttr('buttonColor', sfConfig::get('app_cre8_flash_slider2_buttonColor', '0x333333')));
    $root->appendChild(new DOMAttr('buttonRolloverColor', sfConfig::get('app_cre8_flash_slider2_buttonRolloverColor', '0x00B6FF')));
    
    $c = new Criteria();
    $c->addAscendingOrderByColumn(Cre8FlashSlider2Peer::RANK);
    foreach(Cre8FlashSlider2Peer::doSelect($c) as $image) {
      $row = $root->appendChild(new DOMElement('image'));
      $row->appendChild(new DOMAttr('source', '/uploads/' . $image->getFilename()));
      $row->appendChild(new DOMAttr('target', ($url = $image->getUrl()) ? $url : '#'));
    }
    $dom->save($filePath);
    return $dom;
  }
  
}