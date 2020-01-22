!(function(e) {
  'use strict';
  function t(n) {
    if (i[n]) return i[n].exports;
    var o = (i[n] = { i: n, l: !1, exports: {} });
    return e[n].call(o.exports, o, o.exports, t), (o.l = !0), o.exports;
  }
  var i = {};
  (t.m = e),
    (t.c = i),
    (t.d = function(e, i, n) {
      t.o(e, i) ||
        Object.defineProperty(e, i, {
          configurable: !1,
          enumerable: !0,
          get: n
        });
    }),
    (t.n = function(e) {
      var i =
        e && e.__esModule
          ? function() {
              return e.default;
            }
          : function() {
              return e;
            };
      return t.d(i, 'a', i), i;
    }),
    (t.o = function(e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (t.p = ''),
    t((t.s = 0));
})([
  function(e, t) {
    jQuery(function(e) {
      'use strict';
      function t() {
        e('#wpadminbar').length && (r = e('#wpadminbar').outerHeight());
      }
      function i() {
        var t, i;
        (t = l.is(':visible') ? l : s),
          (i = t.find('.l-primary-header').outerHeight()),
          t.height(i),
          i > 0 && (c = i),
          t.hasClass('l-primary-header--absolute') &&
            e('.o-hero__content').css('padding-top', c);
      }
      function n() {
        e('.l-theme-borders').length &&
          (d = e('.l-theme-borders__top').outerHeight());
      }
      function o() {
        var t, i, n;
        (t = e(window).innerHeight()),
          (n = e('.l-primary-footer').outerHeight()),
          e('.l-primary-header--default-wrapper').hasClass(
            'l-primary-header--absolute'
          ) ||
          e('.l-primary-header--responsive-wrapper').hasClass(
            'l-primary-header--absolute'
          )
            ? ((i = t - r - 2 * d - n),
              e('.l-main-wrapper').css('min-height', i))
            : ((i = t - r - 2 * d - c - n),
              e('.l-main-wrapper').css('min-height', i));
      }
      function a() {
        var t, i;
        (t = e(window).innerHeight()),
          e('.l-primary-header--default-wrapper').hasClass(
            'l-primary-header--absolute'
          ) ||
          e('.l-primary-header--responsive-wrapper').hasClass(
            'l-primary-header--absolute'
          )
            ? ((i = t - r - 2 * d), e('.t-404 .o-hero').css('height', i))
            : ((i = t - r - 2 * d - c), e('.t-404 .o-hero').css('height', i));
      }
      var r = 0,
        s = e('.l-primary-header--default-wrapper'),
        l = e('.l-primary-header--responsive-wrapper'),
        c = 0,
        d = 0;
      e('.neuron-fixed-hidden-yes--close-button').append(
        '<a class="a-close-button" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>'
      ),
        e(
          '.neuron-fixed-hidden-yes.neuron-fixed-hidden-yes--close-button .a-close-button'
        ).on('click', function(t) {
          t.preventDefault(),
            t.stopPropagation(),
            e('.neuron-fixed-hidden-yes').removeClass('active');
        }),
        e('#wpadminbar').addClass('neuron-wpadminbar'),
        e('.owl-theme').each(function() {
          var t = e(this);
          t.data('stage-padding') ||
            ('none' != t.data('animation') &&
              'yes' == t.data('wow') &&
              (e(this)
                .find(e('.owl-item'))
                .each(function() {
                  e(this).hasClass('active') &&
                    (e(this)
                      .find(
                        '.o-post, .m-media-gallery__item, .m-neuron-testimonial'
                      )
                      .addClass(t.data('animation')),
                    e(this)
                      .find(
                        '.o-post, .m-media-gallery__item, .m-neuron-testimonial'
                      )
                      .removeClass('intro-animation'));
                }),
              t.on('translated.owl.carousel', function(i) {
                e(this)
                  .find(e('.owl-item'))
                  .each(function() {
                    e(this).hasClass('active') &&
                      (e(this)
                        .find(
                          '.o-post, .m-media-gallery__item, .m-neuron-testimonial'
                        )
                        .addClass(t.data('animation')),
                      e(this)
                        .find(
                          '.o-post, .m-media-gallery__item, .m-neuron-testimonial'
                        )
                        .removeClass('intro-animation'));
                  });
              })));
        }),
        t(),
        i(),
        n(),
        o(),
        a(),
        (function() {
          if (
            !e('body').hasClass('elementor-editor-active') &&
            e(window).width() > 991 &&
            e('.elementor-top-section').hasClass('.neuron-multi-scroll-yes')
          ) {
            if (
              e('.elementor-top-section.neuron-multi-scroll-yes').data(
                'settings'
              )
            )
              var t = e('.elementor-top-section.neuron-multi-scroll-yes').data(
                  'settings'
                ),
                i = t.multiscroll_scrollingspeed,
                n = t.multiscroll_navigation,
                o = t.multiscroll_navigation_alignment;
            var a = [],
              r = [];
            e(
              '.elementor-top-section.neuron-multi-scroll-yes .elementor-container .elementor-row .elementor-top-column:first-child .elementor-inner-section'
            ).each(function() {
              e(this).data('settings') &&
                (a.push(e(this).data('settings').section_name),
                r.push(
                  e(this)
                    .data('settings')
                    .section_name.replace(/\W+/g, '-')
                    .toLowerCase()
                ));
            }),
              e(
                '.neuron-multi-scroll-yes .elementor-container > .elementor-row'
              ).multiscroll({
                sectionSelector: '.elementor-inner-section',
                leftSelector:
                  '.neuron-multi-scroll-yes .elementor-container .elementor-row .elementor-top-column:first-child',
                rightSelector:
                  '.neuron-multi-scroll-yes .elementor-container .elementor-row .elementor-top-column:last-child',
                scrollingSpeed: i || 600,
                navigation: !!n,
                navigationPosition: o || 'right',
                navigationTooltips: n && a ? a : '',
                anchors: n && r ? r : ''
              });
          }
        })(),
        (function() {
          if (e('body').hasClass('h-parallax-footer')) {
            var t,
              i = e('footer'),
              n = e('.l-theme-wrapper .l-main-wrapper');
            i.css('display', 'block'),
              i.length &&
                n.length &&
                ((t = i.innerHeight()),
                n.css('position', 'relative'),
                n.css('z-index', '1'),
                n.css('margin-bottom', t + d + 'px'));
          }
        })();
      var p;
      e(
        '.m-nav-menu--horizontal li.menu-item-has-children, .l-primary-header__holder li.menu-item-has-children'
      ).on({
        mouseenter: function() {
          clearTimeout(p);
          var t = e(this).children('.sub-menu'),
            i = e(this).parents('.sub-menu'),
            n = e(window).width();
          ((i.length && i.hasClass('sub-menu--left')) ||
            n - (t.offset().left + t.outerWidth() + 1) < 0) &&
            t.addClass('sub-menu--left'),
            t.addClass('active');
        },
        mouseleave: function() {
          var t = e(this).children('.sub-menu');
          t.removeClass('active'),
            (p = setTimeout(
              function() {
                t.removeClass('sub-menu-left');
              }.bind(this),
              250
            ));
        }
      }),
        e('.menu-item.disabled > a').on('click', function(e) {
          e.preventDefault();
        }),
        e('.menu-item').hasClass('m-mega-menu') &&
          e('.m-nav-menu--horizontal ul').addClass('m-mega-menu-holder'),
        e(
          '<a href="#" class="menu-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>'
        ).insertAfter(
          '.l-primary-header--responsive__nav .menu-item-has-children > a, .m-nav-menu--vertical ul .menu-item-has-children > a'
        ),
        e('.l-primary-header--responsive__icon').on('click', function(t) {
          t.stopPropagation(),
            t.preventDefault(),
            e('.l-primary-header--responsive__nav').toggleClass('active'),
            e(
              '.l-primary-header--responsive__nav .menu-item-has-children > .menu-item-icon'
            ).removeClass('active'),
            e('.l-primary-header--responsive__nav')
              .find('.sub-menu')
              .slideUp('fast');
        }),
        e(
          '.l-primary-header--responsive__nav .menu-item-has-children > .menu-item-icon, .m-nav-menu--vertical ul .menu-item-has-children > .menu-item-icon'
        ).on('click', function(t) {
          t.stopPropagation(),
            t.preventDefault(),
            e(this).toggleClass('active');
          var i = e(this).next('ul'),
            n = e(this)
              .closest('ul')
              .children('li');
          n
            .find('.sub-menu')
            .not(i)
            .slideUp('fast'),
            n
              .find('.menu-item-icon')
              .not(this)
              .removeClass('active'),
            i.slideToggle('fast');
        }),
        e('.a-site-search-icon').on('click', function(t) {
          t.preventDefault(),
            t.stopPropagation(),
            e('.m-site-search').addClass('active'),
            setTimeout(function() {
              e('.m-site-search__form__input').focus();
            }, 300);
        }),
        e('.m-site-search__close-icon, .m-site-search__overlay').on(
          'click',
          function() {
            e('.m-site-search').removeClass('active');
          }
        ),
        e(document).on('bind keydown', function(t) {
          27 == t.which && e('.m-site-search').removeClass('active');
        }),
        e('.a-slidingbar-icon').on('click', function(t) {
          t.preventDefault(),
            t.stopPropagation(),
            e('.o-slidingbar').addClass('active');
        }),
        e('.o-slidingbar__close-icon, .o-slidingbar__overlay').on(
          'click',
          function() {
            e('.o-slidingbar').removeClass('active');
          }
        ),
        e(document).on('bind keydown', function(t) {
          27 == t.which && e('.o-slidingbar').removeClass('active');
        }),
        e(window).scroll(function() {
          e(window).scrollTop() > 150
            ? e('.a-to-top').addClass('a-to-top--active')
            : e('.a-to-top').removeClass('a-to-top--active');
        }),
        e('.a-to-top').on('click', function() {
          return e('html, body').animate({ scrollTop: 0 }, 500), !1;
        }),
        e('.a-to-top').css('margin', d),
        e(
          '.sticky .o-blog-post .o-blog-post__content .o-blog-post__meta'
        ).prepend(
          '<span class="o-blog-post__sticky a-separator"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>Sticky</span>'
        ),
        e('.woocommerce-MyAccount-navigation-link--dashboard a').append(
          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>'
        ),
        e('.woocommerce-MyAccount-navigation-link--orders a').append(
          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>'
        ),
        e('.woocommerce-MyAccount-navigation-link--downloads a').append(
          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>'
        ),
        e('.woocommerce-MyAccount-navigation-link--edit-address a').append(
          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>'
        ),
        e('.woocommerce-MyAccount-navigation-link--edit-account a').append(
          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>'
        ),
        e('.woocommerce-MyAccount-navigation-link--customer-logout a').append(
          '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>'
        ),
        e(
          '.p-portfolio-single--sticky-content .p-portfolio-single__content-wrapper'
        ).theiaStickySidebar({ additionalMarginTop: 42 }),
        e('.h-lightbox').magnificPopup({
          type: 'image',
          delegate: '.h-lightbox-link',
          tClose: 'Close (Esc)',
          tLoading: '',
          gallery: {
            enabled: !0,
            tPrev: 'Previous (Left arrow)',
            tNext: 'Next (Right arrow)',
            tCounter: '%curr% of %total%'
          },
          image: { tError: 'The image can not be loaded.' },
          iframe: {
            markup:
              '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><figure><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>'
          },
          mainClass: 'mfp-zoom-in',
          removalDelay: 300,
          callbacks: {
            elementParse: function(e) {
              'video' == e.el.data('type')
                ? (e.type = 'iframe')
                : (e.type = 'image');
            },
            markupParse: function(e, t, i) {
              t.title = i.el.attr('title');
            },
            open: function() {
              (e.magnificPopup.instance.next = function() {
                var t = this;
                t.wrap.removeClass('mfp-image-loaded'),
                  setTimeout(function() {
                    e.magnificPopup.proto.next.call(t);
                  }, 120);
              }),
                (e.magnificPopup.instance.prev = function() {
                  var t = this;
                  t.wrap.removeClass('mfp-image-loaded'),
                    setTimeout(function() {
                      e.magnificPopup.proto.prev.call(t);
                    }, 120);
                });
            },
            imageLoadComplete: function() {
              var e = this;
              setTimeout(function() {
                e.wrap.addClass('mfp-image-loaded');
              }, 16);
            }
          }
        }),
        jQuery(
          '<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>'
        ).insertAfter('.quantity input'),
        jQuery('.quantity').each(function() {
          var e = jQuery(this),
            t = e.find('input[type="number"]'),
            i = e.find('.quantity-up'),
            n = e.find('.quantity-down'),
            o = t.attr('min');
          i.on('click', function() {
            var i = parseFloat(t.val()),
              n = i + 1;
            e.find('input').val(n), e.find('input').trigger('change');
          }),
            n.on('click', function() {
              var i = parseFloat(t.val());
              if (i <= o) var n = i;
              else var n = i - 1;
              e.find('input').val(n), e.find('input').trigger('change');
            });
        }),
        e(window).on('resize', function() {
          'ontouchstart' in window ||
            navigator.maxTouchPoints ||
            (t(), i(), n(), o(), a());
        }),
        e(window).load(function() {
          function t(e) {
            var t = e.parent().siblings('.masonry'),
              n = e.data('text'),
              o = {};
            o.exclude = [];
            var a = e.data('filter');
            a && '*' !== a && (o.filter = a);
            var r = t.isotope('getFilteredItemElements');
            r &&
              (o.exclude = r.map(function(e) {
                return e.dataset.id;
              })),
              jQuery.ajax({
                type: 'GET',
                url: window.location.href,
                data: o,
                beforeSend: function() {
                  e.addClass('a-button--loading'),
                    e.html('<span>Loading...</span>').prop('disabled', !0);
                },
                success: function(o) {
                  e.removeClass('a-button--loading');
                  var r = jQuery(o).find(
                      '.masonry[data-masonry-id="' + t.data('masonry-id') + '"]'
                    ),
                    s = r.find('.selector'),
                    l = r
                      .siblings('.load-more-posts-holder')
                      .find('.load-more-posts').length;
                  if (
                    (s.length > 0 &&
                      (e.html(n).prop('disabled', !1),
                      t.append(s),
                      t.isotope('appended', s),
                      i.sync()),
                    !l)
                  ) {
                    e.parent().hide();
                    var c = a ? '.' + a : '*';
                    '*' == c
                      ? e
                          .parents('.l-posts-wrapper')
                          .find('li')
                          .attr('data-all', !0)
                      : e
                          .parents('.l-posts-wrapper')
                          .find('li[data-filter="' + c + '"]')
                          .attr('data-all', !0);
                  }
                },
                error: function() {
                  e.html('No More Posts');
                }
              });
          }
          var i = new WOW();
          i.init(),
            setTimeout(function() {
              e('.l-primary-header--sticky .l-primary-header').headroom({
                tolerance: { up: 10, down: 40 },
                onTop: function() {
                  e(
                    '.l-primary-header--sticky--skin .l-primary-header'
                  ).addClass('l-primary-header--light-skin');
                },
                onNotTop: function() {
                  e(
                    '.l-primary-header--sticky--skin .headroom--not-top'
                  ).removeClass('l-primary-header--light-skin');
                }
              }),
                e('.l-template-header--sticky').headroom({ offset: 450 });
            }, 50);
          var n = e('.masonry'),
            o = [];
          e('.l-filters-holder') &&
            e('.l-filters-holder').each(function(t) {
              o.push(e(this));
            }),
            o &&
              e.each(o, function(t) {
                var i =
                  '.l-filters-holder[data-posts="' +
                  e(this).data('posts') +
                  '"]';
                e(i + ' #filters li').on('click', function() {
                  var t = e(this).attr('data-filter');
                  e(i + ' .masonry').isotope({ filter: t });
                  var n = e(this)
                    .parents(i)
                    .find('.load-more-posts');
                  !0 === e(this).data('all')
                    ? n.parent().hide()
                    : n
                        .html(n.data('text'))
                        .prop('disabled', !1)
                        .parent()
                        .show(),
                    e(this)
                      .addClass('active')
                      .siblings('li')
                      .removeClass('active');
                });
              }),
            n.length &&
              (n.isotope({ layoutMode: 'packery', itemSelector: '.selector' }),
              e('.load-more-posts').on('click', function(i) {
                i.preventDefault(), t(e(this));
              }),
              window.dispatchEvent(new Event('resize'))),
            e('#filters li').on('click', function() {
              setTimeout(function() {
                window.dispatchEvent(new Event('resize'));
              }, 400);
            });
          var a = e('.fitRows'),
            r = e('.fitRows.masonry');
          a.length &&
            (r.isotope('destroy'),
            a.isotope({ layoutMode: 'fitRows', itemSelector: '.selector' }));
        });
    });
  }
]);
