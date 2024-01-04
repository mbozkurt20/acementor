

$(function () {

    "use strict";

    //===== Prealoder
    document.addEventListener("mousemove", function(event) {
        // Yeni bir div öğesi oluşturun ve stili belirtin
        var cursor = document.createElement("div");
        cursor.style.width = "1px";
        cursor.style.height = "2px";
        cursor.style.borderRadius = "50%";
        cursor.style.background = "linear-gradient(to right, #1D64EF, #E0507A)"; // Neon yeşili gibi parlak renkler kullanabilirsiniz
        cursor.style.boxShadow = "0 0 10px rgba(0, 255, 0, 0.8), 0 0 20px rgba(0, 255, 0, 0.6), 0 0 30px rgba(0, 255, 0, 0.4)"; // Hafif bir neon glow efekti
        cursor.style.border = "2px solid rgba(255, 255, 255, 0.5)"; // Beyaz bir kenarlık
        cursor.style.position = "absolute";
        cursor.style.pointerEvents = "none"; // Bu, imlecin diğer öğelerle etkileşimde bulunmamasını sağlar

        // Oluşturulan div'i sayfaya ekleyin
        document.body.appendChild(cursor);

        // Mouse hareketi olayını dinleyin
        document.addEventListener("mousemove", function (event) {
            // Mouse imleci konumunu güncelle
            cursor.style.left = event.pageX + "px";
            cursor.style.top = event.pageY + "px";
        });
    });

    $(window).on('load', function (event) {
        $('.preloader').delay(500).fadeOut(500);
    });


    //===== Sticky

    $(window).on('scroll', function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $(".navbar-area").removeClass("sticky");
            $(".navbar .navbar-brand img").attr("src", "assets/images/logos/svg-format.svg");
        } else {
            $(".navbar-area").addClass("sticky");
            $(".navbar .navbar-brand img").attr("src", "assets/images/logos/svg-format.svg");
        }
    });


    // Başlangıç tarihi (örneğin, şu anki tarih)
    const startDate = new Date();

    // Başlangıç fiyatı
    let initialPrice = 10000;

    function calculateEarnings() {
        // Geçen süreyi hesapla (milisaniye cinsinden)
        const currentTime = new Date();
        const elapsedTime = currentTime - startDate;

        // Her geçen saniye için eklenen miktar
        const earningsPerSecond = 0.01;

        // Kazanç hesapla
        const earnings = initialPrice + elapsedTime * earningsPerSecond;

        // Kazancı formatlı bir şekilde döndür
        return formatPrice(earnings);
    }

    function formatPrice(price) {
        // Price'ı istediğiniz formata göre düzenle (örneğin, virgülle ayrılmış binlikler)
        return price.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    }

    // Her saniye kazancı hesapla ve HTML sayfasında göster
    setInterval(() => {
        const currentEarnings = calculateEarnings();
        const earningsDisplay = document.getElementById('earningsDisplay');
        const earningsDisplayUp = document.getElementById('earningsDisplayUp');
        earningsDisplay.textContent = `$${currentEarnings}`;

        // Yeşil rengin yanıp sönme efekti
        earningsDisplay.style.color = (earningsDisplay.style.color === 'greenyellow') ? 'white' : 'greenyellow';
        earningsDisplayUp.style.color = (earningsDisplayUp.style.color === 'greenyellow') ? 'white' : 'greenyellow';
        earningsDisplayUp.style.display = earningsDisplayUp.style.color === 'white' ? 'none' : 'block'
    }, 7000);
    //===== Section Menu Active

    var scrollLink = $('.page-scroll');
    // Active link switching
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function () {

            var sectionOffset = $(this.hash).offset().top - 73;

            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });
    });

    function updateTimestamp() {
        const timestampContainer = document.getElementById('timestamp-container');
        const startTimestamp = 3000; // Starting timestamp
        const currentTimestamp = Math.floor((Date.now() / 10000)); // Current timestamp in seconds
        const duration = 3000; // Animation duration in milliseconds

        animateAndFormatTimestamp(timestampContainer, startTimestamp, currentTimestamp, duration);
    }

    function animateAndFormatTimestamp(container, start, end, duration) {
        const frameDuration = 1000 / 60;
        const totalFrames = Math.ceil(duration / frameDuration);
        const increment = (end - start) / totalFrames;

        let currentFrame = 0;
        let currentValue = start;

        function updateTimestamp() {
            currentFrame++;
            currentValue += increment;

            const formattedTimestamp = numberWithCommas(Math.floor(currentValue));
            const randomColor = getRandomColor();

            container.innerHTML = `<span style="color: ${randomColor};">$ ${formattedTimestamp}</span>`;

            if (currentFrame < totalFrames) {
                requestAnimationFrame(updateTimestamp);
            }
        }

        updateTimestamp();
    }

    function updateTimestamp1() {

        var timestampContainer = document.getElementById('timestamp-container');
        const currentTimestamp = Math.floor((Date.now() / 10000)); // Current timestamp in seconds

        // Rastgele renk oluştur
        var randomColor = getRandomColor();

        // Zaman damgasını number formatında düzenle
        var formattedTimestamp = numberWithCommas(currentTimestamp);

        // Renkli ve düzenlenmiş zaman damgasını ekle
        timestampContainer.innerHTML = `<span style="color: ${randomColor};">$ ${formattedTimestamp}</span>`;
    }

    window.addEventListener('load', updateTimestamp);

    setInterval(updateTimestamp1, 6000);

