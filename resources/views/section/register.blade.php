<!-- Star Register Area
============================================= -->
<div class="register-area bg-fixed default-padding-botom">
    <!-- Fixed BG -->
    <div class="fixed-bg" style="background-image: url(assets/img/home/IMG_7936.jpg);"></div>
    <!-- End Fixed BG -->
    <div class="container">
        <div class="reg-items">
            <div class="row">
                <div class="col-lg-5 offset-lg-2 countdown">
                    <div class="countdown-inner">
                        <h2>IELTS kursimizga yoziling</h2>
                        <p>
                            🎯  O'quvchilarimiz va ularning ota-onalar talablariga binoan General English kursiga yana qabulni ochilganini e'lon qilamiz.<br />
                            💥 Ushbu kursimiz o'quvchilar Intermediate darajasidan boshlab Advanced darajasigacha tahsil olishadi va darslar 4 yillik tajribaga ega Xalqaro toifadagi o'qituvchi Mr.Khusniddin tomonidan olib boriladi. Kursga maxsus Speaking testi orqali qabul qilinadi.
                        </p>
                        <div class="counter-class" data-date="2021-3-24 23:59:59">
                            <!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                            <div class="item-list">
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-days"></span> Kun.
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-hours"></span> Soat.
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-minutes"></span> Minut.
                                    </div>
                                </div>
                                <div class="counter-item">
                                    <div class="item">
                                        <span class="counter-seconds"></span> Sekund.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-center reg-form">
                    <div class="form-box">

                        <form action="/contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="@lang('words.name')" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="@lang('words.email')" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="@lang('words.phone')" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group comments">
                                                <textarea class="form-control" id="comments" name="comments"
                                                    placeholder="@lang('words.coment')"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">
                                        @lang('words.send')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Register Area -->