/* =============================
    Theme Switcher
============================= */


var SwitcherApp = function()
{
    var stylesheet = '<link href="demo/demo.css" rel="stylesheet" type="text/css">';
    var switcher = '<div id="style-switcher" class="style-switcher">';
    switcher += '<div id="switcher-toggle-button" class="style-switcher-button"><i class="fa fa-cog fa-spin switch-icon text-primary"></i></div>';
    switcher += '<div class="style-switcher-body">';
    switcher += '<a class="style-switcher-close-btn" id="style-switcher-close-btn" href="#"><i class="fa fa-times"></i></a>';
    switcher += '<h3 class="style-switcher-title"><i class="fa fa-tint style-switcher-title-icon"></i> Theme Color</h3>';
    switcher += '<div class="style-switcher-item">';
    switcher += '<ul class="style-switcher-color-list">';
    switcher += '<li class="style-switcher-color-list-item active" style="background: #1abc9c" data-color-css="color-default.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #EC7063" data-color-css="color-alizarin.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #A38F84" data-color-css="color-almond-frost.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #5499C7" data-color-css="color-belize-hole.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #F1C40F" data-color-css="color-buttercup.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #EB984E" data-color-css="color-carrot.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #E74C3C" data-color-css="color-cinnabar.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #3499DB" data-color-css="color-curious-blue.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #58D68D" data-color-css="color-emerald.css"></li>';
    switcher += '<li class="style-switcher-color-list-item" style="background: #A569BD" data-color-css="color-wisteria.css"></li>';
    switcher += '</ul>';
    switcher += '</div>';
    switcher += '<h3 class="style-switcher-title"><i class="fa fa-tablet style-switcher-title-icon"></i> Layout</h3>';
    switcher += '<div class="style-switcher-item">';
    switcher += '<ul class="style-switcher-text-list">';
    switcher += '<li class="style-switcher-text-list-item active" data-switch-layout="">Normal</li>';
    switcher += '<li class="style-switcher-text-list-item" data-switch-layout="full-layout">Full</li>';
    switcher += '<li class="style-switcher-text-list-item" data-switch-layout="boxed-layout">Boxed</li>';
    switcher += '</ul>';
    switcher += '</div>';
    switcher += '<div class="style-switcher-toggle-view boxed-layout-toggle-target">'
    switcher += '<h3 class="style-switcher-title"><i class="fa fa-magic style-switcher-title-icon" ></i> Boxed Layout Background</h3>';
    switcher += '<div class="style-switcher-item">';
    switcher += '<ul class="style-switcher-color-list">';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-1" data-switch-background="bg-pat-dark-1"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-2" data-switch-background="bg-pat-dark-2"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-3" data-switch-background="bg-pat-dark-3"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-4" data-switch-background="bg-pat-dark-4"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-5" data-switch-background="bg-pat-dark-5"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-6" data-switch-background="bg-pat-dark-6"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-7" data-switch-background="bg-pat-dark-7"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-8" data-switch-background="bg-pat-dark-8"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-9" data-switch-background="bg-pat-dark-9"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-dark-10" data-switch-background="bg-pat-dark-10"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-1 active" data-switch-background="bg-pat-light-1"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-2" data-switch-background="bg-pat-light-2"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-3" data-switch-background="bg-pat-light-3"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-4" data-switch-background="bg-pat-light-4"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-5" data-switch-background="bg-pat-light-5"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-6" data-switch-background="bg-pat-light-6"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-7" data-switch-background="bg-pat-light-7"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-8" data-switch-background="bg-pat-light-8"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-9" data-switch-background="bg-pat-light-9"></li>';
    switcher += '<li class="style-switcher-color-list-item bg-pat-light-10" data-switch-background="bg-pat-light-10"></li>';
    switcher += '</ul>';
    switcher += '</div>';
    switcher += '</div>';
    switcher += '<h3 class="style-switcher-title"><i class="fa fa-suitcase style-switcher-title-icon"></i> Header</h3>';
    switcher += '<div class="style-switcher-item">';
    switcher += '<select id="switcher-header-select" class="style-switcher-select">';
    switcher += '<option value="features-header-1.php" disabled selected>Choose Header</option>';
    switcher += '<option value="features-header-1.php">Header 1</option>';
    switcher += '<option value="features-header-2.php">Header 2</option>';
    switcher += '<option value="features-header-3.php">Header 3</option>';
    switcher += '<option value="features-header-4.php">Header 4</option>';
    switcher += '<option value="features-header-5.php">Header 5</option>';
    switcher += '<option value="features-header-6.php">Header 6</option>';
    switcher += '<option value="features-header-7.php">Header 7</option>';
    switcher += '<option value="features-header-8.php">Header 8</option>';
    switcher += '<option value="features-header-9.php">Header 9</option>';
    switcher += '<option value="features-header-10.php">Header 10</option>';
    switcher += '<option value="features-header-11.php">Header 11</option>';
    switcher += '<option value="features-header-12.php">Header 12</option>';
    switcher += '<option value="features-header-13.php">No Sticky</option>';
    switcher += '</select>';
    switcher += '</div>';
    switcher += '<h3 class="style-switcher-title"><i class="fa fa-suitcase style-switcher-title-icon"></i> Footer</h3>';
    switcher += '<div class="style-switcher-item">';
    switcher += '<select id="switcher-header-select" class="style-switcher-select">';
    switcher += '<option value="features-footer-1.php" disabled selected>Choose Footer</option>';
    switcher += '<option value="features-footer-1.php">Footer 1</option>';
    switcher += '<option value="features-footer-2.php">Footer 2</option>';
    switcher += '<option value="features-footer-3.php">Footer 3</option>';
    switcher += '<option value="features-footer-4.php">Footer 4</option>';
    switcher += '<option value="features-footer-5.php">Footer 5</option>';
    switcher += '<option value="features-footer-6.php">Footer 6</option>';
    switcher += '<option value="features-footer-light.php">Footer Light</option>';
    switcher += '<option value="features-footer-full.php">Footer Full</option>';
    switcher += '</select>';
    switcher += '</div>';
    switcher += '</div>';
    switcher += '</div>';

    var addSwitcher = function() {
        $('head').append(stylesheet);
        $('.body-inner').append(switcher);
    }

    var bindSwitchThemeColor = function(target)
    {
        var baseURL = 'css/colors/';

        $('body').on('click', target, function(e){
            var $this = $(this),
                cssName = $this.data('color-css');

            if (!$this.hasClass('active')) {
                $('head #color-css').attr('href', baseURL + cssName);
                $(target).removeClass('active');
                $this.addClass('active');
            }

        });
    };

    var bindOpenSwitcher = function(target)
    {
        $('body').on('click', target, function(e){
            $('.style-switcher').toggleClass('active');
        });
    };
    
    var bindRedirectSelect = function(target)
    {
        $('body').on('change', target, function(e){
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
        });
    }

    var bindSwitchLayout = function(target)
    {
        var allLayout = '';
        $(target).each(function(){
            var layoutClass = $(this).data('switch-layout') + ' ';
            allLayout += layoutClass;
        });
        
        $('body').on('click', target, function(e){
            var $this = $(this),
                layoutClass = $this.data('switch-layout');

            if ($this.hasClass('active')) return false;
            
            $('body').removeClass(allLayout).addClass(layoutClass);
            $(target).removeClass('active');
            $this.addClass('active');
            if (layoutClass == 'boxed-layout') {
                $('.boxed-layout-toggle-target').addClass('active');
            } else {
                $('.boxed-layout-toggle-target').removeClass('active');

                var allBackground = '';
                $('[data-switch-background]').each(function(){
                    var layoutClass = $(this).data('switch-background') + ' ';
                    allBackground += layoutClass;
                });
                $('body').removeClass(allBackground);
            };

            // Relayouting
            setTimeout(function(){
                $(window).trigger('resize');
                setTimeout(function(){
                    $(window).trigger('resize');
                }, 300);
            }, 200);

        });
    }

    var bindSwitchBackground = function(target)
    {
        var allBackground = '';
        $(target).each(function(){
            var layoutClass = $(this).data('switch-background') + ' ';
            allBackground += layoutClass;
        });

        $('body').on('click', target, function(e){
            var $this = $(this),
                backgroundClass = $this.data('switch-background');
            $('body').removeClass(allBackground).addClass(backgroundClass);
            $(target).removeClass('active');
            $this.addClass('active');
        });
    }

    var bindCloseBtn = function(target)
    {
        $('body').on('click', target, function(e) {
            e.preventDefault();
            $('#style-switcher').remove();
        })
    }
    return{
        init: function()
        {
            addSwitcher();
            bindSwitchThemeColor('[data-color-css]');
            bindOpenSwitcher('#switcher-toggle-button');
            bindRedirectSelect('.style-switcher-select');
            bindSwitchLayout('[data-switch-layout]');
            bindSwitchBackground('[data-switch-background]');
            bindCloseBtn('#style-switcher-close-btn');
        }
    }

}();


$(document).ready(function($)
{
    "use strict";
    SwitcherApp.init();
});