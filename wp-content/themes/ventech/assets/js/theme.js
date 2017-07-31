/*****************************************************************
Table of Contents


1.) General Function
- debounce
- isElementInViewport
- isElementAtScrollTop
- scrollToElement
- getDataString
- _cb
- retrieveJSURL
- runAnimateNumber
- runPrettyPhoto
- getTwitterList
- runCarousel


2.) Run on document ready function
- startPreloader
- initActiveClass

- bindImageBackground
- initInputGroupFocus
- bindScrollButton

- bindToggleClass
- bindOpenMenuTrigger
- bindToggleSidebarMenu
- bindShopListToggle

- bindPageTransition
- bindFormValidate

- bindSpinner
- bindTooltip
- bindPopOver
- bindPrettyPhoto
- bindBootstrapSelect
- bindRadioAccordion
- bindStickySubMenu

- bindTwitterList
- bindFlickr
- bindGMap

- bindSocialShares
- bindCountdown
- bindPrettyPrint

- reinitCarouselOnTab
- bindVentroSlider

3.) Run on Window Scroll & Resize Function (also run on window load)
- checkStickyMenu
- checkActiveOnScroll
- checkShowAnimate
- checkAnimateNumber
- checkWaypoints


4.) Run on Window Resize Function (also run on window load)
- checkParallax
- checkScrollbar
- checkHoverToggle
- checkCollapseMenu
- checkStickySubMenu
- checkHeaderReplacement
- checkHeaderPadding


5.) Run on Window Load Function
- bindIsotope
- bindIsotopeFilter
- bindGalleryListSlider
- bindStaffSlider
- bindCarouselWidget
- removePreloader


Note: You can search using the title above
*****************************************************************/

"use strict";

