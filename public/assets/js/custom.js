// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// ===== RESPONSIVE ENHANCEMENTS =====

// Mobile menu close on link click
$(document).ready(function() {
    // Close mobile menu when clicking on a nav link
    $('.navbar-nav .nav-link').on('click', function() {
        if ($(window).width() < 992) {
            $('.navbar-collapse').collapse('hide');
        }
    });
    
    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if(target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }
    });
    
    // Add loading class to forms on submit
    $('form').on('submit', function() {
        $(this).find('button[type="submit"]').prop('disabled', true).addClass('btn-loading');
    });
    
    // Lazy load images for better mobile performance
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[data-src]');
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    }
    
    // Handle responsive tables
    function makeTablesResponsive() {
        $('table').each(function() {
            if (!$(this).parent().hasClass('table-responsive')) {
                $(this).wrap('<div class="table-responsive"></div>');
            }
        });
    }
    
    makeTablesResponsive();
    
    // Navbar background on scroll for mobile
    $(window).scroll(function() {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 50) {
                $('.custom_nav-container').addClass('navbar-scrolled');
            } else {
                $('.custom_nav-container').removeClass('navbar-scrolled');
            }
        }
    });
    
    // Touch device detection
    function isTouchDevice() {
        return (('ontouchstart' in window) ||
            (navigator.maxTouchPoints > 0) ||
            (navigator.msMaxTouchPoints > 0));
    }
    
    if (isTouchDevice()) {
        $('body').addClass('touch-device');
    }
    
    // Prevent zoom on input focus for iOS
    if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
        $('input, select, textarea').on('focus', function() {
            $(this).css('font-size', '16px');
        });
    }
    
    // Debounce resize events
    var resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Add any resize-dependent functions here
            makeTablesResponsive();
        }, 250);
    });
});

// Add viewport height CSS variable for mobile browsers
function setViewportHeight() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}

setViewportHeight();
window.addEventListener('resize', setViewportHeight);
window.addEventListener('orientationchange', setViewportHeight);
