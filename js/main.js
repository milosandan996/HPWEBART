$(document).ready(function () {

    $('.plate').plate({// custom options
        inverse: false,
        perspective: 500,
        maxRotation: 10,
        animationDuration: 200
    });
    $('.plate2').plate({// custom options
        inverse: false,
        perspective: 300,
        maxRotation: 10,
        animationDuration: 200
    });

    let prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        let currentScrollPos = window.pageYOffset;

        // Provera da li je skrolovanje dostiglo ili premašilo 500 piksela
        if (currentScrollPos > 500) {
            // Provera da li korisnik skroluje prema gore
            if (prevScrollpos > currentScrollPos + 30) {
                document.getElementById("top").classList.add("show");
                document.getElementById("top").classList.add("animation");
                document.getElementById("top").setAttribute("data-animation", "slideDown");
            } else if (prevScrollpos < currentScrollPos - 30){
                document.getElementById("top").removeAttribute("data-animation");
                document.getElementById("top").classList.remove("show");
                document.getElementById("top").classList.remove("slideDown");
                document.getElementById("top").setAttribute("data-animation", "slideUp");
            }
        } else {
            // Ako je skrolovanje manje od 500 piksela, ukloni klasu "show"
            document.getElementById("top").classList.remove("show");
            document.getElementById("top").classList.remove("animation");
            document.getElementById("top").removeAttribute("data-animation");
            document.getElementById("top").classList.remove("slideDown");
        }

        prevScrollpos = currentScrollPos;
    };

    //console.log($('.product-item'));


    $('.product-item').eq(7).nextAll().hide();


    $('.more').click(function () {
        $('.product-item').eq(7).nextAll().toggle();

        let btnText = $(this).text();
        if (btnText === 'SHOW MORE') {
            $(this).text('SHOW LESS');
        } else {
            $(this).text('SHOW MORE');
        }

    });

    // task 2

    $('.toggle-password').click(function () {

        $(this).toggleClass('fa-eye fa-eye-slash');


        let inputType = $(this).parent().prev().attr('type');
        if (inputType === 'password') {
            $(this).parent().prev().attr('type', 'text');
        } else {
            $(this).parent().prev().attr('type', 'password');
        }

    });

    // task 3
    $('.box-remove').on('click', 'span', function () {
        $(this).parent().remove();
    });

    $('.box-remove article').append('<span class="fas fa-times"></span>');

    // task 4

    $('.fa-shopping-cart').click(function () {
        $('.shopping-cart').toggleClass('d-none');
    });

    $('.add-content').click(function () {
        $('.shopping-cart tbody').append('<tr><td >8</td><td class="product-title">Product title 8</td><td class="product-price">1000$</td><td class="action text-center"><a class="remove fas fa-times btn btn-danger" href="#"></a></td></tr>');

    });

    $('.shopping-cart tbody').on('click', '.remove', function (e) {

        e.preventDefault();
        $(this).closest('tr').remove();

    });

    //task 5

    $('.q-plus').click(function () {
        let quantity = $(this).parent().prev().val();
        if (isNaN(quantity)) {
            alert('Please insert digits only');
            return;
        }

        quantity = Number(quantity);
        quantity += 1;

        $(this).parent().prev().val(quantity);

    });

    $('.q-minus').click(function () {
        let quantity = $(this).parent().next().val();
        if (isNaN(quantity)) {
            alert('Please insert digits only');
            return;
        }
        quantity = Number(quantity);

        if (quantity > 1) {
            quantity -= 1;
            $(this).parent().next().val(quantity);
        }

    });

    // task 6

    $('.custom-accordion').on('click', '.accordion-title', function () {

        $(this).next('.accordion-content').slideToggle();
        $(this).closest('.acordion-group').siblings().find('.accordion-content').slideUp();

    });

    //task 7

    $('.category-menu').on('click', '.toggle-submenu', function (e) {
        e.preventDefault();
        $(this).toggleClass('fa-plus fa-minus');
        $(this).parent().next('.category-submenu').slideToggle(300);

    });

    //task 8

    $('.tabulator-example').on('click', '.tabulator-navigation a', function (e) {
        e.preventDefault();

        if ($(this).hasClass('active')) {
            return;
        }

        let target = $(this).attr('data-target');
        $(this).addClass('active');
        $(this).parent().siblings().find('a').removeClass('active');


        $('.single-tab').removeClass('active');
        $(target).addClass('active');

    });

    //task 9

    $('.search-users thead').on('keyup', 'input', function () {

        let target = $(this).attr('data-target');
        let data = $(this).val().toLowerCase();
        $(target).each(function () {

            let text = $(this).text().toLowerCase();

            if (text.search(data) < 0) {
                $(this).closest('tr').hide();
            } else {
                $(this).closest('tr').show();
            }

        });

    });

    //task 10

    function animation() {

        let windowHeight = $(window).height();
        let scroll = $(window).scrollTop();

        $('.animation').each(function () {

            let position = $(this).offset().top;
            let animationName = $(this).attr('data-animation');
            let delay = $(this).attr('data-delay');

            if (position < windowHeight + scroll - 150) {

                $(this).addClass(animationName);
                $(this).css('animation-delay', delay);

            }

        });

    }





    $(window).scroll(function () {
        animation();
    });

    animation();


});

const apk1 = Vue.createApp({
    data() {
        return {
            // Adding a reactive property to trigger re-renders
            updateFlag: false
        };
    },
    computed: {
        animationAttribute() {
            // Check if the screen width is under 768px
            if (window.innerWidth > 768) {
                return 'typewriter';
            } else {
                return null;
            }
        },
        animationClass() {
            // Check if the screen width is under 768px
            if (window.innerWidth > 768) {
                return 'animation';
            } else {
                return null;
            }
        }
    }
    
});

apk1.mount('#app');
