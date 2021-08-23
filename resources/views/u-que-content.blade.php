<!-- user question -->
@extends('landing')
 @section('content')
 <div class="container">
            <div class="d-flex flex-container">
                <div class="account-nav user-account-nav">
                    <a href="">البيانات الشخصية</a>
                    <a href="" class="account-active">أسئلتي</a>
                    <a href="">محتواي</a>
                    <a href="">الساعات التطوعية</a>
                </div>

                <div class="user-content-container">
                    <!-- question card -->
                    <!-- variable: change '8 Dec 2012 - 8:12 PM' to the real date/time  -->
                    <section class="q-card">
                        <section class="q-content">
                            <section class="q-date">
                                <time dir="ltr" datetime="2012-12-08"
                                    >8 Dec 2012 - 8:12 PM</time
                                >
                                <i class="far fa-calendar"></i>
                            </section>
                            <!-- variable: change  صيغة السؤال مختصرة to the real content -->
                            <section class="q-description">
                                <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
                            </section>
                                 <!-- variable: change 13,105 to the real Data -->
                            <section class="q-interactions">
                                <p>١٣ إجابة</p>
                                <p>١٠٥ مشاهدة</p>
                            </section>
                                 <!-- variable: change "#tag1/#tag2" to the real tags -->
                            <section class="q-tags-layout">
                                <section class="q-tags">
                                    <div class="q-tag"><p>#tag1</p></div>
                                    <div class="q-tag"><p>#tag2</p></div>
                                </section>
                                <!-- show question btn -->
                                <div class="show-q-btn">
                                    <a href="">عرض السؤال</a>
                                </div>
                            </section>
                        </section>
                    </section>

                    <!-- another card -->
                    <!-- question card -->

                    <section class="q-card">
                        <section class="q-content">
                            <section class="q-date">
                                <time dir="ltr" datetime="2012-12-08"
                                    >8 Dec 2012 - 8:12 PM</time
                                >
                                <i class="far fa-calendar"></i>
                            </section>
                            <section class="q-description">
                                <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
                            </section>
                            <section class="q-interactions">
                                <p>١٣ إجابة</p>
                                <p>١٠٥ مشاهدة</p>
                            </section>
                            <section class="q-tags-layout">
                                <section class="q-tags">
                                    <div class="q-tag"><p>#tag1</p></div>
                                    <div class="q-tag"><p>#tag2</p></div>
                                </section>
                                <!-- show question btn -->
                                <div class="show-q-btn">
                                    <a href="">عرض السؤال</a>
                                </div>
                            </section>
                        </section>
                    </section>

                    <!-- another card -->
                    <!-- question card -->

                    <section class="q-card">
                        <section class="q-content">
                            <section class="q-date">
                                <time dir="ltr" datetime="2012-12-08"
                                    >8 Dec 2012 - 8:12 PM</time
                                >
                                <i class="far fa-calendar"></i>
                            </section>
                            <section class="q-description">
                                <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
                            </section>
                            <section class="q-interactions">
                                <p>١٣ إجابة</p>
                                <p>١٠٥ مشاهدة</p>
                            </section>
                            <section class="q-tags-layout">
                                <section class="q-tags">
                                    <div class="q-tag"><p>#tag1</p></div>
                                    <div class="q-tag"><p>#tag2</p></div>
                                </section>
                                <!-- show question btn -->
                                <div class="show-q-btn">
                                    <a href="">عرض السؤال</a>
                                </div>
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </div>
 @endsection