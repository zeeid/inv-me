<!DOCTYPE html>

<html lang="en">
<head>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="Undangan Website Pernikahan">
    <meta property="og:title" content="UNDANGAN PERNIKAHAN <?= $user ?>" />
    
    <link href="http://fonts.cdnfonts.com/css/kiraly" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/mother-tongue---personal-use" rel="stylesheet">
    <!-- FONT NAMA ORTU -->
    <link href="http://fonts.cdnfonts.com/css/glacial-indifference" rel="stylesheet">
                

    <meta property="og:description" content="<?= $tanggal." - ".$bulan." - ".$tahun ?>">

    <meta property="og:image:type" content="image/jpeg" />
    <title>UNDANGAN PERNIKAHAN <?= strtoupper($user) ?></title>
    
    <!-- slider JS files -->
    <script class="rs-file" src="<?=base_url()?>/assets/royalslider/jquery-1.8.3.min.js"></script>
    <script class="rs-file" src="<?=base_url()?>/assets/royalslider/jquery.royalslider.min.js"></script>
    <link class="rs-file" href="<?=base_url()?>/assets/royalslider/royalslider.css" rel="stylesheet">
    <script class="rs-file" src="<?=base_url()?>/assets/royalslider/jquery.easing-1.3.js"></script>

    <!-- syntax highlighter -->

    <script src="<?=base_url()?>/assets/preview-assets/js/highlight.pack.js"></script>
    <script src="<?=base_url()?>/assets/preview-assets/js/jquery-ui-1.8.22.custom.min.js"></script>

    <!-- preview-related stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Redressed&amp;display=swap" rel="stylesheet">

    <link href="<?=base_url()?>/assets/preview-assets/css/reset.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/preview-assets/css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/preview-assets/css/github.css" rel="stylesheet">

    <link class="rs-file" href="<?=base_url()?>/assets/royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/dist/css/swiper.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/dist/css/swiper.min2.css">

    <link href="https://fonts.googleapis.com/css?family=Playball&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Stalemate&amp;display=swap" rel="stylesheet">

    <!-- guestbook -->

    <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

    <!-- slider css -->


    <?= $this->include('layout/undangan_style') ?>

</head>

