<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{ ($setting->logo) }}" class="header-brand-img light-logo1"
                 alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('adminHome')}}">
                <i class="icon icon-home side-menu__icon"></i>
                <span class="side-menu__label">الرئيسية</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">المشرفين</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('careers.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">حياة مهنية</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('categories.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">فئات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('subcategories.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">فئات فرعية</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('services.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">الخدمات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('sliders.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">السلايدر</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('about_us.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">معلومات عنا</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('faqs.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">الأسئلة الشائعة</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('post.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">المنشورات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('product.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">المنتجات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('contact.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">تواصل</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('news_letter.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">النشرة الإخبارية</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('quotes.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">الاقتباسات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('background_image.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">خلفيات الصفحات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('settings.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">الاعدادات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.logout')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">تسجيل الخروج</span>
            </a>
        </li>

    </ul>
</aside>
