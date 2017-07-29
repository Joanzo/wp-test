/**************************************************************************

Ventro Slider - JQuery Plugin
@Version:                1.0 (28.04.2015)
@Author:                 Venmond, Inc.
@Plugin web:             http://ventroslider.venmond.com
@Require:                jQuery v1.7 or later (tested on 1.11)
@Licenses:               http://codecanyon.net/licenses/

**************************************************************************/



;(function($, window,document,undefined){

        /* plugin dependencies */
        (function(init){
                /* support for RequireJS */
                if(typeof define==="function" && define.amd){
                    define(["jquery", "jquery-mousewheel", "mCustomScrollbar", "velocity", "velocity-ui"], init);
                }else{
                    init(jQuery);
                }
            }


            (function ($){


                    /*
                    ----------------------------------------
                    PLUGIN NAMESPACE, PREFIX, DEFAULT SELECTOR(S)
                    ----------------------------------------
                    */
                    var pluginNS        = "ventroSlider",
                    pluginPfx       = "vMS",
                    defaultSelector = ".ventro-slider",
                    baseClass       = "ventro-slider",
                    destroyClass    = 'ventro-destroyed',


                    /*
                    ----------------------------------------
                    DEFAULT OPTIONS
                    ----------------------------------------
                    */
                    defaults = {
                        boxDimensions: [180,180],           // Box Width and Height
                        boxMargins: [2.5,2.5],              // Box Horizontal and Vertical Margins
                        namespace: '',                      // Add Namespace for generated stylesheets
                        outerMargin: [true,true],           // Add outer horizontal and vertical margin to make same space on the outer side
                        autoGenerateCSS: true,              // Set to false if you want to use your own CSS
                        mode: 'SCROLL',                     // Mode: SCROLL, STRETCH, PROPORTION
                        
                        show: {
                          effect: 'bounce',                 // Show Slider Effect
                          duration: 800,                    // Show Slider Duration
                          stagger: false,                   // Should show one by one or simultaneously
                          drag: false,                      // Cross element easing effect
                          loader: 'loader-1-dark',          // loader-1-dark, loader-1-light, loader-2-dark, loader-2-light, loader-3-dark, loader-3-light, loader-4-dark, loader-4-light, loader-5-dark, loader-5-light 
                        },

                        height: "auto",                     // Slider height
                        center: false,                      // Set container to center align
                        textSize: [72,60,48,36,24,18,14],   // Default text size

                        breakGrid: '',                      // Grid index to break into next row. Ex: "1,2,3"
                        hideGrid: '',                       // Grid index to hide. Ex: "1,2,3"

                        pluginMarkup: '<div class="ventro-wrapper"><div class="ventro-viewport"></div></div>',                        // Slider Wrapper Markup

                        boxAnim: {
                            // per box animation settings
                            animEffect: 'fade',                        // Effect for this box
                            transitionDuration: 500,                   // Duration for content doing animation
                            hoverTransitionDuration: 500,              // Duration for hover content doing animation
                            startDelay: false,                         // Delay before animation start (for auto animation)
                            contentDelay : 0,                          // Delay before content doing animation
                            hoverDelay : 0,                            // Delay before hover content doing animation
                            over: false,                               // Original content not disappear
                            easing: "easeOutQuint"                     // Only works for Slideup/down/left/right

                        },

                        scroll: {
                            step : 0,                        // How many movement / transition
                            stepDelay: 0,                    // per Step Delay including first step can be array
                            stepDuration: 4000,              // per Step Duration
                            startDelay: 1500,                // Auto scroll start delay
                            easing: 'easeInOut',             // Scroll Easing. Available Options: linear, easeInOutSmooth, easeInOutStrong, easeInOut, easeOutSmooth, easeOutStrong, easeOut
                            pauseOnHover : true,             // Pause on hover: true / false
                         
                                                             
                            mouseWheel:{                     
                                enable: true,                // Enable mouse wheel or not
                                scrollAmount: "auto",        // Mouse scrolling amount in px                                     
                                invert: false,               // Option enable/disable invert scrollwheel  
                            },
                            scrollButtons:{ 
                                enable: false,               // Enable scroll buttons
                                scrollAmount: "auto",        // Button scrolling amount in px      
                                scrollType: "stepless",      // Define the scroll button scrolling type/behavior. 
                                                             // "stepless" – continuously scroll content while pressing the arrow key (default)
                                                             // "stepped" – each key release scrolls content by a certain amount (defined in scrollAmount option above)    
                            },
                            keyboard:{ 
                                enable: true,               // Keyboard Enable or not, support: pageUp, pageDown, Home, End, up, left ,down, right button
                                scrollAmount: "auto",        // Keyboard scrolling amount in px  
                                scrollType: "stepless",      // Define the keyboard arrows scrolling type/behavior. 
                                                             // "stepless" – continuously scroll content while pressing the arrow key (default)
                                                             // "stepped" – each key release scrolls content by a certain amount (defined in scrollAmount option above)                                     
                            }, 
                            contentTouchScroll:25,           // Can be false or touch swipe speed
                            
                            setLeft: "",                     // Initial Left
                            dragger: {
                                // Scrollbar Dragger Theme / Style
                                theme: "dark",               // Scrollbar Dragger Theme / Style
                                barColor: "",                // Custom Bar Background Color
                                railColor: "",               // Custom Rail Background Color
                                barHeight: "",               // Custom Bar Height
                                railHeight: "",              // Custom Rail Height
                                barOffset: "",               // Custom Bar Margin Top and Margin Bottom
                                railOffset: "",              // Custom Rail Margin Top and Margin Bottom
                                markup: '<div class="ventro-scrollbar"></div>'                // Scroller markup
                            },
                            parallax: {
                                target: '',          // ID / Class target to put the background image
                                url: '',             // URL of background image relative to html files
                                yPosition: "0px",    // Initial Y Position of Image
                                xPosition: "0px",    // Initial X Position of image
                                ratio: .2            // Parallax Ratio Movement
                            }
                        },

                        responsive:[],
                        /*
                        responsive[x]: {
                        windowWidth: INT,            // Window Break Point Less than equal to INTpx
                        percentage: INT / {          // Minus all below variable by INT percent
                            boxDimensions:  INT,     // Minus boxDimensions b INT percent
                            boxMargins: INT,         // Minus box margins by INT percent
                            textSize: INT,           // Minus .ventro-text-1, .ventro-text-2, etc. by INT percent
                            image: INT,              // Minus .ventro-img-p by INT percent
                        },
                        mode: string,                // Change mode to "PROPORTION" or "SCROLL" or "STRETCH"
                        hideGrid: string,            // Grid index to hide ex: "1,2,3"
                        unHideGrid: string,          // Grid index to unhide ex: "1,2,3"
                        breakGrid: string ,          // Grid index to break into next row ex: "1,2,3"
                        unBreakGrid : string,        // Grid index to unbreak row ex: "1,2,3"
                        removeExtraPadding: boolean  // Remove any padding left or right on grid
                        callback: function()         // Function to call at when reach below or equal responsive window width setting check on window resize.
                        }
                        */

                        callbacks: {
                            /*
                            function to call when the sliders have initialized
                            values (function): function(){}
                            */
                            onInit:false,
                            /*
                            function to call when the sliders have destroyed
                            values (function): function(){}
                            */
                            onDestroy:false,
                            /*
                            function to call when a scroll event starts
                            values (function): function(){}
                            */
                            onScrollStart:false,
                            /*
                            function to call when a scroll event is complete
                            values (function): function(){}
                            */
                            onScroll:false,
                            /*
                            function to call when a scroll event is complete and content is scrolled all the way to the end (bottom/right)
                            values (function): function(){}
                            */
                            onTotalScroll:false,
                            /*
                            function to call when a scroll event is complete and content is scrolled back to the beginning (top/left)
                            values (function): function(){}
                            */
                            onTotalScrollBack:false,
                            /*
                            function to call when a scroll event is running
                            values (function): function(){}
                            */
                            whileScrolling:false,
                            /*
                            function to call when performing auto scroll
                            values (function): function(){}
                            */
                            onAutoScrollOn:false,
                            /*
                            function to call when auto scroll stop
                            values (function): function(){}
                            */
                            onAutoScrollOff:false,
                            /*
                            function to call when resuming auto scroll
                            values (function): function(){}
                            */
                            onResumeAutoScroll:false,
                            /*
                            function to call when changeMode function run
                            values (function): function(){}
                            */
                            onChangeMode:false,
                            /*
                            function to call when outside of responsive breakpoint
                            values (function): function(){}
                            */
                            onOutsideBreakPoint:false,

                        }

                    },


                    /*
                    ----------------------------------------
                    VARS, CONSTANTS
                    ----------------------------------------
                    */
                    jQueryVer       = '1.7.2',                               // Minimal jQuery Version Requirement
                    notice = {
                        // Error Notice
                        "OLDJQUERY" :{
                            title: 'Your Jquery version is older than version ' + jQueryVer,
                            text1: 'It looks like you are using an old version (',
                            text2: ') of the jQuery library. Ventro Slider requires at least version '+ jQueryVer + ' or newer. Please update jQuery to '+ jQueryVer + ' or higher.',
                        }
                    },

                    settings,                                                // Current used settings
                    cClass          = ".mCSB_container",                     // Class for MScrollBar Container. Don't change this unless you know what to do
                    dClass          = ".mCSB_dragger_bar",                   // Dragger Class for MScrollBar Container
                    rClass          = ".mCSB_draggerRail",                   // Rail Class
                    shClass            = ".mCSB_scrollTools_horizontal",     // Scrollbar Class
                    cssPrefixClass  = "vMS_CSS-",                            // CSS Prefixes class
                    selectorClass   = {
                        wrapper : ".ventro-wrapper",                         // Wrapper Class
                        viewport : ".ventro-viewport",                       // Viewport Class
                        listContainer : ".ventro-container",                 // List Container Class
                        gridContainer : ".ventro-container > .ventro-li",    // Grid Container Class
                        box           : ".ventro-ul > .ventro-box",          // Box Class
                        text          : ".ventro-text-",                     // Text Class
                        imgP          : ".ventro-img-p"                      // Image Percentage Class
                    },
                    ctr             = 0,


                    /* ANIMATION EFFECT DATA */
                    effectData = {
                        "SLIDEUP" : {
                            type: "parallel",
                            contentEffectOut: {
                                "top" : "-100%"
                            },
                            hoverEffectIn: {
                                "top" : "0", "opacity" : "1"
                            },
                            hoverEffectOut: {
                                "top" : "100%"
                            },
                            contentEffectIn: {
                                "top" : "0"
                            },
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'top' : '100%'
                                    })
                            }
                        },
                        "SLIDEDOWN" : {
                            type: "parallel",
                            contentEffectOut: {
                                "top" : "100%"
                            },
                            hoverEffectIn: {
                                "top" : "0", "opacity" : "1"
                            },
                            hoverEffectOut: {
                                "top" : "-100%"
                            },
                            contentEffectIn: {
                                "top" : "0"
                            },
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'top' : '-100%'
                                    })
                            }
                        },
                        "SLIDELEFT" : {
                            type: "parallel",
                            contentEffectOut: {
                                "left" : "-100%"
                            },
                            hoverEffectIn: {
                                "left" : "0", "opacity" : "1"
                            },
                            hoverEffectOut: {
                                "left" : "100%"
                            },
                            contentEffectIn: {
                                "left" : "0"
                            },
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'left' : '100%'
                                    })
                            }
                        },
                        "SLIDERIGHT" : {
                            type: "parallel",
                            contentEffectOut: {
                                "left" : "100%"
                            },
                            hoverEffectIn: {
                                "left" : "0", "opacity" : "1"
                            },
                            hoverEffectOut: {
                                "left" : "-100%"
                            },
                            contentEffectIn: {
                                "left" : "0"
                            },
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'left' : '-100%'
                                    })
                            }
                        },
                        "CROSSFADE" : {
                            type: "parallel",
                            contentEffectOut: "transition.fadeOut",
                            hoverEffectIn: "transition.fadeIn",
                            hoverEffectOut: "transition.fadeOut",
                            contentEffectIn: "transition.fadeIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "FLIPX" : {
                            type: "parallel",
                            contentEffectOut: {
                                rotateY: "180deg"
                            },
                            hoverEffectIn: {
                                rotateY: "0deg", "opacity" : "1"
                            },
                            hoverEffectOut: {
                                rotateY: "180deg"
                            },
                            contentEffectIn: {
                                rotateY: "0deg"
                            },
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.velocity({
                                        rotateY:"0deg"
                                    },0);
                                ht.velocity({
                                        rotateY:"180deg"
                                    },0);

                            }
                        },
                        "FLIPY" : {
                            type: "parallel",
                            contentEffectOut: {
                                rotateX: "180deg"
                            },
                            hoverEffectIn: {
                                rotateX: "0deg", "opacity" : "1"
                            },
                            hoverEffectOut: {
                                rotateX: "180deg"
                            },
                            contentEffectIn: {
                                rotateX: "0deg"
                            },
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.velocity({
                                        rotateX:"0deg"
                                    },0);
                                ht.velocity({
                                        rotateX:"180deg"
                                    },0);
                            }
                        },
                        "FLIPFADEX" : {
                            type: "sequence",
                            contentEffectOut: "transition.flipXOut",
                            hoverEffectIn: "transition.flipXIn",
                            hoverEffectOut: "transition.flipXOut",
                            contentEffectIn: "transition.flipXIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "FLIPFADEY" : {
                            type: "sequence",
                            contentEffectOut: "transition.flipYOut",
                            hoverEffectIn: "transition.flipYIn",
                            hoverEffectOut: "transition.flipYOut",
                            contentEffectIn: "transition.flipYIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "FLIPBOUNCEX" : {
                            type: "sequence",
                            contentEffectOut: "transition.flipBounceXOut",
                            hoverEffectIn: "transition.flipBounceXIn",
                            hoverEffectOut: "transition.flipBounceXOut",
                            contentEffectIn: "transition.flipBounceXIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "FLIPBOUNCEY" : {
                            type: "sequence",
                            contentEffectOut: "transition.flipBounceYOut",
                            hoverEffectIn: "transition.flipBounceYIn",
                            hoverEffectOut: "transition.flipBounceYOut",
                            contentEffectIn: "transition.flipBounceYIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "BOUNCEUP" : {
                            type: "parallel",
                            contentEffectOut: "transition.bounceUpOut",
                            hoverEffectIn: "transition.bounceUpIn",
                            hoverEffectOut: "transition.bounceDownOut",
                            contentEffectIn: "transition.bounceDownIn",
                            extraTime: 300,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "BOUNCEDOWN" : {
                            type: "parallel",
                            contentEffectOut: "transition.bounceDownOut",
                            hoverEffectIn: "transition.bounceDownIn",
                            hoverEffectOut: "transition.bounceUpOut",
                            contentEffectIn: "transition.bounceUpIn",
                            extraTime: 300,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "BOUNCELEFT" : {
                            type: "parallel",
                            contentEffectOut: "transition.bounceLeftOut",
                            hoverEffectIn: "transition.bounceRightIn",
                            hoverEffectOut: "transition.bounceRightOut",
                            contentEffectIn: "transition.bounceLeftIn",
                            extraTime: 300,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "BOUNCERIGHT" : {
                            type: "parallel",
                            contentEffectOut: "transition.bounceRightOut",
                            hoverEffectIn: "transition.bounceLeftIn",
                            hoverEffectOut: "transition.bounceLeftOut",
                            contentEffectIn: "transition.bounceRightIn",
                            extraTime: 300,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SLIDEUPFADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.slideUpOut",
                            hoverEffectIn: "transition.slideUpIn",
                            hoverEffectOut: "transition.slideDownOut",
                            contentEffectIn: "transition.slideDownIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SLIDEDOWNFADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.slideDownOut",
                            hoverEffectIn: "transition.slideDownIn",
                            hoverEffectOut: "transition.slideUpOut",
                            contentEffectIn: "transition.slideUpIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SLIDELEFTFADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.slideLeftOut",
                            hoverEffectIn: "transition.slideRightIn",
                            hoverEffectOut: "transition.slideRightOut",
                            contentEffectIn: "transition.slideLeftIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SLIDERIGHTFADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.slideRightOut",
                            hoverEffectIn: "transition.slideLeftIn",
                            hoverEffectOut: "transition.slideLeftOut",
                            contentEffectIn: "transition.slideRightIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },

                        "SLIDEUPBIGFADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.slideUpBigOut",
                            hoverEffectIn: "transition.slideUpBigIn",
                            hoverEffectOut: "transition.slideDownBigOut",
                            contentEffectIn: "transition.slideDownBigIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SLIDEDOWNBIGFADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.slideDownBigOut",
                            hoverEffectIn: "transition.slideDownBigIn",
                            hoverEffectOut: "transition.slideUpBigOut",
                            contentEffectIn: "transition.slideUpBigIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SLIDELEFTBIGFADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.slideLeftBigOut",
                            hoverEffectIn: "transition.slideRightBigIn",
                            hoverEffectOut: "transition.slideRightBigOut",
                            contentEffectIn: "transition.slideLeftBigIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SLIDERIGHTBIGFADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.slideRightBigOut",
                            hoverEffectIn: "transition.slideLeftBigIn",
                            hoverEffectOut: "transition.slideLeftBigOut",
                            contentEffectIn: "transition.slideRightBigIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },


                        "PERSPECTIVEUP" : {
                            type: "parallel",
                            contentEffectOut: "transition.perspectiveDownOut",
                            hoverEffectIn: "transition.perspectiveUpIn",
                            hoverEffectOut: "transition.perspectiveUpOut",
                            contentEffectIn: "transition.perspectiveDownIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "PERSPECTIVEDOWN" : {
                            type: "parallel",
                            contentEffectOut: "transition.perspectiveUpOut",
                            hoverEffectIn: "transition.perspectiveDownIn",
                            hoverEffectOut: "transition.perspectiveDownOut",
                            contentEffectIn: "transition.perspectiveUpIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "PERSPECTIVERIGHT" : {
                            type: "parallel",
                            contentEffectOut: "transition.perspectiveRightOut",
                            hoverEffectIn: "transition.perspectiveLeftIn",
                            hoverEffectOut: "transition.perspectiveLeftOut",
                            contentEffectIn: "transition.perspectiveRightIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "PERSPECTIVELEFT" : {
                            type: "parallel",
                            contentEffectOut: "transition.perspectiveLeftOut",
                            hoverEffectIn: "transition.perspectiveRightIn",
                            hoverEffectOut: "transition.perspectiveRightOut",
                            contentEffectIn: "transition.perspectiveLeftIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "FADE" : {
                            type: "sequence",
                            contentEffectOut: "transition.fadeOut",
                            hoverEffectIn: "transition.fadeIn",
                            hoverEffectOut: "transition.fadeOut",
                            contentEffectIn: "transition.fadeIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "BOUNCE" : {
                            type: "sequence",
                            contentEffectOut: "transition.bounceOut",
                            hoverEffectIn: "transition.bounceIn",
                            hoverEffectOut: "transition.bounceOut",
                            contentEffectIn: "transition.bounceIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "EXPAND" : {
                            type: "sequence",
                            contentEffectOut: "transition.expandOut",
                            hoverEffectIn: "transition.expandIn",
                            hoverEffectOut: "transition.expandOut",
                            contentEffectIn: "transition.expandIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SHRINK" : {
                            type: "sequence",
                            contentEffectOut: "transition.shrinkOut",
                            hoverEffectIn: "transition.shrinkIn",
                            hoverEffectOut: "transition.shrinkOut",
                            contentEffectIn: "transition.shrinkIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "SWOOP" : {
                            type: "sequence",
                            contentEffectOut: "transition.swoopOut",
                            hoverEffectIn: "transition.swoopIn",
                            hoverEffectOut: "transition.swoopOut",
                            contentEffectIn: "transition.swoopIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "WHIRL" : {
                            type: "sequence",
                            contentEffectOut: "transition.whirlOut",
                            hoverEffectIn: "transition.whirlIn",
                            hoverEffectOut: "transition.whirlOut",
                            contentEffectIn: "transition.whirlIn",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "CALLOUTBOUNCE" : {
                            type: "callout",
                            contentEffectOut: "callout.bounce",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "CALLOUTSHAKE" : {
                            type: "callout",
                            contentEffectOut: "callout.shake",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "CALLOUTFLASH" : {
                            type: "callout",
                            contentEffectOut: "callout.flash",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "CALLOUTPULSE" : {
                            type: "callout",
                            contentEffectOut: "callout.pulse",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "CALLOUTSWING" : {
                            type: "callout",
                            contentEffectOut: "callout.swing",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "CALLOUTTADA" : {
                            type: "callout",
                            contentEffectOut: "callout.tada",
                            extraTime: 0,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "CALLOUTROTATE": {
                            type: "callout",
                            contentEffectOut: {
                                rotateZ: "360deg"
                            },
                            contentEffectIn: {
                                rotateZ: "0deg"
                            },
                            extraTime: 50,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        },
                        "CALLOUTROTATEINVERSE": {
                            type: "callout",
                            contentEffectOut: {
                                rotateZ: "-360deg"
                            },
                            contentEffectIn: {
                                rotateZ: "0deg"
                            },
                            extraTime: 50,
                            preparation: function(t,ht){
                                ht.css({
                                        'display' : 'none'
                                    })
                            }
                        }

                    }


                    /*
                    ----------------------------------------
                    METHODS
                    ----------------------------------------
                    */

                    methods = {
                        /*
                        Plugin initialization method
                        creates the scrollbar(s), and ventro slider option
                        ----------------------------------------
                        */
                        init:function(options){
                            var curVer = $.fn.jquery,
                                el = $(this),
                                ua = navigator.userAgent;



                            // Initializing if jQuery version is greater than 1.7.0

                            if( !functions._checkJQueryVersion.call(el,jQueryVer,curVer) ){
                                functions._showNotice.call(el, el, 'oldjquery',curVer)

                            }else{
                                var  selector = functions._selector.call(this); /* Validate selector */

                                settings=$.extend(true,{},defaults,options);


                                /* plugin constructor */
                                return $(selector).each(function(){

                                        var $this=$(this);


                                        if(!$this.data(pluginPfx)){
                                            /* prevent multiple instantiations */
                                            ctr++;

                                            /* store options and create objects in jquery data */

                                            $this.data(pluginPfx,{
                                                    bindEvents: false,
                                                    nextStep: 1,          // Index of stepPos to scrollTo
                                                    stepPos: [],          // Position of autoscroll contain in an array
                                                    stepDelay: [],        // Delay of every step in an array
                                                    stepDuration: [],     // Time needed to next step in an array
                                                    totalStep: 0,
                                                    settings: settings,
                                                    autoScroll: false,
                                                    isScroll: true, // Is the content width enough to make scrollable
                                                    matrixC: [],
                                                    paddingArr: [],
                                                    ratio: [],
                                                    originalMode: settings.mode,
                                                    cssClass: cssPrefixClass + ctr.toString()
                                                });

                                            var d=$this.data(pluginPfx),
                                            opt = d.settings;


                                            if (functions._cb.call($this, "onInit")){
                                                opt.callbacks.onInit.call($this[0]);
                                            }
                                            
                                            // Remove Class Destroy
                                            $this.removeClass(destroyClass);

                                            // Add markup to plugins
                                            functions._pluginMarkup.call($this,settings.pluginMarkup);

                                            // Added <li class="clearfix"> on last child of grid container
                                            functions._closeGridContainer.call($this);

                                            // Setting all default class to slider needs
                                            functions._setClass.call($this);

                                            // Insert max cols and rows value per grid container
                                            functions._setMatrixC.call($this);

                                            // Generate Grid Container Width & Height, Fonts, Padding & Margin CSS
                                            if (opt.autoGenerateCSS == true || opt.autoGenerateCSS == "true"){
                                                functions._generateCSS.call($this);
                                            }

                                            // Set Box Size in Percentage
                                            functions._setBoxSize.call($this);

                                            // Set <ul ="ventro-container"> width and height
                                            functions._setListContainerSize.call($this);


                                            // Set Box Width for stretchMode
                                            functions._setStretchRatio.call($this);
                                            functions._setContainerStretchHeight.call($this);

                                            if (opt.mode.toUpperCase() == "SCROLL" ){

                                                // Set scrollbar, scrollbar wrapper and style
                                                functions._setScrollbar.call($this);

                                                // Set center for SCROLL
                                                if (opt.center == "true" || opt.center == true){
                                                    functions._setCenter.call($this);
                                                }

                                            }



                                            functions._setSliderHeight.call($this);
                                            
                                            functions._checkDeviceFallback.call($this);
                                            
                                            functions._hideSlider.call($this, opt.show);
                                            
                                            if (opt.scroll.parallax.url !== ''){
												$this.append('<img class="ventro-background" style="display:none;" src="' + opt.scroll.parallax.url + '">');
											}
                                            

                                            // Run after all images is loaded
                                            // $this.find(selectorClass.listContainer).css('visibility','hidden');
                                            setTimeout(function(){
                                            	
	                                            // Set box animation
                                            	functions._setAnimation.call($this);                                            	
                                                $this.imagesLoaded().always( functions._showSlider.call($this, opt.show) );
                                                
	                                            // Set Parallax and AutoScrolling for Scroll Mode
	                                            if (opt.mode.toUpperCase()=="SCROLL"){                                                

	                                                // Set Parallax
	                                                functions._setParallax.call($this);

	                                                // Check if scroll step is numeric or array and get total length
	                                                var totalStepTemp = ( !(opt.scroll.step instanceof Array) ) ? parseFloat(opt.scroll.step) : opt.scroll.step.length;

	                                                d.isScroll = functions._getIsScroll.call($this);

	                                                if (totalStepTemp > 0 && d.isScroll){

	                                                    // Set the auto scroll position in an array
	                                                    functions._setStepPosition.call($this);
	                                                    functions._setStepDelay.call($this);
	                                                    functions._setStepDuration.call($this);
	                                                    functions._checkPauseOnHover.call($this);



	                                                    setTimeout(function(){
	                                                            methods.autoScrollOn.call($this,d.stepPos[d.nextStep],d.stepDuration[d.nextStep]);
	                                                            //methods.autoScrollOn.call($this,dest,opt.scroll.stepForwardTimer);
	                                                        }, opt.scroll.startDelay);

	                                                }
	                                            }   
	                                            
	                                            functions._checkBreakPoint.call($this);

	                                            // Window resize checking
	                                            $(window).resize(function(){
	                                                
	                                                // If Not Destroyed
	                                                if (!$this.hasClass(destroyClass)) {

	                                                        $this.css('max-width', window.innerWidth  );
	                                                        
	                                                        if (opt.mode.toUpperCase()=="SCROLL"){
	                                                            
	                                                            var totalStepTemp = ( !(opt.scroll.step instanceof Array) ) ? opt.scroll.step : opt.scroll.step.length;

	                                                            if (totalStepTemp > 0){
	                                                                functions._setStepPosition.call($this);
	                                                                methods.autoScrollOff.call($this);
	                                                                methods.resumeScroll.call($this);
	                                                            }
	                                                        }


	                                                        if (opt.responsive.length > 0){
	                                                            functions._setListContainerSize.call($this);
	                                                            functions._setSliderHeight.call($this);
	                                                            functions._checkBreakPoint.call($this);

	                                                        }

	                                                        functions._setStretchRatio.call($this);
	                                                        functions._setContainerStretchHeight.call($this);
	                                                }

	                                            });	                                                                                         
                                                
                                            },800);
                                            //var imgLoad = imagesLoaded( $this,  functions._showSlider.call($this,opt.showEffect,opt.showDuration));






                                           


                                        } // End if (!this.data(pluginPfx))


                                    });

                            }

                        },


                        autoScrollOn:function(to,timer,resume){

                            var selector= functions._selector.call(this); /* validate selector */


                            return $(selector).each(function(){

                                    var $this=$(this);


                                    if($this.data(pluginPfx)){
                                        /* check if plugin has initialized */

                                        var d = $this.data(pluginPfx),
                                        opt = d.settings,

                                        totalStepTemp = ( !(opt.scroll.step instanceof Array) ) ? parseFloat(opt.scroll.step) : opt.scroll.step.length;

                                        if (totalStepTemp > 0){

                                            // Callbacks Autoscrolling
                                            if (functions._cb.call($this, "onAutoScrollOn")){
                                                opt.callbacks.onAutoScrollOn.call($this[0]);
                                            }


                                            var delayTime = d.stepDelay[d.nextStep] + d.stepDuration[d.nextStep],
                                            durationTime = d.stepDuration[d.nextStep],
                                            isResume = (resume !== undefined) ? resume : false;



                                            if (!isResume){
                                                d.nextStep++;
                                                d.nextStep = d.nextStep % d.totalStep;
                                            }

                                            // Auto Scroll Animation
                                            $this.addClass("auto-scrolling-on").mCustomScrollbar(
                                                "scrollTo",to,{
                                                    scrollInertia: durationTime,
                                                    scrollEasing: opt.scroll.easing
                                                });

                                            d.autoScroll = setTimeout(function(){

                                                    methods.autoScrollOff.call($this);
                                                    methods.autoScrollOn.call($this,d.stepPos[d.nextStep], d.stepDuration[d.nextStep]);
                                                }, delayTime);

                                        }

                                    }
                                });

                        },


                        // Stop scrolling
                        autoScrollOff:function(){
                            var selector= functions._selector.call(this); /* validate selector */

                            return $(selector).each(function(){

                                    var $this=$(this);

                                    if($this.data(pluginPfx)){
                                        /* check if plugin has initialized */
                                        var  d = $this.data(pluginPfx), opt = d.settings;



                                        if (functions._cb.call($this, "onAutoScrollOff")){
                                            opt.callbacks.onAutoScrollOff.call($this[0]);
                                        }

                                        clearTimeout(d.autoScroll);
                                        $this.removeClass("auto-scrolling-on").mCustomScrollbar("stop");
                                    }
                                });



                        },


                        // Scroll resume after window resize or on hover
                        resumeScroll:function(){
                            var selector= functions._selector.call(this); /* validate selector */

                            return $(selector).each(function(){

                                    var $this=$(this);

                                    if($this.data(pluginPfx)){
                                        /* check if plugin has initialized */

                                        var d = $this.data(pluginPfx),
                                        opt = d.settings,
                                        cStep = d.currentStep,
                                        totalStepTemp = ( !(opt.scroll.step instanceof Array) ) ? parseFloat(opt.scroll.step) : opt.scroll.step.length;


                                        if (totalStepTemp > 0){
                                            if (functions._cb.call($this, "onResumeAutoScroll")){
                                                opt.callbacks.onResumeAutoScroll.call($this[0]);
                                            }

                                            methods.autoScrollOff.call($this);
                                            methods.autoScrollOn.call($this, d.stepPos[d.nextStep], d.stepDuration[d.nextStep],true);
                                        }


                                    }
                                });
                        },

                        // Change Mode
                        changeMode: function(modeP,isPermanent){
                            var selector= functions._selector.call(this); /* validate selector */



                            return $(selector).each(function(){
                                    var $this=$(this);

                                    if($this.data(pluginPfx)){
                                        /* check if plugin has initialized */
                                        var d = $this.data(pluginPfx),
                                        opt = d.settings,
                                        isP = (typeof(isPermanent) !== "undefined") ? isPermanent : false;

                                        // If this current mode is not the same with mode before (to prevent same mode)
                                        if (modeP.toUpperCase() !== opt.mode.toUpperCase()){

                                            if (functions._cb.call($this, "onChangeMode")){
                                                opt.callbacks.onChangeMode.call($this[0]);
                                            }

                                            //$this.find('.mCSB_scrollTools').unwrap();
                                            if (opt.mode.toUpperCase() == "SCROLL"){
                                                $this.mCustomScrollbar("destroy");
                                                $this.find(selectorClass.listContainer).removeAttr('style').next().remove();
                                            }
                                            $this.find(selectorClass.gridContainer).removeAttr('style');
                                            // Fill with new mode
                                            $this.data(pluginPfx).settings.mode = modeP;

                                            // If change for permanently then change the original value also
                                            if (isP){
                                                d.originalMode = modeP;
                                            }



                                            // Remove Old CSS
                                            $('head .' + d.cssClass).remove();

                                            // Generate Grid Container Width & Height, Fonts, Padding & Margin CSS
                                            if (opt.autoGenerateCSS == true || opt.autoGenerateCSS == "true"){
                                                functions._generateCSS.call($this);
                                            }

                                            // Set Box Size in Percentage
                                            functions._setBoxSize.call($this);

                                            // Set <ul ="ventro-container"> width and height
                                            functions._setListContainerSize.call($this);


                                            // Set Box Width for stretchMode
                                            functions._setStretchRatio.call($this);
                                            functions._setContainerStretchHeight.call($this);




                                            if (opt.mode.toUpperCase() == "SCROLL" ){
                                                // Set scrollbar, scrollbar wrapper and style
                                                functions._setScrollbar.call($this);

                                                // Set center for SCROLL
                                                if (opt.center == "true" || opt.center == true){
                                                    functions._setCenter.call($this);
                                                }

                                            }

                                            functions._setSliderHeight.call($this);
                                            
                                            functions._checkDeviceFallback.call($this);



                                            if (opt.mode.toUpperCase()=="SCROLL"){

                                                // Set Parallax
                                                functions._setParallax.call($this);

                                                var totalStepTemp = ( !(opt.scroll.step instanceof Array) ) ? opt.scroll.step : opt.scroll.step.length;


                                                d.isScroll = functions._getIsScroll.call($this);

                                                if (totalStepTemp > 0 && d.isScroll){

                                                    // Set the auto scroll position in an array
                                                    functions._setStepPosition.call($this);
                                                    functions._setStepDelay.call($this);
                                                    functions._setStepDuration.call($this);
                                                    functions._checkPauseOnHover.call($this);

                                                    setTimeout(function(){
                                                            methods.autoScrollOn.call($this,d.stepPos[d.nextStep],d.stepDuration[d.nextStep]);
                                                        }, opt.scroll.startDelay);

                                                }
                                            }     else {
                                                methods.autoScrollOff.call($this);
                                            }





                                        }



                                    }

                                });

                        },

                        // Set Scroll Step
                        setScrollStep: function(step){
                            var selector= functions._selector.call(this); /* validate selector */

                            return $(selector).each(function(){
                                    var $this=$(this);

                                    if($this.data(pluginPfx)){
                                        /* check if plugin has initialized */

                                        var d = $this.data(pluginPfx),
                                        opt = d.settings;

                                        if (opt.scroll.step !== step)    {

                                            opt.scroll.step = step;

                                            methods.autoScrollOff.call($this);

                                            if (opt.mode.toUpperCase()=="SCROLL"){


                                                var totalStepTemp = ( !(opt.scroll.step instanceof Array) ) ? opt.scroll.step : opt.scroll.step.length;
                                                d.isScroll = functions._getIsScroll.call($this);

                                                if (totalStepTemp > 0 && d.isScroll){


                                                    // Set the auto scroll position in an array
                                                    functions._setStepPosition.call($this);
                                                    functions._checkPauseOnHover.call($this);

                                                    setTimeout(function(){
                                                            methods.autoScrollOn.call($this,d.stepPos[d.nextStep],d.stepDuration[d.nextStep]);
                                                        }, opt.scroll.startDelay);

                                                }    else{
                                                    methods.autoScrollOff.call($this);

                                                }
                                            } else {
                                                methods.autoScrollOff.call($this);
                                            }
                                        }

                                    }

                                });

                        },

                        registerEffect: function(data){
                            $.extend(effectData,data);
                        },


                        // Update Slider Size, Used if add new box via js, STILL IN EXPERIMENTS
                        updateSizes: function(){
                            var selector= functions._selector.call(this); /* validate selector */
                            return $(selector).each(function(){
                                    var $this=$(this);

                                    if($this.data(pluginPfx)){
                                        /* check if plugin has initialized */
                                        var d = $this.data(pluginPfx),
                                        opt = d.settings;

                                        // Insert max cols and rows value per grid container
                                        functions._setMatrixC.call($this);

                                        // Remove Old CSS
                                        $('head .' + d.cssClass).remove();

                                        // Generate Grid Container Width & Height, Fonts, Padding & Margin CSS
                                        if (opt.autoGenerateCSS == true || opt.autoGenerateCSS == "true"){
                                            functions._generateCSS.call($this);
                                        }

                                        // Set Box Size in Percentage
                                        functions._setBoxSize.call($this);

                                        // Set <ul ="ventro-container"> width and height
                                        functions._setListContainerSize.call($this);


                                        // Set Box Width for stretchMode
                                        functions._setStretchRatio.call($this);
                                        functions._setContainerStretchHeight.call($this);

                                        functions._setSliderHeight.call($this);
                                    }
                                });
                        },

                        // Completely destroy
                        destroy: function(){
                            var selector= functions._selector.call(this); /* validate selector */

                            return $(selector).each(function(){
                                    var $this=$(this);

                                    if($this.data(pluginPfx)){
                                        /* check if plugin has initialized */

                                        if (functions._cb.call($this, "onDestroy")){
                                            opt.callbacks.onDestroy.call($this[0]);
                                        }
                                        var d = $this.data(pluginPfx);
                                        //$this.find('.mCSB_scrollTools').unwrap();
                                        $this.mCustomScrollbar("destroy");
                                        $this.removeData(pluginPfx);
                                        $this.removeAttr('style');
                                        $this.removeClass('visible');
                                        $this.addClass(destroyClass);
                                        
                                        $this.unwrap();$this.unwrap();
                                        $this.find(selectorClass.listContainer + ' .ventro-grid-closing').remove();
                                        $this.find('.ventro-background').remove();
                                        $this.find(selectorClass.listContainer).removeClass('visible');
                                        $this.find(selectorClass.listContainer).removeAttr('style').next().remove();
                                        $this.find(selectorClass.gridContainer).removeAttr('style').removeClass('odd').removeClass('even');


                                        $('head .' + d.cssClass).remove();
                                    }
                                });
                        }


                    },

                    /*
                    ----------------------------------------
                    FUNCTIONS
                    ----------------------------------------
                    */

                    functions = {

                        // Check if jquery version is the required one
                        _checkJQueryVersion:function(v1,v2){

                            var v1parts = v1.split('.');
                            var v2parts = v2.split('.');

                            for (var i = 0; i < v1parts.length; ++i) {

                                if (v2parts.length == i) {
                                    return false;
                                }

                                if(parseInt(v1parts[i]) == parseInt(v2parts[i])){
                                    continue;
                                }else if (parseInt(v1parts[i]) > parseInt(v2parts[i])){
                                    return false;
                                }else{
                                    return true;
                                }
                            }

                            if (v1parts.length != v2parts.length) {
                                return true;
                            }

                            return true;
                        },

                        _showNotice: function (vsobj,issue,ver){

                            var el;

                            if( typeof vsobj == 'string' ){
                                el = jQuery('#'+ vsobj);
                            }else if( typeof vsobj == 'object' ){
                                el = vsobj;
                            }

                            var errorTitle, errorText;

                            switch(issue){
                                case 'oldjquery':
                                errorTitle = notice[issue.toUpperCase()].title;
                                errorText = notice[issue.toUpperCase()].text1 + ver + notice[issue.toUpperCase()].text2;
                                break;
                            }

                            el.addClass('vs-error');
                            el.find(' > .ventro-container ').css('display','none');
                            var errorOutput = '<div class="vs-error-output">' +
                            '<div class="vs-icon">!</div>' +
                            '<div class="vs-error-text">' +
                            '<p class="vs-error-title">Ventro Slider: '+errorTitle+'</p>' +
                            '<p class="vs-error-desc">'+errorText+'</p>' +
                            '</div>'+
                            '<div style="clear:both;"></div>' +
                            '</div>';
                            el.append(errorOutput);
                        },

                        /* Validates selector (if selector is invalid or undefined uses the default one) */
                        _selector:function(){
                            return (typeof $(this)!=="object" || $(this).length<1) ? defaultSelector : this;
                        },

                        // Set scrollbar
                        _setScrollbar:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings;
                            $this.mCustomScrollbar({
                                    setLeft: opt.scroll.setLeft,
                                    axis:"x",
                                    advanced:{
                                        autoExpandHorizontalScroll:true,
                                        updateOnContentResize: true
                                    },
                                    scrollbarPosition: "outside",
                                    mouseWheel:{
                                        enable: opt.scroll.mouseWheel.enable,
                                        scrollAmount: opt.scroll.mouseWheel.scrollAmount,                                        
                                        invert: opt.scroll.mouseWheel.invert,
                                    },
                                    scrollButtons:{ 
                                        enable: opt.scroll.scrollButtons.enable, 
                                        scrollAmount: opt.scroll.scrollButtons.scrollAmount,
                                        scrollType: opt.scroll.scrollButtons.scrollType,
                                    },
                                    keyboard:{ 
                                        enable: opt.scroll.keyboard.enable, 
                                        scrollAmount: opt.scroll.keyboard.scrollAmount,
                                        scrollType: opt.scroll.keyboard.scrollType,                                        
                                    },
                                    contentTouchScroll:opt.scroll.contentTouchScroll,
                                    advanced:{ releaseDraggableSelectors: ".ventro-slider" 
                                    },
                                    callbacks:{
                                        onScroll:function(){
                                            if($(this).data("mCS").trigger==="internal"){
                                                methods.autoScrollOff.call();
                                            }
                                            if (functions._cb.call($this, "onScroll")){
                                                opt.callbacks.onScroll.call($this[0]);
                                            }
                                        },
                                        whileScrolling:function(){
                                            if (functions._cb.call($this, "whileScrolling")){
                                                opt.callbacks.whileScrolling.call($this[0]);
                                            }
                                            functions._runParallax.call($this,this);
                                        },
                                        onScrollStart:function(){
                                            if (functions._cb.call($this, "onScrollStart")){
                                                opt.callbacks.onScrollStart.call($this[0]);
                                            }
                                        },
                                        onTotalScroll:function(){
                                            if (functions._cb.call($this, "onTotalScroll")){
                                                opt.callbacks.onTotalScroll.call($this[0]);
                                            }
                                        },
                                        onTotalScrollBack:function(){
                                            if (functions._cb.call($this, "onTotalScrollBack")){
                                                opt.callbacks.onTotalScrollBack.call($this[0]);
                                            }
                                        },

                                        onOverflowXNone: function(){
                                            d.isScroll = false;
                                        },
                                        onOverflowX: function(){
                                            d.isScroll = true;
                                        }
                                    },
                                    theme: opt.scroll.dragger.theme

                                });

                            functions._scrollMarkup.call($this,opt.scroll.dragger.markup);
                            functions._setDragger.call($this);

                        },
                        
                        // Check fallback for scrolling 
                        _checkDeviceFallback: function(){
                              var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                                  ua = navigator.userAgent,
                                  aReg = new RegExp('Android'),
                                  cPhoneReg = new RegExp('Chrome/[.0-9]* Mobile'),
                                  cTabletReg = new RegExp('Chrome/[.0-9]* (?!Mobile)');
                                  

                              var isChromeAndroidPhone = (aReg.test(ua) && cPhoneReg.test(ua))? true : false,
                                  isChromeAndroidTablet = (aReg.test(ua) && cTabletReg.test(ua))? true : false;


                              if (isChromeAndroidPhone || isChromeAndroidTablet){
                                  if (opt.mode.toUpperCase() == 'SCROLL'){                                                                    
                                    $this.mCustomScrollbar('destroy');
                                     $this.parent().css({
                                        'overflow-x': 'scroll',
                                        'overflow-y': 'hidden',
                                
                                    });             
                                  }
                              }     
                        },
                        

                        // Set Auto Scroll Position
                        _getIsScroll:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                            sliderWidth = $this.find('.ventro-container').outerWidth(true),
                            contWidth = $this.parent().width();
                            return (sliderWidth > contWidth);

                        },

                        // Set Auto Scroll Position
                        _setStepPosition:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                            step = opt.scroll.step, pos = [];

                            if(!(step instanceof Array)){
                                // object value (e.g. {y:"100",x:"100"}, 100 etc.)

                                step = parseFloat(step);

                                var pct = Math.round(100 / step);

                                xvalue = functions._countBarInc.call($this, pct);

                                for (var i = 0; i <= step; i++){
                                    pos.push(i*xvalue);
                                }

                                d.totalStep = pos.length;
                                d.stepPos = pos.slice(0);

                            }else{
                                //array value (e.g. [100,100])

                                d.stepPos = step.slice(0);
                                d.totalStep = d.stepPos.length;


                            }



                        },

                        // Set Step Delay
                        _setStepDelay:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                            stepDelay = opt.scroll.stepDelay, delayTemp = [];

                            if(!(stepDelay instanceof Array)){
                                /* number value  */

                                stepDelay = parseFloat(stepDelay);

                                for (var i = 0; i < d.totalStep; i++){
                                    delayTemp.push(stepDelay)
                                }
                                d.stepDelay = delayTemp.slice(0);

                            }else{
                                /* array value (e.g. [100,200]) */
                                d.stepDelay = stepDelay.slice(0);

                            }

                            // Fill 0 if stepDelay length less than total Step

                            var j = d.stepDelay.length;
                            for (var i = j; i < d.totalStep; i++){
                                d.stepDelay.push(0);
                            }

                        },

                        _setStepDuration:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                            stepDuration = opt.scroll.stepDuration, durationTemp = [];

                            if(!(stepDuration instanceof Array)){
                                /* number value  */

                                stepDuration = parseFloat(stepDuration);

                                for (var i = 0; i < d.totalStep; i++){
                                    durationTemp.push(stepDuration)
                                }
                                d.stepDuration = durationTemp.slice(0);


                            }else{
                                /* array value (e.g. [100,200]) */
                                d.stepDuration = stepDuration.slice(0);

                            }

                            // Fill 4000 if stepDuration length less than total Step

                            var j = d.stepDuration.length;
                            for (var i = j; i < d.totalStep; i++){
                                d.stepDuration.push(4000);
                            }


                        },




                        // Set slider's viewport height
                        _checkBreakPoint:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                            currentWindowWidth = window.innerWidth,
                            resp = opt.responsive,
                            currentMode = '',
                            indexUsed = -1, indexUsedResp = -1;

                            // Responsive Layout
                            for (var j = 0 ; j < resp.length; j++) {
                                var windowWidth = resp[j].windowWidth;
                                if (currentWindowWidth <= windowWidth){
                                    indexUsed = j;
                                }
                                if (currentWindowWidth <= windowWidth && typeof(resp[j].mode) !== "undefined"){
                                    indexUsedResp = j;
                                }
                            }

                            // check if there is change mode in responsive setting
                            if ( indexUsedResp >= 0 ) {
                                methods.changeMode.call($this,resp[indexUsedResp].mode);
                            } else {
                                methods.changeMode.call($this,d.originalMode);
                            }

                            // if there is responsive value
                            if ( indexUsed >= 0 ){

                                // function check
                                var func = (typeof(resp[indexUsed].callback) !== "undefined" && typeof(resp[indexUsed].callback)==="function") ? resp[indexUsed].callback : '';

                                if (func !== ''){
                                    resp[indexUsed].callback.call($this[0]);
                                }


                            } else {
                                if (functions._cb.call($this, "onOutsideBreakPoint")){
                                    opt.callbacks.onOutsideBreakPoint.call($this[0]);
                                }
                            }
                        },

                        // Set parallax setting
                        _setParallax:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings;
                            // Check pause on hover

                            if (opt.scroll.parallax.target !== "" &&  opt.scroll.parallax.url !== "" ){
                                $(opt.scroll.parallax.target).css({
                                        "background-image": 'url("'+ opt.scroll.parallax.url + '")',
                                        "background-position": opt.scroll.parallax.xPosition + " " + opt.scroll.parallax.yPosition,
                                        "background-repeat": "no-repeat"
                                    })
                            }
                        },

                        // Run parallax
                        _runParallax:function(o){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings;
                            // Check pause on hover
                            if (opt.scroll.parallax.target !== "" &&  opt.scroll.parallax.url !== "" && d.isScroll){
                                var xPos = (opt.scroll.parallax.xPosition.indexOf("px") > -1) ? parseFloat(opt.scroll.parallax.xPosition.replace("px", "")) : parseFloat(opt.scroll.parallax.xPosition.replace("%", ""))
                                unit = (opt.scroll.parallax.xPosition.indexOf("px") > -1) ? "px" : "%";
                                $(opt.scroll.parallax.target).css({
                                        "background-position":  ( xPos + o.mcs.left * opt.scroll.parallax.ratio) + unit + " " + opt.scroll.parallax.yPosition
                                    })
                            }
                        },

                        // Set slider's viewport height
                        _setSliderHeight:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                            aHeight = [], maxDraggerHeight = 0, draggerHeight = 0;

                            aHeight.push($this.find(rClass).outerHeight(true));
                            aHeight.push($this.find(dClass).outerHeight(true));

                            maxDraggerHeight = Math.max.apply(Math, aHeight);
                            draggerHeight = $this.find('.mCSB_outside').next().outerHeight(true);

                            var height = (opt.height !== "auto") ? opt.height : $this.find(selectorClass.listContainer).parent().height() + maxDraggerHeight + draggerHeight;

                            if (!functions._isStretchMode.call($this)){
                                $this.parent().css('height',height);
                            } else{
                                $this.parent().css('height','auto');
                            }
                        },


                        // Set slider's viewport height
                        _checkPauseOnHover:function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                            totalStepTemp = ( !(opt.scroll.step instanceof Array) ) ? parseFloat(opt.scroll.step) : opt.scroll.step.length;

                            // Check pause on hover
                            if (opt.scroll.pauseOnHover &&  d.isScroll){

                                $this.parent().parent().mouseenter(function() {
                                        if (!$this.hasClass(destroyClass)){                                                                                    
                                            methods.autoScrollOff.call($this);
                                        }
                                })
                                .mouseleave(function() {
                                        if (!$this.hasClass(destroyClass)){ 
                                            if (totalStepTemp > 0) {
                                                methods.resumeScroll.call($this);
                                            }
                                        }
                                });


                                /*                // Other Method
                                $this.hover(function(){
                                methods.autoScrollOff.call($this);
                                },function(){
                                methods.resumeScroll.call($this);
                                });
                                */
                            }
                        },


                        // Set Scrollbar Theme
                        _setDragger: function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings,
                            bar = $this.children('.mCSB_outside').siblings().find(dClass),
                            rail = $this.children('.mCSB_outside').siblings().find(rClass);

                            if ( opt.scroll.dragger.barHeight !=null ){
                                bar.css('height', opt.scroll.dragger.barHeight);
                            }
                            if ( opt.scroll.dragger.barColor !=null ){
                                bar.css('background', opt.scroll.dragger.barColor);
                            }
                            if ( opt.scroll.dragger.barOffset !=null ){
                                bar.css({
                                        'margin-top' :         opt.scroll.dragger.barOffset,
                                        'margin-bottom' :    opt.scroll.dragger.barOffset
                                    });
                            }
                            if ( opt.scroll.dragger.railHeight !=null ){
                                rail.css('height', opt.scroll.dragger.railHeight);
                            }
                            if ( opt.scroll.dragger.railColor !=null ){
                                if (opt.scroll.dragger.theme.toUpperCase() == "3D-THICK-DARK" || opt.scroll.dragger.theme.toUpperCase() == "3D-THICK") {
                                    $this.find('.mCSB_draggerContainer').css('background', opt.scroll.dragger.railColor);

                                } else {
                                    rail.css('background', opt.scroll.dragger.railColor);
                                }

                            }
                            if ( opt.scroll.dragger.railOffset !=null ){
                                rail.css({
                                        'margin-top' :         opt.scroll.dragger.railOffset,
                                        'margin-bottom' :    opt.scroll.dragger.railOffset
                                    });
                            }
                        },


                        _convertWidthToPixel: function(w){
                            var $this = $(this), d = $this.data(pluginPfx), opt =d.settings,
                            totalWidth = $(this).parent().width();

                            return w * totalWidth / 100

                        },

                        _setStretchRatio: function(){

                            /*
                            Main purpose of this functions is to count the original grid width and
                            compare to the current grid width.
                            Then set ratio (current grid width / original grid width) to be used to calculate the grid height

                            */
                            var $this = $(this), d = $this.data(pluginPfx), opt =d.settings,
                            totalLength = 0, w = opt.boxDimensions[0], hm = opt.boxMargins[0],
                            currentWindowWidth = window.innerWidth,
                            breakGrid = opt.breakGrid,
                            hideGrid = opt.hideGrid,
                            breakGridAll = '',
                            hideGridAll = '',
                            breakValue = [],
                            hideGridValue = [],
                            indexUsed = -1, temp = [], resp = opt.responsive;

                            function strTrim(x) {
                                return x.replace(/^\s+|\s+$/gm,'');
                            }

                            if (opt.mode.toUpperCase() == "PROPORTION"){
                                // Clear ratio
                                while(d.ratio.length > 0) {
                                    d.ratio.pop();
                                }

                                // Responsive Layout
                                for (var j = 0 ; j < resp.length; j++) {
                                    var windowWidth = resp[j].windowWidth;
                                    if (currentWindowWidth <= windowWidth ){
                                        indexUsed = j;
                                    }
                                }

                                // Fill default with false for breakGrid and hideGrid
                                for (var i = 0; i < d.matrixC.length; i++){
                                    breakValue[i] = false;
                                    hideGridValue[i] = false;
                                }

                                // Concat all breakGrid
                                if (breakGrid !== ''){
                                    breakGridAll = breakGridAll + ',' + breakGrid;
                                    breakValue = functions._getBreakArray.call($this, breakGridAll);
                                }

                                // Concat all hideGrid
                                if (hideGrid !== ''){
                                    hideGridAll = hideGridAll + ',' + hideGrid;
                                    hideGridValue = functions._getBreakArray.call($this, hideGridAll);
                                }


                                // if there is responsive value
                                if ( indexUsed >= 0 ){

                                    for (var l=0; l <= indexUsed; l++){
                                        // Get responsive break value
                                        var breakGrid = (typeof(resp[l].breakGrid) !== "undefined") ? strTrim(resp[l].breakGrid) : '',
                                        unBreakGrid = (typeof(resp[l].unBreakGrid) !== "undefined") ? strTrim(resp[l].unBreakGrid) : '',
                                        negativeUnBreakGrid = '',

                                        hideGrid = (typeof(resp[l].hideGrid) !== 'undefined') ? strTrim(resp[l].hideGrid)  : '',
                                        unHideGrid = (typeof(resp[l].unHideGrid) !== 'undefined') ? strTrim(resp[l].unHideGrid)  : '',
                                        negativeUnHideGrid = '',
                                        breakArr = [];


                                        // Concat all breakGrid
                                        if (breakGrid !== ''){
                                            breakGridAll = breakGridAll + ',' + breakGrid;
                                        }

                                        // Concat with unBreakGrid
                                        if (unBreakGrid !== ''){
                                            negativeUnBreakGrid = functions._negativeValue.call($this,unBreakGrid);
                                            breakGridAll = breakGridAll + ',' + negativeUnBreakGrid;
                                        }

                                        // Concat all hideGrid
                                        if (hideGrid !== ''){
                                            hideGridAll = hideGridAll + ',' + hideGrid;
                                        }

                                        // Concat all unHideGrid
                                        if (unHideGrid !== ''){
                                            negativeUnHideGrid = functions._negativeValue.call($this,unHideGrid);
                                            hideGridAll = hideGridAll + ',' + negativeUnHideGrid;
                                        }
                                    }
                                    if (breakGridAll !== '' || hideGridAll !== ''){
                                        // Get break and hide grid value in a array
                                        breakValue = functions._getBreakArray.call($this, breakGridAll);
                                        hideGridValue = functions._getBreakArray.call($this, hideGridAll);

                                    }

                                }
                                d.ratio = functions._getGridData.call($this,'stretchRatio',breakValue,hideGridValue);
                            }

                        },

                        _setBoxSize: function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt =d.settings,
                            i = 0;

                            $this.find(selectorClass.gridContainer).each(function(){

                                    var cols = d.matrixC[i].cols,
                                    rows = d.matrixC[i].rows;

                                    $(this).find(selectorClass.box).each(function(){
                                            //ht =  parseFloat($(this).data("box-h") * h + vm * ($(this).data("box-y")) * $(this).data("box-h") * 2);
                                            var boxX = (parseFloat($(this).data('box-x')) - 1) / cols * 100,
                                            boxY = (parseFloat($(this).data('box-y')) - 1) / rows * 100,
                                            boxW = parseFloat($(this).data('box-w')) / cols * 100,
                                            boxH = parseFloat($(this).data('box-h')) / rows * 100;


                                            $(this).css({
                                                    left: boxX +'%',
                                                    top: boxY +'%',
                                                    width: boxW +'%',
                                                    height: boxH +'%'

                                                })

                                        })

                                    i++;
                                });
                        },


                        _setContainerStretchHeight: function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt =d.settings,
                            i = 0, temp = 0 ;


                            if (opt.mode.toUpperCase() == "PROPORTION"){
                                $this.find(selectorClass.gridContainer).each(function(){

                                        temp = functions._getBoxActualSize.call($this,'height',d.matrixC[i].rows) * d.ratio[i];

                                        $(this).css('height', temp + 'px');

                                        if (d.paddingArr[i].left > 0){
                                            temp = d.paddingArr[i].left * d.ratio[i];
                                            $(this).css('padding-left', temp + 'px');
                                        }
                                        if (d.paddingArr[i].right > 0){
                                            temp = d.paddingArr[i].right * d.ratio[i];
                                            $(this).css('padding-right', temp + 'px');
                                        }

                                        i++;
                                    });
                            }
                        },




                        _setCenter: function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt =d.settings;

                            $this.find(selectorClass.listContainer).parent().addClass('centered-container').css({
                                    'margin-left': 'auto',
                                    'margin-right': 'auto'
                                });
                        },

                        /* checks if callback function exists */
                        _cb: function(cb){
                            var $this = $(this), d = $this.data(pluginPfx), opt = d.settings;
                            return d && opt.callbacks[cb] && typeof opt.callbacks[cb]==="function";
                        },

                        // Calculate increment bar location to scroll
                        _countBarInc: function(pct){
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            cont = $this.find(cClass);

                            return (Math.round(Math.abs((cont.outerWidth() - cont.parents(selectorClass.viewport).width()) * pct/100)));
                        },


                        // Class set for slider
                        _setClass : function(){
                            var $this = $(this), d = $this.data(pluginPfx), opt =d.settings;
                            $this.addClass(baseClass);
                            if (opt.namespace !== '') {
                                $this.addClass(opt.namespace);
                            }
                            $this.find(selectorClass.gridContainer + ':odd').each(function(){
                                    $(this).addClass('even')
                                });
                            $this.find(selectorClass.gridContainer + ':even').each(function(){
                                    $(this).addClass('odd')
                                });
                            $this.parents(selectorClass.viewport).addClass(opt.show.loader);

                        },

                        // Plugin HTML markup wrapper function
                        _pluginMarkup : function(markup){
                            var $this = $(this);
                            $this.wrap(markup);
                        },

                        // grid container closing
                        _closeGridContainer : function(){
                            var $this = $(this);
                            $this.find(selectorClass.listContainer).append('<li class="ventro-grid-closing" style="clear:both;"></li>');
                        },

                        // Scroller HTML markup wrapper function
                        _scrollMarkup : function(markup){
                            var $this = $(this);

                            $this.children('.mCSB_scrollTools').wrap(markup).parent().css({
                                    'position':'relative',
                                });
                            $this.mCustomScrollbar("update");
                        },
                        
                        // Hide loading icon and show slider content
                        _hideSlider : function(o){
                            var $this = $(this),
                                e = o.effect, 
                                t = $this,                               
                                effect;
                            try{
 
                                if (o.effect.toUpperCase() == "FLIPX") {
                                    e = "FLIPFADEX"
                                }
                                if (o.effect.toUpperCase() == "FLIPY") {
                                    e = "FLIPFADEY"
                                }
                                 if (o.stagger !== false && o.stagger !== "false" ) {
                                    if (o.effect.toUpperCase() == "SLIDELEFT") {
                                    	e = "SLIDELEFTFADE"
                                	}
                                    if (o.effect.toUpperCase() == "SLIDERIGHT") {
                                    	e = "SLIDERIGHTFADE"
                                	}
                                    if (o.effect.toUpperCase() == "SLIDEUP") {
                                    	e = "SLIDEUPFADE"
                                	}
                                    if (o.effect.toUpperCase() == "SLIDEDOWN") {
                                    	e = "SLIDEDOWNFADE"
                                	}    	
                                }                                  
                                if (o.stagger !== false){
                                    t = $this.find(selectorClass.gridContainer);
                                }    
 
                                effectData[e.toUpperCase()].preparation($this,t);

                            } catch(err){
                                console.log("No such effect on showEffect value");
                            }

                        },
                        
                        // Hide loading icon and show slider content
                        _showSlider : function(o){
                            var $this = $(this),
                                e = o.effect, 
                                t = $this,                               
                                effect;
                            try{
 
                                if (o.effect.toUpperCase() == "FLIPX") {
                                    e = "FLIPFADEX"
                                }
                                if (o.effect.toUpperCase() == "FLIPY") {
                                    e = "FLIPFADEY"
                                }
                                if (o.stagger !== false && o.stagger !== "false" ) {
                                    if (o.effect.toUpperCase() == "SLIDELEFT") {
                                    	e = "SLIDELEFTFADE"
                                	}
                                    if (o.effect.toUpperCase() == "SLIDERIGHT") {
                                    	e = "SLIDERIGHTFADE"
                                	}
                                    if (o.effect.toUpperCase() == "SLIDEUP") {
                                    	e = "SLIDEUPFADE"
                                	}
                                    if (o.effect.toUpperCase() == "SLIDEDOWN") {
                                    	e = "SLIDEDOWNFADE"
                                	}       	
                                }                                

                                effect = effectData[e.toUpperCase()].hoverEffectIn;
                                
                                $this.addClass('visible');
                                $this.find(selectorClass.listContainer).addClass('visible');                                
                                $this.parent(selectorClass.viewport).removeClass(o.loader);
                               
                                if (o.stagger !== false){
                                    t = $this.find(selectorClass.gridContainer);
                                }    
 
                                $(t).velocity("stop").velocity(effect, {
                                        duration: o.duration,
                                        stagger: (o.stagger == "false") ? false : o.stagger ,
                                        drag: o.drag,

                                        complete: function(elements) {
                                            if (o.stagger == false || o.stagger == "false") {
                                                $(elements).removeAttr('style');                                                
                                            }
                                        }

                                 });


                            } catch(err){
                                console.log("No such effect on showEffect value");
                            }

                        },

                        // Check for animation and hover data
                        _setAnimation : function(target){

                            var $this = $(this);
                            d = $this.data(pluginPfx),
                            animIndex = 0,
                            animTimeout = [],
                            startTimeout = [],
                            opt = d.settings;

                            $this.find('[data-anim]').each(function(){
                                    var $this = $(this),
                                    o = {
                                        anim : $this.data("anim"), // auto or hover
                                        targetContent : $this.find('.ventro-content'),
                                        targetHover : $this.find('.ventro-content-hover'),
                                        animEffect : ( typeof($this.data("anim-effect")) !== "undefined" ) ? $this.data("anim-effect").toUpperCase() : opt.boxAnim.animEffect.toUpperCase(),
                                        transitionDuration : ( typeof($this.data("transition-duration")) !== "undefined" ) ? $this.data("transition-duration") : opt.boxAnim.transitionDuration,
                                        hoverTransitionDuration : ( typeof($this.data("hover-transition-duration")) !== "undefined" ) ? $this.data("hover-transition-duration") : opt.boxAnim.hoverTransitionDuration,

                                        startDelay : ( typeof($this.data("start-delay")) !== "undefined" ) ? $this.data("start-delay") : opt.boxAnim.startDelay,
                                        contentDelay : ( typeof($this.data("content-delay")) !== "undefined" ) ? $this.data("content-delay") : opt.boxAnim.contentDelay,
                                        hoverDelay : ( typeof($this.data("hover-delay")) !== "undefined" ) ? $this.data("hover-delay") : opt.boxAnim.hoverDelay,
                                        easing : ( typeof($this.data("easing")) !== "undefined" ) ? $this.data("easing") : opt.boxAnim.easing,
                                        over :     ( typeof($this.data("over")) !== "undefined" ) ? $this.data("over") : opt.boxAnim.over
                                    }


                                    // Animation Setup Preparation
                                    try {
                                        effectData[o.animEffect].preparation(o.targetContent,o.targetHover);
                                    }
                                    catch(err){
                                        console.log('Error: data-anim-effect: "'+o.animEffect+'" not available');
                                    }

                                    if (o.anim.toUpperCase() == "AUTO"){
                                        // Auto Animation

                                        $this.addClass('animate-to-hover');
                                        startTimeout[animIndex] = _autoAnimate(o,animIndex,animTimeout,true);


                                    } else if (o.anim.toUpperCase() == "ONCE") {
                                        // Run only once animation

                                        $this.addClass('animate-to-hover');
                                        startTimeout[animIndex] = _autoAnimate(o,animIndex,animTimeout,true,1,1);


                                    } else {
                                        // Hover Animation
                                        _hover(o,animIndex,animTimeout);
                                    }

                                    animIndex++;

                            });



                            // Global animate box function
                            /*            function _animate(target,hoverTarget,effect,duration,reverse, delay, easing, over){
                            */
                            function _animate(o,r,f){
                                // Reverse is for animate back to original content

                                var isReverse = (typeof(r) !== "undefined") ? r : false,
                                target1 = o.targetContent,
                                target2 = o.targetHover,
                                effect1 = effectData[o.animEffect].contentEffectOut,
                                effect2 = effectData[o.animEffect].hoverEffectIn,
                                duration = o.transitionDuration,
                                delay = (f) ? o.contentDelay + o.startDelay : o.contentDelay,
                                easing = o.easing,
                                extraTime = effectData[o.animEffect].extraTime;

                                if (isReverse){
                                    target1 = (effectData[o.animEffect].type.toUpperCase()=="CALLOUT") ? o.targetContent : o.targetHover;
                                    target2 = (o.over) ? o.targetHover : o.targetContent;
                                    effect1 = (effectData[o.animEffect].type.toUpperCase()=="CALLOUT")? effectData[o.animEffect].contentEffectIn : effectData[o.animEffect].hoverEffectOut ;
                                    effect2 = (o.over) ? effectData[o.animEffect].hoverEffectOut : effectData[o.animEffect].contentEffectIn;

                                    duration = o.hoverTransitionDuration;

                                    delay = o.hoverDelay;


                                }




                                function _sequenceAnimation(){
                                    $(target1).velocity("stop").velocity(effect1, {
                                            duration: duration,
                                            delay: delay,
                                            easing: easing,
                                            complete: function(){
                                                $(target2).velocity("stop").velocity(effect2, {
                                                        duration: duration,
                                                        delay: 0 + extraTime,
                                                        easing: easing
                                                    });
                                            }
                                        });

                                }

                                function _parallelAnimation(){
                                    $(target1).velocity("stop").velocity(effect1, {
                                            duration:     duration,
                                            delay:         delay,
                                            easing:     easing
                                        });
                                    $(target2).velocity("stop").velocity(effect2, {
                                            duration:     duration,
                                            delay:         delay + extraTime,
                                            easing:     easing
                                        });
                                }

                                function _overAnimation(){
                                    $(target2).velocity("stop").velocity(effect2, {
                                            duration: duration,
                                            delay:    delay,
                                            easing: easing
                                        });
                                }

                                function _callOutAnimation(){

                                    if (typeof(effect1) !== "undefined") {
                                        $(target1).velocity("stop").velocity(effect1, {
                                                duration: duration,
                                                delay:    delay ,
                                                easing: easing
                                            });
                                    }


                                }


                                // Do Animation

                                if (effectData[o.animEffect].type.toUpperCase() == "PARALLEL"){
                                    if (o.over){
                                        _overAnimation()
                                    } else {
                                        _parallelAnimation()
                                    }
                                } else if (effectData[o.animEffect].type.toUpperCase() == "SEQUENCE"){
                                    if (o.over){
                                        _overAnimation()
                                    } else {
                                        _sequenceAnimation()
                                    }
                                } else if (effectData[o.animEffect].type.toUpperCase() == "CALLOUT"){
                                    _callOutAnimation();

                                };
                            }


                            function _countExtraTime(effect,duration,over){
                                var timer = effectData[effect].extraTime;

                                if (timer === undefined) {
                                    timer = 0
                                };
                                if (effectData[effect].type.toUpperCase() == "SEQUENCE" && (over=="false" || over==false)){
                                    timer = timer + duration;
                                };
                                return timer

                            }


                            // Auto animation for content and hover content
                            function _autoAnimate(o,animIndex,animTimeout,firstTime,maxI,i){

                                // no need for variable checking since it has been checked in _setAnimation function

                                var timer = 0;

                                o.targetContent.parents('[data-anim]').addClass('auto-animate-on');
                                if (o.targetContent.parents('[data-anim]').hasClass('animate-to-hover')){



                                    // animation from original to hover
                                    _animate(o,false,firstTime);
                                    timer = o.transitionDuration + o.contentDelay + _countExtraTime(o.animEffect,o.transitionDuration,o.over) ;
                                    if (firstTime) {
                                        timer += o.startDelay;
                                    }
                                    o.targetContent.parents('[data-anim]').removeClass('animate-to-hover');


                                } else{
                                    // animation from hover to original
                                    _animate(o,true,firstTime);
                                    timer = o.hoverTransitionDuration + o.hoverDelay + _countExtraTime(o.animEffect,o.hoverTransitionDuration,o.over) ;
                                    o.targetContent.parents('[data-anim]').addClass('animate-to-hover');
                                }

                                if (typeof(maxI) == "undefined" || typeof(i) == "undefined") {
                                    animTimeout[animIndex] = setTimeout(function(){
                                            _autoAnimate(o,animIndex,animTimeout,false);
                                        }, timer);
                                } else if (i < maxI) {
                                    animTimeout[animIndex] = setTimeout(function(){
                                            _autoAnimate(o,animIndex,animTimeout,false,maxI,i+1);
                                        }, timer);

                                }

                            }

                            // Using hover for trigger animation
                            function _hover(o,animIndex,animTimeout){

                                $(o.targetContent).parents('[data-anim]').hover(function() {
                                    
                                        if (!$this.hasClass(destroyClass)){                                                                                    
                                            clearTimeout(animTimeout[animIndex]);
                                            animTimeout[animIndex] = setTimeout(function(){
                                                    _animate(o,false);
                                                }, o.contentDelay);
                                        }
                                            

                                // On Release
                                }, function() {
                                        if (!$this.hasClass(destroyClass)){  
                                            if (typeof(effectData[o.animEffect].contentEffectIn) !== "undefined") {
                                                clearTimeout(animTimeout[animIndex]);
                                                animTimeout[animIndex] = setTimeout(function(){
                                                        _animate(o,true);
                                                    }, o.hoverDelay);
                                            }
                                        }
                                });
                            }
                        },
                        _getBreakArray : function(breakGrid){
                            var $this = $(this),
                            d = $this.data(pluginPfx);

                            // breakArr contain breakGrid in an array
                            var breakArr = breakGrid.split(","),
                            breakValue = [];

                            // fill breakValue with the current break state
                            for (var i = 0; i < d.matrixC.length ; i++){
                                breakValue[i] = false;
                            }
                            for (var i = 0; i < breakArr.length ; i++){
                                // if negative value then remove the break
                                if (breakArr[i] < 0){
                                    breakValue[(-breakArr[i])-1] = false;
                                } else {
                                    // Else break it
                                    breakValue[breakArr[i]-1] = true;
                                }
                            }

                            return (breakValue.slice(0));
                        },

                        _negativeValue : function(unBreakGrid){
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            result = '';

                            // breakArr contain breakGrid in an array
                            var breakArr = unBreakGrid.split(",");


                            for (var i = 0; i < breakArr.length ; i++){
                                result = result + '-' + breakArr[i] + ",";
                            }

                            return (result);
                        },



                        _generateCSS : function(){
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            opt = d.settings,
                            w = opt.boxDimensions[0],
                            h = opt.boxDimensions[1]
                            hm = opt.boxMargins[0],
                            vm = opt.boxMargins[1],
                            ohm = (opt.outerMargin[0]) ? hm : 0,
                            ovm = (opt.outerMargin[1]) ? vm : 0,
                            resp = opt.responsive,
                            breakValue = [],
                            hideGridValue = [],
                            breakGridAll = '',
                            hideGridAll = '',
                            breakGrid = strTrim(opt.breakGrid),
                            hideGrid = strTrim(opt.hideGrid),
                            currentMode = opt.mode,
                            currentPerc = 0,
                            currentRemovePad = false,


                            unit        = "px",
                            unitP       = "%",
                            prefixes    = ( opt.namespace !== '' ) ? '.'+ opt.namespace.replace(/\s+/g, '') : '',
                            widthCSS    = '',
                            heightCSS   = '',
                            xCSS        = '',
                            yCSS        = '',
                            containerMarginCSS = '',
                            boxPaddingCSS  = '',
                            textSizeCSS = '',
                            breakHideCSS = '',
                            respCSS     = '',
                            css = '',
                            cssClass = d.cssClass;


                            function strTrim(x) {
                                return x.replace(/^\s+|\s+$/gm,'');
                            }

                            prefixes = strTrim(prefixes);

                            var classGridContainer = defaultSelector + prefixes + ' ' + selectorClass.gridContainer,
                            classListContainer = defaultSelector + prefixes + ' ' + selectorClass.listContainer,
                            classBox = defaultSelector + prefixes + ' ' + selectorClass.box,
                            classText = defaultSelector + prefixes + ' ' + selectorClass.text,
                            classImgP = defaultSelector + prefixes + ' ' + selectorClass.imgP;


                            // Fill default with false for breakGrid and hideGrid
                            for (var i = 0; i < d.matrixC.length; i++){
                                breakValue[i] = false;
                                hideGridValue[i] = false;
                            }

                            // Concat all breakGrid
                            if (breakGrid !== ''){
                                breakGridAll = breakGridAll + ',' + breakGrid;
                                breakValue = functions._getBreakArray.call($this, breakGridAll);
                            }

                            // Concat all hideGrid
                            if (hideGrid !== ''){
                                hideGridAll = hideGridAll + ',' + hideGrid;
                                hideGridValue = functions._getBreakArray.call($this, hideGridAll);
                            }

                            // Set break responsive css
                            if (breakGrid !== ''){
                                for (var i=1; i <= d.matrixC.length; i++){
                                    // if break then set next grid container to clear:both
                                    if (breakValue[i-1] && i < d.matrixC.length){
                                        var tempI = i + 1;
                                        breakHideCSS =  breakHideCSS +  ' ' + classGridContainer + ':nth-child(' + tempI + ') { clear:both }\n';
                                    } else  if (!breakValue[i-1] && i < d.matrixC.length){
                                        var tempI = i + 1;
                                        breakHideCSS =  breakHideCSS +  ' ' + classGridContainer + ':nth-child(' + tempI + ') { clear:none }\n';
                                    }
                                }
                            }

                            // Set hideGrid CSS
                            if (hideGrid !== ''){
                                hideGridValue = functions._getBreakArray.call($this, hideGridAll);
                                for (var i = 0; i< hideGridValue.length; i++){
                                    if (hideGridValue[i] == true){
                                        breakHideCSS =  breakHideCSS + ' ' + classGridContainer + ':nth-child(' + (i+1)  + ') { display:none !important; }\n';
                                    } else {
                                        breakHideCSS =  breakHideCSS + ' ' + classGridContainer + ':nth-child(' + (i+1)  + ') { display:block !important; }\n';
                                    }
                                }
                            }



                            containerMarginCSS = ' ' + classListContainer  +' { margin: ' + ovm + 'px ' + ohm + 'px; }\n';

                            // if mode == scroll
                            if (currentMode.toUpperCase() == "SCROLL") {

                                // Set width and height for each grid
                                for (var i=1; i <= d.matrixC.length; i++){
                                    var padding_left = parseFloat($this.find(selectorClass.gridContainer + ':nth-child(' + i + ')').css('padding-left').replace("px", "")),
                                    padding_right = parseFloat($this.find(selectorClass.gridContainer + ':nth-child(' + i + ')').css('padding-right').replace("px", "")),
                                    value = functions._getBoxActualSize.call($this,'width', d.matrixC[i-1].cols) + padding_left + padding_right;


                                    widthCSS =  widthCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { width: ' + value + unit + '; }\n';

                                    value = functions._getBoxActualSize.call($this,'height', d.matrixC[i-1].rows);
                                    heightCSS =  heightCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { height: ' + value + unit + '; }\n';

                                }
                                // Get total width of scroll mode with 0 percentage and false remove padding
                                var totalWidth = functions._getGridData.call($this,"scrollMaxWidth",breakValue,hideGridValue);


                                totalWidth += 1;
                                widthCSS =  widthCSS + ' ' + classListContainer + ' { width: ' + totalWidth + unit + '; }\n';






                            } else {
                                var gridPercentWidth = functions._getGridData.call($this,'gridStretchWidth',breakValue,hideGridValue);

                                for (var i=1; i <= d.matrixC.length; i++){
                                    var value = gridPercentWidth[i-1];
                                    widthCSS =  widthCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { width: ' + value + unitP + '; }\n';

                                    // count grid height for STRETCH MODE
                                    if (currentMode.toUpperCase() == "STRETCH"){
                                        value = functions._getBoxActualSize.call($this,'height', d.matrixC[i-1].rows);
                                        heightCSS =  heightCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { height: ' + value + unit + '; }\n';
                                    }
                                }

                            }

                            // Generate Box Padding CSS
                            boxPaddingCSS = ' ' + classBox + '{ padding:' + vm + 'px ' + hm + 'px; }\n';

                            // Generate Text Size CSS
                            for (var i = 1; i <= opt.textSize.length ; i++) {
                                var value = opt.textSize[i-1];
                                textSizeCSS = textSizeCSS + ' ' + classText + i + ' { ' + 'font-size: ' + value + 'px; }\n';
                            }




                            /**********************************
                            RESPONSIVE LAYOUT SETTINGS
                            ***********************************/

                            for (var j = 0 ; j < resp.length; j++) {

                                var windowWidth = resp[j].windowWidth,
                                percentage = resp[j].percentage,
                                removePadding = (typeof(resp[j].removeExtraPadding) !== 'undefined') ? resp[j].removeExtraPadding : currentRemovePad;

                                mode = (typeof(resp[j].mode) !== 'undefined') ? resp[j].mode : currentMode,

                                //                    hideGrid = (typeof(resp[j].hideGrid) !== 'undefined') ? functions._getBreakArray.call($this,strTrim(resp[j].hideGrid))  : '';

                                isPercentageNumber = false,

                                breakGrid = (typeof(resp[j].breakGrid) !== "undefined") ? strTrim(resp[j].breakGrid) : '',
                                unBreakGrid = (typeof(resp[j].unBreakGrid) !== "undefined") ? strTrim(resp[j].unBreakGrid) : '',
                                negativeUnBreakGrid = '',

                                hideGrid = (typeof(resp[j].hideGrid) !== 'undefined') ? strTrim(resp[j].hideGrid)  : '',
                                unHideGrid = (typeof(resp[j].unHideGrid) !== 'undefined') ? strTrim(resp[j].unHideGrid)  : '',
                                negativeUnHideGrid = '',


                                removeExtraPadding = (typeof(resp[j].removeExtraPadding) !== "undefined") ? resp[j].removeExtraPadding : false,
                                rwCSS = '', rhCSS = '', rText ='', rPadding = '', rMargin = '', rImgP ='', removePaddingCSS = '', hideGridCSS = '';



                                // Fill currentMode with mode
                                currentMode = mode;
                                currentRemovePad = removePadding;

                                if (typeof(percentage) !== 'undefined'){
                                    if (typeof(percentage) === 'object'){
                                        if (typeof(percentage.boxDimensions) !== "undefined"){
                                            currentPerc = parseFloat(percentage.boxDimensions);
                                        }
                                    } else{
                                        isPercentageNumber = true;
                                        percentage = parseFloat(percentage);
                                        currentPerc = percentage;
                                    }
                                }


                                // Concat all breakGrid
                                if (breakGrid !== ''){
                                    breakGridAll = breakGridAll + ',' + breakGrid;
                                }

                                // Concat with unBreakGrid
                                if (unBreakGrid !== ''){
                                    negativeUnBreakGrid = functions._negativeValue.call($this,unBreakGrid);
                                    breakGridAll = breakGridAll + ',' + negativeUnBreakGrid;
                                }

                                // Concat all hideGrid
                                if (hideGrid !== ''){
                                    hideGridAll = hideGridAll + ',' + hideGrid;
                                }

                                // Concat all unHideGrid
                                if (unHideGrid !== ''){
                                    negativeUnHideGrid = functions._negativeValue.call($this,unHideGrid);
                                    hideGridAll = hideGridAll + ',' + negativeUnHideGrid;
                                }


                                if (breakGrid !== '' || unBreakGrid !== '' || hideGrid !=='' || unHideGrid !==''){
                                    // Get break and hide grid value in a array
                                    breakValue = functions._getBreakArray.call($this, breakGridAll);
                                    hideGridValue = functions._getBreakArray.call($this, hideGridAll);
                                }


                                respCSS = respCSS + '@media (max-width: '+windowWidth+'px){' + '\n';


                                // Responsive Width
                                if (currentMode.toUpperCase() == "SCROLL") {

                                    // Set Width for SCROLL MODE
                                    if (typeof(percentage) !== 'undefined' || removePadding){

                                        for (var i=1; i <= d.matrixC.length; i++){
                                            var padding_left = parseFloat($this.find(selectorClass.gridContainer + ':nth-child(' + i + ')').css('padding-left').replace("px", "")),
                                            padding_right = parseFloat($this.find(selectorClass.gridContainer + ':nth-child(' + i + ')').css('padding-right').replace("px", "")),
                                            value = 0;

                                            if (removePadding){
                                                padding_left = 0;
                                                padding_right = 0;

                                            }

                                            value = functions._getBoxActualSize.call($this,'width', d.matrixC[i-1].cols) + padding_left + padding_right;

                                            value = value - (value * currentPerc / 100);
                                            padding_left =  padding_left -  (padding_left * currentPerc / 100);
                                            padding_right =  padding_right -  (padding_right * currentPerc / 100);

                                            rwCSS =  rwCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { width: ' + value + unit + '; }\n';
                                            rwCSS =  rwCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { padding-left: ' + padding_left + unit + '; }\n';
                                            rwCSS =  rwCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { padding-right: ' + padding_right + unit + '; }\n';

                                        }
                                    }

                                    // Set List Container Width per Responsive
                                    var listContainerWidth = 0;
                                    if (typeof(percentage) !== 'undefined' || breakGrid !== '' || hideGrid !== '' || unHideGrid !== '' || unBreakGrid !==''){
                                        listContainerWidth = functions._getGridData.call($this,'scrollMaxWidth',breakValue,hideGridValue, currentPerc, removePadding );
                                        rwCSS =  rwCSS +  ' ' + classListContainer  + ' { width:' + listContainerWidth + unit + ' }\n';
                                    }


                                } else {
                                    // IF MODE OTHER THAN SCROLL

                                    // Set break responsive css
                                    if (breakGrid !== '' || unBreakGrid !== '' || hideGrid !=='' || unHideGrid !==''){

                                        // calcultate grid width in percentage unit
                                        gridPercentWidth = functions._getGridData.call($this,'gridStretchWidth',breakValue,hideGridValue);

                                        // Set the css for each child
                                        for (var i=1; i <= d.matrixC.length; i++){

                                            var value = gridPercentWidth[i-1];
                                            rwCSS =  rwCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { width: ' + value + unitP + '; }\n';

                                        }

                                    }
                                }

                                // Set break responsive css
                                if (breakGrid !== '' || unBreakGrid !== ''){
                                    for (var i=1; i <= d.matrixC.length; i++){
                                        // if break then set next grid container to clear:both
                                        if (breakValue[i-1] && i < d.matrixC.length){
                                            var tempI = i + 1;
                                            rwCSS =  rwCSS +  ' ' + classGridContainer + ':nth-child(' + tempI + ') { clear:both }\n';
                                        } else  if (!breakValue[i-1] && i < d.matrixC.length){
                                            var tempI = i + 1;
                                            rwCSS =  rwCSS +  ' ' + classGridContainer + ':nth-child(' + tempI + ') { clear:none }\n';
                                        }
                                    }
                                }

                                // Set hideGrid CSS
                                if (hideGrid !== '' || unHideGrid !==''){
                                    hideGridValue = functions._getBreakArray.call($this, hideGridAll);

                                    for (var i = 0; i< hideGridValue.length; i++){
                                        if (hideGridValue[i] == true){
                                            hideGridCSS =  hideGridCSS + ' ' + classGridContainer + ':nth-child(' + (i+1)  + ') { display:none !important; }\n';
                                        } else {
                                            hideGridCSS =  hideGridCSS + ' ' + classGridContainer + ':nth-child(' + (i+1)  + ') { display:block !important; }\n';
                                        }
                                    }
                                }


                                // Responsive Height
                                for (var i=1; i <= d.matrixC.length; i++){
                                    value = functions._getBoxActualSize.call($this,'height', d.matrixC[i-1].rows);
                                    if (mode.toUpperCase() == "SCROLL" || mode.toUpperCase() == "STRETCH") {
                                        if (typeof(percentage) !== 'undefined'){
                                            if (isPercentageNumber){
                                                value = value - (value * percentage / 100);
                                                rhCSS =  rhCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { height: ' + value + unit + '; }\n';
                                            } else if (typeof(percentage.boxDimensions) !== "undefined"){
                                                value = value - (value * percentage.boxDimensions / 100);
                                                rhCSS =  rhCSS + ' ' + classGridContainer + ':nth-child(' + i + ') { height: ' + value + unit + '; }\n';
                                            }
                                        } else {
                                            rhCSS =  '';
                                        }
                                    }
                                }


                                // Remove Grid Container Padding?
                                if (removeExtraPadding){
                                    removePaddingCSS =  removePaddingCSS + ' ' + classGridContainer + ' { padding-left: 0 !important; padding-right: 0 !important; }\n';
                                }




                                // Responsive Box Padding & List Container Margin
                                if (typeof(percentage) !== 'undefined'){
                                    var valueVm = vm,
                                    valueHm = hm,
                                    valueOvm = ovm,
                                    valueOhm = ohm;
                                    // If the percentage is for global percentage. Ex percentage: 10,
                                    if (isPercentageNumber){
                                        valueVm = vm -(vm * percentage / 100);
                                        valueHm = hm -(hm * percentage / 100);
                                        valueOvm = ovm -(ovm * percentage / 100);
                                        valueOhm = ohm -(ohm * percentage / 100);

                                        rPadding = ' ' + classBox + '{ padding:' + valueVm + 'px ' + valueHm + 'px; }\n';
                                        rMargin = ' ' + classListContainer + ' { margin: ' + valueOvm + 'px ' + valueOhm + 'px; }\n';

                                        // If the percentage defined in percentage.boxMargins
                                    } else if (typeof(percentage.boxMargins) !== "undefined"){
                                        valueVm = vm -(vm * percentage.boxMargins / 100);
                                        valueHm = hm -(hm * percentage.boxMargins / 100);
                                        valueOvm = ovm -(ovm * percentage.boxMargins / 100);
                                        valueOhm = ohm -(ohm * percentage.boxMargins / 100);

                                        rPadding = ' ' + classBox + ' { padding:' + valueVm + 'px ' + valueHm + 'px; }\n';
                                        rMargin = ' ' + classListContainer + ' { margin: ' + valueOvm + 'px ' + valueOhm + 'px; }\n';

                                        // No box margins percentage
                                    }  else{
                                        rPadding = '';
                                        rMargin = '';
                                    }




                                    // Responsive Text CSS
                                    for (var i = 1; i <= opt.textSize.length ; i++) {
                                        var value = opt.textSize[i-1];

                                        // If the percentage is for global percentage. Ex percentage: 10,
                                        if (isPercentageNumber){
                                            value = Math.round(opt.textSize[i-1] - (opt.textSize [i-1] * (percentage+5) / 100));
                                            rText = rText + ' ' + classText + i + ' { ' + 'font-size: ' + value + 'px; }\n';

                                            // If the percentage defined in percentage.textSize
                                        } else if (typeof(percentage.textSize) !== "undefined"){
                                            value = Math.round(opt.textSize[i-1] - (opt.textSize [i-1] * (parseFloat(percentage.textSize) + 5) / 100));
                                            rText = rText + ' ' + classText + i + ' { ' + 'font-size: ' + value + 'px; }\n';

                                            // No textsize percentage
                                        } else{
                                            rText = '';
                                        }

                                    }

                                    // Responsive ventro-img-p
                                    // If the percentage is for global percentage. Ex percentage: 10,
                                    if (isPercentageNumber){
                                        var valueImgP = 100 - percentage;

                                        rImgP = ' ' + classImgP + '{ width:' + valueImgP + '%; }\n';

                                        // If the percentage defined in percentage.boxMargins
                                    } else if (typeof(percentage.image) !== "undefined"){
                                        var valueImgP = 100 - percentage.image;

                                        rImgP = ' ' + classImgP + '{ width:' + valueImgP + '%; }\n';

                                        // No box margins percentage
                                    }  else{
                                        rImgP = '';
                                    }

                                }

                                respCSS = respCSS + rMargin + rPadding +  rwCSS + rhCSS + rImgP + removePaddingCSS + hideGridCSS + rText + '}' + '\n';

                            }


                            // Combine CSS
                            css = '<style class="' + cssClass + '">\n' + containerMarginCSS + boxPaddingCSS + widthCSS + heightCSS + textSizeCSS + breakHideCSS + respCSS + '</style>' ;

                            // Remove Old One
                            $('.' + cssClass).remove();

                            // Append to <head>
                            $('head').append(css);


                        },


                        _setMatrixC : function(){
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            opt = d.settings,
                            totalWidth = 0,
                            maxH=[], maxW = [], contH = [], matrixC = [], paddingArr = [];

                            $this.find(selectorClass.gridContainer).each(function(){
                                    $(this).find(selectorClass.box).each(function(){
                                            var dataBoxX = parseFloat($(this).data("box-x")),
                                            dataBoxY = parseFloat($(this).data("box-y")),
                                            dataBoxW = parseFloat($(this).data("box-w")),
                                            dataBoxH = parseFloat($(this).data("box-h")),
                                            wt = dataBoxX-1 + dataBoxW,
                                            ht = dataBoxY-1 + dataBoxH;
                                            maxW.push(wt);
                                            maxH.push(ht);
                                        });

                                    var tempW = Math.max.apply(Math, maxW),
                                    tempH = Math.max.apply(Math, maxH),
                                    tempB = ($(this).css("float")=='none') ;


                                    matrixC.push({cols: tempW, rows: tempH, isBreak:tempB});

                                    // clear again maxH
                                    while(maxH.length > 0) {
                                        maxH.pop();
                                    }
                                    // clear again maxW
                                    while(maxW.length > 0) {
                                        maxW.pop();
                                    }
                                    var paddingLeft = parseFloat($(this).css('padding-left').replace("px", "")),
                                    paddingRight = parseFloat($(this).css('padding-right').replace("px", ""))
                                    // Fill padding array
                                    paddingArr.push({left: paddingLeft, right:  paddingRight});


                                });
                            // clear matrixC
                            while(d.matrixC.length > 0) {
                                d.matrixC.pop();
                            }
                            // clear paddingArr
                            while(d.paddingArr.length > 0) {
                                d.paddingArr.pop();
                            }
                            

                            // Copy MatrixC to d.MatrixC
                            d.matrixC = matrixC.slice(0);

                            // Copy paddingArr to d.paddingArr
                            d.paddingArr = paddingArr.slice(0);


                        },

                        _getMaxHeight : function(){
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            temp = [];

                            $this.find(selectorClass.gridContainer).each(function(){
                                    temp.push($(this).outerHeight(true));
                                });
                            return (Math.max.apply(Math, temp)) ;
                        },



                        _getBoxActualSize : function(type,value){
                            var $this = $(this),
                            d = $this.data(pluginPfx);
                            opt = d.settings,
                            w = opt.boxDimensions[0],
                            h = opt.boxDimensions[1]
                            hm = opt.boxMargins[0],
                            vm = opt.boxMargins[1];
                            if (type.toUpperCase() == 'WIDTH'){
                                return (value * (w + 2*hm));
                            } else if (type.toUpperCase() == 'HEIGHT'){
                                return (value * (h + 2*vm));
                            }
                        },


                        _getGridData : function(dataRequest, breakGridArr, hideGridArr, perc, rp){
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            opt = d.settings,
                            j = 0,
                            percentage = (typeof(perc) !== 'undefined') ? perc : 0,
                            removePadding = (typeof(rp) !== 'undefined') ? rp : false,
                            gridWidthBreakArr = [],
                            gridStretchWidthArr = [],
                            stretchRatioArr = [];

                            for (var i=0; i<breakGridArr.length ; i++){

                                if (breakGridArr[i] || i == breakGridArr.length-1){

                                    // Get total until found break
                                    var totalUntilBreak = 0;
                                    for (var k = j; k <= i; k++){

                                        var child_width = 0;
                                        if (!hideGridArr[k]) {

                                            var child=k+1,
                                            padding_left = parseFloat($this.find(selectorClass.gridContainer + ':nth-child(' + child + ')').css('padding-left').replace("px", "")),
                                            padding_right = parseFloat($this.find(selectorClass.gridContainer + ':nth-child(' + child + ')').css('padding-right').replace("px", ""));


                                            if (rp){
                                                padding_left = 0;
                                                padding_right = 0;
                                            }

                                            child_width = functions._getBoxActualSize.call($this,'width',d.matrixC[k].cols) + padding_left + padding_right ;
                                        }

                                        totalUntilBreak += child_width  ;

                                    }

                                    totalUntilBreak -= (totalUntilBreak * percentage / 100);


                                    if (dataRequest.toUpperCase() == 'SCROLLMAXWIDTH'){

                                        gridWidthBreakArr.push(totalUntilBreak);


                                    } else if (dataRequest.toUpperCase() == 'GRIDSTRETCHWIDTH'){

                                        // Fill with percentage value
                                        for (var k = j; k <= i; k++){
                                            var child = k + 1,
                                            padding_left = parseFloat($this.find(selectorClass.gridContainer + ':nth-child(' + child + ')').css('padding-left').replace("px", "")),
                                            padding_right = parseFloat($this.find(selectorClass.gridContainer + ':nth-child(' + child + ')').css('padding-right').replace("px", "")),
                                            child_width = functions._getBoxActualSize.call($this,'width',d.matrixC[k].cols) + padding_left + padding_right,
                                            value = 0;

                                            //childWidth = $this.find('.ventro-container > .ventro-li:nth-child(' + child + ')').outerWidth(true),
                                            if (totalUntilBreak > 0) {
                                                value = child_width / totalUntilBreak * 100;
                                            }


                                            gridStretchWidthArr.push(value);
                                        }

                                    } else if (dataRequest.toUpperCase() == 'STRETCHRATIO'){


                                        // Count Current Total Width of each Grid
                                        var currentTotalWidth = 0;
                                        for (var k = j; k <= i; k++){

                                            var child = k + 1,
                                            childWidth = 0;

                                            if (!hideGridArr[k]){
                                                childWidth = $this.find(selectorClass.gridContainer + ':nth-child(' + child + ')').outerWidth(true);

                                                // Prevent when get width and return as % instead of pixels
                                                if ($this.find(selectorClass.gridContainer + ':nth-child(' + child + ')').css('width').indexOf("%") >= 0) {
                                                    childWidth = functions._convertWidthToPixel.call($this,childWidth);
                                                }
                                            }

                                            currentTotalWidth += childWidth;
                                        };



                                        // Fill with percentage value
                                        for (var k = j; k <= i; k++){
                                            var value = currentTotalWidth / totalUntilBreak;
                                            stretchRatioArr.push(value);
                                        }
                                    }

                                    j = i+1;

                                }

                            }
                            if (dataRequest.toUpperCase() == 'SCROLLMAXWIDTH'){

                                return(Math.max.apply(Math, gridWidthBreakArr));

                            } else if (dataRequest.toUpperCase() == 'GRIDSTRETCHWIDTH') {

                                return gridStretchWidthArr.slice(0);

                            } else if (dataRequest.toUpperCase() == 'STRETCHRATIO') {

                                return stretchRatioArr.slice(0);
                            }

                        },

                        _setListContainerSize : function(){
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            opt = d.settings,
                            containerWidth = 0,
                            containerHeight = functions._getMaxHeight.call($this);




                            if (functions._isStretchMode.call($this)){
                                $this.find(selectorClass.listContainer).css({
                                        'width': 'auto'

                                    });
                            } else {
                                $this.find(selectorClass.listContainer).removeAttr('style');
                            }

                        },


                        _isStretchMode : function() {
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            opt = d.settings;
                            if (opt.mode.toUpperCase() == 'STRETCH' || opt.mode.toUpperCase() == 'PROPORTION'){
                                return true;
                            } else {
                                return false;
                            }

                        },


                        /**
                        * Returns the highest occupied cell in the grid.
                        *
                        * @method get_highest_occupied_cell
                        * @return {Object} Returns an object with `col` and `row` numbers.
                        */
                        _getHighestValue : function() {
                            var $this = $(this),
                            d = $this.data(pluginPfx),
                            opt = d.settings,
                            x=[], y=[], w=[], h=[];
                            $this.find(selectorClass.box).each(function(){

                                    x.push($(this).data("box-x"));
                                    y.push($(this).data("box-y"));
                                    w.push($(this).data("box-w"));
                                    h.push($(this).data("box-h"));


                                })
                            return {
                                maxX: Math.max.apply(Math, x),
                                maxY: Math.max.apply(Math, y),
                                maxW: Math.max.apply(Math, w),
                                maxH: Math.max.apply(Math, h)
                            }

                        }

                    }

                    /*
                    ----------------------------------------
                    PLUGIN SETUP
                    ----------------------------------------
                    */

                    /* Plugin constructor functions */
                    $.fn[pluginNS]=function(method){
                        /* usage: $(selector).ventroSlider(); */
                        // If there is a method, call inner function of that method
                        if(methods[method]){
                            return methods[method].apply(this,Array.prototype.slice.call(arguments,1));

                            // If method is object or no method
                        }else if(typeof method==="object" || !method){
                            return methods.init.apply(this,arguments);

                            // If method name is wrong
                        }else{
                            console.log("Method "+method+" does not exist");
                        }
                    };

                    $[pluginNS]=function(method){
                        /* Usage: $.ventroSlider(); */


                        // If there is a method, call inner function of that method
                        if(methods[method]){
                            return methods[method].apply(this,Array.prototype.slice.call(arguments,1));

                            // If method is object or no method
                        }else if(typeof method==="object" || !method){
                            return methods.init.apply(this,arguments);

                            // If method name is wrong
                        }else{
                            console.log("Method "+method+" does not exist"); 
                        }

                    };

                    /*
                    Allow setting plugin default options.
                    usage: $.ventroSlider.defaults.scrollInertia=500;
                    to apply any changed default options on default selectors (below), use inside document ready fn
                    e.g.: $(document).ready(function(){ $.ventroSlider.defaults.scrollInertia=500; });
                    */

                    $[pluginNS].defaults=defaults;

                    /*
                    Add window object (window.ventroSlider)
                    usage: if(window.ventroSlider){console.log("custom scrollbar plugin loaded");}
                    */

                    window[pluginNS]=true;

                    //    $(window).load(function(){
                    //        $(defaultSelector)[pluginNS](); /* add scrollbars automatically on default selector */
                    //    });

                })

            // End Functions Init
        );

    })( jQuery, window, document );