// Rastgele renk oluşturma fonksiyonu
    function getRandomColor() {
        var random = Math.random();
        if (random < 0.5) {
            // Beyaz renk üret
            return '#FFFFFF';
        } else {
            // Yeşil renk üret
            return '#00FF00';
        }
    }

// Number formatında düzenleme fonksiyonu
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    //===== close navbar-collapse when a  clicked

    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });

    $(".navbar-toggler").on('click', function () {
        $(this).toggleClass("active");
    });

    $(".navbar-nav a").on('click', function () {
        $(".navbar-toggler").removeClass('active');
    });


    //====== Magnific Popup

    $('.video-popup').magnificPopup({
        type: 'iframe'
        // other options
    });


    //===== Magnific Popup

    $('.image-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });


    //===== Counter Up

    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });


    //===== testimonial active

    $('.testimonial-active').slick({
        dots: true,
        speed: 800,
        arrows: false,
        centerMode: true,
        centerPadding: "0",
        slidesToShow: 3,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });


    //===== Back to top

    // Show or hide the sticky footer button
    $(window).on('scroll', function (event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });


    //Animate the scroll to yop
    $('.back-to-top').on('click', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });


    //=====  WOW active

    new WOW().init();


    //=====  particles


    if (document.getElementById("particles-1")) particlesJS("particles-1", {
        "particles": {
            "number": {
                "value": 40,
                "density": {
                    "enable": !0,
                    "value_area": 4000
                }
            },
            "color": {
                "value": ["#FFFFFF", "#FFFFFF", "#FFFFFF"]
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#fff"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 33,
                    "height": 33
                }
            },
            "opacity": {
                "value": 0.15,
                "random": !0,
                "anim": {
                    "enable": !0,
                    "speed": 0.2,
                    "opacity_min": 0.15,
                    "sync": !1
                }
            },
            "size": {
                "value": 50,
                "random": !0,
                "anim": {
                    "enable": !0,
                    "speed": 2,
                    "size_min": 5,
                    "sync": !1
                }
            },
            "line_linked": {
                "enable": !1,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": !0,
                "speed": 1,
                "direction": "top",
                "random": !0,
                "straight": !1,
                "out_mode": "out",
                "bounce": !1,
                "attract": {
                    "enable": !1,
                    "rotateX": 600,
                    "rotateY": 600
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": !1,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": !1,
                    "mode": "repulse"
                },
                "resize": !0
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1,
                    }
                },
                "bubble": {
                    "distance": 250,
                    "size": 0,
                    "duration": 2,
                    "opacity": 0,
                    "speed": 3
                },
                "repulse": {
                    "distance": 400,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": !0
    });

    if (document.getElementById("particles-2")) particlesJS("particles-2", {
        "particles": {
            "number": {
                "value": 40,
                "density": {
                    "enable": !0,
                    "value_area": 4000
                }
            },
            "color": {
                "value": ["#FFFFFF", "#FFFFFF", "#FFFFFF"]
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#fff"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 33,
                    "height": 33
                }
            },
            "opacity": {
                "value": 0.15,
                "random": !0,
                "anim": {
                    "enable": !0,
                    "speed": 0.2,
                    "opacity_min": 0.15,
                    "sync": !1
                }
            },
            "size": {
                "value": 50,
                "random": !0,
                "anim": {
                    "enable": !0,
                    "speed": 2,
                    "size_min": 5,
                    "sync": !1
                }
            },
            "line_linked": {
                "enable": !1,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": !0,
                "speed": 1,
                "direction": "top",
                "random": !0,
                "straight": !1,
                "out_mode": "out",
                "bounce": !1,
                "attract": {
                    "enable": !1,
                    "rotateX": 600,
                    "rotateY": 600
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": !1,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": !1,
                    "mode": "repulse"
                },
                "resize": !0
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1,
                    }
                },
                "bubble": {
                    "distance": 250,
                    "size": 0,
                    "duration": 2,
                    "opacity": 0,
                    "speed": 3
                },
                "repulse": {
                    "distance": 400,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": !0
    });
});

