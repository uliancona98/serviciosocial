<?php
/**
* @package OS Gallery
* @copyright 2019 OrdaSoft
* @author 2019 Andrey Kvasnevskiy(akbet@mail.ru),Roman Akoev (akoevroman@gmail.com), Vladislav Prikhodko (vlados.vp1@gmail.com)
* @license GNU General Public License version 2 or later;
* @description Ordasoft Image Gallery
*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

if(count($images)){
$galId_random = $galId."_". rand();
self::addMetaTags();
$img_count_cat_js = isset($img_count_cat) ? json_encode($img_count_cat) : '';

?>
    <div class="os-gallery-tabs-main-<?php echo $galId_random?>">

        <div id="os_progres_img-<?php echo $galId_random; ?>" class="img-block1"></div> 

               
        <div class="os-cat-tab-images">
            <div id="cat-1-<?php echo $galId_random?>" data-cat-id="1" style="display: none;" >
            <?php
            foreach($images as $image){
                //var_dump($imgParamsArray);
                //var_dump($image);
                $currentImgParams = new JRegistry;
                $currentImgParams = $currentImgParams->loadString(urldecode($imgParamsArray[$image->id]->params));
                $imgAlt = ($currentImgParams->get("imgAlt",''))? $currentImgParams->get("imgAlt",'') : $image->file_name;
                if($currentImgParams->get("imgTitle",'')){
                $imgTitle = $currentImgParams->get("imgTitle",'') . '</br>';}
                else {$imgTitle = $currentImgParams->get("imgTitle",'');}
                if ($currentImgParams->get("imgShortDescription",'')){
                $imgShortDesc = $currentImgParams->get("imgShortDescription",'') . '</br>';}
                else {$imgShortDesc = $currentImgParams->get("imgShortDescription",'');}
                if ($imgVideoLink = $currentImgParams->get("videoLink", '')){
                    $imgVideoLink = $currentImgParams->get("videoLink", '');
                } else {
                    $imgHtml = $currentImgParams->get("imgHtml", '');
                    $imgHtmlShow = $currentImgParams->get("imgHtmlShow", 'yes');
                    $htmlWidthAsImage = ($imgHtmlShow == 'yes' && $currentImgParams->get("htmlWidthAsImg", "yes") == "yes");
                    $htmlPosition = ($imgHtmlShow == 'yes') ? $currentImgParams->get("htmlPosition", "bottom") : 'bottom';
                }

                if($params->get("watermark_enable",false)){
                    $imgLink = JURI::root().'images/com_osgallery/gal-'.$image->galId.'/original/watermark/'.$image->file_name;
                }else{
                    $imgLink = JURI::root().'images/com_osgallery/gal-'.$image->galId.'/original/'.$image->file_name;
                }

                $imgOpen = '';
                if($currentImgParams->get("imgLink",'')){
                    $imgLink = $currentImgParams->get("imgLink",'');
                    $imgOpen = $currentImgParams->get("imgLinkOpen",'_blank');
                }
                $styleImg = 'style="margin:'.$imageMargin.'px;"';

        ?>

        <div class="img-block text-<?php echo $imgTextPosition; ?> <?php echo $imageHover ?>-effect <?php echo $numberImagesEffect; ?> animated" <?php echo $styleImg ?> >
            <!-- a -->
            <a  
                <?php 
                $is_tmp_chk = $currentImgParams->get('imgLink','');
                if( empty( $is_tmp_chk ) ) { ?>
                data-index="<?php echo $image->ordering; ?>"
                class="os_fancybox-1"
                data-os_fancybox="os_fancybox_search"
                <?php } ?>
                id="os_image_id-<?php echo $image->id; ?>" 
                rel="group" 
                target="<?php echo $imgOpen?>" 
                <?php 
                $is_tmp_chk = $currentImgParams->get("imgLink",'') ;
                $imgVideoLink = trim($imgVideoLink) ;
                if(isset($imgHtml->html) && !empty($imgHtml->html) && empty( $is_tmp_chk) ) {  ?>
                   data-options='{"src": "#data-html-<?php echo $image->id; ?>", "smallBtn" : false}'
                <?php }if(!empty( $imgVideoLink ) ) {  ?>
                   href="<?php echo $imgVideoLink?>"
                <?php }else{ ?>
                   href="<?php echo $imgLink?>"
                <?php } ?>
                data-caption="<?php echo $showImgTitle ? $imgTitle : ''?><?php echo $showImgDescription ? $imgShortDesc : ''?>" 
                >
                <!-- titles for gallery -->
                <?php if($imgTextPosition != 'bottom' && $imgTextPosition != 'none'){ ?>
                    <div class="os-gallery-caption<?php echo ($imgTextPosition == 'onImage')?' ':'-';?><?php echo $imgTextPosition; ?> <?php echo ($imgShortDesc)?'':'empty-desc-top'; ?>"
                         <?php echo ($imgTextPosition == 'onImage')?'':$imgTextStyle;?>>
                        <?php
                            if($imgTitle) {
                                echo "<h3 class='os-gallery-img-title'>".strip_tags(substr($imgTitle, 0, $imgMaxlengthTitle))."</h3>";
                            }
                            if($imgShortDesc) {
                                echo "<p class='os-gallery-img-desc'>".strip_tags(substr($imgShortDesc, 0, $imgMaxlengthDesc))."</p>";
                            }
                        ?>
                    </div>
                <?php } ?>
                <!-- img for gallery -->
                <img src="<?php echo JURI::root()?>images/com_osgallery/gal-<?php echo $image->galId?>/thumbnail/<?php echo $image->file_name?>" alt="<?php echo $imgAlt?>">

                <span class='andrea-zoom-in'></span>
                
                <?php if($imgTextPosition == 'bottom'){ ?>
                    <div class="os-gallery-caption-<?php echo $imgTextPosition; ?> <?php echo ($imgShortDesc)?'':'empty-desc-bottom'; ?>" <?php echo $imgTextStyle; ?>>
                        <?php
                            if($imgTitle) {
                                echo "<h3 class='os-gallery-img-title'>".strip_tags(substr($imgTitle, 0, $imgMaxlengthTitle))."</h3>";
                            }
                            if($imgShortDesc) {
                                echo "<p class='os-gallery-img-desc'>".strip_tags(substr($imgShortDesc, 0, $imgMaxlengthDesc))."</p>";
                            }
                        ?>
                    </div>
                <?php } ?>
            </a>

            <?php if(isset($imgHtml->html) && !empty($imgHtml->html)) { ?>

                <?php 
                    // class for block width as image
                    $htmlWidthAsImageClass = ($htmlWidthAsImage) ? 'htmlWidthAsImage' : ''; 
                    // class for position html
                    $htmlPositionClass = ($htmlPosition) ? 'position_'.$htmlPosition : '';
                ?>   

                <div style="display: none;" class="data-html-wrap <?php echo $htmlWidthAsImageClass; ?> <?php echo $htmlPositionClass; ?>" id="data-html-<?php echo $image->id; ?>">
                    <?php if($imgHtmlShow == 'yes'){?>
                        <div class="imgInHtml">    
                            <img src="<?php echo $imgLink; ?>">
                        </div>
                    <?php } ?>
                    <div class="contentInHtml">
                       <?php echo $imgHtml->html ; ?>
                    </div>
                </div>
            <?php } ?>
            </div>
                        
                
                <!-- END simple mod-->
            <?php
            } ?>
        </div>
        </div>
        
        <div class="scrollPoint_<?php echo $galId_random; ?>"></div>

        <?php if ($showLoadMore) { ?>
        <div class="osGallery-button-box" id="button-<?php echo $galId_random?>">
            <div id="os_lm_progres_img-<?php echo $galId_random; ?>" class="img-block1-load-more"></div>
            <button id="load-more-<?php echo $galId_random; ?>"  class="load-more-button" style="<?php echo ($showLoadMore != 'button') ? 'display:none;':''; ?> background:<?php echo $load_more_background; ?>"> 
                    <?php echo $loadMoreButtonText; ?>                
            </button>
        </div>
        <?php } ?>

        <script>
            jQuerOs(window).on('load',function($) {
                from_history = false;
                jQuerOs('#os_progres_img-<?php echo $galId_random; ?>:last' ).attr('class', ""); 

                var gallery = new osGallery(".os-gallery-tabs-main-<?php echo $galId_random;?>",{
                    minImgEnable : <?php echo $minImgEnable?>,
                    spaceBetween: <?php echo $imageMargin?>,
                    minImgSize: <?php echo $minImgSize?>,
                    numColumns: <?php echo $numColumns?>,
                    showImgTitle: '<?php echo $params->get('showImgTitle'); ?>',
                    showImgDescription: '<?php echo $params->get('showImgTitle'); ?>',
                    limEnd: '<?php echo $numberImages?>',
                    galId: '<?php echo $galId; ?>',
                    galIdRandom: '<?php echo $galId_random; ?>',
                    imgCountCat: '<?php echo $img_count_cat_js; ?>',
                    load_more_background: '<?php echo $load_more_background; ?>',
                    os_fancybox_background: '<?php echo $os_fancybox_background; ?>',
                    showLoadMore: '<?php echo $showLoadMore; ?>',
                    juri: '<?php echo JURI::root(); ?>',
                    itemId: '<?php echo $itemId ?>',
                    layout: 'default',
                    fancSettings:{
                        wrapCSS: 'os-os_fancybox-window',
                        animationEffect : "<?php echo $open_close_effect?>",
                        animationDuration : "<?php echo $open_close_speed?>",
                        transitionEffect : "<?php echo $prev_next_effect?>",
                        transitionDuration : "<?php echo $prev_next_speed?>",
                        loop: <?php echo $loop?>,
                        arrows: <?php echo $os_fancybox_arrows?>,
                        clickContent: "<?php echo $next_click?>",
                        wheel: <?php echo $mouse_wheel?>,
                        slideShow : {
                            autoStart : <?php echo $os_fancybox_autoplay?>,
                            speed     : <?php echo $autoplay_speed?>
                        },
                        clickSlide : <?php echo $click_close?>,
                        thumbs : {
                            autoStart : '0',
                            axis : '0'
                        },
                        buttons : {
                            'slideShow': '0',
                            'fullScreen': '0',
                           'thumbs': '0',
                            'share': '0',
                            'download': '0',
                            'zoom': '0', 
                            'arrowLeft': '<?php echo $left_arrow?>', 
                            'arrowRight': '<?php echo $right_arrow?>', 
                            'close': '<?php echo $close_button?>'
                        },
                        share : {
                            tpl : '<?php echo $share_tpl?>'
                        },
                        infobar : <?php echo $infobar?>,
                        baseClass : '<?php echo $os_fancybox_thumbnail_position?>'
                    }
                });

                
                
                // add social sharing script
                var href = window.location.href;
                var img_el_id = '';
                var pos1 = href.indexOf('os_image_id'); 
                var pos2 = href.lastIndexOf('#'); 
                var os_show_load_more = "<?php echo $showLoadMore; ?>";
                if (pos1 > -1 && pos2 > - 1) {
                    img_el_id = href.substring(pos1, pos2); 
                }else if(pos1 > -1 && pos2 == -1){
                    img_el_id = href.substring(pos1);
                }
                os_fancy_box_getInst = jQuerOs.os_fancybox.getInstance(); 
                
                if(!os_fancy_box_getInst){
                    if(img_el_id && img_el_id.indexOf('os_image_id') > -1)  {

                        if(document.getElementById(img_el_id) == null){
                            if (os_show_load_more == 'auto'){
                                gallery.loadMore("auto");

                            }
                            else if (os_show_load_more !== null){
                                gallery.loadMore("button");

                                jQuerOs('#load-more-<?php echo $galId_random;?>').trigger('click');

                            }

                        }

                        else {
                            jQuerOs('#' + img_el_id).trigger('click');
                        }
                    }
                }
                var position_gallery = href.indexOf('cat');
                var gallery_cat_id = '';
                var gallery_cat_id = href.substring(position_gallery);
                if(gallery_cat_id.indexOf('&') > -1){
                    gallery_cat_id = gallery_cat_id.substr(0, gallery_cat_id.indexOf('&'));
                }
                
                if(gallery_cat_id && gallery_cat_id.indexOf('cat-') > -1 && gallery_cat_id.indexOf('=') == -1){
                    jQuerOs('#' + gallery_cat_id + '<?php echo $galId_random?>').trigger('click');
                }
                
                
                window.onpopstate = function(event) {
                  //alert("location: " + document.location + ", state: " + JSON.stringify(event.state));
                  from_history = true;
                  
                  var href = window.location.href;
                  
                    var img_el_id = '';
                    var pos1 = href.indexOf('os_image_id'); 
                    var pos2 = href.lastIndexOf('-'); 
                    os_fancy_box_getInst = jQuerOs.os_fancybox.getInstance(); 
                    if (!os_fancy_box_getInst && (pos1 > -1)){
                        if (pos1 > -1 && href.indexOf('#os_fancybox') > - 1) {
                            pos2 = href.lastIndexOf('#os_fancybox')
                            img_el_id = href.substring(pos1, pos2); 
                        }else if(pos1 > -1 && href.indexOf('#os_fancybox') == -1){
                            img_el_id = href.substring(pos1);
                        }
                        
                        jQuerOs('#' + img_el_id).trigger('click');
                    }
                    else if (pos1 > -1) {
                        img_el_id = href.substring(pos1);
                        var ordering_id = jQuerOs('#' + img_el_id).attr('data-index');
                        
                        os_fancy_box_getInst.jumpTo(ordering_id);
                    }else if(pos1 == -1 && href.indexOf('os_fancybox') == -1 && os_fancy_box_getInst){
                        os_fancy_box_getInst.close();
                    }
                    var cat_id = '';
                    if(href.indexOf('cat-') > -1 && href.indexOf('os_image_id') == -1){
                        cat_id = href.substring(href.indexOf('cat-'));
                        jQuerOs('#' + cat_id + '<?php echo $galId_random?>').trigger('click');
                    }
                     from_history = false;
                };
                // end sharing script 

            });
            
            
        </script>
        
        <noscript>Javascript is required to use OS Responsive Image Gallery<a href="http://ordasoft.com/os-responsive-image-gallery" title="OS Responsive Image Gallery">OS Responsive Image Gallery</a> with awesome layouts and nice hover effects, Drag&Drop, Watermark and stunning Fancybox features. 
        Tags: <a
         href="http://ordasoft.com/os-responsive-image-gallery">responsive image gallery</a>, joomla gallery, joomla responsive gallery, best joomla  gallery, image joomla gallery, joomla gallery extension, image gallery module for joomla 3, gallery component for joomla
        </noscript>
        <div class="copyright-block">
          <a href="http://ordasoft.com/" class="copyright-link">&copy;<?php echo date('Y');?> OrdaSoft.com All rights reserved. </a>
        </div>
    </div>
<?php
}
