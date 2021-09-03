@extends('user-interfaces.landing') @section('content')
<div class="home__content-center container">
    <!-- header -->
    <header class="home__header">
        <img src="images/header-img.jpg" alt="header-image" />
        <section class="header-description">
            <h1>منصة <sup>+</sup>A</h1>
            <p>
                أول منصة تعليمية تضم أكبــر <br />
                تجمع طلابي يتشارك المعرفة
            </p>
            <div>
                <a href="" class="main-btn">إنشاء حساب</a>
                <a href="" class="main-btn">تسجيل دخول</a>
            </div>
        </section>
    </header>

    <!-- quesion search panel -->
    <h3 class="home__titles">إبحث عن سؤالك</h3>
    <section class="q-search__content">
        <input
            type="text"
            name="q-search-keywords"
            id="q-search-box"
            placeholder="كلمة دلالية"
        />
        <!-- variable: anchor leads to search-results page -->
        <a href=""> ابحث <i class="fas fa-search"></i> </a>
    </section>

    <!-- majors panel -->
    <h3 class="home__titles">التخصصات</h3>
    <section class="home__majors">
        <div class="home__majors-parent">
            <!-- variable: change image to the major icon -->
            <!-- variable: change h4 text to the major name -->
            <!-- card #1 -->
            <div class="home__majors-card">
                <img src="images/major-icon-1.svg" alt="major image" />
                <h4>الشريعة</h4>
            </div>
            <!-- card #2 -->
            <div class="home__majors-card">
                <img src="images/major-icon-1.svg" alt="major image" />
                <h4>الشريعة</h4>
            </div>
            <!-- card #3 -->
            <div class="home__majors-card">
                <img src="images/major-icon-1.svg" alt="major image" />
                <h4>الشريعة</h4>
            </div>
        </div>
    </section>

    <!-- numbers panel -->
    <h3 class="home__titles">المنصة بالأرقام</h3>
    <!-- variable: fill the numbers with the correct stats -->
    <section class="home__numbers">
        <!-- #1 -->
        <div>
            <img src="images/stats-1.svg" alt="" />
            <h4 class="number">3420</h4>
            <h4>مشترك</h4>
        </div>
        <!-- #2 -->
        <div>
            <img src="images/stats-2.svg" alt="" />
            <h4 class="number">3420</h4>
            <h4>مشاركة</h4>
        </div>
        <!-- #3 -->
        <div>
            <img src="images/stats-3.svg" alt="" />
            <h4 class="number">3420</h4>
            <h4>زائر</h4>
        </div>
        <!-- #4 -->
        <div>
            <img src="images/stats-4.svg" alt="" />
            <h4 class="number">3420</h4>
            <h4>تخصص</h4>
        </div>
    </section>
</div>
@endsection
