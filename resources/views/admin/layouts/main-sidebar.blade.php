<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{($setting->logo) ?? asset('assets/uploads/empty.png')}}" class="header-brand-img light-logo1"
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
            <a class="side-menu__item" href="{{route('contact.index')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">تواصل</span>
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