var ThemeApp = function($)
{

    /*********************
    CONSTANT
    *********************/
    var SM_WIDTH = 527,
    MD_WIDTH = 751,
    LG_WIDTH = 975,
    XL_WIDTH = 1183,

    DEBOUNCE_TIME = 10, // Debounce Time in ms

    PRELOADER_DELAY = 2000,

    loadedCb = null;



    /*************************************
    1.) GENERAL FUNCTION
    *************************************/

    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.
    var debounce = function(func, wait, immediate)
    {
        var timeout;
        return function()
        {
            var context = this, args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function()
                {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
    },


    // Check if element is inside browser viewport
    isElementInViewport = function(elem, offset)
    {
        var $elem = $(elem),
        tb_offset = (offset) ? offset : 0;

        // Get the scroll position of the page.
        var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
        var viewportTop = $(scrollElem).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        // Get the position of the element on the page.
        var elemTop = Math.round( $elem.offset().top );
        var elemBottom = elemTop + $elem.height();

        return ((elemTop + tb_offset < viewportBottom) && (elemBottom - tb_offset > viewportTop));
    },


    // Check if element is at window scroll top with offset
    isElementAtScrollTop = function(elem, offset)
    {
        var $elem = $(elem),
        tb_offset = (offset) ? offset : 0;

        // Get the scroll position of the page.
        var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
        var viewportTop = $(scrollElem).scrollTop();
        var viewportBottom = viewportTop + tb_offset;

        // Get the position of the element on the page.
        var elemTop = Math.round( $elem.offset().top );
        //var elemBottom = elemTop + $elem.height();

        return ((elemTop >= viewportTop) && (elemTop <= viewportBottom));
    },


    // General scroll to element function
    scrollToElement = function(element, offset)
    {

        // if there is element then using top value element, if not then put 0
        var pos = element ? $(element).offset().top : 0;
        $('html,body').stop().animate(
            {
                scrollTop: pos + (offset ? offset : 0)
            }, 'slow');
    },

    // [data-this-text] return "this-text"
    getDataString = function(str)
    {
        return str.slice(6,str.length-1);
    },

    // Checks if callback function exists
    _cb = function(cb)
    {
        return cb && typeof cb==="function";
    },


    // Return url of <script> file name
    retrieveJSURL = function(filename)
    {
        var scripts = document.getElementsByTagName('script');
        if (scripts && scripts.length > 0)
        {
            for (var i in scripts)
            {
                if (scripts[i].src && scripts[i].src.match(new RegExp(filename+'\\.js$')))
                {
                    return scripts[i].src.replace(new RegExp('(.*)'+filename+'\\.js$'), '$1');
                }
            }
        } else
        {
            return 'Script Not Found';
        }

    },


    // Run animate number script
    runAnimateNumber = function(target,n,td,sp)
    {
        target.animateNumber(
            {
                number: n,
                numberStep: sp,
            },td);
    },


    // Run Pretty photo with custom template
    runPrettyPhoto = function(target)
    {
        var markupHTML = '<div class="pp_pic_holder">' +
        '<div class="pp_top">' +
        '<div class="pp_left"></div>' +
        '<div class="pp_middle"></div>' +
        '<div class="pp_right"></div>' +
        '</div>' +
        '<div class="pp_content_container">' +
        '<div class="pp_left">' +
        '<div class="pp_right">' +
        '<div class="pp_content">' +
        '<div class="pp_loaderIcon"></div>' +
        '<div class="pp_fade">' +
        '<a href="#" class="pp_expand" title="Expand the image">Expand</a>' +
        '<div class="pp_hoverContainer">' +
        '<a class="pp_next" href="#">next</a>' +
        '<a class="pp_previous" href="#">previous</a>' +
        '</div>' +
        '<div id="pp_full_res"></div>' +
        '<div class="pp_details">' +
        '<div class="ppt">&nbsp;</div>' +
        /*                                                   '<div class="pp_nav">' +
        '<a href="#" class="pp_arrow_previous">Previous</a>' +
        '<p class="currentTextHolder">0/0</p>' +
        '<a href="#" class="pp_arrow_next">Next</a>' +
        '</div>' + */
        '<p class="pp_description"></p>' +
        '{pp_social}' +
        '<a class="pp_close" href="#"><i class="lnr lnr-cross-circle"></i></a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="pp_bottom">' +
        '<div class="pp_left"></div>' +
        '<div class="pp_middle"></div>' +
        '<div class="pp_right"></div>' +
        '</div>' +
        '</div>' +
        '<div class="pp_overlay"></div>';
        $(target).prettyPhoto(
            {
                hook: 'data-rel',
                theme:'light_square',
                social_tools:'',
                markup: markupHTML
            });
    },


    // Get Twitter Feed List Function.
    getTwitterList = function(target, username, qty)
    {
        $(target).tweet(
            {
                //        modpath: modpath_value,
                username: username,
                join_text: "auto",
                count: qty,
                auto_join_text_default: "we said,",
                auto_join_text_ed: "we",
                auto_join_text_ing: "we were",
                auto_join_text_reply: "we replied to",
                auto_join_text_url: "we were checking out",
                loading_text: "loading tweets...",
                template: '<div class="menu-item menu-icon"><i class="menu-i fa fa-twitter"></i></div><div class="menu-item menu-text"><div>{text}</div><div class="mgt-5">{time}</div>',
            });
    },


    // Run general slick carousel
    runCarousel= function(target, n, ia, arr, d, ir, dn, df, ah)
    {
        var thisNumber = n,
        desktopNumber = 3,
        tabletNumber = 2,
        phoneNumber = 1;

        if ( thisNumber == 2 )
        {
            desktopNumber = 2
        }
        if ( thisNumber == 1 )
        {
            desktopNumber = 1;
            tabletNumber = 1;
        }
        if (!ir)
        {
            desktopNumber = thisNumber;
            tabletNumber = thisNumber;
            phoneNumber = thisNumber;
        }

        $(target).slick(
            {
                dots: d,
                arrows: arr,
                infinite: false,
                speed: 300,
                autoplay: ia,
                slidesToShow: thisNumber,
                slidesToScroll: thisNumber,
                asNavFor: dn,
                focusOnSelect: df,
                responsive: [
                    {
                        breakpoint: XL_WIDTH,
                        settings:
                        {
                            slidesToShow: desktopNumber,
                            slidesToScroll: desktopNumber,
                        }
                    },
                    {
                        breakpoint: MD_WIDTH,
                        settings:
                        {
                            slidesToShow: tabletNumber,
                            slidesToScroll: tabletNumber
                        }
                    },
                    {
                        breakpoint: SM_WIDTH,
                        settings:
                        {
                            slidesToShow: phoneNumber,
                            slidesToScroll: phoneNumber
                        }
                    }
                ],
                adaptiveHeight: ah
            });
    },



    /*************************************
    2.) DOCUMENT READY FUNCTION
    *************************************/

    // Start preloader transparancy
    startPreloader = function(target)
    {
        $('body').addClass('ov-hidden');
        $(target).addClass('active');
    },


    // Check active menu with body data attribute active page
    initActiveClass = function(target)
    {
        var dataString = getDataString(target),
            activePage = $('body').data(dataString);

        if (activePage !== undefined && activePage !== '')
        {
            $('#' + activePage).addClass('active');
        }
    },


    // Change data-img-bg into style image background
    bindImageBackground = function(target)
    {
        var dataString = getDataString(target);
        $(target).each(function()
            {
                var $this = $(this), 
                    imgSrc = "url('" + $this.data(dataString) + "')",
                    imgRepeat = (typeof $this.data('repeat') !== 'undefined') ? $this.data('repeat') : 'no-repeat',
                    imgPosition = (typeof $this.data('position') !== 'undefined') ? $this.data('position') : 'center 0px';
                $this.css(
                    {
                        'background-image': imgSrc,
                        'background-repeat' : imgRepeat
                    }
                );
            });
    },


    // Add focus class on input-group when focused on input inside it
    initInputGroupFocus = function(target)
    {
        $(target).each(function()
            {
                if ($(this).parent().hasClass('input-group'))
                {
                    $(this).focus(function()
                        {
                            $(this).parent().addClass('focus');
                        });
                    $(this).focusout(function()
                        {
                            $(this).parent().removeClass('focus');

                        });
                }
            });
    },


    //  Scroll To Element Button on Click Initialize
    bindScrollButton = function(target,offsetTarget)
    {
        var dataString = getDataString(target),
            offsetDataString = getDataString(offsetTarget);

        $(target).each(function()
            {
                var $this = $(this);
                $this.click(function(e)
                    {
                        e.preventDefault();
                        scrollToElement($this.data(dataString),$this.data(offsetDataString));
                    });
            });
    },


    // Bind Toggle Class Function into a button with class name and target to toggle
    bindToggleClass = function(target, toggleTarget)
    {
        var dataString = getDataString(target),
            dataToggleTarget = getDataString(toggleTarget);
        $(target).each(function()
            {
                var $this = $(this);
                $this.click(function(e)
                    {
                        e.preventDefault();
                        var $target = ($this.data(dataToggleTarget)) ? $($this.data(dataToggleTarget)) : $this,
                        className = $this.data(dataString);
                        $target.toggleClass(className);
                    });
            });
    },


    // Set open menu click action for mega menu
    bindOpenMenuTrigger = function(target)
    {
        $(document).on('click', target, function(e)
            {
                if ($(window).width() <= MD_WIDTH || $('body').hasClass('menu-vertical'))
                {
                    e.preventDefault();

                    var parent = $(this).parent(),
                    parentSiblings = $(this).parent().siblings(),
                    openedChildren = $(this).parent().find('.open'),
                    siblings = $(this).siblings();

                    // If menu is closed
                    if (! parent.hasClass('open'))
                    {
                        parent.addClass('open');
                        parentSiblings.removeClass('open');
                    } else
                    {
                        parent.removeClass('open');
                        openedChildren.removeClass('open');
                    }
                }
            });
    },


    // Check initial collapse value for primary menu
    bindToggleSidebarMenu = function(target,side)
    {
        var coverHTML = '<div class="cover-responsive"></div>';

        $(document).on('click', target, function(e)
            {
                if (!$('body').hasClass('nav-'+side+'-show'))
                {
                    $('body').addClass('nav-'+side+'-show');
                    $('.cover-responsive').addClass('active');
                    $(target).addClass('active');
                } else
                {
                    $('body').removeClass('nav-'+side+'-show');
                    $('.cover-responsive').removeClass('active');
                    $(target).removeClass('active');
                }
            });

        $('.body-inner').append(coverHTML);

        $(document).on('click', '.cover-responsive', function(e)
            {
                //if ($(window).width() <= MD_WIDTH) {
                $('body').removeClass('nav-left-show nav-right-show');
                $('.cover-responsive').removeClass('active');
                $(target).removeClass('active');
                // }
            });
    },


    // Toggle between grid and list view on shop product list
    bindShopListToggle = function(target, pList, pGrid)
    {
        var dataString = getDataString(target),
            targetDataString = getDataString(pList),
            gridDataString = getDataString(pGrid);

        $(target).each(function()
            {
                $(this).click(function(e)
                    {
                        e.preventDefault();
                        if (!$(this).hasClass('active'))
                        {

                            $(target).removeClass('active');
                            $(this).addClass('active');
                            var listType = $(this).data(dataString),
                            listTarget = $(this).data(targetDataString),
                            listGrid = ($(this).data(gridDataString) !== undefined) ? $(this).data(gridDataString) : 4,
                            listClass = '';

                            if (listType == 'list')
                            {
                                listClass = 'content-list list-lg list-break-sm list-pd-10 list-hover list-bordered product-list shop-list';
                                $(listTarget).find('.product-teaser-button').each(function()
                                    {
                                        $(this).find('.btn').removeClass('btn-block');
                                    });

                                $(listTarget).isotope('destroy');
                                $('.shop-item').removeAttr('style');

                            } else if (listType == 'grid')
                            {
                                listClass = 'content-grid column-xl-' + listGrid + ' column-lg-3 column-sm-2 column-xs-1 list-pd-10 wrap-side-10 list-hover product-list shop-grid';
                                $(listTarget).find('.product-teaser-button').each(function()
                                    {
                                        $(this).find('.btn').addClass('btn-block');
                                    });
                                $(listTarget).isotope(
                                    {
                                        itemSelector: ".shop-item",
                                        layoutMode: "fitRows"
                                    })

                            }
                            
                            // Reinit All Plugin Inside List
                            $(listTarget).removeAttr('class');
                            $(listTarget).addClass(listClass);
                            $(listTarget).find('.product-teaser-quantity .form-control').val('1');

                            $(listTarget).find('[data-carousel-widget]').each(function()
                                {
                                    $(this).slick('setPosition');
                                });
                            if (listType == 'grid')
                            {
                                $(listTarget).isotope('layout');
                            }
                        }

                    });
            });
    },


    // Page transtition animation
    bindPageTransition = function(target, pLinkEl, pTIn, pTOut)
    {
        if ($('body').data('page-transition'))
        {
            var linkEl = (typeof pLinkEl !== 'undefined') ? pLinkEl : '[data-rel^="translink"]',
                tIn = (typeof pTIn !== 'undefined') ? pTIn : 'fade-in',
                tOut = (typeof pTOut !== 'undefined') ? pTOut : 'fade-out';
            $(target).animsition(
                {
                    inClass: tIn,
                    outClass: tOut,
                    inDuration: 1500,
                    outDuration: 800,
                    linkElement: linkEl,
                    // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
                    loading: false,
                    loadingParentElement: 'body', //animsition wrapper element
                    loadingClass: 'animsition-loading',
                    loadingInner: '', // e.g '<img src="loading.svg" />'
                    timeout: false,
                    timeoutCountdown: 5000,
                    onLoadEvent: true,
                    browser: [ 'animation-duration', '-webkit-animation-duration'],
                    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
                    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
                    overlay : false,
                    overlayClass : 'animsition-overlay-slide',
                    overlayParentElement : 'body',
                    transition: function(url)
                    {
                        window.location.href = url;
                    }
                });
        }
    },


    // Validate form using jquery validation and ajax
    bindFormValidate = function(target)
    {
        $(target).each(function()
            {
                var formTarget = $(this),
                errorTarget = formTarget.find('[data-alert^=error]'),
                emptyMessage = errorTarget.find('.menu-text').html(),
                successTarget = formTarget.find('[data-alert^=success]'),
                submitTarget = formTarget.find('[data-button^=submit]'),
                options =
                {
                    type: "POST",
                    url:  formTarget.attr('action'),
                    dataType: "json",
                    success: function(data)
                    {
                        if (data.response == "success")
                        {
                            successTarget.fadeIn(500);
                            errorTarget.fadeOut(500);
                            scrollToElement(formTarget,-100);
                        } else if (data.response == "error")
                        {
                            successTarget.fadeOut(500);
                            errorTarget.fadeIn(500);
                            scrollToElement(formTarget,-100);
                            errorTarget.find('.menu-text').html(data.message);
                        } else if (data.response == "empty")
                        {
                            successTarget.fadeOut(500);
                            errorTarget.fadeIn(500);
                            scrollToElement(formTarget,-100);
                            errorTarget.find('.menu-text').html('There is empty field');
                        } else if (data.response == "unexpected")
                        {
                            successTarget.fadeOut(500);
                            errorTarget.fadeIn(500);
                            scrollToElement(formTarget,-100);
                            errorTarget.find('.menu-text').html('Unexpected results');
                        }

                        submitTarget.find('.waiting-icon').remove();
                        submitTarget.removeClass('disabled').removeAttr('disabled').blur();
                        windowResize();
                    },
                    error: function()
                    {
                        successTarget.fadeOut(500);
                        errorTarget.fadeIn(500);
                        submitTarget.find('.waiting-icon').remove();
                        submitTarget.removeClass('disabled').removeAttr('disabled').blur();
                        scrollToElement(formTarget,-100);
                        windowResize();
                    }
                };

                formTarget.validate(
                    {
                        errorElement: 'div', //default input error message container
                        errorClass: 'text-error', // default input error message class
                        focusInvalid: false, // do not focus the last invalid input
                        ignore: "",
                        errorPlacement: function(error, element)
                        {
                            if ($(element).parent().hasClass("checkbox") || element.parent().hasClass("radio"))
                            {
                                $(element).parent().append(error);
                            } else if (element.parent().hasClass("input-group"))
                            {
                                error.insertAfter(element.parent());
                                error.addClass('text-danger');
                            }else
                            {
                                error.insertAfter(element);
                                error.addClass('text-danger');
                            }
                        },

                        invalidHandler: function (event, validator)
                        {
                            //display error alert on form submit
                            successTarget.fadeOut(500);
                            errorTarget.fadeIn(500);
                            errorTarget.find('.menu-text').html(emptyMessage);
                            scrollToElement(formTarget,-100);
                            windowResize();
                        },

                        highlight: function (element)
                        {
                            // hightlight error inputs

                            $(element).addClass('bd-danger');
                            if ($(element).parent().hasClass("input-group"))
                            {
                                $(element).siblings('.input-group-addon').addClass('bd-danger');
                            }
                            $(element).siblings('.text-error').removeClass('lnr lnr-checkmark-circle text-success').addClass('text-danger');

                        },

                        unhighlight: function (element)
                        {
                            // revert the change done by hightlight
                            $(element)
                            .closest('.control-group').removeClass('error'); // set error class to the control group
                        },

                        success: function (label, element)
                        {
                            label
                            .addClass('valid').addClass('lnr lnr-checkmark-circle text-success').removeClass('text-danger') // mark the current input as valid and display OK icon
                            .closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
                            $(element).removeClass('bd-danger');
                            if ($(element).parent().hasClass("input-group"))
                            {
                                $(element).siblings('.input-group-addon').removeClass('bd-danger');
                            }
                        },

                        submitHandler: function (form)
                        {
                            submitTarget.prepend('<i class="fa fa-circle-o-notch fa-spin fa-fw mgr-5 waiting-icon"></i>').addClass('disabled').attr('disabled');
                            $(form).ajaxSubmit(options);
                        }
                    });
            });
    },


    // Change Input Into Spinner With Max and Min Value
    bindSpinner = function(target)
    {
        $(target).each(function()
            {
                var template = '',
                attrInput = '';
                $.each(this.attributes, function()
                    {
                        attrInput = attrInput + this.name + '=' + '"' + this.value + '" ';
                    });
                template =   '<div class="input-group width-xs-2"> ' +
                '<div class="input-group-btn">' + '<button type="button" class="btn btn-default" data-action="spinner-minus">-</button>' + '</div>' +
                '<input class="form-control text-center" type="text" '+ attrInput +' >' +
                '<div class="input-group-btn">' + '<button type="button" class="btn btn-default" data-action="spinner-plus">+</button>' + '</div>' +
                '</div>';
                $(this).replaceWith(template);
            });
        $(document).on('click','[data-action^="spinner-minus"]',function(e){
            e.preventDefault();
            var $input = $(this).parent().siblings('.form-control'),
            currentValue = parseInt($input.val());
            if (currentValue > 1)
            {
                $input.val(currentValue-1);
            }
        });
        $(document).on('click','[data-action^="spinner-plus"]',function(e){
            e.preventDefault();
            var $input = $(this).parent().siblings('.form-control'),
            currentValue = parseInt($input.val()),
            dataMax = ($input.data('max') !== undefined ) ? parseInt($input.data('max')) : 999999999;
            if (currentValue < dataMax)
            {
                $input.val(currentValue+1);
            }
        })
    },


    // Init bootstarp tooltip
    bindTooltip = function(target)
    {
        $(target).tooltip();
    },


    // Init bootstrap popover
    bindPopOver = function(target)
    {
        $(target).popover();
    },


    // Pretty Photo.
    // Info: - For Grouping:  <a data-rel="prettyPhoto[portfolio-group]">
    //         - For Single Image: <a data-rel="prettyPhoto">
    bindPrettyPhoto = function(target)
    {
        $(target).each(function()
            {
                runPrettyPhoto(target);
            });
    },


    // Change select element into bootstrap select
    bindBootstrapSelect = function(target)
    {
        $(target).selectpicker();
    },


    // Add additional feature to bootstrap accordion, to change it to radio accordion, with active class
    bindRadioAccordion = function(target, pActiveClass, pRadioID)
    {
        var dataString = getDataString(target),
            dataActiveClassString = getDataString(pActiveClass),
            dataRadioIDString = getDataString(pRadioID);
        $(target).each(function()
            {
                var group = $(this).data(dataString),
                activeClass = ($(this).data(dataActiveClassString)!== undefined ) ? $(this).data(dataActiveClassString) : 'panel-primary',
                radioID = $(this).data(dataRadioIDString),
                href = $(this).attr('href'),
                checkIcon = '<i class="check-accordion lnr lnr-checkmark-circle pull-right"></i>';
                $(this).click(function(e)
                    {
                        e.preventDefault();
                        if (!$(href).hasClass('in'))
                        {
                            // Collapse Others
                            $(group).find('.panel-collapse').collapse('hide');

                            // Remove Active Class
                            $(group).find('.panel').removeClass(activeClass);

                            //Remove Other Checkmark
                            $(group).find('.check-accordion').addClass('hidden');

                            // Show Current Content
                            $(href).collapse('show');

                            // Set Current Panel to Active
                            $(this).closest('.panel').addClass(activeClass);
                            $(this).find('.check-accordion').removeClass('hidden');
                            $(radioID).click();

                        } else
                        {
                            //$(href).collapse('hide');
                        }
                    });
            });
    },


    // Check sticky for sub menu
    bindStickySubMenu = function(target)
    {
        $(target).affix(
            {
                offset:
                {
                    top: function ()
                    {
                        return (this.bottom = $('.section-header').height() - $('header').height() )
                    },
                    bottom: 0,
                }
            })
        $(target)
        .on('affixed-top.bs.affix', function (e)
            {
                $(target).removeAttr('style');
            })
        .on('affixed.bs.affix', function (e)
            {
                $(target).css('top',$('header').outerHeight());
            });

        // Prevent wrong calculation of header height
        if ($(target).hasClass('affix'))
        {
            var timeout;
            clearTimeout(timeout);
            timeout = setTimeout(function()
                {
                    timeout = null;
                    $(target).css('top',$('header').outerHeight());
                }, 1000);
        }else
        {
            $(target).removeAttr('style');
        }
    },


    // Get twitter list and change it to carousel
    bindTwitterList = function(target, pTwitterDisplay, pCarousel)
    {
        var dataString = getDataString(target),
            dataDisplayString = getDataString(pTwitterDisplay),
            dataCarouselString = getDataString(pCarousel);

        $(target).each(function()
            {
                var user = $(this).data(dataString),
                display = ($(this).data(dataDisplayString)) ? parseInt($(this).data(dataDisplayString)) : 4;

                getTwitterList(this, user, display);

                var carouselNumber = $(this).data(dataCarouselString);

                // For some browsers, `attr` is undefined; for others,
                // `attr` is false.  Check for both.
                if (typeof carouselNumber !== typeof undefined && carouselNumber !== false)
                {
                    var carouselTarget = $(this).find('.tweet_list'),
                    isAutoplay = ($(this).data('autoplay')!== undefined ) ? $(this).data('autoplay') : true,
                    isArrow = ($(this).data('arrow')!== undefined ) ? $(this).data('arrow') : false,
                    isDots = ($(this).data('dots')!== undefined ) ? $(this).data('dots') : true,
                    isResponsive = ($(this).data('responsive')!== undefined ) ? $(this).data('responsive') : true,
                    dataNav = ($(this).data('nav')!== undefined ) ? $(this).data('nav') : null,
                    dataFocus = ($(this).data('focus')!== undefined ) ? $(this).data('focus') : false,
                    adaptiveHeight = ($(this).data('adaptive-height')!== undefined ) ? $(this).data('adaptive-height') : true;
                    runCarousel(carouselTarget, parseInt(carouselNumber), isAutoplay, isArrow, isDots, isResponsive, dataNav, dataFocus, adaptiveHeight);
                }
            });
    },


    // Get flickR List and show as list of images
    bindFlickr = function(target, pLimit)
    {
        var dataString = getDataString(target),
            dataLimitString = getDataString(pLimit);

        $(target).each(function()
            {
                var aLimit = ($(this).data(dataLimitString) !== undefined ) ? $(this).data(dataLimitString) : 10;
                $(this).jflickrfeed(
                    {
                        limit: aLimit,
                        qstrings:
                        {
                            id: $(this).data(dataString)
                        },
                        itemTemplate:
                        '<li class="list-item">' +
                        '<div class="menu-item">' +
                        '<a class="op-hover" rel="prettyPhoto[flickr-gallery]" href="{{image}}" title="{{title}}">' +
                        '<img class="width-100" src="{{image_s}}" alt="{{title}}" />' +
                        '</a>' +
                        '</div>' +
                        '</li>'
                    }, function(data)
                    {
                        runPrettyPhoto('[rel^=prettyPhoto');
                    });

            });
    },


    // Get google map by latitude and longitude
    bindGMap = function(target, pControls, pMarkers, pZoom, pMapType, pScrollWheel)
    {
        var dataString = getDataString(target),
            controlsDataString = getDataString(pControls),
            markersDataString = getDataString(pMarkers),
            zoomDataString = getDataString(pZoom),
            mapTypeDataString = getDataString(pMapType),
            scrollWheelDataString = getDataString(pScrollWheel);

        $(target).each(function()
            {
                var $this = $(this),
                aControls = ($this.data(controlsDataString) !== undefined ) ? $this.data(controlsDataString) : 'basic',
                aMarkers = ($this.data(markersDataString) !== undefined ) ? $this.data(markersDataString) : [],
                aZoom = ($this.data(zoomDataString) !== undefined ) ? $this.data(zoomDataString) : 14,
                aMapType = ($this.data(mapTypeDataString) !== undefined ) ? $this.data(mapTypeDataString) : 'ROADMAP',
                aScrollWheel = ($this.data(scrollWheelDataString) !== undefined ) ? $this.data(scrollWheelDataString) : true,
                aCoor = $this.data(dataString).split(','),
                aLat = aCoor[0],
                aLong = aCoor[1];

                // Create the markers array objects
                var allMarkers = [];

                for (var i = 0; i < aMarkers.length; i++)
                {
                    var mCoor = aMarkers[i].coordinate.split(','),
                    mLat = mCoor[0],
                    mLong = mCoor[1],
                    mIcon = (aMarkers[i].icon !== undefined) ? aMarkers[i].icon : 'success',
                    mHTML = '',
                    mMark =
                    {
                    },
                    defaultIconSize = [42, 51],
                    defaultAnchorSize = [21,51],
                    defaultImgFolder = 'img/markers/',
                    thisIcon =
                    {
                        iconsize: defaultIconSize,
                        iconanchor: defaultAnchorSize
                    };

                    // Marker Latitude
                    var mMark =
                    {
                        latitude: mLat,
                        longitude: mLong,
                    };

                    // Marker info
                    if (aMarkers[i].infoTarget !== undefined)
                    {
                        mHTML = $(aMarkers[i].infoTarget).html();
                        mMark['html'] = mHTML
                    }
                    // Marker icon image
                    thisIcon['image'] =  defaultImgFolder + mIcon + '.png';
                    mMark['icon'] = thisIcon;

                    allMarkers.push(mMark);

                }

                // Control Options
                var allControls =
                {
                    panControl: false,
                    zoomControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                };
                if (aControls == 'advance')
                {
                    allControls['panControl'] = true;
                    allControls['zoomControl'] = true;
                    allControls['mapTypeControl'] = true;
                }

                // Run gMap Function
                $this.gMap(
                    {
                        latitude: aLat,
                        longitude: aLong,
                        maptype: aMapType,
                        zoom: aZoom,
                        markers: allMarkers,
                        doubleclickzoom: true,
                        scrollwheel: aScrollWheel,
                        controls: allControls,
                    });

            });
    },


    // Custom button social share
    bindSocialShares = function(socialObj)
    {

        // Facebook Share
        $(socialObj.facebook).on('click', function ()
            {
                var urlParam = "http://" + window.location.host + window.location.pathname;
                if(window.location.hash)
                urlParam += window.location.hash;
                var urlParam = encodeURI(urlParam);
                var popupUrl = "http://www.facebook.com/sharer/sharer.php?u=" + urlParam;
                var win = window.open(popupUrl, "fb_share", "location=0,status=0,scrollbars=0, width=600,height=300");
                win.focus();
                return false;
            });

        // Twitter Share
        $(socialObj.twitter).on('click', function()
            {
                var permalink = "http://" + window.location.host + window.location.pathname;
                var popupUrl = "http://twitter.com/intent/tweet?url=" + encodeURI(permalink);
                var win = window.open(popupUrl, "twitter_share", "location=0,status=0,scrollbars=0, width=600,height=400");
                win.focus();
                return false;
            });

        // Pinterest Share
        $(socialObj.pinterest).on('click', function()
            {
                var permalink = "http://" + window.location.host + window.location.pathname;
                var popupUrl = "http://pinterest.com/pin/create/button/?url=" + encodeURI(permalink);
                var win = window.open(popupUrl, "pinterest_share", "location=0,status=0,scrollbars=0, width=600,height=400");
                win.focus();
                return false;
            });

        // Googleplus Share
        $(socialObj.googleplus).on('click', function()
            {
                var permalink = "http://" + window.location.host + window.location.pathname;
                var popupUrl = "https://plus.google.com/share?url=" + encodeURI(permalink);
                var win = window.open(popupUrl, "googleplus_share", "location=0,status=0,scrollbars=0, width=600,height=400");
                win.focus();
                return false;
            });

        // Linkedin Share
        $(socialObj.linkedin).on('click', function()
            {
                var permalink = "http://" + window.location.host + window.location.pathname;
                var popupUrl = "http://www.linkedin.com/shareArticle?mini=true&url=" + encodeURI(permalink);
                var win = window.open(popupUrl, "linkedin_share", "location=0,status=0,scrollbars=0, width=600,height=400");
                win.focus();
                return false;
            });


    },


    // Bind countdown date functionality
    bindCountdown = function(target, pFormat)
    {
        var dataString = getDataString(target),
            formatDataString = getDataString(pFormat);
        $(target).each(function()
            {
                var $this = $(this), 
                    finalDate = $(this).data(dataString),
                    strf = $(this).data(formatDataString);
                $this.countdown(finalDate, function(event)
                    {
                        $this.html(event.strftime(strf));
                    });
            });
    },
    
    // Bind google pretty print
    bindPrettyPrint = function()
    {
        prettyPrint();
    },

    // Carousel will be reniitialization when tab is opened
    reinitCarouselOnTab = function(target, targetSlick)
    {
        $(target).on('shown.bs.tab', function (e)
            {
                $(targetSlick).slick('setPosition');
            })
    },
    
    // Carousel will be reniitialization when tab is opened
    bindVentroSlider = function(target)
    {

        var dataString = getDataString(target);
        $(target).each(function()
            {
                var $this = $(this),
                    thisData = $this.data(dataString);
                $(target).ventroSlider(thisData);
            });

    },

    // Google Search Button Function
    bindGoogleSearch = function(inputTarget,buttonTarget)
    {

        // When writing
        $(inputTarget).keyup(function (e)
            {

                // Write on google search input
                $('.gsc-input').val($(this).val());

                // On press enter click search button
                if (e.keyCode == 13)
                {
                    $('td.gsc-search-button .gsc-search-button').click();
                }
            });
        // When click on search button click also on google search button
        $(buttonTarget).click(function(e)
            {
                $('td.gsc-search-button .gsc-search-button').click();
            });
    },

    /*************************************
    2.) WINDOW SCROLL FUNCTION
    *************************************/

    // Check sticky menu on windows scroll event
    checkStickyMenu = debounce(function(target)
        {

            var $this = $(target),
            stickyTop = ($this.data('offset-top')) ? $this.data('offset-top') : 0,
            headerHeight = $this.height(),
            isDevice = ($(window).width() > MD_WIDTH),
            changePos = false;

            if (typeof(stickyTop) == "string")
            {
                stickyTop = $(stickyTop).height();
                changePos = true;
                if ($(window).scrollTop() <= stickyTop && isDevice)
                {
                    $this.css(
                        {
                            'top': stickyTop,
                        });
                }
            }
            // If the right device
            if (isDevice)
            {
                $('.header-height').css('height',headerHeight);

                // If more then offset then sticky it !
                if ($(window).scrollTop() > stickyTop && !$this.hasClass('sticky') && !$this.hasClass('stickying'))
                {
                    $this.addClass('sticky');
                    if (changePos == true)
                    {
                        $this.removeAttr('style');
                    }
                }

                // If less than equal offset then unsticky it !
                if ($(window).scrollTop() <= stickyTop && $this.hasClass('sticky') && !$this.hasClass('unstickying'))
                {
                    $this.removeClass('sticky');
                    if (changePos == true)
                    {
                        $this.css(
                            {
                                'top': stickyTop,
                            });
                    }
                }
            } else
            {
                // If phone or tablet and have changepos then
                if (changePos == true)
                {
                    $this.removeAttr('style');
                }
                if (!$this.hasClass('sticky') && !$this.hasClass('stickying'))
                {
                    $this.addClass('sticky');
                }
            }
        },DEBOUNCE_TIME),


    // Check if window scroll top is more than the value, then add class active to this element
    checkActiveOnScroll = debounce(function(target)
        {
            $(target).each(function()
                {
                    var $this = $(this),
                    stickyTop = $this.data('active-scroll');
                    if ($(window).scrollTop() > stickyTop && !$this.hasClass('active'))
                    {
                        $this.addClass('active');
                    }
                    if ($(window).scrollTop() <= stickyTop && $this.hasClass('active'))
                    {
                        $this.removeClass('active');
                    }
                });
        },DEBOUNCE_TIME),


    // Using Animate CSS to show element when element on screen's' viewport
    checkShowAnimate = debounce(function(target)
        {
            $(target).each(function()
                {
                    var $this = $(this),
                    animationData = $this.data('show-animate'),
                    delayData = ($this.data('delay-animate')) ? $this.data('delay-animate') : 0,
                    triggerTarget = ($(this).data('trigger')!== undefined ) ? $($(this).data('trigger')) : $this,
                    timeout;
                    if($('body').hasClass('ready') && isElementInViewport(triggerTarget,200) && !$this.hasClass('animated'))
                    {
                        clearTimeout(timeout);
                        timeout = setTimeout(function()
                            {
                                timeout = null;
                                $this.addClass('animated ' + animationData);
                            }, delayData);
                    }
                });
        }, DEBOUNCE_TIME),


    // Animate Number when element on screen's' viewport
    checkAnimateNumber = debounce(function(target)
        {
            $(target).each(function()
                {
                    var $this = $(this),
                    numberData = $this.data('animate-number'),
                    timeData = ($this.data('time')) ? $this.data('time') : 2000,
                    separatorData = ($this.data('separator')) ? $.animateNumber.numberStepFactories.separator($this.data('separator')) : null;

                    if($('body').hasClass('ready') && isElementInViewport($this) && !$this.hasClass('animated'))
                    {
                        $this.addClass('animated');
                        runAnimateNumber($this, numberData,timeData, separatorData);
                    }
                });
        }, DEBOUNCE_TIME),


    // Check if on viewport then add class active to targeted element
    checkWaypoints = debounce(function(target)
        {
            $(target).each(function(e)
                {
                    var $this = $(this),
                    t= $this.data('waypoint'),
                    offset= ($this.data('offset')!== undefined) ? $this.data('offset') : 80;

                    if (isElementAtScrollTop($this,offset) && !$(t).hasClass('active'))
                    {
                        $(target).each(function(e)
                            {
                                var tt = $(this).data('waypoint');
                                $(tt).removeClass('active');
                            });
                        $(t).addClass('active');
                    }
                })
        }, DEBOUNCE_TIME),



    /*************************************
    3.) WINDOW RESIZE FUNCTION
    *************************************/

    // Add Parallax Function to target background
    checkParallax = debounce(function(target)
        {
            $(target).each(function()
                {
                    $(this).parallax("center", $(this).data('parallax'));
                });
        },DEBOUNCE_TIME),


    // Set scrollbar for mega menu in tablet view and below
    checkScrollbar = debounce(function(target)
        {
            // $(target).scrollbar();
            if ($(window).width() <= MD_WIDTH || $('body').hasClass('menu-vertical'))
            {
                $(target).addClass('scroll-y-visible');
                $(target).css('max-height', $(window).height());
            } else
            {
                $(target).removeClass('scroll-y-visible');
                $(target).removeAttr('style');
            }
        },DEBOUNCE_TIME),


    // Check if desktop then add hover function to primary menu
    checkHoverToggle = debounce(function(target)
        {

            $(target).parent().hover(function()
                {
                    if ($(window).width()>MD_WIDTH && !$('body').hasClass('menu-vertical'))
                    {
                        $(this).addClass('open');
                    }
                }, function()
                {
                    if ($(window).width()>MD_WIDTH && !$('body').hasClass('menu-vertical'))
                    {
                        $(this).removeClass('open');
                    }
                });


            if ($(window).width()>MD_WIDTH)
            {
                $(target).parent().removeClass('open');
            }
        },DEBOUNCE_TIME),


    // Check initial collapse value for primary menu
    checkCollapseMenu = debounce(function(target)
        {
            // if desktop remove all
            if ($(window).width()>MD_WIDTH && !$('body').hasClass('menu-vertical'))
            {
                $('body').removeClass('nav-right-show nav-left-show');
                $(target).removeClass('active');
            }

        },DEBOUNCE_TIME),


    // Adjust top position of sticky submenu on window scroll
    checkStickySubMenu = debounce(function(target)
        {
            if ($(target).hasClass('affix'))
            {
                $(target).css('top',$('header').outerHeight());
            }else
            {
                $(target).removeAttr('style');
            }
        }, DEBOUNCE_TIME),


    // Add height to header replacement (usually used for primary menu below content)
    checkHeaderReplacement = debounce(function(target)
        {

            var $this = $(target),
            headerHeight = $('header').height(),
            isDevice = ($(window).width() > MD_WIDTH);

            // If the right device
            if (isDevice)
            {
                $(target).css('height',headerHeight);
            }
        },DEBOUNCE_TIME),


    // Add Padding Top body inner with Header Height
    checkHeaderPadding = debounce(function()
        {
            if ($('body').hasClass('header-padding'))
            {
                $('.body-inner').css('padding-top',$('header').outerHeight());
            }
        },DEBOUNCE_TIME),


    /*************************************
    4.) WINDOW LOAD FUNCTION
    *************************************/

    // Run Isotope Gallery
    bindIsotope = function(target)
    {
        $(target).each(function()
            {
                $(this).isotope($(this).data('gallery'));

            })
        var timeout;
        clearTimeout(timeout);
        timeout = setTimeout(function()
            {
                $(target).each(function()
                    {
                        if ($(this).data('isotope')) {
                            $(this).isotope('layout');
                        }
                    });
            }, PRELOADER_DELAY+200);
    },


    // Bind [data-filter] with target isotope
    bindIsotopeFilter = function(target)
    {
        $(target).each(function()
            {
                var $this = $(this),
                $isotopeSelector = $($this.data('filter-bind'));

                $(this).find('[data-filter]').click(function(e)
                    {
                        e.preventDefault();

                        var dataFilter = $(this).data('filter'),
                        parentType = $(this).parent().prop('nodeName');

                        $this.find(parentType).removeClass('active');
                        $(this).parent().addClass('active');
                        $isotopeSelector.isotope({ filter: dataFilter });

                    })
            })
    },

    // Relayout on resize
    checkIsotopeResize = function(target)
    {
        $(target).each(function()
        {
            if ($(this).data('isotope')) {
                $(this).isotope('layout');
            }
        });
    },

    // Run gallery slide using master slider
    bindGalleryListSlider = function(target)
    {
        $(target).each(function()
            {
                var thisView = $(this).data('list-slider'),
                thisArrow = ($(this).data('arrow')!== undefined ) ? $(this).data('arrow') : true,
                thisAutoplay = ($(this).data('autoplay')!== undefined ) ? $(this).data('autoplay') : false,
                thisDots = ($(this).data('dots')!== undefined ) ? $(this).data('dots') : true,
                valueControls =
                {
                };
                if (thisDots == true)
                {
                    valueControls['bullets'] =
                    {
                        autohide: false,
                        align: 'bottom',
                        margin: 10
                    };
                }
                if (thisArrow == true)
                {
                    valueControls['arrows'] =
                    {
                        autohide: true
                    }
                }

                $(this).masterslider(
                    {
                        layout: 'fillwidth',
                        autoHeight:true,
                        view: thisView,
                        autoplay: thisAutoplay,
                        controls: valueControls

                    })
            });
    },


    // Run staff master slider
    bindStaffSlider = function(target)
    {
        $(target).each(function()
            {
                var thisView = $(this).data('staff-slider'),
                thisArrow = ($(this).data('arrow')!== undefined ) ? $(this).data('arrow') : true,
                thisAutoplay = ($(this).data('autoplay')!== undefined ) ? $(this).data('autoplay') : false,
                thisLoop = ($(this).data('loop')!== undefined ) ? $(this).data('loop') : true,
                thisInfoTarget = ($(this).data('info-target')!== undefined ) ? $(this).data('info-target') : "#staff-info",
                valueControls =
                {
                    "slideinfo" :
                    {
                        insertTo : thisInfoTarget
                    }
                };

                if (thisArrow == true)
                {
                    valueControls['arrows'] =
                    {
                        autohide: true
                    }
                }
                $(this).masterslider(
                    {
                        loop: thisLoop,
                        width: 286,
                        height: 286,
                        speed: 20,
                        view: thisView,
                        preload: 0,
                        space: 0,
                        autoplay: thisAutoplay,
                        controls: valueControls

                    })
            });
    },


    // Run carousel on a widget
    bindCarouselWidget = function(target)
    {
        $(target).each(function()
            {
                var isAutoplay = ($(this).data('autoplay')!== undefined ) ? $(this).data('autoplay') : false,
                isArrow = ($(this).data('arrow')!== undefined ) ? $(this).data('arrow') : false,
                isDots = ($(this).data('dots')!== undefined ) ? $(this).data('dots') : true,
                isResponsive = ($(this).data('responsive')!== undefined ) ? $(this).data('responsive') : true,
                dataNav = ($(this).data('nav')!== undefined ) ? $(this).data('nav') : null,
                dataFocus = ($(this).data('focus')!== undefined ) ? $(this).data('focus') : false,
                adaptiveHeight = ($(this).data('adaptive-height')!== undefined ) ? $(this).data('adaptive-height') : true;
                

                runCarousel(this,$(this).data('carousel-widget'),isAutoplay, isArrow, isDots, isResponsive, dataNav, dataFocus, adaptiveHeight);
            });
    },


    // Remove preloader when finish loading image
    removePreloader = function(target)
    {
        var timeout;
        clearTimeout(timeout);
        timeout = setTimeout(function()
            {
                $(target).addClass('remove');
                $('body').removeClass('ov-hidden').addClass('ready');
                checkShowAnimate('[data-show-animate]');
                checkAnimateNumber('[data-animate-number]');
                if (_cb(loadedCb))
                {
                    loadedCb();
                }
            }, PRELOADER_DELAY);
        timeout = setTimeout(function()
            {
                $(target).remove();

            }, PRELOADER_DELAY + 500);
    },
    
    // Add additional feature to bootstrap accordion, to change it to radio accordion, with active class
    bindAddGalleryList = function(target, galleryTarget, nItems)
    {
        var dataString = getDataString(target),
            dataQuantityString = getDataString(nItems);
        $(target).each(function()
            {

                $(this).click(function(e)
                    {
                        var $this = $(this),
                            addQuantity = $this.data(dataQuantityString);

                        var loadHTML = '<i class="loader-icon fa fa-circle-o-notch fa-spin fa-fw mgl-5"></i>';
                        var dataURL = $this.data(dataString),
                            dataNItems = ( typeof addQuantity !== 'undefined') ? addQuantity : 4;
                        if (typeof $this.data('current-item') == 'undefined') {
                            $this.attr('data-current-item', 0) ;
                        }
                        var currentItemIndex = $this.attr('data-current-item');
                        var attrDisabled = $this.attr('disabled');
                        e.preventDefault();
                        if (typeof attrDisabled == 'undefined') {
                            $this.append(loadHTML);

                            // Disable this button
                            $this.attr('disabled','disabled');
                            
                            
                            // All items is loaded
                            var finish = false;
                            $.ajax({
                                url: dataURL,
                                dataType: 'json',
                                error: function(data, textStatus, errorThrown) {
                                   if(textStatus === "timeout") {
                                       showAlertMessage('Server ' + textStatus, 'danger', $this);
                                   } else {
                                       var responseText = errorThrown;
                                       showAlertMessage(textStatus + ': ' + errorThrown, 'danger', $this);
                                   }
                                },
                                success: function(pData) {
                                    
                                    var itemData = pData;
                                    if (currentItemIndex < itemData.items.length) {
                                        var i = currentItemIndex; 
                                        var maxAddition = parseInt(currentItemIndex) + parseInt(dataNItems);
                                        if (maxAddition > itemData.items.length){
                                            maxAddition = itemData.items.length;
                                            finish = true;
                                        }
                                        var listHTML = '';
                                        for (i ; i < maxAddition; i++) {
                                            listHTML += generateListGalleryHTML(itemData.items[i]);
                                            // console.log(itemData.items[i]);
                                            // Edit HTML here
                                        }
                                        $this.attr('data-current-item', i);

                                    }
                                    
                                    var tempHeight = $(galleryTarget).height();
                                    $(galleryTarget).isotope('destroy');
                                    $(galleryTarget).height(tempHeight);
                                    
                                    $(galleryTarget).append(listHTML);
                                    bindIsotope(galleryTarget);
                                    bindPrettyPhoto('[data-rel^="prettyPhoto"]');
                                },
                                complete: function() {
                                    $this.removeAttr('disabled');
                                    $this.find('.loader-icon').remove();
                                    if (finish) {
                                        $this.remove();
                                    }
                                }
                            });
                        }
                    });
            });
            
            
            
            function generateListGalleryHTML(o) {
                var cat = o.category,
                    imgLink = o.image.link,
                    imgAlt = o.image.alt;
                var listHTML = '<li class="list-item ' + cat + '">';
                listHTML += '<div class="anim">';
                listHTML += '<a data-rel="prettyPhoto[1]" href="' + imgLink + '" class="anim-link">';
                listHTML += '<img src="' + imgLink + '" alt="' + imgAlt + '" class="anim-img">'
                listHTML += '<div class="anim-cover"> <div class="anim-box"> <div class="anim-border"> <div class="anim-info">';
                listHTML += '<i class="plus-icon"></i>';
                listHTML += '</div></div></div></div></a></div></li>';
                return listHTML;
            }

    },

    // Error Response (show alert)
    showAlertMessage = function(textParameter, errorType, el) {

        el.siblings('.alert').remove();
        var closeBtnHTML = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="lnr lnr-cross"></i></button>';
        var alertTextHTML = '<span class="alert-text">'+ textParameter +'</span>';
        var alertIconHTML = '<i class="';
        switch (errorType) {
            case 'danger' : 
                alertIconHTML += 'lnr lnr-cross-circle'
                break;
            case 'info' : 
                alertIconHTML += 'lnr lnr-question-circle'
                break;
            case 'success' : 
                alertIconHTML += 'lnr lnr-checkmark-circle'
                break;
            case 'warning' : 
                alertIconHTML += 'lnr lnr-warning'
                break;
            default: 
                alertIconHTML += 'lnr lnr-cross-circle'
                break;
        }
        alertIconHTML += ' text-' + errorType + '-0 font-xs-7"></i>';
        var alertHTML = 
        '<div class="alert alert-' + errorType + '">' + 
        closeBtnHTML + 
        '<div class="content-list list-sm list-vm"><div class="list-item pd-0"><div class="menu-item menu-icon">' + 
        alertIconHTML + '</div>' +
        '<div class="menu-item menu-text">' + 
        alertTextHTML + 
        '</div></div></div></div>';

        el.before(alertHTML);
    };

    // Function to be declared in public
    var 

    // Called on document ready
    documentReady = function() {
            startPreloader('.preloader-container');

            initActiveClass('[data-active-menu]');
            initActiveClass('[data-active-submenu]');

            bindImageBackground('[data-img-bg]');
            initInputGroupFocus('.form-control');
            bindScrollButton('[data-scroll-to]','[data-offset]');

            bindToggleClass('[data-toggle-class]', '[data-target]');
            bindOpenMenuTrigger('[data-toggle^="open-menu"]');
            bindToggleSidebarMenu('[data-toggle^="nav-right-collapse"]','right');
            bindShopListToggle('[data-shop-list-toggle]', '[data-target]', '[data-grid]');

            bindPageTransition('.animsition', $('body').data('transition-selector'), $('body').data('transition-in'), $('body').data('transition-out'));
            bindFormValidate('[data-form^=validate]');

            bindSpinner('[data-rel^="spinner"]');
            bindTooltip('[data-toggle^="tooltip"]');
            bindPopOver('[data-toggle^="popover"]');
            bindPrettyPhoto('[data-rel^="prettyPhoto"]');
            bindBootstrapSelect('[data-rel^="select"]');
            bindRadioAccordion('[data-radio-accordion]', '[data-active-class]', '[data-radio-id]');

            bindTwitterList('[data-twitter]', '[data-twitter-display]', '[data-twitter-carousel]');
            bindFlickr('[data-flickr]', '[data-limit]');
            bindGMap('[data-gmap]', '[data-controls]', '[data-markers]', '[data-map-zoom]', '[data-map-type]', '[data-scroll-wheel]');

            bindSocialShares(
                {
                    "facebook" : "[data-share='facebook']",
                    "twitter" : "[data-share='twitter']",
                    "pinterest" : "[data-share='pinterest']",
                    "googleplus" : "[data-share='googleplus']",
                    "linkedin" : "[data-share='linkedin']"
                });

            bindCountdown('[data-countdown]', '[data-format]');
            bindPrettyPrint();

            reinitCarouselOnTab('a[data-toggle="tab"]','[data-carousel-widget]');
            bindVentroSlider('[data-ventro-slider]');
            bindAddGalleryList('[data-add-gallery-list]', '[data-gallery]', '[data-add-quantity]');
    },

    // Called on window.on('load')
    windowLoad = function() {
        // run all windowResize Function
        windowResize();

        bindIsotope('[data-gallery]');
        bindIsotopeFilter('[data-filter-bind]');
        bindGalleryListSlider('[data-list-slider]');
        bindStaffSlider('[data-staff-slider]');
        bindCarouselWidget('[data-carousel-widget]');
        bindStickySubMenu('[data-spy^=submenu]');
        removePreloader('.preloader-container');
    },

    // Called on window.on('resize')
    windowResize = function() {
        // Run all windowScroll Function
        windowScroll();

        checkParallax('[data-parallax]');
        checkScrollbar('.menu-stack');
        checkHoverToggle('[data-toggle^=open-menu');
        checkCollapseMenu('[data-toggle^="nav-right-collapse"]');
        checkStickySubMenu('[data-spy^=submenu]');
        checkHeaderReplacement('.header-height');
        checkHeaderPadding();
        checkIsotopeResize('[data-gallery]');
    },

    // Called on window.on('scroll')
    windowScroll = function() {
        checkStickyMenu('[data-spy^=sticky]');
        checkActiveOnScroll('[data-active-scroll]');
        checkShowAnimate('[data-show-animate]');
        checkAnimateNumber('[data-animate-number]');
        checkWaypoints('[data-waypoint]');
    };


    /* Public Methods
    ************************/
    return{
        init: function()
        {
            // Document Ready State
            $(document).ready(function()
            {
                documentReady();
            });
            // Window Scroll State
            $(window).on('scroll',function()
            {
                windowScroll();
            });
            // Window Resize State
            $(window).on('resize', function()
            {
                windowResize();
            });
            // Window Load State
            $(window).on('load', function()
            {
                windowLoad();
            });
        },

        windowScroll: function()
        {
            windowScroll();
        },

        windowResize: function()
        {
            windowResize();
        },

        windowLoad: function()
        {
            windowLoad();
        },

        onRemovePreloader: function(cb)
        {
            loadedCb = cb;
        },

        applyModal: function(target)
        {
            runPrettyPhoto(target);
        }
    }

}(jQuery);

ThemeApp.init();

