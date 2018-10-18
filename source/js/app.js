var MainModule = (function($) {
  var _menuHandler = function _menuHandler() {
    var menuTrigger = $('.js-menu-open')
    var mobileMenu = $('.menu-list')

    menuTrigger.on('click', function() {
      mobileMenu.toggleClass('is-open');
      menuTrigger.toggleClass('is-open');
    })
  }

	var init = function init() {
		_menuHandler();
	};

	return {
		init: init
	}

})(jQuery);

var ContactModule = (function($) {
  var _validateEmail = function _validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  };

  var _validateForm = function _validateForm(form) {
    var name = form.find('[name="name"]'),
      email = form.find('[name=email]'),
      subject = form.find('[name=subject]')
      message = form.find('[name=message]'),
      isok = true;

    if ( name.val() === '') {
      name.addClass('error-validate');
      isok = false;
    }

    if ( message.val() === '') {
      message.addClass('error-validate');
      isok = false;
    }

    if ( subject.val() === '') {
      subject.addClass('error-validate');
      isok = false;
    }

    if ( _validateEmail(email.val()) === false ) {
      email.addClass('error-validate');
      isok = false;
    }

    return isok;
  };

  var _contactFormHandler = function _contactFormHandler() {
    var form = $('#contact-form'),
        button = $('.js-form-send'),
        thankYou = $('#thank-you'),
        loader = $('#sending'),
        errorMessage = $('#error'),
        inputs = $('.js-form-validate');


    form.on('submit', function(e) {
      var validate;
      e.preventDefault();

      thankYou.removeClass('is-visible');
      errorMessage.removeClass('is-visible');
      loader.addClass('is-visible');

      validate = _validateForm(form);

      //console.log('hehe');

      if( !validate ) { 
        loader.removeClass('is-visible');
        return; 
      }

      console.log(form.serialize());

      $.ajax({
        type: "POST",
            url: form.data('action'),
            data: form.serialize(),
            success: function(resp) {
              console.log(resp);
              thankYou.addClass('is-visible');
              loader.removeClass('is-visible');
            },
            error: function(error) {
              console.log(error);
              loader.removeClass('is-visible');
              errorMessage.addClass('is-visible');
            }
      });
    });

    inputs.on('input change', function() {
      var $this = $(this);

      if ( $this.hasClass('error-validate') ) {
        $this.removeClass('error-validate');
      }
    });

  };

  var init = function init() {
    _contactFormHandler();
  };

  return {
    init: init
  }
})(jQuery);

var ProjectModule = (function($) {
  var _initSlider = function _initSlider() {
    var slider = $('.project-slider');

    slider.slick({
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      swipeToSlide: true,
      variableWidth: true,
      autoplay: false,
      responsive: [
        {
          breakpoint: 461,
          settings: {
            variableWidth: false,
            centerMode: true,
            centerPadding: '30px'
          }
        }
      ]
    })
  }

  var init = function init() {
    _initSlider();
  };

  return {
    init: init
  }

})(jQuery);

(function($) {

	$(document).ready( function() {
		MainModule.init();
	});

})(jQuery);