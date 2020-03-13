(function () {
    
    var osGallery = function (container, params) {
        if (!(this instanceof osGallery)) return new osGallery(container, params);

        var defaults = {
            minImgEnable : 1,
            spaceBetween: 2.5,
            minImgSize: 200,
            numColumns: 3,
            showImgTitle: '',
            showImgDescription: '',
            limEnd: 5,
            galId: 1,
            galIdRandom: 1,
            imgCountCat: '',
            load_more_background: '',
            os_fancybox_background: '',
            showLoadMore: '',
            juri: '',
            itemId: '',
            layout: 'default',
            fancSettings:{
                wrapCSS: 'os-os_fancybox-window',
                animationEffect: false,
                animationDuration: '500',
                transitionEffect: false,
                transitionDuration: '800',
                loop: false,
                arrows: true,
                clickContent: 'zoom',
                wheel : false,
                slideShow : {
                    autoStart : false,
                    speed     : 4000
                },
                clickSlide : 'close',
                thumbs : {
                    autoStart : true,
                    axis : 'y'
                },
                buttons : [
                'slideShow',
                'fullScreen',
                'thumbs',
                'share',
                'download',
                'zoom',
                'arrowLeft',
                'arrowRight',
                'close'
                ],
                share : {
                    tpl : ''
                },
                infobar : true,
                baseClass : 'thumb_right'
            }
        };

        for (var param in defaults) {
          if (!params[param] && params[param] != 0){
            params[param] = defaults[param];
          }
        }
        // gallery settings
        var osg = this;
        // Params
        osg.params = params || defaults;
            
        osg.getImgBlockWidth = function (numColumns){
            if(typeof(numColumns) == 'undefined')numColumns = osg.params.numColumns;
            var checkSpaceBetween = osg.params.spaceBetween;
            spaceBetween = osg.params.spaceBetween*2;
            mainBlockW = jQuerOs(container).width();
            
            imgBlockW = ( (((mainBlockW-(spaceBetween*numColumns))/numColumns) )*100)/mainBlockW  ;
            if(osg.params.minImgEnable){
                if(((imgBlockW*mainBlockW)/100) < osg.params.minImgSize){
                    numColumns--;
                    osg.getImgBlockWidth(numColumns);
                }
            }
            var sizeAwesome = ((imgBlockW*mainBlockW)/100)/11+"px";
            jQuerOs(container +" .andrea-effect .andrea-zoom-in").css({'width': sizeAwesome, 'height': sizeAwesome });
            var fontSizetext = ((imgBlockW*mainBlockW)/100)/15+"px";
            jQuerOs(container +" .img-block").css({'font-size': fontSizetext, 'line-height': fontSizetext });

            return imgBlockW;
            
        }
        
        //initialize function
        osg.init = function(limEnd){ 
            
            inProgressAjax = false;
            if(limEnd != 0) jQuerOs(container+" .osgalery-cat-tabs#"+osg.params.galIdRandom+" a.active").attr('data-end', limEnd);

            imgBlockW = osg.getImgBlockWidth();
            
            jQuerOs(container+" .osgalery-cat-tabs#"+osg.params.galIdRandom).css("padding", osg.params.spaceBetween + "px");
            jQuerOs("#button-"+osg.params.galIdRandom).css("padding", osg.params.spaceBetween + "px");
            jQuerOs(container+" .img-block").css("width",imgBlockW+"%");
            
            jQuerOs(container+" .os-cat-tab-images div[id^='cat-']").each(function(index, el) {

                catId = jQuerOs(this).data("cat-id");
                if(catId){

                    var os_fancy_box = jQuerOs(this).find(".os_fancybox-"+catId ).os_fancybox({



                       beforeShow: function(){

                            // resize html block to image width
                            if (this.os_image_id){
                                var id = this.os_image_id;
                            }
                            else {
                                var id = this.opts.$orig.attr('id');
                            }
                            id = id.split('-')[1];//get scalar id
                            var naturalWidth = jQuerOs('.htmlWidthAsImage#data-html-'+id+' .imgInHtml img').prop('naturalWidth');
                            if(naturalWidth){  
                                jQuerOs('.htmlWidthAsImage#data-html-'+id).css({'padding' : 0, 'width' : naturalWidth});
                                jQuerOs('.htmlWidthAsImage#data-html-'+id+' .contentInHtml').css({'padding' : 15});
                            }
                            jQuerOs('.os_fancybox-bg').css('backgroundColor', osg.params.os_fancybox_background);

                            if (this.os_image_id){
                                var id = this.os_image_id;
                            }    
                            else {
                                var id = this.opts.$orig.attr('id');
                            }

                            var href = window.location.href;

                            if(!from_history){


                                if (href.indexOf('&os_image_id') > -1) {

                                    history.pushState (null, null, href.substring(0, href.indexOf('&os_image_id') )+ "&" + id);
                                }
                                else if (href.indexOf('?os_image_id') > -1) {

                                    history.pushState (href, null, href.substring(0, href.indexOf('?os_image_id')) + "?" + id);}
                                else if (href.indexOf('?') > -1 && href.indexOf('&') > -1 && href.indexOf('&os_image_id') == -1){

                                    history.pushState(null, null, href + '&' + id);}
                                else if ( href.indexOf('&') == -1 && href.indexOf('?os_image_id') == -1 && href.indexOf('?') == -1){

                                    history.pushState(null, null, href + '?' + id);}
                                else if (href.indexOf('?') > -1 && href.indexOf('os_image_id') == -1 ){

                                    history.pushState(null, null, href + '&' + id);
                                }

                            }
//                                        
//                                       



                        },
                        beforeClose: function(){

                            var href = window.location.href;

                            if (href.indexOf('&os_image_id') > -1){
                                history.pushState (href, null, href.substring(0, href.indexOf('&os_image_id')));
                            }else{
                                history.pushState (href, null, href.substring(0, href.indexOf('?os_image_id')));
                            } 
                            
                        },
                        beforeLoad: function() {
                            //not use because call many times for one image



                        },
                        afterShow: function() {


                            var href = window.location.href;
                            var os_fancy_box_getInst = jQuerOs.os_fancybox.getInstance();
                            //get the length of the array
                            var os_fb_group_count = os_fancy_box_getInst.group.length;

                            //get the current position
                            var os_now = jQuerOs('.os_fancybox-thumbs-active').attr('data-index');
                            
                            //if there are less than 3 pictures left before the end of the array and if load more is possible, we call the load
                            var data_end = jQuerOs("#load-more-"+osg.params.galIdRandom).attr('data-end');
                            if(data_end == undefined){
                                data_end = 0
                            }
                            

                            if (Number(os_now) == os_fb_group_count && jQuerOs("#load-more-"+osg.params.galIdRandom).attr('data-end') > -1){
                                jQuerOs(".os_fancybox-button--arrow_right").attr('disabled', 'true');
                            }


                        },
                        afterLoad: function(){
                            //not use because call many times for one image
                        },        


                        wrapCSS    : osg.params.fancSettings.wrapCSS,

                        animationEffect : osg.params.fancSettings.animationEffect,
                        animationDuration : osg.params.fancSettings.animationDuration,
                        transitionEffect : osg.params.fancSettings.transitionEffect,
                        transitionDuration : osg.params.fancSettings.transitionDuration,
                        loop: osg.params.fancSettings.loop,
                        arrows: osg.params.fancSettings.arrows,
                        clickContent : function( current, event ) {
                            return current.type === 'image' ? osg.params.fancSettings.clickContent : false;
                        },
                        wheel : osg.params.fancSettings.wheel,
                        slideShow : {
                            autoStart : osg.params.fancSettings.slideShow.autoStart,
                            speed     : osg.params.fancSettings.slideShow.speed
                        },

                        clickSlide : osg.params.fancSettings.clickSlide,
                        thumbs : {
                            autoStart : osg.params.fancSettings.thumbs.autoStart,
                            axis      : osg.params.fancSettings.thumbs.axis
                        },
                        buttons : [
                            osg.params.fancSettings.buttons.slideShow,
                            osg.params.fancSettings.buttons.fullScreen,
                            osg.params.fancSettings.buttons.thumbs,
                            osg.params.fancSettings.buttons.share,
                            osg.params.fancSettings.buttons.download,
                            osg.params.fancSettings.buttons.zoom,
                            osg.params.fancSettings.buttons.arrowLeft,
                            osg.params.fancSettings.buttons.arrowRight,
                            osg.params.fancSettings.buttons.close,
                        ],
                        share : {
                            tpl : osg.params.fancSettings.share.tpl
                        },
                        infobar: osg.params.fancSettings.infobar, //counter on/off
                        baseClass : osg.params.fancSettings.baseClass, //add appropriate class to set thumbnails position {thumb_bottom},{thumb_right}

                    });
                }
            });
            
            jQuerOs(container+" .os-cat-tab-images div:first-child").show();
            jQuerOs(container+" .osgalery-cat-tabs#"+osg.params.galIdRandom+" li:first-child a").addClass("active");
            var curCatId = jQuerOs(container+" .osgalery-cat-tabs#"+osg.params.galIdRandom+" a.active").attr('data-cat-id');
            if(curCatId == undefined){
                curCatId = 1
            }
            var curEnd = jQuerOs(container+" .osgalery-cat-tabs#"+osg.params.galIdRandom+" a.active").attr('data-end');


            jQuerOs("#load-more-"+osg.params.galIdRandom).attr('data-cat-id', curCatId);
            jQuerOs("#load-more-"+osg.params.galIdRandom).attr('data-end', curEnd);

            if(osg.params.imgCountCat != ''){
                var img_count_cat = JSON.parse(osg.params.imgCountCat);
            }else{
                var img_count_cat = '';
            }

            if(img_count_cat != '' && jQuerOs('#cat-' + curCatId +'-'+osg.params.galIdRandom).children().length >= img_count_cat[curCatId]){
                jQuerOs("#load-more-"+osg.params.galIdRandom+"[data-cat-id="+curCatId+"]").hide();
            }else if(img_count_cat != '' && !Array.isArray(img_count_cat) && jQuerOs('#cat-1-'+osg.params.galIdRandom).children().length >= img_count_cat){
                jQuerOs("#load-more-"+osg.params.galIdRandom).hide();
            }
            
            jQuerOs(container+" .osgalery-cat-tabs#"+osg.params.galIdRandom+" a").click(function(e) {

                e.preventDefault();
                jQuerOs('li a').removeClass("active");
                jQuerOs(container+" .os-cat-tab-images>div").hide();
                jQuerOs(this).addClass("active");
                curCatId = jQuerOs(container+" .osgalery-cat-tabs#"+osg.params.galIdRandom+" a.active").attr('data-cat-id');
                var href = window.location.href;
                if (!from_history && href.indexOf('os_image_id') == -1){
                    if (href.indexOf('?cat-') > -1) {

                        history.pushState (null, null, href.substring(0, href.indexOf('?cat-') ) + '?cat-' + curCatId);
                    }else if (href.indexOf('&cat-') > -1) {

                        history.pushState (null, null, href.substring(0, href.indexOf('&cat-') ) + '?cat-' + curCatId);
                    }else if (href.indexOf('?') > -1){

                        history.pushState(null, null, href + '&cat-' + curCatId);
                    }else {

                        history.pushState(null, null, href + '?cat-' + curCatId);
                    }
                }

                jQuerOs("#cat-"+curCatId+"-"+osg.params.galIdRandom).show();
                jQuerOs("#load-more-"+osg.params.galIdRandom).attr('data-cat-id', curCatId);
                curEnd = jQuerOs(container+" .osgalery-cat-tabs#"+osg.params.galIdRandom+" a.active").attr('data-end');
                if(img_count_cat != '' && jQuerOs('#cat-' + curCatId +'-'+osg.params.galIdRandom).children().length >= Number(img_count_cat[curCatId])){

                    jQuerOs("#load-more-"+osg.params.galIdRandom+"[data-cat-id="+curCatId+"]").hide();
                }else{

                    jQuerOs("#load-more-"+osg.params.galIdRandom+"[data-cat-id="+curCatId+"]").show();
                }
                if(curEnd != -1){
                    jQuerOs("#load-more-"+osg.params.galIdRandom).removeAttr("disabled");
                    jQuerOs("#load-more-"+osg.params.galIdRandom).css("background", osg.params.load_more_background);
                }
                jQuerOs("#load-more-"+osg.params.galIdRandom).attr('data-end', curEnd);
                jQuerOs(jQuerOs(this).attr("href")).fadeTo(500, 1);


            });
            
            osg.resizeGallery = function (){
                imgBlockW = osg.getImgBlockWidth();
                jQuerOs(container+" .img-block").css("width",imgBlockW+"%");
            }

            jQuerOs(window).resize(function(event) {
                osg.resizeGallery();
            });
            
            

        }
        osg.init();
        setTimeout(osg.resizeGallery, 200);
    }
    window.osGallery = osGallery;
})();