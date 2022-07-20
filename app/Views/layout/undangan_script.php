<script>

    function refresh_ucapan(){
        var kode_pasangan = $("#kode_pasangan").val()
        var kunciku = $("#kunciku").val()
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>/get_ucapan",
            data: 'kode_pasangan='+kode_pasangan+"&kunciku="+kunciku,
            beforeSend: function() {
                // setting a timeout
                // $("#loading_ucapan").html('<i class="fa fa-spinner fa-spin"></i> Mohon Tunggu, Sedang Mengirim Ucapan ^_^');
            },
            success: function (hasil) {
                $("#komentar1").html(hasil)
                
                // if(hasil=='OKE'){
                //     $("#loading_ucapan").html('Berhasil Mengirim Ucapan ^_^');
                //     window.setTimeout(function(){
                //         BatalPesan()
                //     }, 2000);
                // }
                
                // document.getElementById('pesan').style.display = 'none';
                // $(".royalSlider").royalSlider('goTo', 8);
                // document.getElementById('btn_ucapan').style.display = 'none';
            }
        });
    }

    $("#form_ucapan").submit(function (e) { 
        e.preventDefault();
        var data = $("#form_ucapan").serialize();

        $.ajax({
            type: "POST",
            url: "<?=base_url()?>/kirim_ucapan",
            data: data,
            beforeSend: function() {
                // setting a timeout
                $("#loading_ucapan").html('<i class="fa fa-spinner fa-spin"></i> Mohon Tunggu, Sedang Mengirim Ucapan ^_^');
            },
            success: function (hasil) {
                // $("#debug").html(hasil)
                
                if(hasil=='OKE'){
                    $("#loading_ucapan").html('Berhasil Mengirim Ucapan ^_^');
                    refresh_ucapan()
                    window.setTimeout(function(){
                        BatalPesan()
                    }, 3000);
                }
                
                // document.getElementById('pesan').style.display = 'none';
                // $(".royalSlider").royalSlider('goTo', 8);
                // document.getElementById('btn_ucapan').style.display = 'none';
            }
        });
    });
</script>


<script type="text/javascript" src="
	<?=$uri_nya?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js">
</script>
<script type="text/javascript" src="
	<?=$uri_nya?>/assets/js/plugins/owl-carousel.js">
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
    OwlCarousel.initOwlCarousel();
});
</script>
<script>
jQuery(document).ready(function($) {
    // DO NOT INCLUDE THIS CODE IN YOUR BUILD, it's for tabs on this page
    var code = $('#html-code code');
    if (code.is(':empty')) {
        var rsCode = $('.royalSlider-preview');
        if (!rsCode.length) {
            rsCode = $('.royalSlider');
        }
        rsCode = rsCode.clone().removeClass('royalSlider-preview').wrap(' < div > < /div>').parent().html();
        rsCode = htmlencode(rsCode);
        code.html(rsCode);
    }
    $('#js code').html(htmlencode($('#addJS').html()));
    var filesHTML = '';
    $('.rs-file').each(function() {
        var item = $(this).removeAttr('class');
        if (item.is('script')) {
            filesHTML += ' < script src = "' + item.attr('src') + '" / > ';
        } else {
            filesHTML += $(' < div > ').append($(this).clone().removeAttr('class ')).html();
        }
        filesHTML += "\n";
    });
    $('#files code').html(htmlencode(filesHTML));
    $(".tabs").tabs();
});

function htmlencode(str) {
    if (str) {
        return str.replace(/[&<>"']/g, function($0) {
            return "&" + {
                "&": "amp",
                "<": "lt",
                ">": "gt",
                '"': "quot",
                "'": "#39"
            } [$0] + ";";
        });
    }
}
</script>
<script id="addJS">
jQuery(document).ready(function($) {
    jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.2,-2,0.8,2)';
    jQuery.rsCSS3Easing.easeOutBack2 = 'cubic-bezier(0.950, 0.350, 0.055, 0.560)';
    $('#slider-with-blocks-1').royalSlider({
        arrowsNav: false,
        imageScaleMode: 'fill',
        imageAlignCenter: true,
        loop: false,
        loopRewind: true,
        slidesOrientation: 'vertical',
        controlNavigation: 'thumbnails',
        keyboardNavEnabled: true,
        navigateByClick: false,
        slidesSpacing: 0,
        transitionType: 'fade',
        allowCSS3: true,
        startSlideId: 0,
        enabled: true,
        globalCaption: false,
        block: {
            delay: 400
        },
        thumbs: {
            appendSpan: true,
            firstMargin: true,
            paddingBottom: 4,
            arrows: true
        },
        sliderDrag:true,
        sliderTouch:true,
    });
});
</script>
<script src="
		<?=$uri_nya?>/dist/js/swiper.min.js">
