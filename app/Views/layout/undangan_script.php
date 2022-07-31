<script>
    $(document).ready(function () {
        $("#app-cover").hide();
    });

    function tampil() {
        console.log('aaaa')
        $(".slidingDiv").toggle("slide");
    }

    $(function() {
        var playerTrack = $("#player-track"),
            bgArtwork = $("#bg-artwork"),
            bgArtworkUrl,
            albumName = $("#album-name"),
            trackName = $("#track-name"),
            albumArt = $("#album-art"),
            sArea = $("#s-area"),
            seekBar = $("#seek-bar"),
            trackTime = $("#track-time"),
            insTime = $("#ins-time"),
            sHover = $("#s-hover"),
            playPauseButton = $("#play-pause-button"),
            i = playPauseButton.find("i"),
            tProgress = $("#current-time"),
            tTime = $("#track-length"),
            seekT,
            seekLoc,
            seekBarPos,
            cM,
            ctMinutes,
            ctSeconds,
            curMinutes,
            curSeconds,
            durMinutes,
            durSeconds,
            playProgress,
            bTime,
            nTime = 0,
            buffInterval = null,
            tFlag = false,
            albums = [
                "10,000 Hours",
                // "Me & You",
                // "Electro Boy",
                // "Home",
                // "Proxy (Original Mix)"
            ],
            trackNames = [
                "Dan + Shay, Justin Bieber",
                // "Alex Skrindo - Me & You",
                // "Kaaze - Electro Boy",
                // "Jordan Schor - Home",
                // "Martin Garrix - Proxy"
            ],
            albumArtworks = ["_1", "_2", "_3", "_4", "_5"],
            trackUrl = [
                "<?=$desain['background_musik']?>",
                // "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/1.mp3",
                // "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/3.mp3",
                // "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/4.mp3",
                // "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/5.mp3"
            ],
            playPreviousTrackButton = $("#play-previous"),
            playNextTrackButton = $("#play-next"),
            currIndex = -1;

        function playPause() {
            setTimeout(function() {
                if (audio.paused) {
                    playerTrack.addClass("active");
                    albumArt.addClass("active");
                    checkBuffering();
                    i.attr("class", "fa fa-pause");
                    audio.play();
                } else {
                    playerTrack.removeClass("active");
                    albumArt.removeClass("active");
                    clearInterval(buffInterval);
                    albumArt.removeClass("buffering");
                    i.attr("class", "fa fa-play");
                    audio.pause();
                }
            }, 300);
        }

        function showHover(event) {
            seekBarPos = sArea.offset();
            seekT = event.clientX - seekBarPos.left;
            seekLoc = audio.duration * (seekT / sArea.outerWidth());

            sHover.width(seekT);

            cM = seekLoc / 60;

            ctMinutes = Math.floor(cM);
            ctSeconds = Math.floor(seekLoc - ctMinutes * 60);

            if (ctMinutes < 0 || ctSeconds < 0) return;

            if (ctMinutes < 0 || ctSeconds < 0) return;

            if (ctMinutes < 10) ctMinutes = "0" + ctMinutes;
            if (ctSeconds < 10) ctSeconds = "0" + ctSeconds;

            if (isNaN(ctMinutes) || isNaN(ctSeconds)) insTime.text("--:--");
            else insTime.text(ctMinutes + ":" + ctSeconds);

            insTime.css({
                left: seekT,
                "margin-left": "-21px"
            }).fadeIn(0);
        }

        function hideHover() {
            sHover.width(0);
            insTime.text("00:00").css({
                left: "0px",
                "margin-left": "0px"
            }).fadeOut(0);
        }

        function playFromClickedPos() {
            audio.currentTime = seekLoc;
            seekBar.width(seekT);
            hideHover();
        }

        function updateCurrTime() {
            nTime = new Date();
            nTime = nTime.getTime();

            if (!tFlag) {
                tFlag = true;
                trackTime.addClass("active");
            }

            curMinutes = Math.floor(audio.currentTime / 60);
            curSeconds = Math.floor(audio.currentTime - curMinutes * 60);

            durMinutes = Math.floor(audio.duration / 60);
            durSeconds = Math.floor(audio.duration - durMinutes * 60);

            playProgress = (audio.currentTime / audio.duration) * 100;

            if (curMinutes < 10) curMinutes = "0" + curMinutes;
            if (curSeconds < 10) curSeconds = "0" + curSeconds;

            if (durMinutes < 10) durMinutes = "0" + durMinutes;
            if (durSeconds < 10) durSeconds = "0" + durSeconds;

            if (isNaN(curMinutes) || isNaN(curSeconds)) tProgress.text("00:00");
            else tProgress.text(curMinutes + ":" + curSeconds);

            if (isNaN(durMinutes) || isNaN(durSeconds)) tTime.text("00:00");
            else tTime.text(durMinutes + ":" + durSeconds);

            if (
                isNaN(curMinutes) ||
                isNaN(curSeconds) ||
                isNaN(durMinutes) ||
                isNaN(durSeconds)
            )
                trackTime.removeClass("active");
            else trackTime.addClass("active");

            seekBar.width(playProgress + "%");

            if (playProgress == 100) {
                i.attr("class", "fa fa-play");
                seekBar.width(0);
                tProgress.text("00:00");
                albumArt.removeClass("buffering").removeClass("active");
                clearInterval(buffInterval);
            }
        }

        function checkBuffering() {
            clearInterval(buffInterval);
            buffInterval = setInterval(function() {
                if (nTime == 0 || bTime - nTime > 1000) albumArt.addClass("buffering");
                else albumArt.removeClass("buffering");

                bTime = new Date();
                bTime = bTime.getTime();
            }, 100);
        }

        function selectTrack(flag) {
            if (flag == 0 || flag == 1) ++currIndex;
            else --currIndex;

            if (currIndex > -1 && currIndex < albumArtworks.length) {
                if (flag == 0) i.attr("class", "fa fa-play");
                else {
                    albumArt.removeClass("buffering");
                    i.attr("class", "fa fa-pause");
                }

                seekBar.width(0);
                trackTime.removeClass("active");
                tProgress.text("00:00");
                tTime.text("00:00");

                currAlbum = albums[currIndex];
                currTrackName = trackNames[currIndex];
                currArtwork = albumArtworks[currIndex];

                audio.src = trackUrl[currIndex];

                nTime = 0;
                bTime = new Date();
                bTime = bTime.getTime();

                if (flag != 0) {
                    audio.play();
                    playerTrack.addClass("active");
                    albumArt.addClass("active");

                    clearInterval(buffInterval);
                    checkBuffering();
                }

                albumName.text(currAlbum);
                trackName.text(currTrackName);
                albumArt.find("img.active").removeClass("active");
                $("#" + currArtwork).addClass("active");

                bgArtworkUrl = $("#" + currArtwork).attr("src");

                bgArtwork.css({
                    "background-image": "url(" + bgArtworkUrl + ")"
                });
            } else {
                if (flag == 0 || flag == 1) --currIndex;
                else ++currIndex;
            }
        }

        function initPlayer() {
            audio = new Audio();

            selectTrack(0);

            audio.loop = false;

            playPauseButton.on("click", playPause);

            sArea.mousemove(function(event) {
                showHover(event);
            });

            sArea.mouseout(hideHover);

            sArea.on("click", playFromClickedPos);

            $(audio).on("timeupdate", updateCurrTime);

            playPreviousTrackButton.on("click", function() {
                selectTrack(-1);
            });
            playNextTrackButton.on("click", function() {
                selectTrack(1);
            });
        }

        initPlayer();
    });

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
    $('.button_play').trigger('click');
    // var sound = document.getElementById("audio");
    // sound.play();
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
}

function BatalPesan() {
    document.getElementById('pesan').style.display = 'none';
}
</script>
<script src="
		<?=$uri_nya?>/dist/js/jquery.classyqr.min.js">
</script>