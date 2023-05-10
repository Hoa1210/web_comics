jQuery(function ($) {
    "use strict";

    // preloader
    setTimeout(function () {
        $(".inner div").addClass("done");

        setTimeout(function () {
            $(".inner div").addClass("page");

            setTimeout(function () {
                $(".pageLoad").addClass("off");

                $("body, html").addClass("on");
            }, 500);
        }, 500);
    }, 1500);

    // Fixed header
    $(window).on("scroll", function () {
        // fixedHeader on scroll
        function fixedHeader() {
            var buttonChapter = $(".button-chapter");
            var headerTopBar = $(".top-bar").outerHeight();
            var headerTwoELement = $(".header-two .site-navigation");

            if (buttonChapter.length == 0) {
                if ($(window).scrollTop() > headerTopBar) {
                    $(headerTwoELement).addClass("navbar-fixed");
                    $(".header-two").css(
                        "margin-bottom",
                        headerTwoELement.outerHeight()
                    );
                } else {
                    $(headerTwoELement).removeClass("navbar-fixed");
                    $(".header-two").css("margin-bottom", 0);
                }
            } else {
                if ($(window).scrollTop() > 300) {
                    buttonChapter.addClass("button-chapter-fixed");
                    buttonChapter.css(
                        "margin-bottom",
                        buttonChapter.outerHeight()
                    );
                } else {
                    buttonChapter.removeClass("button-chapter-fixed");
                    buttonChapter.css("margin-bottom", 0);
                }
            }
        }
        fixedHeader();

        // scroll to top btn show/hide
        function scrollTopBtn() {
            var scrollToTop = $("#back-to-top"),
                scroll = $(window).scrollTop();
            if (scroll >= 50) {
                scrollToTop.fadeIn();
            } else {
                scrollToTop.fadeOut();
            }
        }
        scrollTopBtn();
    });

    $(document).ready(function () {
        // navSearch show/hide
        function navSearch() {
            $(".nav-search").on("click", function () {
                $(".search-block").fadeIn(350);
            });
            $(".search-close").on("click", function () {
                $(".search-block").fadeOut(350);
            });
        }
        navSearch();

        // navbarDropdown
        function navbarDropdown() {
            if ($(window).width() < 992) {
                $(".site-navigation .dropdown-toggle").on("click", function () {
                    $(this).siblings(".dropdown-menu").animate(
                        {
                            height: "toggle",
                        },
                        300
                    );
                });

                var navbarHeight = $(".site-navigation").outerHeight();
                $(".site-navigation .navbar-collapse").css(
                    "max-height",
                    "calc(100vh - " + navbarHeight + "px)"
                );
            }
        }
        navbarDropdown();

        // modal
        // >>>>>> Show modal1
        $(".js-show-modal1").on("click", function (e) {
            e.preventDefault();
            $(".js-modal1").addClass("show-modal1");
        });

        $(".js-hide-modal1").on("click", function () {
            $(".js-modal1").removeClass("show-modal1");
        });

        $(".js-addwish-b2").on("click", function (e) {
            e.preventDefault();
        });

        $(".js-addwish-b2").each(function () {
            var nameProduct = $(this)
                .parent()
                .parent()
                .find(".js-name-b2")
                .html();
            $(this).on("click", function () {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass("js-addedwish-b2");
                $(this).off("click");
            });
        });

        $(".js-addwish-detail").each(function () {
            var nameProduct = $(this)
                .parent()
                .parent()
                .parent()
                .find(".js-name-detail")
                .html();

            $(this).on("click", function () {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass("js-addedwish-detail");
                $(this).off("click");
            });
        });

        // back to top
        function backToTop() {
            $("#back-to-top").on("click", function () {
                $("#back-to-top").tooltip("hide");
                $("body,html").animate(
                    {
                        scrollTop: 0,
                    },
                    800
                );
                return false;
            });
        }
        backToTop();

        // >>>>>>>>>>>> Show / hide modal search >>>>>>>>>>>>>
        $(".js-show-modal-search").on("click", function () {
            $(".modal-search-header").addClass("show-modal-search");
            $(this).css("opacity", "0");
        });

        $(".js-hide-modal-search").on("click", function () {
            $(".modal-search-header").removeClass("show-modal-search");
            $(".js-show-modal-search").css("opacity", "1");
        });

        $(".container-search-header").on("click", function (e) {
            e.stopPropagation();
        });

        // banner-carousel
        function bannerCarouselOne() {
            $(".banner-carousel.banner-carousel-1").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: false,
                speed: 600,
                arrows: true,
                prevArrow:
                    '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow:
                    '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>',
            });
            $(".banner-carousel.banner-carousel-1").slickAnimation();
        }
        bannerCarouselOne();

        // banner Carousel Two
        function bannerCarouselTwo() {
            $(".banner-carousel.banner-carousel-2").slick({
                fade: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: false,
                speed: 600,
                arrows: true,
                prevArrow:
                    '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow:
                    '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>',
            });
        }
        bannerCarouselTwo();

        // pageSlider
        function pageSlider() {
            $(".page-slider").slick({
                fade: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                dots: false,
                speed: 600,
                arrows: true,
                prevArrow:
                    '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow:
                    '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>',
            });
        }
        pageSlider();

        // anime carousel
        function animeCarousel() {
            $(".anime-slide").slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 2,
                arrows: true,
                prevArrow:
                    '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow:
                    '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        },
                    },
                    {
                        breakpoint: 481,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        }
        animeCarousel();
        // anime carousel
        function animeCarousel() {
            $(".anime-slide").slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 2,
                arrows: true,
                prevArrow:
                    '<button type="button" class="carousel-control left" aria-label="carousel-control"><i class="fas fa-chevron-left"></i></button>',
                nextArrow:
                    '<button type="button" class="carousel-control right" aria-label="carousel-control"><i class="fas fa-chevron-right"></i></button>',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        },
                    },
                    {
                        breakpoint: 481,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        }
    });

    // magnificPopup
    $(function () {
        $(".iframe-link").magnificPopup({
            type: "iframe",
        });
    });

    // parallax
    $(".parallax-window").parallax();
    $(".parallax-window2").parallax();
});

$(document).ready(function () {
    $(".listchapter").on("change", function () {
        var url = $(".listchapter").val();

        window.location.href = url;
    });
    $("#btn-cmt").click(function(e){
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: '/binh-luan',
            data: $("#form-cmt").serialize(),
            success: function(data){
                $("#comment").val("");
                $("#list-cmt").prepend(renderCOmmentHTML(data));
            }
        });
    });

    function renderCOmmentHTML(data){
        var date = moment(data.created_at).utc().format('YYYY-MM-DD hh:mm:ss')
        return `<li class="single_comment_area">
        <!-- Comment Content -->
        <div class="comment-content d-flex">
            <!-- Comment Author -->
            <div class="comment-author">
                <img class="w-100 img-fluid" src="${data.user.avatar}" alt="author">
            </div>
            <!-- Comment Meta -->
            <div class="comment-meta">
                <a href="#!" class="post-date">${date}</a>
                <h5>${data.user.name}</h5>
                <p>${data.content}</p>
                <a href="#!" class="like">Thích</a>
                <a href="#!" class="reply">Trả Lời</a>
            </div>
        </div>
    </li>`;
    }
});