<body>
    
    <div id="box" class="box">
        <div style="position:absolute;top:0px;bottom:0px;right:0px;left:0px;background: rgba( 0,0,0,0.6)"></div>
        <div class="cover">
            <img src="<?=$desain['hiasan_depan']?>" style="width: 190px;margin-left: -95px;margin-top: -120px;">
            <div style="color: #c79931;width: 300px;margin-left: -150px;text-align: center;margin-top: -155px;font-family: 'Cormorant Garamond', serif;font-size: 52px">
                <table style="width: 100%;color: #fff;" id="yang_depan">
                    <tr>
                        <td style="width: 100px;text-align: right"><?= $alias_pp ?></td>
                        <td style="width: 1px;text-align: center">|</td>
                        <td style="width: 100px;text-align: left"><?= $alias_pw ?></td>
                    </tr>
                </table>
                <div style="font-family: 'Josefin Slab', serif;font-size:12px;margin-top:-5px;color: #fff">
                    <?= $tanggal_acara ?>
                </div>
            </div>
            <div style="width: 300px;margin-left: -150px;text-align: center;margin-top: 80px">
                <p style="color:#fff;font-size: 12px;">Yth.</p>
                <p style="color:#e3c251;font-size: 17px;margin-bottom: 10px"><?= $nama_tamu ?></p>
                <img src="<?=base_url()?>/images/librari/line_ffffff.png" style="width: 200px;margin-top:-5px;margin-bottom:5px;">
                <div style="color: #fff">( <?= $get_tamu['alamat_tamu'] ?> )</div>
            </div>
            <!--<div class="blink blink-one">-->
            <div>
                <div
                    style="box-shadow:inset 0 0 10px rgba(0,0,0,0.5);background-color: #fff;border-radius: 50px;padding: 8px 0px;border: 1px solid #fff;color: #000;width: 140px;margin-left: -70px;text-align: center;margin-top: 40px;font-size: 17px">
                    <small><b>Buka Undangan</b></small></div>
            </div>
            <div class="blink blink-one">
                <div style="box-shadow: 0 0px 10px 2px rgba(255,255,255,0.5), 0 6px 20px 0 rgba(255,255,255,0.5);border-radius: 50px;padding: 8px 0px;border: 1px solid #fff;color: #000;width: 140px;margin-left: -70px;text-align: center;margin-top: -40px;font-size: 17px"><small><b>&nbsp;</b></small></div>
            </div>
        </div>
    </div>

    <button id="close" class="buttonx" style="border: 0px solid #333;position: absolute;top: 0px ;bottom: 0px;left: 0px;right: 0px;width: 100%;background: rgba(0,0,0,0);;z-index: 1333" onclick="Close()"></button>

    <div class="page wrapper">

        <!-- slider code start -->

        <div class="row clearfix">
            <div class="col span_4 fwImage">
                <div id="slider-with-blocks-1" class="royalSlider rsMinW">
                    <div class="rsContent slide1 box">
                        <div
                            style="position:absolute;top:0px;bottom:0px;right:0px;left:0px;background: rgba( 0,0,0,0.6)">
                        </div>
                        <div class="cover">
                            <img src="<?=$desain['hiasan_depan']?>" style="width: 190px;margin-left: -95px;margin-top: -120px;">
                            <div style="color: #c79931;width: 300px;margin-left: -150px;text-align: center;margin-top: -155px;font-family: 'Cormorant Garamond', serif;font-size: 52px">
                                <table style="width: 100%;color: #fff;" id="yang_dalam">
                                    <tr>
                                        <td style="width: 100px;text-align: right"><?= $alias_pp ?></td>
                                        <td style="width: 1px;text-align: center">|</td>
                                        <td style="width: 100px;text-align: left"><?= $alias_pw ?></td>
                                    </tr>
                                </table>

                                <div style="font-family: 'Josefin Slab', serif;font-size:12px;margin-top:35px;color: #fff">
                                    <?= $tanggal_acara ?>
                                </div>
                            </div>
                            <div style="width: 300px;margin-left: -150px;text-align: center;margin-top: 86px">
                                <p style="color:#fff;font-size: 12px;">Yth.</p>
                                <p style="color:#e3c251;font-size: 17px;margin-bottom: 10px;margin-top: 14px"><?= $nama_tamu ?></p>
                                <img src="<?=base_url()?>/images/librari/line_ffffff.png" style="width: 200px;margin-top:-2px;margin-bottom:8px;">
                                <div style="color: #fff;font-size: 14px">( <?= $get_tamu['alamat_tamu'] ?> )</div>
                            </div>
                            <div class="rsTmb" data-rsw="632" data-rsh="500"><i class="fa fa-user"
                                    style="margin-top: 10px;font-size: 17px"></i>
                                <div style="font-size: 10px">Penerima</div>
                            </div>
                        </div>
                    </div>

                    <div class="rsContent slide1" style="background-image:url(<?=$desain['cover_dalam']?>);height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;">
                        <div class="cover">
                            <div class="cover_nama" style="width: 300px;color: #fff;margin-left: -150px;margin-top: -200px;text-align:center">
                                <div style="margin-bottom:17px" class="rsABlock txtCent" data-move-offset="50" data-delay="100" data-speed="800" data-move-effect="bottom">
                                    <img src="<?=$desain['logo_depan']?>" style="width: 240px;">
                                </div>
                            </div>
                        </div>
                        <div class="cover" style="margin-left: -150px;margin-top: -37px;font-family: 'Josefin Slab', serif;text-align:center">
                            <div style="width: 300px;">
                                <div class="cover_nama rsABlock txtCent" style="font-family: 'Mother Tongue - Personal Use', sans-serif;color: #a98863" data-move-offset="50" data-delay="100" data-speed="1000" data-move-effect="none">
                                    <?= $nama_pw ?> <small>&</small> <?= $nama_pp ?>
                                </div>
                                <div style="font-size: 14px;color: #6d071a;margin-top: 100px">
                                    <div style="text-align: center;color:#a98863;padding: 20px 0px 5px 0px;font-size:14px" class="rsABlock txtCent" data-move-offset="50" data-delay="800" data-speed="800" data-move-effect="top">The Wedding of</div>
                                    <div style="text-align: center" class="rsABlock txtCent" data-move-offset="50" data-delay="1000" data-speed="800" data-move-effect="top">
                                        <table style="width: 100%;color:#a98863">
                                            <tr>
                                                <td></td>
                                                <td style="border-top: 1px solid #a98863;border-bottom: 1px solid #a98863;width: 150px;text-align: center;padding: 5px 0px 0px 0px;width: 85px;font-size:18px">
                                                    <b>
                                                        <?= $hari ?>
                                                    </b>
                                                </td>
                                                <td style="width: 45px;text-align:center">
                                                    <div style="font-size: 30px;padding: 5px 5px;margin: -10px 0px 0px 0px">
                                                        <b>
                                                            <?= $tanggal ?>
                                                        </b>
                                                    </div>
                                                    <div style="margin:-9px 0px -10px 0px;margin-top: 0px;">
                                                        <?= $tahun ?>
                                                    </div>
                                                </td>
                                                <td style="border-top: 1px solid #a98863;border-bottom: 1px solid #a98863;width: 150px;text-align: center;padding: 5px 0px 0px 0px;width: 85px;font-size:18px">
                                                    <b>
                                                        <?= $bulan ?>
                                                    </b>
                                                </td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="position: absolute;bottom: 50px;left: 0px ; right: 0px;text-align: center"
                            class="rsABlock txtCent" data-move-offset="50" data-delay="2333" data-speed="800"
                            data-move-effect="bottom">
                            <div style="text-align: center;color: #a98863">
                                <div class="animation_swipup">
                                    <div>
                                        <i class="fa fa-chevron-up" style="color: #a98863;font-size: 15px;margin-left:0px;"></i>
                                    </div>
                                    <div style="margin-top: -5px">
                                        <i class="fa fa-chevron-up" style="color: #a98863;font-size: 15px;margin-left:0px;"></i>
                                    </div>
                                </div>
                                <div style="font-size: 10px;margin-top:-20px">
                                    Geser ke Atas
                                </div>
                            </div>
                        </div>
                        <div class="rsTmb" data-rsw="632" data-rsh="500"><i class="fa fa-address-book"
                                style="margin-top: 10px;font-size: 17px"></i>
                            <div style="font-size: 10px">Sampul</div>
                        </div>
                    </div>

                    <div class="rsContent slide2 bg-content">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_atas'] ?>"
                            style="width:130px;top:0px;position: absolute;right: 0px;z-index: 0;">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_bawah'] ?>"
                            style="width:130px;bottom:0px;position: absolute;left: 0px;z-index: 0;">
                        <div class="rsABlock" data-move-offset="450" data-delay="0" data-speed="1200"
                            data-move-effect="none"
                            style="background-color: rgb(255, 255, 255, 0.2);border-radius: 10px;position: absolute;top: 20px;bottom: 60px;left: 20px;right: 20px;box-shadow: 0 1px 2px 0 rgba(100, 100, 100, 0.7), 0 1px 8px 0 rgba(100, 100, 100, 0.7);z-index: 0;">
                        </div>

                        <div class="cover" style="text-align:center">
                            <div style="margin-left:-150px;width: 300px;margin-top: -230px;">
                                <div style="font-size:12px;margin-bottom: 20px" class="rsABlock" data-move-offset="50"
                                    data-delay="200" data-speed="1000" data-move-effect="top">
                                    <?= $kata_pembukaan ?>
                                </div>

                                <table style="width: 100%;">
                                    <tr>
                                        <td style="vertical-align:top">
                                            <div style="position: fixed;right: 5px;">
                                                <img src="<?=$desain['pengantin_p']?>"
                                                    style="border-radius:100px;width: 100px; height: auto; object-fit: cover;border: 4px solid #ddd;box-shadow: 0 1px 2px 0 rgba(181, 158, 122, 0.5), 0 1px 8px 0 rgba(181, 158, 122, 0.9);"
                                                    class="rsABlock" data-move-offset="30" data-delay="200"
                                                    data-speed="2500" data-move-effect="none" />
                                            </div>
                                            <div style='margin-top:90px'>&nbsp;</div>
                                        </td>
                                        <td style="vertical-align:top">
                                            <div style="position: fixed;left: 5px">
                                                <img src="<?=$desain['pengantin_w']?>"
                                                    style="border-radius:100px;width: 100px; height: auto; object-fit: cover;border: 4px solid #ddd;box-shadow: 0 1px 2px 0 rgba(181, 158, 122, 0.5), 0 1px 8px 0 rgba(181, 158, 122, 0.9);"
                                                    class="rsABlock" data-move-offset="30" data-delay="200"
                                                    data-speed="2500" data-move-effect="none" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;vertical-align: top" colspan="2">
                                            <div class="rsABlock" data-move-offset="50" data-delay="200"
                                                data-speed="800" data-move-effect="bottom" style="margin-top: 20px;">
                                                <span class="font_nama_mempelai"><?= ucwords(strtolower($nama_lengkap_pp)) ?></span><br>
                                                <img src="<?=base_url()?>/images/library/line_9b6215.png" style="width: 180px;">
                                                <div class="font_lebel_mempelai">Putra dari</div>
                                                <span class="font_ortu" style="font-family: 'Glacial Indifference', sans-serif;">
                                                    Bapak <?= ucwords(strtolower($nama_ayah_pp)) ?>
                                                    <br>
                                                    Ibu <?= ucwords(strtolower($nama_ibu_pp)) ?>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding: 5px;text-align:center;"><span class="rsABlock"
                                                data-move-offset="50" data-delay="200" data-speed="800"
                                                data-move-effect="none"
                                                style="font-family: 'Dancing Script', cursive;font-size: 25px;">&</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;vertical-align: top" colspan="2">
                                            <div class="rsABlock" data-move-offset="50" data-delay="200"
                                                data-speed="800" data-move-effect="bottom">
                                                <span class="font_nama_mempelai"><?= ucwords(strtolower($nama_lengkap_pw)) ?></span><br>
                                                <img src="<?=base_url()?>/images/library/line_9b6215.png" style="width: 180px;">
                                                <div class="font_lebel_mempelai">Putri dari</div>
                                                <span class="font_ortu" style="font-family: 'Glacial Indifference', sans-serif;">
                                                    Bapak <?= ucwords(strtolower($nama_ayah_pw)) ?>
                                                    <br>
                                                    Ibu <?= ucwords(strtolower($nama_ibu_pw)) ?>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>


                        <div class="rsTmb" data-rsw="632" data-rsh="500"><i class="fa fa-heart"
                                style="margin-top: 10px;font-size: 17px"></i>
                            <div style="font-size: 10px">Mempelai</div>
                        </div>


                    </div>
                    <div class="rsContent slide2 bg-content">


                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_atas'] ?>"
                            style="width:130px;top:0px;position: absolute;right: 0px;z-index: 0;">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_bawah'] ?>"
                            style="width:130px;bottom:0px;position: absolute;left: 0px;z-index: 0;">
                        <div class="rsABlock" data-move-offset="450" data-delay="0" data-speed="1200"
                            data-move-effect="none"
                            style="background-color: rgb(255, 255, 255, 0.2);border-radius: 10px;position: absolute;top: 20px;bottom: 60px;left: 20px;right: 20px;box-shadow: 0 1px 2px 0 rgba(100, 100, 100, 0.7), 0 1px 8px 0 rgba(100, 100, 100, 0.7);z-index: 0;">
                        </div>



                        <div class="cover">
                            <div style="margin-left:-175px;width: 350px;margin-top: -230px;text-align:center">
                                <div style="width: 350px;">
                                    <div style="font-size: 24px;font-family: 'Redressed', cursive;" class="rsABlock"
                                        data-move-offset="50" data-delay="200" data-speed="800" data-move-effect="top">
                                        Rangkaian Acara</div>
                                    <div style="font-size: 14px">
                                        <div style="padding: 15px 50px 5px 50px;font-size: 24px;font-family: 'Dancing Script', cursive;"
                                            class="rsABlock" data-move-offset="50" data-delay="200" data-speed="800"
                                            data-move-effect="top">
                                            <table style="width: 100%">
                                                <tr>
                                                    <td><img src="<?=base_url()?>/images/library/dot_9b6215.jpg"
                                                            style="height:1px;width: 100%;padding:0px 10px 5px 0px;">
                                                    </td>
                                                    <td
                                                        style="color: #9b6215;text-align: center;padding: 0px 15px;white-space: nowrap;width: 1px">
                                                        AKAD</td>
                                                    <td><img src="<?=base_url()?>/images/library/dot_9b6215.jpg"
                                                            style="height:1px;width: 100%;padding:0px 10px 5px 0px;">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <table style="width: 100%;font-family: 'Josefin Slab', serif;">
                                            <tr>
                                                <td></td>
                                                <td style="text-align: right;font-size: 18px;padding-right:10px;width: 120px;vertical-align: middle;white-space: nowrap;">
                                                    <div class="rsABlock" data-move-offset="50" data-delay="600"
                                                        data-speed="800" data-move-effect="right">
                                                        <b>
                                                            <?= $hari_akad ?>
                                                        </b>
                                                        <div style="margin-top:3px;">
                                                            <small>
                                                                <?= $waktu_akad ?> WIB - Selesai
                                                            </small>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td style="width: 50px;text-align: center;vertical-align: middle">
                                                    <div class="rsABlock" data-move-offset="50" data-delay="200" data-speed="800" data-move-effect="top" style="border-radius: 58px;width:58px;height:58px;border: 3px solid #fff; font-size: 36px;color: #fff;background-color: #333;box-shadow: 0 1px 2px 0 rgba(150, 150, 150, 0.5), 0 1px 8px 0 rgba(150, 150, 150, 0.7)">
                                                        <div style="margin-top:20px;margin-left:-1px">
                                                            <b>
                                                                <?= $tgl_akad ?>
                                                            </b>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    style="text-align: left;font-size: 18px;padding-left:10px;width: 120px;vertical-align: middle;white-space: nowrap;">
                                                    <div class="rsABlock" data-move-offset="50" data-delay="600"
                                                        data-speed="800" data-move-effect="left">
                                                        <b>
                                                            <?= $bulan_akad ?>
                                                        </b>
                                                        <div style="margin-top:3px;">
                                                            <small>
                                                                <?= $tahun_akad ?>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <div style="margin-top: 8px;font-size: 12px;" class="rsABlock"
                                            data-move-offset="50" data-delay="200" data-speed="800"
                                            data-move-effect="top">
                                            <b><?= $tempat_akad ?></b>
                                            <br><?= $alamat_akad ?>
                                        </div>
                                    </div>
                                    <div style="font-size: 14px;">
                                        <div style="padding: 15px 50px 5px 50px;font-size: 24px;font-family: 'Dancing Script', cursive;"
                                            class="rsABlock" data-move-offset="50" data-delay="200" data-speed="800"
                                            data-move-effect="top">
                                            <table style="width: 100%">
                                                <tr>
                                                    <td><img src="<?=base_url()?>/images/library/dot_9b6215.jpg"
                                                            style="height:1px;width: 100%;padding:0px 10px 5px 0px;">
                                                    </td>
                                                    <td
                                                        style="color: #9b6215;text-align: center;padding: 0px 15px;white-space: nowrap;width: 1px">
                                                        Resepsi</td>
                                                    <td><img src="<?=base_url()?>/images/library/dot_9b6215.jpg"
                                                            style="height:1px;width: 100%;padding:0px 10px 5px 0px;">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <table style="width: 100%;font-family: 'Josefin Slab', serif;">
                                            <tr>
                                                <td></td>
                                                <td style="text-align: right;font-size: 18px;padding-right:10px;width: 120px;vertical-align: middle;white-space: nowrap;">
                                                    <div class="rsABlock" data-move-offset="50" data-delay="600"
                                                        data-speed="800" data-move-effect="right">
                                                        <b>
                                                            <?= $hari_resepsi ?>
                                                        </b>
                                                        <div style="margin-top:3px;">
                                                            <small>
                                                                <?= $waktu_resepsi ?> WIB
                                                            </small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="width: 64px;text-align: center;vertical-align: middle">
                                                    <div class="rsABlock" data-move-offset="50" data-delay="200"
                                                        data-speed="800" data-move-effect="top"
                                                        style="border-radius: 58px;width:58px;height:58px;border: 3px solid #fff; font-size: 36px;color: #fff;background-color: #333;box-shadow: 0 1px 2px 0 rgba(150, 150, 150, 0.5), 0 1px 8px 0 rgba(150, 150, 150, 0.7)">
                                                        <div style="margin-top:20px;margin-left:-1px">
                                                            <b>
                                                                <?= $tgl_resepsi ?>
                                                            </b>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    style="text-align: left;font-size: 18px;padding-left:10px;width: 120px;vertical-align: middle;white-space: nowrap;">
                                                    <div class="rsABlock" data-move-offset="50" data-delay="600"
                                                        data-speed="800" data-move-effect="left">
                                                        <b>
                                                            <?= $bulan_resepsi ?>
                                                        </b>
                                                        <div style="margin-top:3px;">
                                                            <small>
                                                                <?= $tahun_resepsi ?>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <div style="margin-top: 8px;font-size: 12px;" class="rsABlock"
                                            data-move-offset="50" data-delay="200" data-speed="800"
                                            data-move-effect="top">
                                            <b><?= $tempat_resepsi ?></b>
                                            <br><?= $alamat_resepsi ?>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding: 15px 30px 15px 30px;position: relative">
                                    <table style="width: 100%;text-align:center">
                                        <tr>
                                            <td colspan="9">
                                                <div style="font-size: 13px">
                                                    <div class="rsABlock" data-move-offset="50" data-delay="1000"
                                                        data-speed="1000" data-move-effect="left">
                                                        Hitung Mundur Acara <b style="color:#9b6215">Resepsi</b></div>
                                                    <br>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>&nbsp;</td>
                                            <td style="width: 20%;text-align: center;">
                                                <div class="rsABlock" data-move-offset="50" data-delay="1200"
                                                    data-speed="800" data-move-effect="bottom"
                                                    style="box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, .5), inset 0px 4px 1px 1px white, inset 0px -3px 1px 1px rgba(183,180,180,.5);background-color: #fff;border-radius: 5px;color:#333;padding: 7px 0px;width: 60px;font-size: 15px">
                                                    <b><span id="hari"></span></b>
                                                    <div>
                                                        <small>Hari</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td style="width: 20%;text-align: center">
                                                <div class="rsABlock" data-move-offset="50" data-delay="1200"
                                                    data-speed="800" data-move-effect="bottom"
                                                    style="box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, .5), inset 0px 4px 1px 1px white, inset 0px -3px 1px 1px rgba(183,180,180,.5);background-color: #fff;border-radius: 5px;color:#333;padding: 7px 0px;width: 60px;font-size: 15px">
                                                    <b><span id="jam"></span></b>
                                                    <div>
                                                        <small>Jam</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td style="width: 20%;text-align: center">
                                                <div class="rsABlock" data-move-offset="50" data-delay="1200"
                                                    data-speed="800" data-move-effect="bottom"
                                                    style="box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, .5), inset 0px 4px 1px 1px white, inset 0px -3px 1px 1px rgba(183,180,180,.5);background-color: #fff;border-radius: 5px;color:#333;padding: 7px 0px;width: 60px;font-size: 15px">
                                                    <b><span id="menit"></span></b>
                                                    <div>
                                                        <small>Menit</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                            <td style="width: 20%;text-align: center">
                                                <div class="rsABlock" data-move-offset="50" data-delay="1200"
                                                    data-speed="800" data-move-effect="bottom"
                                                    style="box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, .5), inset 0px 4px 1px 1px white, inset 0px -3px 1px 1px rgba(183,180,180,.5);background-color: #fff;border-radius: 5px;color:#333;padding: 7px 0px;width: 60px;font-size: 15px">
                                                    <b><span id="detik"></span></b>
                                                    <div>
                                                        <small>Detik</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="rsTmb" data-rsw="632" data-rsh="500"><i class="fa fa-calendar-check-o"
                                style="margin-top: 10px;font-size: 17px"></i>
                            <div style="font-size: 10px">Acara</div>
                        </div>
                    </div>

                    <div class="rsContent slide2 bg-content">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_atas'] ?>"
                            style="width:130px;top:0px;position: absolute;right: 0px;z-index: 0;">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_bawah'] ?>"
                            style="width:130px;bottom:0px;position: absolute;left: 0px;z-index: 0;">
                        <div class="rsABlock" data-move-offset="450" data-delay="0" data-speed="1200"
                            data-move-effect="none"
                            style="background-color: rgb(255, 255, 255, 0.2);border-radius: 10px;position: absolute;top: 20px;bottom: 60px;left: 20px;right: 20px;box-shadow: 0 1px 2px 0 rgba(100, 100, 100, 0.7), 0 1px 8px 0 rgba(100, 100, 100, 0.7);z-index: 0;">
                        </div>

                        <div class="cover">
                            <div style="margin-left:-175px;width: 350px;margin-top: -265px;text-align:center">
                                <div style="width: 350px;">
                                    <div style="font-size: 24px;font-family: 'Redressed', cursive;" class="rsABlock"
                                        data-move-offset="50" data-delay="200" data-speed="800" data-move-effect="top">
                                        Peta Lokasi</div>
                                    <div style="margin-top: 15px" class="rsABlock" data-move-offset="50"
                                        data-delay="200" data-speed="800" data-move-effect="top">

                                        <img src="<?=base_url()?>/images/library/dot_9b6215.jpg"
                                            style="height:1px;width: 70px;padding:0px 10px 10px 10px;">

                                        <div style="font-size: 12px;margin-bottom: 10px"><b><?= $nama_map ?></b>
                                            <br><?= $alamat_map ?>
                                        </div>
                                        <!-- <div id="gmap_markers" class="gllpMap"></div> -->                                        
                                        <div><iframe style="border:0;width: 325px;height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d719.640588130605!2d110.81976017496466!3d-7.573838087479754!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a167b5486a9fd%3A0xb1795a1bd6dc6ad1!2sMasjid%20Raya%20Fatimah!5e0!3m2!1sid!2sid!4v1656270168236!5m2!1sid!2sid" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                                        <div style="text-align: center;margin-top:10px;z-index:1000">
                                            <a href='<?=$link_map?>' target="_blank">
                                                <button type="button" class="button" style="width:270px">
                                                    <img src="<?=base_url()?>/images/librari/gmap.png" style="width: 30px;">
                                                    <span style="position: relative;bottom: 8px">
                                                        <b>Buka di GMAPS</b>
                                                    </span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rsTmb" data-rsw="632" data-rsh="500">
                            <i class="fa fa-map-o" style="margin-top: 10px;font-size: 17px"></i>
                            <div style="font-size: 10px">Peta</div>
                        </div>
                    </div>



                    <div class="rsContent slide2 bg-content">
                        <div class="swiper-wrapper rsABlock" data-move-offset="0" data-delay="50" data-speed="1500"
                            data-move-effect="none">
                            <div class="swiper-slide">
                                <!-- FOTO ATAS -->
                                <div class="swiper-container2 gallery-top2">
                                    <div class="swiper-wrapper">
                                        <?php 
                                            foreach ($get_galeri as $data_galeri) {
                                                $gambarnya = $data_galeri['gambarnya'];
                                                ?>

                                                    <div class="swiper-slide2">
                                                        <div class="cover_galeri">
                                                            <img src="<?=$url_galeri.'/'.$gambarnya?>"
                                                                style="width: 100%;z-index: 1333;position: relative;">
                                                        </div>
                                                    </div>

                                                <?php
                                            }
                                        ?>
                                        
                                    </div>
                                </div>

                                <!-- FOTO BAWAH -->
                                <div class="swiper-container2 gallery-thumbs2">
                                    <div class="swiper-wrapper">
                                        <?php 
                                            foreach ($get_galeri as $data_galeri) {
                                                $gambarnya = $data_galeri['gambarnya'];
                                                ?>

                                                    <div class="swiper-slide2"
                                                        style="background-image:url(<?=$url_galeri.'/'.$gambarnya?>);border-radius: 3px;">
                                                    </div>

                                                <?php
                                            }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rsTmb" data-rsw="632" data-rsh="500"><i class="fa fa-photo"
                                style="margin-top: 10px;font-size: 17px"></i>
                            <div style="font-size: 10px">Galeri</div>
                        </div>


                    </div>


                    <div class="rsContent slide2 bg-content">


                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_atas'] ?>"
                            style="width:130px;top:0px;position: absolute;right: 0px;z-index: 0;">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_bawah'] ?>"
                            style="width:130px;bottom:0px;position: absolute;left: 0px;z-index: 0;">
                        <div class="rsABlock" data-move-offset="450" data-delay="0" data-speed="1200"
                            data-move-effect="none"
                            style="background-color: rgb(255, 255, 255, 0.2);border-radius: 10px;position: absolute;top: 20px;bottom: 60px;left: 20px;right: 20px;box-shadow: 0 1px 2px 0 rgba(100, 100, 100, 0.7), 0 1px 8px 0 rgba(100, 100, 100, 0.7);z-index: 0;">
                        </div>

                        <div class="cover">
                            <div style="margin-left:-175px;width: 350px;margin-top: -220px;text-align:center">
                                <div style="width: 350px;">
                                    <div style="font-size: 24px;font-family: 'Redressed', cursive;" class="rsABlock"
                                        data-move-offset="50" data-delay="200" data-speed="800" data-move-effect="top">
                                        Kado</div>
                                    <div style="font-size: 12px;margin-top: 15px" class="rsABlock" data-move-offset="50"
                                        data-delay="200" data-speed="800" data-move-effect="top">
                                        <img src="<?=base_url()?>/images/library/dot_9b6215.jpg"
                                            style="height:1px;width: 70px;padding:0px 10px 10px 10px;">
                                        <div
                                            style="text-align:center;margin-bottom: 10px;font-size:12px;padding:0px 20px">
                                            <?= $ucapan_kado ?>
                                            <br>
                                            <img src="<?=base_url()?>/images/librari/mandiri.png" style="width: 80px;"><br>
                                            <b>
                                                <?= $no_rek_1 ?><br>
                                                a/n <?= $nama_rek_1 ?>
                                            </b><br><br><br>
                                            <img src="https://lib.simanten.com/wp-content/uploads/2021/06/logo_ovo.png"
                                                style="width: 80px;"><br>
                                            <b>
                                                <?= $no_rek_2 ?><br>
                                                a/n <?= $nama_rek_2 ?>
                                            </b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rsTmb" data-rsw="632" data-rsh="500"><i class="fa fa-gift"
                                style="margin-top: 10px;font-size: 17px"></i>
                            <div style="font-size: 10px">Kado</div>
                        </div>
                    </div>


                    <div class="rsContent slide2 bg-content">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_atas'] ?>"
                            style="width:130px;top:0px;position: absolute;right: 0px;z-index: 0;">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_bawah'] ?>"
                            style="width:130px;bottom:0px;position: absolute;left: 0px;z-index: 0;">
                        <div class="rsABlock" data-move-offset="450" data-delay="0" data-speed="1200"
                            data-move-effect="none"
                            style="background-color: rgb(255, 255, 255, 0.2);border-radius: 10px;position: absolute;top: 20px;bottom: 60px;left: 20px;right: 20px;box-shadow: 0 1px 2px 0 rgba(100, 100, 100, 0.7), 0 1px 8px 0 rgba(100, 100, 100, 0.7);z-index: 0;">
                        </div>
                        <div class="cover">
                            <div style="margin-left:-175px;width: 350px;margin-top: -220px;text-align:center">
                                <div style="width: 350px;">
                                    <div style="font-size: 24px;font-family: 'Redressed', cursive;" class="rsABlock"
                                        data-move-offset="50" data-delay="200" data-speed="800" data-move-effect="top">
                                        Pencegahan Covid-19</div>
                                    <div style="font-size: 12px;margin-top: 15px" class="rsABlock" data-move-offset="50"
                                        data-delay="200" data-speed="800" data-move-effect="top">
                                        <img src="<?=base_url()?>/images/library/dot_9b6215.jpg"
                                            style="height:1px;width: 70px;padding:0px 10px 10px 10px;">
                                        <div style="margin-bottom: 10px">Acara ini akan diselenggarakan dengan
                                            mematuhi<br>protokol pencegahan penyebaran COVID-19.</div>
                                        <div style="padding:5px 25px">
                                            <table style="width:100%">
                                                <tr>
                                                    <td style="width:50px"><img
                                                            src="<?=base_url()?>/images/librari/covid/masker_black.png"
                                                            style="height:auto;width: 50px;"></td>
                                                    <td style="vertical-align:top;padding:5px 10px;text-align:left">
                                                        <br>Tamu undangan menggunakan masker.</td>
                                                </tr>
                                            </table>
                                            <table style="width:100%">
                                                <tr>
                                                    <td style="vertical-align:top;padding:5px 10px;text-align:right">
                                                        <br>Suhu tubuh normal<br>(dibawah 37,5°C)</td>
                                                    <td style="width:50px"><img
                                                            src="<?=base_url()?>/images/librari/covid/temperatur_black.png"
                                                            style="height:auto;width: 50px;"></td>
                                                </tr>
                                            </table>
                                            <table style="width:100%">
                                                <tr>
                                                    <td style="width:50px"><img
                                                            src="<?=base_url()?>/images/librari/covid/jaga_jarak_black.png"
                                                            style="height:auto;width: 50px;"></td>
                                                    <td style="vertical-align:top;padding:5px 10px;text-align:left">
                                                        <br>Jaga jarak antar orang sekitar<br>2 meter.</td>
                                                </tr>
                                            </table>
                                            <table style="width:100%">
                                                <tr>
                                                    <td style="vertical-align:top;padding:5px 10px;text-align:right">
                                                        <br>Cuci tangan menggunakan air dan sabun atau menggunakan hand
                                                        sanitizer.</td>
                                                    <td style="width:50px"><img
                                                            src="<?=base_url()?>/images/librari/covid/cuci_tangan_black.png"
                                                            style="height:auto;width: 50px;"></td>
                                                </tr>
                                            </table>
                                        </div><br>
                                        <div> Bagi para tamu undangan diharapkan mengikuti<br>protokol pencegahan
                                            COVID-19. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rsTmb" data-rsw="632" data-rsh="500"><i class="fa fa-book"
                                style="margin-top: 10px;font-size: 17px"></i>
                            <div style="font-size: 10px">Protokol</div>
                        </div>
                    </div>
                    <div class="rsContent slide2 bg-content">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_atas'] ?>"
                            style="width:130px;top:0px;position: absolute;right: 0px;z-index: 0;">
                        <img class="rsABlock" data-move-offset="450" data-delay="600" data-speed="800"
                            data-move-effect="none" src="<?= $desain['hiasan_bawah'] ?>"
                            style="width:130px;bottom:0px;position: absolute;left: 0px;z-index: 0;">
                        <div class="rsABlock" data-move-offset="450" data-delay="0" data-speed="1200"
                            data-move-effect="none"
                            style="background-color: rgb(255, 255, 255, 0.2);border-radius: 10px;position: absolute;top: 20px;bottom: 60px;left: 20px;right: 20px;box-shadow: 0 1px 2px 0 rgba(100, 100, 100, 0.7), 0 1px 8px 0 rgba(100, 100, 100, 0.7);z-index: 0;">
                        </div>
                        <div class="cover">
                            <div style="margin-left:-175px;width: 350px;margin-top: -240px;text-align:center">
                                <div style="width: 350px;">
                                    <div style="margin-top: 15px" class="rsABlock" data-move-offset="50"
                                        data-delay="200" data-speed="800" data-move-effect="top">
                                        <div style="font-size: 12px;margin-bottom: 15px;padding: 0px 20px"><br><br>
                                            <p><?= $pesan_cerita ?></p>
                                        </div>
                                        <div style="padding: 0px 20px;color:#9b6215;" class="rsABlock"
                                            data-move-offset="50" data-delay="200" data-speed="800"
                                            data-move-effect="top">
                                            <div style="font-size: 27px;font-family: '', cursive;">
                                                <?= $nama_pp ?>
                                                <span style='color:#333'>&</span>
                                                <?= $nama_pw ?>
                                            </div>
                                        </div>
                                        <div style="text-align: center;margin-top: 70px" id="btn_ucapan">
                                            <button type="button" class="button" onclick="Pesan()"
                                                style="margin-top: -42px;"><img src="<?=base_url()?>/images/librari/pen_black.png"
                                                    style="width: 30px;">
                                                <span style="position: relative;bottom: 8px">
                                                    <b>Tulis Ucapan & Kehadiran</b>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rsABlock" data-move-offset="50" data-delay="200" data-speed="800"
                            data-move-effect="bottom"
                            style="position: absolute;bottom: 60px;text-align: center;right: 0px;left: 0px">
                            <div id="berhsil"
                                style="display:none;background-color:#555;color:#fff;margin:10px 30px;padding :10px 0px;font-size:12px;box-shadow: 0 1px 2px 0 rgba(50, 50, 50, 0.5), 0 1px 8px 0 rgba(50, 50, 50, 0.7);">
                                Terimakasih,<br>atas ucapan yang Anda berikan.
                            </div>
                        </div>
                        <div class="rsTmb" data-rsw="632" data-rsh="500"><i class="fa fa-certificate"
                                style="margin-top: 10px;font-size: 17px"></i>
                            <div style="font-size: 10px">Penutup</div>
                        </div>
                    </div>... 0
                </div>
            </div>
        </div>

        <div class="" id="pesan"
            style="position: absolute;bottom: 0px;top: 0px;left: 0px;right: 0px;background-color: #ccbfb9;display: none;z-index: 1333">
            <div style="padding: 0px;position: relative;background-color: #ccbfb9;">
                <div style="padding: 20px;position: relative;">
                    <form id="form_ucapan">
                        <div style="border-radius: 15px;background-color: #dadfe5;padding: 0px 15px 10px 15px;border: 5px solid #fff;box-shadow: 0 2px 7px rgba(0, 0, 0, 0.7);   ">
                            <div style="text-align: center;color: #39404a;margin-bottom: 10px;margin-top:20px">
                                <h4><img src="<?=base_url()?>/images/librari/pen_grey.png" style="height: 35px;margin-bottom: 0px;">
                                    <div>UCAPAN & KEHADIRAN</div>
                                </h4>
                            </div>
                            <hr>
                            <table style="width: 100%;color: #39404a">
                                <tr>
                                    <td style="text-align: left;padding-top: 0px">
                                        <div><b>Nama </b></div>
                                        <input type="hidden" name="kode_pasangan" value="<?=$kode_pasangan?>">
                                        <input type="hidden" name="id_tamu" value="<?=$get_tamu['id_tamu']?>">
                                        <input required type="text" id="nama" placeholder="Ketik nama anda" value="<?= ucwords($nama_tamu); ?>" required="required">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-top: 10px">
                                        <div><b>Isi Ucapan</b></div>
                                        <label class="input">
                                            <textarea required rows="5" style="width:100%;border:1px solid #cdcdcd" id="ucapan"
                                                name="ucapan" class="form-control no-resize"
                                                placeholder="Ketik ucapan dan doa"></textarea>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-top: 10px">
                                        <div><b>Konfirmasi Kehadiran</b></div>
                                        <select id="konfirmasi" name='kehadiran' class="kehadiran form-control"
                                            style="background-color: #fff">
                                            <option value="1" selected="selected">Ya</option>
                                            <option value="0">Tidak</option>
                                            <option value="2">Belum Tahu</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;padding-top: 10px">
                                        <input type="hidden" id="jumlah_hadir" name="jumlah_hadir">
                                    </td>
                                </tr>
                            </table>
                            <div id="loading_ucapan" style="padding:0px 5px;">
                                
                            </div>
                            <hr style="margin: 15px 0px">
                            <div style="text-align: right">
                                <button onclick="BatalPesan()" type="button" class="button pull-left "
                                    style="color:#555;font-family: 'glacial', sans-serif;width:60px;height:45px;background-color:#dadfe5;border:0px solid #fff">
                                    <span>
                                        <b>Batal</b>
                                    </span>
                                </button>&nbsp;&nbsp;
                                <button type="submit" class="button add_proses" name="add_proses" id='2959'
                                    style="color:#333;background-color: #5e656f;padding: 9px 10px;height:45px;width: 120px">
                                    <span>
                                        <b>Kirim Ucapan</b>
                                    </span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <audio id="audio" src="<?=$desain['background_musik']?>" loop autoplay></audio>

        <?= $this->include('layout/undangan_script') ;?>
    </div>
</body>
</html>