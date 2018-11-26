/*

[Main Script]

Project     : CloudSky - Multipurpose Domain, Hosting and WHMCS Template
Version     : 1.0
Author      : ThemeLooks
Author URI  : https://themeforest.net/user/themelooks

*/

(function (a) {
	var f = a(window);
	a(document);
	var h = a("body"),
		n = "rtl" === a("html").attr("dir") ? !0 : !1,
		e = function (a, c) {
			return "undefined" === typeof a ? c : a
		};
	a(function () {
		a("[data-bg-img]").css("background-image", function () {
			return 'url("' + a(this).data("bg-img") + '")'
		}).addClass("bg--img").removeAttr("data-bg-img").attr("data-rjs", 2);
		a("img").attr("data-rjs", 2);
		retinajs();
		var d = a('[data-trigger="sticky"]');
		d.each(function () {
			d.sticky({
				zIndex: 999
			})
		});
		a('[data-form="validate"]').each(function () {
			a(this).validate({
				errorPlacement: function () {
					return !0
				}
			})
		});
		a('[data-form="ajax"]').each(function () {
			var b = a(this),
				k = b.find(".status");
			b.validate({
				errorPlacement: function () {
					return !0
				},
				submitHandler: function (b) {
					var c = a(b);
					b = c.attr("action");
					c = c.serialize();
					a.post(b, c, function (b) {
						k.show().html(b).delay(3E3).fadeOut("show")
					})
				}
			})
		});
		var c = a('[data-trigger="counterUp"]');
		c.length && c.counterUp({
			delay: 10,
			time: 1E3
		});
		a("[data-countdown]").each(function () {
			var b = a(this);
			b.countdown(b.data("countdown"), function (b) {
				a(this).html("<ul>" + b.strftime("<li><strong>%D</strong><span>Days</span></li><li><strong>%H</strong><span>Hours</span></li><li><strong>%M</strong><span>Minutes</span></li><li><strong>%S</strong><span>Secounds</span></li>") +
					"</ul>")
			})
		});
		c = a('[data-trigger="zoom"]');
		c.length && c.zoom();
		c = a('[data-trigger="spinner"]');
		c.length && c.spinner();
		c = a("#productRatingSelect");
		c.length && c.barrating({
			theme: "fontawesome-stars-o",
			hoverState: !1
		});
		a(".product--img-gallery").on("shown.bs.tab", '[data-toggle="tab"]', function () {
			var b = a(this);
			b.parents(".owl-carousel").find("a").removeClass("current");
			b.addClass("current")
		});
		a(".cart--items").on("click", ".remove", function (b) {
			b.preventDefault();
			b.$el = a(this);
			b.$parents = b.$el.parent("td").parent("tr");
			b.$el.fadeOut(function () {
				0 === b.$parents.index() && 0 === b.$parents.next().length ? b.$parents.html('<td colspan="6" class="empty">No products in cart.</td>') : b.$parents.remove()
			})
		});
		a("#checkoutPayment").on("click", '[data-toggle="collapse"]', function (b) {
			a(this).hasClass("collapsed") || b.stopPropagation()
		});
		a(".owl-carousel").each(function () {
			var b = a(this);
			b.owlCarousel({
				rtl: n,
				items: e(b.data("owl-items"), 1),
				margin: e(b.data("owl-margin"), 0),
				loop: e(b.data("owl-loop"), !0),
				autoplay: e(b.data("owl-autoplay"), !0),
				smartSpeed: e(b.data("owl-speed"), 2500),
				autoplaySpeed: e(b.data("owl-speed"), 2500),
				mouseDrag: e(b.data("owl-drag"), !0),
				nav: e(b.data("owl-nav"), !1),
				navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
				dots: e(b.data("owl-dots"), !1),
				responsive: e(b.data("owl-responsive"), {})
			})
		});
		a(".dropdown-menu").on("click", ".dropdown-toggle", function (b) {
			b.stopPropagation();
			b.preventDefault();
			a(this).parent(".dropdown").toggleClass("open").siblings().removeClass("open")
		});
		var p = a(".header--section");
		c = function () {
			p.next().css("padding-top", function (b, c) {
				var k = a(this),
					d = k.data("padding-top");
				"undefined" === typeof d ? (k.data("padding-top", c), c = parseInt(c, 10) + p.outerHeight()) : c = d + p.outerHeight();
				return c
			})
		};
		c();
		f.on("resize", c);
		var q = a(".banner--section");
		c = function () {
			q.css("height", function (b, a) {
				b = f.outerHeight();
				a = parseInt(a, 10);
				return b > a ? b : a
			})
		};
		var v = a(".banner--item"),
			l = function () {
				v.css("padding-top", q.css("padding-top"));
				q.css("padding-top", 0)
			};
		c();
		f.on("resize", c);
		l();
		f.on("resize", l);
		a(".faq--items").on("click",
			'[data-toggle="collapse"]',
			function () {
				return a(this).hasClass("collapsed") ? "" : !1
			});
		a(".pricing--item").css("margin-top", function () {
			var b = a(this);
			if (b.children(".features").is(":first-child")) {
				var c = b.parent();
				b.addClass("pricing--heading");
				c.parent().addClass("features--striped");
				return c.siblings().find(".features").position().top - 20
			}
		});
		var g = a(".vps--pricing-slider"),
			h = g.children(".ui-slider-handle"),
			r = a(".vps--pricing-feature-value"),
			t = a(".vps--pricing-price span"),
			w = t.next(),
			x = a(".vps--pricing-action .order"),
			y = a(".vps--pricing-action .view");
		var u = function (b, a) {
			r.empty();
			for (var c = 0; c < r.length; c++) r.eq(c).text(b[a][1][c]);
			h.html("<span>" + b[a][0] + "</span>");
			t.text(b[a][2]);
			w.text(b[a][3]);
			x.attr("href", b[a][4]);
			y.attr("href", b[a][5])
		};
		g.length && a.getJSON("json/vps-plans.json", function (a) {
			g.slider({
				range: "min",
				min: 0,
				max: a.vps_plans.length - 1,
				step: 1,
				value: a.vps_default_plan,
				create: function () {
					u(a.vps_plans, 1)
				},
				slide: function (b, c) {
					u(a.vps_plans, c.value)
				}
			})
		});
		g.siblings(".ui-slider-nav").on("click", function () {
			var b =
				a(this),
				c = g.slider("value");
			b.hasClass("ui-slider-next") ? c++ : c--;
			g.slider("value", c)
		});
		c = a('[data-trigger="map"]');
		a.fn.initMap = function () {
			if ("undefined" !== typeof google) {
				var a = new google.maps.Map(this[0], {
					center: {
						lat: this.data("map-latitude"),
						lng: this.data("map-longitude")
					},
					zoom: this.data("map-zoom"),
					scrollwheel: !1,
					disableDefaultUI: !0,
					zoomControl: !0
				});
				if ("undefined" !== typeof this.data("map-marker")) {
					var c = this.data("map-marker"),
						d = 0;
					for (d; d < c.length; d++) new google.maps.Marker({
						position: {
							lat: c[d][0],
							lng: c[d][1]
						},
						map: a,
						animation: google.maps.Animation.DROP,
						draggable: !0
					})
				}
			}
		};
		c.each(function () {
			a(this).css("min-height", "350px").initMap()
		});
		var m = a("#cookieNotify");
		c = document.cookie;
		l = /cookieNotify/;
		m.length && !l.test(c) && m.removeClass("hidden");
		m.on("click", "[data-dismiss]", function (a) {
			a.stopPropagation();
			a.preventDefault();
			m.slideUp("slow");
			document.cookie = "cookieNotify=true"
		});
		a("#backToTop").on("click", "a", function (b) {
			b.preventDefault();
			a("html, body").animate({
				scrollTop: 0
			}, 1200)
		});
		"undefined" !==
		typeof a.cColorSwitcher && a.cColorSwitcher({
			switcherTitle: "Main Colors",
			switcherColors: [{
					bgColor: "#ff5252",
					filepath: "css/colors/theme-color-1.css"
				}, {
					bgColor: "#82b440",
					filepath: "css/colors/theme-color-2.css"
				}, {
					bgColor: "#2683ff",
					filepath: "css/colors/theme-color-3.css"
				}, {
					bgColor: "#e91e63",
					filepath: "css/colors/theme-color-4.css"
				}, {
					bgColor: "#f69323",
					filepath: "css/colors/theme-color-5.css"
				}, {
					bgColor: "#ffcb1a",
					filepath: "css/colors/theme-color-6.css"
				}, {
					bgColor: "#00b249",
					filepath: "css/colors/theme-color-7.css"
				},
				{
					bgColor: "#d48b91",
					filepath: "css/colors/theme-color-8.css"
				}, {
					bgColor: "#179ea8",
					filepath: "css/colors/theme-color-9.css"
				}, {
					bgColor: "#8cbeb2",
					filepath: "css/colors/theme-color-10.css"
				}
			],
			switcherTarget: a("#changeColorScheme")
		})
	});
	f.on("load", function () {
		var d = function () {
			1 < f.scrollTop() ? h.addClass("isScrolling") : h.removeClass("isScrolling")
		};
		d();
		f.on("scroll", d);
		d = a(".AdjustRow");
		d.length && d.isotope({
			originLeft: n ? !1 : !0,
			layoutMode: "fitRows"
		});
		var c = a(".portfolio--items");
		d = a(".portfolio--filter-menu");
		c.length &&
			c.isotope({
				animationEngine: "best-available",
				itemSelector: ".portfolio--item",
				originLeft: n ? !1 : !0,
				masonry: {
					columnWidth: ".portfolio--item"
				}
			});
		d.on("click", "li", function (d) {
			d.preventDefault();
			d = a(this);
			var e = d.data("target");
			c.isotope({
				filter: "*" !== e ? '[data-cat~="' + e + '"]' : e
			});
			d.addClass("active").siblings().removeClass("active")
		});
		d = a("#preloader");
		d.length && d.fadeOut("slow");
		d = a('[data-scroll-reveal="group"]');
		var e = "";
		"function" === typeof ScrollReveal && (e = ScrollReveal(), e.reveal('[data-scroll-reveal="left"]', {
			origin: "left",
			mobile: !1,
			duration: 800
		}).reveal('[data-scroll-reveal="right"]', {
			origin: "right",
			mobile: !1,
			duration: 800
		}).reveal('[data-scroll-reveal="bottom"]', {
			duration: 800
		}), d.each(function () {
			e.reveal(a(this).children(), {
				duration: 800
			}, 150)
		}))
	})
})(jQuery);