<?php
/**
* @package OS Gallery
* @copyright 2016 OrdaSoft
* @author 2016 Andrey Kvasnevskiy(akbet@mail.ru),Roman Akoev (akoevroman@gmail.com)
* @license GNU General Public License version 2 or later;
* @description Ordasoft Image Gallery
*/


defined('_JEXEC') or die;

jimport( 'joomla.plugin.plugin' );

class plgSystemOsGallery_system extends JPlugin{
/**
* Constructor.
* @access protected
* @param object $subject The object to observe
* @param array   $config  An array that holds the plugin configuration
* @since 1.0
*/

  public function __construct( &$subject, $config ){
    parent::__construct( $subject, $config );
  }

  public function onContentPrepare($context, &$article, &$params){
    $app = JFactory::getApplication();
    $doc = JFactory::getDocument();
    $html = $app->getBody();
    if ($app->isSite() && $doc->getType() == 'html') {
      JLoader::register('osGallerySocialButtonsHelper', JPATH_SITE . '/components/com_osgallery/helpers/osGallerySocialButtonsHelper.php');
      JLoader::register('osGalleryHelperSite', JPATH_SITE . "/components/com_osgallery/helpers/osGalleryHelperSite.php");
      if(isset($article->introtext)){
        $article_content = $article->introtext;
        preg_match_all('{os-gal-[0-9]{1,}}',$article_content,$matches);
        if(isset($matches[0]) && count($matches[0])){
          foreach ($matches[0] as $key => $shortCode) {
            if(strpos("os-gal-", $shortCode) == 0){
              $galId = str_replace('os-gal-', '', $shortCode);
              $galIds = array(0=>$galId);
              //other layout
              ob_start();
                osGalleryHelperSite::displayView($galIds);
                $article_content = str_replace("{os-gal-".$galId."}", ob_get_contents(), $article_content);
              ob_end_clean();
            }
          }
        }
        $article->introtext = $article_content;
      }
    }
  }

  public function onAfterRender()
  {
    $app = JFactory::getApplication();
    $doc = JFactory::getDocument();
    $db = JFactory::getDBO();
    $params = new JRegistry;
    $html = $app->getBody();
    if ($app->isSite() && $doc->getType() == 'html') {
      $html = $app->getBody();
      $pos = strpos($html, '</head>');
      $head = substr($html, 0, $pos);

      $body = substr($html, $pos);
      JLoader::register('osGallerySocialButtonsHelper', JPATH_SITE . '/components/com_osgallery/helpers/osGallerySocialButtonsHelper.php');
      JLoader::register('osGalleryHelperSite', JPATH_SITE . "/components/com_osgallery/helpers/osGalleryHelperSite.php");
      if(isset($body)){
        preg_match_all('{os-gal-[0-9]{1,}}',$body,$matches,PREG_OFFSET_CAPTURE);
        if(isset($matches[0]) && count($matches[0])){
          $buttons = false;
          $thumbnail = false;
          $wheel = false;
          foreach ($matches[0] as $key => $shortCode) {
            //var_dump($shortCode); exit;
            if(strpos("os-gal-", $shortCode[0]) == 0){
              $galId = str_replace('os-gal-', '', $shortCode[0]);
              //load params
              $query = "SELECT params FROM #__os_gallery WHERE id=$galId";
              $db->setQuery($query);
              $paramsString = $db->loadResult();
              if($paramsString){
                  $params->loadString($paramsString);
              }
              if($params->get("helper_buttons"))$buttons = true;
              if($params->get("helper_thumbnail"))$thumbnail = true;
              if($params->get("mouse_wheel",1))$wheel = true;
              $galIds = array(0=>$galId);

              //Check for the EasyBlog component that inserts shortcods into the JavaScript
              if($key == 0){
                $substr_pos1 = $shortCode[1] - 500;
                $checked_segment = substr($body, $substr_pos1, 550);
              }else{
                preg_match_all('{os-gal-[0-9]{1,}}',$body,$matches2,PREG_OFFSET_CAPTURE);
                $substr_pos1 = $matches2[0][0][1] - 500;
                $checked_segment = substr($body, $substr_pos1, 550);
              }
              if(stripos($checked_segment, '"articleBody":') === FALSE){
                ob_start();
                  osGalleryHelperSite::displayView($galIds);
                  $body = preg_replace("#{os-gal-".$galId."}#", ob_get_contents(), $body, 1);
                ob_end_clean();
              }else{
                  $body = preg_replace("#{os-gal-".$galId."}#", '[os-gal-'.$galId.']', $body, 1);
              }
              //other layout
              
            }
          }
          $head = $this->addStyle($head, $buttons, $thumbnail, $wheel);
        }
      }
      $app->setBody($head.$body);
    }
  }