function formatNumber(number) {
    const suffixes = ["", "K", "M", "B", "T"];
    let suffixIndex = 0;

    while (number >= 1000 && suffixIndex < suffixes.length - 1) {
        number /= 1000;
        suffixIndex++;
    }

    // Özel durum: Milyon (M) için sadece sayıyı göster, ondalık kısmı sıfır ise ondalık kısmı gösterme
    const formattedNumber = suffixIndex === 2 ? number.toFixed(number % 1 === 0 ? 0 : 1) : number.toFixed(1);

    return formattedNumber + suffixes[suffixIndex]+'+';
}

function animateAndFormatCounter(targetNumber, duration) {
    const counterElement = document.getElementById('counter');
    const startNumber = 0;
    const frameDuration = 1000 / 60;
    const totalFrames = Math.ceil(duration / frameDuration);
    const increment = (targetNumber - startNumber) / totalFrames;

    let currentFrame = 0;
    let currentValue = startNumber;

    function updateCounter() {
        currentFrame++;
        currentValue += increment;
        counterElement.textContent = formatNumber(currentValue);

        if (currentFrame < totalFrames) {
            requestAnimationFrame(updateCounter);
        }
    }

    updateCounter();
}

const targetNumber = 750000; // 2M
const animationDuration = 3000;

animateAndFormatCounter(targetNumber, animationDuration);

function animateDailyAmount(targetAmount, duration) {
    const dailyAmountElement = document.getElementById('dailyAmount');
    const startAmount = 0;
    const frameDuration = 1000 / 60;
    const totalFrames = Math.ceil(duration / frameDuration);
    const increment = (targetAmount - startAmount) / totalFrames;

    let currentFrame = 0;
    let currentAmount = startAmount;

    function updateAmount() {
        currentFrame++;
        currentAmount += increment;
        dailyAmountElement.textContent = Math.round(currentAmount / 100) / 10;

        if (currentFrame < totalFrames) {
            requestAnimationFrame(updateAmount);
        }
    }

    updateAmount();
}

function updateDailyAmount() {
    const currentDate = new Date();
    const timestamp = currentDate.setHours(0, 0, 0, 0); // Günün başlangıcını al
    const targetAmount = getDailyAmount(timestamp);

    animateDailyAmount(targetAmount, 3000); // 1000 milisaniye (1 saniye) süresince animasyonlu artış
}

setInterval(updateDailyAmount, 86400000); // 24 saat (1 gün) = 24 * 60 * 60 * 1000 milisaniye

updateDailyAmount(); // İlk yüklenme sırasında da güncelleme yapalım.
