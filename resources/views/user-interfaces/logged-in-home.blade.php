@extends('user-interfaces.landing') @section('content')

<!-- variable: change the color of the border to the color of the user major -->
<div
    class="home__content-center container"
    style="border-top: #e2b357 solid 15px"
>
    <!-- header -->
    <header class="logged__header home__header">
        <section class="header-description">
            <h1 style="color: #6a7686">أهلاً محمد</h1>
            <p>
                هنا مساحتك الخاصة في المنصة <br />
                نتمنى لك تجربة تعليمية ممتعة
            </p>
            <div>
                <!-- variable: anchor leads to the search results page (بالاسئلة المطروحة في تخصص المستخدم ) -->
                <a href="http://">اجب سؤال</a>
                <!-- variable: anchor leads to add-content page -->
                <a href="">أضف محتوى</a>
            </div>
        </section>
        <section>
            <img src="images/major-header-icon.svg" alt="header-icon" />
        </section>
    </header>

    <!-- quesion search panel -->
    <h3 class="home__titles logged__titles">إبحث عن سؤالك</h3>
    <section class="q-search__content">
        <input
            type="text"
            name="q-search-keywords"
            id="q-search-box"
            placeholder="كلمة دلالية"
        />
        <!-- variable: anchor leads to the search results page  -->
        <a href="http://"> ابحث <i class="fas fa-search"></i> </a>
    </section>

    <!-- subjects panel -->
    <h3 class="home__titles logged__titles">المقررات</h3>
    <section class="logged__subject home__subject">
        <div class="logged__subject-parent home__subject-parent">
            <!-- variable: change the text of the anchor to the name of the subject -->
            <!-- card #1 -->
            <div class="logged__subject-card">
                <!-- variable: anchor leads to the search results page with the specified subject-->
                <a href="">اسم المقرر</a>
            </div>
            <!-- card #1 -->
            <div class="logged__subject-card">
                <a href="">اسم المقرر</a>
            </div>
            <!-- card #1 -->
            <div class="logged__subject-card">
                <a href="">اسم المقرر</a>
            </div>
            <!-- card #1 -->
            <div class="logged__subject-card">
                <a href="">اسم المقرر</a>
            </div>
        </div>
    </section>

    <!-- videos panel -->
    <h3 class="home__titles logged__titles">احدث الشروحات</h3>
    <section class="home__videos">
        <div class="home__videos-parent">
            <!-- #1 card -->
            <div class="home__videos-card">
                <!-- variable: change the color to the color of the user major -->
                <i class="fas fa-bookmark" style="color: bisque"></i>
                <!-- variable: change the image based on the file type,

                - text file: src="images/text-file.svg"

                - pdf file: src="images/pdf-file.svg"

                - video file: src="images/video-file.svg"

                - image file: src="images/image-file.svg"
                -->
                <img src="images/text-file.svg" alt="major image" />
                <!-- variable: عنوان السؤال -->
                <p>العنوان</p>
                <!-- variable: اسم المقرر -->
                <p><i class="fas fa-book-open"></i> برمجة</p>
                <!-- variable: التاريخ -->
                <time dir="rtl" datetime="2012-12-08"
                    ><i class="far fa-calendar"></i> 8 Dec 2012 - 8:12 PM
                </time>
                <!-- variable: المشاهدات -->
                <p><i class="far fa-eye"></i> 307 مشاهدة</p>
            </div>
        </div>
    </section>
</div>
@endsection
