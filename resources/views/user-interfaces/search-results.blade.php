<!-- search result page -->
@extends('user-interfaces.landing') @section('content')
<section class="results-header">
    <h3 class="search-heading-h3" style="text-align: right">نتائج البحث</h3>
    <section class="search-filter">
        <select name="major" id="major">
            <option value="" disabled selected>التخصص</option>
            <option value="cs">علوم حاسب</option>
            <option value="is">نظم معلومات</option>
        </select>
        <select name="course" id="course">
            <option value="" disabled selected>المقرر</option>
            <option value="java">البرمجة بلغة الجافا</option>
            <option value="c++">البرمجة بلغة الC++</option>
        </select>
        <!-- variable: anchor bring the search results -->
        <a href="http://"> ابحث <i class="fas fa-search"></i> </a>
    </section>
</section>

<div class="container">
    <!-- question card -->
    <section class="q-card">
        <section class="q-content">
            <section class="q-date">
                <!-- variable: change the date -->
                <time dir="ltr" datetime="2012-12-08"
                    >8 Dec 2012 - 8:12 PM</time
                >
                <i class="far fa-calendar"></i>
            </section>
            <section class="q-description">
                <!-- variable: change the question -->
                <p>صيغة السؤال مختصرة صيغة السؤال مختصرة</p>
            </section>
            <section class="q-interactions">
                <!-- variable: change the number of answers -->
                <p>١٣ إجابة</p>
                <!-- variable: change the number of views -->
                <p>١٠٥ مشاهدة</p>
            </section>
            <section class="q-tags-layout">
                <section class="q-tags">
                    <!-- variable: change the tags -->
                    <div class="q-tag"><p>#tag1</p></div>
                    <div class="q-tag"><p>#tag2</p></div>
                </section>
                <!-- show question btn -->
                <div class="show-q-btn">
                    <!-- variable: anchor leads to the view-content page -->
                    <a href="">عرض السؤال</a>
                </div>
            </section>
        </section>
    </section>

    <!-- add a question button -->
    <section class="add-q">
        <h3 class="search-heading-h3">لم تجد سؤالك المطلوب ؟</h3>
        <!-- variable: anchor leads to the add-content page  -->
        <a href="" class="main-btn">اضف سؤال</a>
    </section>
</div>
@endsection
