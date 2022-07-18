<style>

/* SETTING FONT EKSTERNAL */
@font-face {
    font-family: "Aulyars Italic";
    src: url('https://cdn.jsdelivr.net/gh/zeeid/inv-me/public/font/Aulyars%20Italic.otf');
    }
/* SETTING FONT EKSTERNAL */

#slider-with-blocks-1 {
    width: 100%;
}

.rsContent {
    font-size: 24px;

    line-height: 32px;

    float: left;
}

.bContainer {
    position: relative;
}

.rsABlock {
    position: relative;

    display: block;

    left: auto;

    top: auto;
}

.blockHeadline {
    font-size: 42px;

    line-height: 50px;
}

.blockSubHeadline {
    font-size: 32px;

    line-height: 40px;
}

.txtCent {
    text-align: center;

    width: 100%;
}

.slide1 {
    background: #333;
}

.slide1 .bContainer {
    top: 36%;
}

.slide2 {
    background: #fff;
}

.slide2 .bContainer {
    top: 24px;
}

.slide2 .txtCent {
    line-height: 44px;
}

.slide2 .blockHeadline {
    line-height: 66px;
}

.slide3 {
    background: #45aab8;

    color: #fff;
}

.slide3 .bContainer {
    top: 24px;
}

.slide3 span {
    line-height: 44px;
}

.slide4 .bContainer {
    position: absolute;

    left: 0;

    width: 100%;

    height: 100%;

    top: 24px;
}

.photoCopy {
    position: absolute;

    line-height: 24px;

    font-size: 12px;

    background: black;

    color: white;

    background-color: rgba(0, 0, 0, 0.75);

    padding: 0px 10px;

    position: absolute;

    left: 12px;

    bottom: 12px;

    top: auto;

    border-radius: 2px;

    z-index: 25;
}

.photoCopy a {
    color: #fff;
}

.palmImg {
    left: 0;

    top: auto;

    bottom: -60px;

    position: absolute;
}

@media screen and (min-width: 0px) and (max-width: 960px) {
    .rsContent {
        font-size: 22px;

        line-height: 28px;
    }

    .blockHeadline {
        font-size: 32px;

        line-height: 32px;
    }

    .blockSubHeadline {
        font-size: 26px;

        line-height: 32px;
    }
}

@media screen and (min-width: 0px) and (max-width: 500px) {

    .royalSlider,
    .rsOverflow {
        height: 100% !important;
    }

    .rsContent {
        font-size: 18px;

        line-height: 15px;
    }

    .blockHeadline {
        font-size: 24px;

        line-height: 32px;
    }

    .blockSubHeadline {
        font-size: 22px;

        line-height: 32px;
    }
}

