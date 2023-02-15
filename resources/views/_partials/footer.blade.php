<footer id="footer" class="foooter">
    <div class="footer_container">
        <div class="container">
            <div class="row_item">
                <div class="wrap_footer">
                    <div class="boxbottom posleft">
                        <div class="content_first image_contentfooterleft">
                            <img src="{{ asset('gas.id/files/images/srvphp_1662943062.png') }}">
                        </div>
                    </div>
                    <div class="boxbottom posleft">
                        <div class="content_first title_content_footer">
                            <h5 class="font-abs">Tentang GAS</h5>
                        </div>
                        <div class="bodycontent">
                            <div id="bottom_menu" class="bottom_menu">
                                <ul id="menu-menu-bottom" class="menu">
                                    <li id="menu-item-172"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172">
                                        <a href="terms.html">Terms and Conditions</a>
                                    </li>
                                    <li id="menu-item-168"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-168">
                                        <a href="privacy.html">Privacy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="boxbottom posleft">
                        <div class="content_first title_content_footer">
                            <h5 class="font-abs">Hubungi Kami</h5>
                        </div>
                        <div class="bodycontent">
                            <ul>
                                <li>
                                    <p class="font-lite pointer" id="feed" onclick="open_contactus();">Kritik dan
                                        Saran</p>
                                </li>
                            </ul>
                        </div>
                        <div class="onmodal modal_popupp modal_cts" id="contactus">
                            <div class="wrap_form_feedback" id="wrap_form_feedback">
                                <div class="open_pop">
                                    <span class="close req" id="close_pop" onclick="close_pop()">×</span>
                                    <div class="form_feedback">
                                        <h3>Beri Masukkan Untuk Kami</h3>
                                        <div class="list_form_group">
                                            <div class="form__group">
                                                <input type="input" class="form__field" placeholder="Nama Anda"
                                                    name="namefeedback" id='namefeedback' required="">
                                                <label for="name" class="form__label">Nama</label>
                                            </div>
                                            <div class="form__group">
                                                <input type="email" class="form__field" placeholder="Email Anda"
                                                    name="emailfeedback" id='emailfeedback' required="">
                                                <label for="name" class="form__label">Email</label>
                                            </div>
                                            <div class="form__group">
                                                <input type="email" class="form__field" placeholder="Subjek ku..."
                                                    name="subjectfeedback" id='subjectfeedback' required="">
                                                <label for="name" class="form__label">Subjek</label>
                                            </div>
                                            <div class="form__group">
                                                <textarea name="opinionfeedback" class="textarea fullwidth"
                                                    id="opinionfeedback" rows="10"></textarea>
                                            </div>
                                            <div class="relative rangenof txtright">
                                                <input type="button" class="bag_submit buttonmsubmit" value="Simpan"
                                                    onclick="save_feedback()">
                                                <img class="absolute none" id="adminloader"
                                                    src="{{ asset('gas.id/assets/loader.gif') }}" width="35" height="35"
                                                    alt="loader">
                                                <div class="notif rangenof txtcenter" id="mainlognotif"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="boxbottom posleft follow">
                        <div class="content_first title_content_footer">
                            <h5 class="font-abs">Ikuti Kami</h5>
                        </div>
                        <div class="bodycontent sosmedimg_footer">
                            <ul>
                                <li class="pointer"><a href="https://www.facebook.com/aplikasigas" target="_blank"><img
                                            src="{{ asset('gas.id/assets/icon_fcb.png') }}"></a></li>
                                <li class="pointer"><a href="https://www.instagram.com/aplikasigas/?hl=id"
                                        target="_blank"><img src="{{ asset('gas.id/assets/icon_ing.png') }}"></a></li>
                                <li class="pointer"><a
                                        href="https://www.youtube.com/channel/UClCgi_15elL5D8mAdSaMFig?view_as=subscriber"
                                        target="_blank"><img src="{{ asset('gas.id/assets/youtube-symbol.png') }}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="boxbottom posleft">
                        <div class="content_first title_content_footer">
                            <h5 class="font-abs">Unduh</h5>
                        </div>
                        <div class="bodycontent appsimg_footer">
                            <ul>
                                <li class="pointer"><a
                                        href="https://play.google.com/store/apps/details?id=id.gas.app&amp;hl=en"
                                        target="_blank"><img src="{{ asset('gas.id/assets/play_store.png') }}"></a></li>
                                <li class="pointer"><img src="{{ asset('gas.id/assets/app_store.png') }}"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v8.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/id_ID/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution="setup_tool" page_id="110666407506823" theme_color="#7646ff"
        logged_in_greeting="Halo, Ada yang Bisa dibantu" logged_out_greeting="Halo, Ada yang Bisa dibantu">
    </div>
</footer>