</script>
<script src="
		<?=$uri_nya?>/dist/js/swiper.min2.js">
</script>
<script>
var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
//Galeri
var galleryThumbs2 = new Swiper2('.gallery-thumbs2', {
    spaceBetween: 3,
    slidesPerView: 5,
    loop: true,
    freeMode: true,
    loopedSlides: -1, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop2 = new Swiper2('.gallery-top2', {
    spaceBetween: 0,
    loop: true,
    loopedSlides: 5, //looped slides should be the same
    navigation: {
        nextEl: '.swiper-button-next2',
        prevEl: '.swiper-button-prev2',
    },
    thumbs: {
        swiper: galleryThumbs2,
    },
});

var countDownDate = new Date("<?=$hitung_mundur?>")
var x = setInterval(function() {
    // Get today's date and time
    var now = new Date().getTime();
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    //alert(distance)
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("hari").innerHTML = days;
    document.getElementById("jam").innerHTML = hours;
    document.getElementById("menit").innerHTML = minutes;
    document.getElementById("detik").innerHTML = seconds;
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("hari").innerHTML = "-";
        document.getElementById("jam").innerHTML = "-";
        document.getElementById("menit").innerHTML = "-";
        document.getElementById("detik").innerHTML = "-";
    }
}, 1000);

function Close() {
    $(".royalSlider").royalSlider('goTo', 1);
    document.getElementById('close').style.display = 'none';
    var sound = document.getElementById("audio");
    sound.play();
}

function SoundStop() {
    document.getElementById('btn_play').style.display = 'none';
    document.getElementById('btn_stop').style.display = 'block';
    var sound = document.getElementById("audio");
    sound.pause();
}

function SoundPlay() {
    document.getElementById('btn_play').style.display = 'block';
    document.getElementById('btn_stop').style.display = 'none';
    var sound = document.getElementById("audio");
    sound.play();
}
let box = document.getElementById('box'),
    btn = document.querySelector('button');
btn.addEventListener('click', function() {
    if (box.classList.contains('hidden')) {
        box.classList.remove('hidden');
        setTimeout(function() {
            box.classList.remove('visuallyhidden');
        }, 30);
    } else {
        box.classList.add('visuallyhidden');
        box.addEventListener('transitionend', function(e) {
            box.classList.add('hidden');
        }, {
            capture: false,
            once: true,
            passive: false
        });
    }
}, false);

function Pesan() {
    document.getElementById('pesan').style.display = 'block';
    document.getElementById('isi').style.display = 'none';
}

function BatalPesan() {
    document.getElementById('pesan').style.display = 'none';
    document.getElementById('isi').style.display = 'block';
}
</script>
<script src="
		<?=$uri_nya?>/dist/js/jquery.classyqr.min.js">
</script>
<!-- add proses -->

<script>
$(document).ready(function() {
    $("#konfirmasi").change(function() {
        var konfirmasi = $(this).val();
        //alert('1111')
        if (konfirmasi == 'Yes') {
            document.getElementById('jumlah_hadir').style.display = 'block';
            document.getElementById('jumlah_hadir_none').style.display = 'none';
        } else if (konfirmasi == 'Ya') {
            document.getElementById('jumlah_hadir').style.display = 'block';
            document.getElementById('jumlah_hadir_none').style.display = 'none';
        } else {
            document.getElementById('jumlah_hadir').style.display = 'none';
            document.getElementById('jumlah_hadir_none').style.display = 'block';
        }
    });
});
</script>

<script>
var vid = document.getElementById("myVideo");
vid.onplay = function() {
    document.getElementById('btn_play').style.display = 'none';
    document.getElementById('btn_stop').style.display = 'block';
    var sound = document.getElementById("audio");
    sound.pause();
};
vid.onpause = function() {
    document.getElementById('btn_play').style.display = 'block';
    document.getElementById('btn_stop').style.display = 'none';
    var sound = document.getElementById("audio");
    sound.play();
};
//copy clipboard
function copyToClipboard(element) {
    var $temp = $(" < input > ");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    $('#tercopy').show();
    setTimeout(delete_flash, 1000);
}

function delete_flash(flash) {
    $('#tercopy').hide()
}
</script>