.bg-content {
    background-image: url(<?=base_url()?>/images/tema/ninacharis/bg3.jpg);
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.bg_content_img {
    height: 100%;

    background-position: center center;

    background-repeat: no-repeat;

    background-size: 100% 100%;
}

.cover_galeri {
    position: absolute;

    top: 50%;

    transform: translate(0%, -50%);
}

.full {
    top: 0px;

    bottom: 0px;

    position: relative;
}

.cover {
    width: 1px;

    height: 1px;

    position: absolute;

    left: 50%;

    top: 50%;

    transform: translate(-50%, -50%);
}
.cover_dua {
    width: 1px;

    height: 1px;

    position: absolute;

    left: 50%;

    top: 30%;

    transform: translate(-50%, -50%);
}

.cover2 {
    width: 1px;

    height: 1px;

    position: absolute;

    right: 50%;

    top: 50%;

    transform: translate(-50%, -50%);
}

.swiper-container {
    width: 100%;

    height: 100%;
}

.swiper-slide {
    text-align: center;

    font-size: 18px;

    /* Center slide text vertically */

    /*                display: -webkit-box;

                                    display: -ms-flexbox;

                                    display: -webkit-flex;

                                    display: flex;*/

    -webkit-box-pack: center;

    -ms-flex-pack: center;

    -webkit-justify-content: center;

    justify-content: center;

    -webkit-box-align: center;

    -ms-flex-align: center;

    -webkit-align-items: center;

    align-items: center;
}

.swiper-container2 {
    width: 100%;

    height: 300px;

    margin-left: auto;

    margin-right: auto;
}

.swiper-slide2 {
    background-size: cover;

    background-position: center;
}

.gallery-top2 {
    padding-top: 0px;

    height: calc(90% - 35px);

    width: 100%;
}

.gallery-thumbs2 {
    height: calc(10% - 20px);

    box-sizing: border-box;

    padding: 5px 3px;
}

.gallery-thumbs2 .swiper-slide2 {
    height: 100%;

    opacity: 0.4;
}

.gallery-thumbs2 .swiper-slide2-thumb-active {
    opacity: 1;
}

.block_cover {
    background: linear-gradient(0deg,
            rgba(0, 0, 0, 0.8) 0%,
            rgba(0, 0, 0, 0.4) 40%,
            rgba(0, 0, 0, 0) 55%,
            rgba(0, 0, 0, 0) 100%);

    position: absolute;

    top: 0px;

    bottom: 0px;

    right: 0px;

    left: 0px;
}

.cover_nama {
    font-size: 30px;
}

.blink {
    animation: blinker 1s linear infinite;

    color: #fff;
}

@keyframes blinker {
    100% {
        opacity: 0;
    }
}

.blink-one {
    animation: blinker-one 1s linear infinite;
}

.blink {
    animation: blinker 1s linear infinite;

    color: #fff;
}

@keyframes blinker {
    100% {
        opacity: 0;
    }
}

.blink-one {
    animation: blinker-one 1s linear infinite;
}

@keyframes blinker-one {
    50% {
        opacity: 0.3;
    }
}

.blink {
    animation: blinker 1s linear infinite;

    color: #fff;
}

@keyframes blinker {
    100% {
        opacity: 0;
    }
}

.blink-one {
    animation: blinker-one 1.5s linear infinite;
}

.blink2 {
    animation: blinker2 2s linear infinite;

    color: #fff;
}

@keyframes blinker2 {
    5% {
        opacity: 0.3;
    }
}

.blink-one2 {
    animation: blinker-one2 2s linear infinite;
}

@keyframes blinker-one2 {
    100% {
        opacity: 0.5;
    }
}

.partner {
    color: #333;
}

.partner_by {
    color: #b19973;
}

.gllpMap {
    margin-left: 40px;

    width: 270px;

    height: 260px;

    bottom: 0px;

    border-radius: 7px;

    box-shadow: 0 1px 2px 0 rgba(50, 50, 50, 0.5),
        0 1px 8px 0 rgba(50, 50, 50, 0.7);
}

.button {
    font-family: "glacial", sans-serif;

    display: inline-block;

    border: 0px solid #fff;

    background-image: -webkit-linear-gradient(top, #dedede, #fff);

    background-image: linear-gradient(top, #dedede, #fff);

    border-radius: 10px;

    box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.5), inset 0px 4px 1px 1px white,
        inset 0px -3px 1px 1px rgba(183, 180, 180, 0.5);

    height: 55px;

    width: 200px;

    outline: none;
}

.button:hover {
    background-image: -webkit-linear-gradient(top, #fff, #f4f1ee);

    background-image: linear-gradient(top, #fff, #f4f1ee);

    color: #999;
}

input[type="text"],
select {
    width: 100%;

    padding: 10px 15px;

    margin: 8px 0;

    display: inline-block;

    border: 1px solid #ccc;

    border-radius: 4px;

    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;

    background-color: #4caf50;

    color: white;

    padding: 14px 20px;

    margin: 8px 0;

    border: none;

    border-radius: 4px;

    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.box {
    background-color: #000;

    position: absolute;

    top: 0px;

    bottom: 0px;

    right: 0px;

    left: 0px;

    z-index: 999;

    transition: all 1s linear;

    display: block;

    background-image: url(<?=$desain['cover_depan']?>);

    height: 100%;

    background-position: center;

    background-repeat: no-repeat;

    background-size: cover;
}

.hidden {
    display: none;
}

.visuallyhidden {
    opacity: 0;
}

@font-face {
    font-family: CreamCandy;

    src: url(<?=base_url()?>/font/CreamCandy-8MMqZ.otf);
}

@font-face {
    font-family: KingWaller;

    src: url(<?=base_url()?>/font/KingWaller-GOyJD.otf);
}

@font-face {
    font-family: Denalova;

    src: url(<?=base_url()?>/font/Denalova-YzXKa.otf);
}

@font-face {
    font-family: lobster;

    src: url(<?=base_url()?>/font/Lobster.otf);
}

@font-face {
    font-family: PlaylistScript;

    src: url(<?=base_url()?>/font/Playlist_Script.otf);
}

@font-face {
    font-family: belly;

    src: url(<?=base_url()?>/font/BELLY_BETTY.OTF);
}

@font-face {
    font-family: Butler_Regular;

    src: url(<?=base_url()?>/font/Butler_Regular.otf);
}

@font-face {
    font-family: tenor;

    src: url(<?=base_url()?>/font/TenorSans-Regular.ttf);
}

@font-face {
    font-family: saudagar;

    src: url(<?=base_url()?>/font/Saudagar.ttf);
}

@font-face {
    font-family: Ansylia;

    src: url(<?=base_url()?>/font/Ansylia.ttf);
}

@font-face {
    font-family: RachelRoman;

    src: url(<?=base_url()?>/font/RachelRoman.ttf);
}

@font-face {
    font-family: OliverBlush;

    src: url(<?=base_url()?>/font/OliverBlush.ttf);
}

@font-face {
    font-family: century;

    src: url(<?=base_url()?>/font/CENTURY.TTF);
}

@font-face {
    font-family: ColonnaMT;

    src: url(<?=base_url()?>/font/ColonnaMT.ttf);
}

@font-face {
    font-family: vogue;

    src: url(<?=base_url()?>/font/Vogue.ttf);
}

@font-face {
    font-family: Baybe;

    src: url(<?=base_url()?>/font/BaybeEvaline.otf);
}

@font-face {
    font-family: athelas;

    src: url(<?=base_url()?>/font/Athelas-Regular.woff);
}

@font-face {
    font-family: Amalfi_Coast;

    src: url(<?=base_url()?>/font/Amalfi_Coast.ttf);
}

@font-face {
    font-family: Cherolina;

    src: url(<?=base_url()?>/font/Cherolina.ttf);
}

@font-face {
    font-family: Amiri;

    src: url(<?=base_url()?>/font/Amiri-Italic.ttf);
}

@font-face {
    font-family: Brigitte;

    src: url(<?=base_url()?>/font/BrigitteEigner.ttf);
}

@font-face {
    font-family: Aphrodite;

    src: url(<?=base_url()?>/font/AphroditeSlimPro.ttf);
}

@font-face {
    font-family: hello;

    src: url(<?=base_url()?>/font/hello_honey.otf);
}

@font-face {
    font-family: shell;

    src: url(<?=base_url()?>/font/shell_normal.ttf);
}

@font-face {
    font-family: runwild;

    src: url(<?=base_url()?>/font/RunWild.ttf);
}

@font-face {
    font-family: suarte;

    src: url(<?=base_url()?>/font/SuarteFree.ttf);
}

@font-face {
    font-family: kimberia;

    src: url(<?=base_url()?>/font/KimberiaScript.ttf);
}

@font-face {
    font-family: ArlobunsFree;

    src: url(<?=base_url()?>/font/ArlobunsFree.ttf);
}

@font-face {
    font-family: coneriascript;

    src: url(<?=base_url()?>/font/Demo_ConeriaScript.ttf);
}

@font-face {
    font-family: heart;

    src: url(<?=base_url()?>/font/BrokenHeart.ttf);
}

@font-face {
    font-family: glacial;

    src: url(<?=base_url()?>/font/GlacialIndifference.otf);
}

@font-face {
    font-family: aisyah;

    src: url(<?=base_url()?>/font/Aisyah-Demo.otf);
}

@font-face {
    font-family: CalendaryHands;

    src: url(<?=base_url()?>/font/CalendaryHands.ttf);
}

@font-face {
    font-family: signature;

    src: url(<?=base_url()?>/font/AmostelySignature.ttf);
}

@font-face {
    font-family: sweet;

    src: url(<?=base_url()?>/font/SweetHipster.ttf);
}

@font-face {
    font-family: baskerville;

    src: url(<?=base_url()?>/font/Baskerville.ttf);
}

@font-face {
    font-family: trajan;

    src: url(<?=base_url()?>/font/TrajanPro-Regular.ttf);
}

#page-navigation {
    display: none;
}

body {
    font-family: "glacial", sans-serif;

    color: #333;
}

#star {
    -webkit-animation: rotation 30s infinite linear;
}

@-webkit-keyframes rotation {
    from {
        -webkit-transform: rotate(0deg);
    }

    to {
        -webkit-transform: rotate(359deg);
    }
}

.animation_swipup {
    position: absolute;

    width: 100%;

    animation: example_swipup 1s infinite;

    z-index: 1000;
}

@keyframes example_swipup {

    0%,
    100% {
        bottom: 20px;
    }

    50% {
        bottom: 30px;
    }
}

.animation_page {
    position: absolute;

    width: 100%;

    animation: animation_page 1.5s;

    z-index: 1000;
}

@keyframes animation_page {
    0% {
        left: 0px;
    }

    100% {
        left: 1000px;
    }
}

.animation_pageb {
    position: absolute;

    width: 100%;

    animation: animation_pageb 3s;

    z-index: 1000;
}

@keyframes animation_pageb {
    0% {
        right: 0px;
    }

    60% {
        right: -500px;
    }

    100% {
        right: -1000px;
    }
}

.animation {
    position: absolute;

    width: 350px;

    animation: example 10s infinite;

    z-index: 1000;
}

@keyframes example {

    0%,
    100% {
        left: -1000px;
    }

    10% {
        left: -300px;
    }

    90% {
        left: 150px;
    }

    85% {
        left: 150px;
    }
}

.animation2 {
    position: absolute;

    width: 350px;

    animation: examplex 10s infinite;

    z-index: 1000;
}

@keyframes examplex {

    0%,
    100% {
        right: -1000px;
    }

    10% {
        right: -100px;
    }

    90% {
        right: 250px;
    }

    85% {
        right: 250px;
    }
}

.font_nama_mempelai {
    font-size: 18px;
    /* font-family: "shell", cursive; */
    font-family: 'Kiraly', sans-serif;
    margin-bottom: 0px;
    color: #9b6215;
}

.font_lebel_mempelai {
    font-size: 14px;
    /* font-family: "Redressed", cursive; */
    font-family: "Aulyars Italic";
}

.font_ortu {
    font-size: 12px;

    margin-bottom: 0px;
}

/*untuk menu bawah*/

.rsMinW .rsThumbs {
    background: rgba(255, 255, 255, 0.5);

    color: #333;

    text-align: center;

    box-shadow: 0px 1px 8px rgba(181, 158, 122, 0.8);
}

.rsMinW .rsThumb.rsNavSelected {
    background: rgba(182, 149, 112, 0.8);

    color: #fff;

    height: 54px;

    text-align: center;
}
</style>