  public function addStyle($head, $buttons, $thumbnail, $wheel){
    $link = JURI::base() . 'components/com_osgallery/assets/css/os-gallery.css';
    if(!preg_match_all('|os-gallery.css|',$head,$matches)){
      $head .= '<link rel="stylesheet" href="'.$link.'">'."\n";
    }

    $link = JURI::base() . 'components/com_osgallery/assets/css/font-awesome.min.css';
    if(!preg_match_all('|font-awesome.min.css|',$head,$matches)){
      $head .= '<link rel="stylesheet" href="'.$link.'">'."\n";
    }

    $link = JURI::base() . 'components/com_osgallery/assets/libraries/os_fancybox/jquer.os_fancyboxGall.css';
    if(!preg_match_all('|jquer.os_fancyboxGall|',$head,$matches)){
      $head .= '<link rel="stylesheet" href="'.$link.'">'."\n";
    }

    $link = JURI::base() . 'components/com_osgallery/assets/libraries/jQuer/jQuerOs-2.2.4.min.js';
    if(!preg_match_all('|jQuerOs-2.2.4.min.js|',$head,$matches)){
      $head .= '<script type="text/javascript" src="'.$link.'"></script>'."\n";
    }

    $link = JURI::base() . 'components/com_osgallery/assets/libraries/os_fancybox/jquer.os_fancyboxGall.js';
    if(!preg_match_all('|jquer.os_fancyboxGall.js|',$head,$matches)){
      $head .= '<script type="text/javascript" src="'.$link.'"></script>'."\n";
    }

    
    $link = JURI::base() . 'components/com_osgallery/assets/libraries/imagesloadedGall.pkgd.min.js';
    if(!preg_match_all('|imagesloadedGall.pkgd.min.js|',$head,$matches)){
      $head .= '<script type="text/javascript" src="'.$link.'"></script>'."\n";
    }

    $link = JURI::base() . 'components/com_osgallery/assets/libraries/isotope/isotope.pkgd.min.js';
    if(!preg_match_all('|isotope.pkgd.min.js|',$head,$matches)){
      $head .= '<script type="text/javascript" src="'.$link.'"></script>'."\n";
    }


    if($buttons){
      $link = JURI::base() . 'components/com_osgallery/assets/libraries/os_fancybox/helpers/jquer.os_fancybox-buttons.css';
      if(!preg_match_all('|jquer.os_fancybox-buttons.css|',$head,$matches)){
        $head .= '<link rel="stylesheet" href="'.$link.'">'."\n";
      }

      $link = JURI::base() . 'components/com_osgallery/assets/libraries/os_fancybox/helpers/jquer.os_fancyboxGall-buttons.js';
      if(!preg_match_all('|jquer.os_fancyboxGall-buttons.js|',$head,$matches)){
        $head .= '<script type="text/javascript" src="'.$link.'"></script>'."\n";
      }
    }

    if($thumbnail){
      $link = JURI::base() . 'components/com_osgallery/assets/libraries/os_fancybox/helpers/jquer.os_fancybox-thumbs.css';
      if(!preg_match_all('|jquer.os_fancybox-thumbs.css|',$head,$matches)){
        $head .= '<link rel="stylesheet" href="'.$link.'">'."\n";
      }

      $link = JURI::base() . 'components/com_osgallery/assets/libraries/os_fancybox/helpers/jquer.os_fancyboxGall-thumbs.js';
      if(!preg_match_all('|jquer.os_fancyboxGall-thumbs.js|',$head,$matches)){
        $head .= '<script type="text/javascript" src="'.$link.'"></script>'."\n";
      }
    }

    if($wheel){
      $link = JURI::base() . 'components/com_osgallery/assets/libraries/os_fancybox/helpers/jquer.mousewheel-3.0.6.pack.js';
      if(!preg_match_all('|jquer.mousewheel-3.0.6.pack.js|',$head,$matches)){
        $head .= '<script type="text/javascript" src="'.$link.'"></script>'."\n";
      }
    }
    $link = JURI::root() . "components/com_osgallery/assets/js/osGallery.main.js";
    if(!preg_match_all('|osGallery.main.js|',$head,$matches)){
      $head .= '<script type="text/javascript" src="'.$link.'"></script>'."\n";
    }

    return $head;
  }
}