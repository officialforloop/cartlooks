<a href="#" class="pl-3 py-2" id="general_menu" data-toggle="collapse" data-target="collapseGeneral"
    aria-expanded="false" aria-controls="collapseGeneral" style="cursor: pointer;">
    <i class="icofont-ui-settings mr-2 black"></i> <span class="black">{{ translate('General') }}</span>
</a>

<div id="collapseGeneral" class="pl-2 collapse">
    <ul class="mb-0" style="list-style: none">
        <li class="py-1">
            <a class="black theme_option_link" id="back_to_top" href="#" data-menu="general_menu">
                <span>{{ translate('Back To Top') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="theme_color" href="#" data-menu="general_menu">
                <span>{{ translate('Theme Color') }}</span>
            </a>
        </li>
    </ul>
</div>

<a class="pl-3 py-2 black " id="typography_menu" data-toggle="collapse" data-target="collapseTypography"
    aria-expanded="false" aria-controls="collapseTypography" style="cursor: pointer;">
    <i class="icofont-font mr-2 black"></i> <span class="black">{{ translate('Typography') }}</span>
    <span class="caret mr-auto"></span>
</a>

<div id="collapseTypography" class="pl-2 collapse">
    <ul class="mb-0" style="list-style: none">
        <li class="py-1">
            <a class="black theme_option_link" id="body_typography" href="#" data-menu="typography_menu">
                <span>{{ translate('Body Typography') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="paragraph_typography" href="#"data-menu="typography_menu">
                <span>{{ translate('Paragraph Typography') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="heading_typography" href="#" data-menu="typography_menu">
                <span>{{ translate('Heading Typography') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="menu_typography" href="#" data-menu="typography_menu">
                <span>{{ translate('Menu Typography') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="button_typography" href="#" data-menu="typography_menu">
                <span>{{ translate('Button Typography') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="custom_fonts" href="#" data-menu="typography_menu">
                <span>{{ translate('Custom Fonts') }}</span>
            </a>
        </li>
    </ul>
</div>

<a class="pl-3 py-2 black" id="header_menu" data-toggle="collapse" data-target="collapseHeader" aria-expanded="false"
    aria-controls="collapseHeader" style="cursor: pointer;">
    <i class="icofont-credit-card mr-2 black"></i> <span class="black">{{ translate('Header') }}</span>
    <span class="caret mr-auto"></span>
</a>

<div id="collapseHeader" class="pl-2 collapse">
    <ul class="mb-0" style="list-style: none">
        <li class="py-1">
            <a class="black theme_option_link" id="header" href="#" data-menu="header_menu">
                <span>{{ translate('Header Option') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="header_logo" href="#" data-menu="header_menu">
                <span>{{ translate('Header Logo') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="menu" href="#" data-menu="header_menu">
                <span>{{ translate('Menu') }}</span>
            </a>
        </li>
    </ul>
</div>
<!--Topbar banner-->
<a class="pl-3 py-2 black theme_option_link" id="topbar_banner" href="#"><i class="icofont-barricade"></i>
    <span>{{ translate('Topbar Banner') }}</span>
</a>
<!--End topbar banner-->
<!--Website popup-->
<a class="pl-3 py-2 black theme_option_link" id="website_popup" href="#"><i class="icofont-billboard"></i>
    <span>{{ translate('Website Popup') }}</span>
</a>
<!--End Website popup-->

<a class="pl-3 py-2 black" id="blog_menu" data-toggle="collapse" data-target="collapseBlog" aria-expanded="false"
    aria-controls="collapseBlog" style="cursor: pointer;">
    <i class="icofont-blogger mr-2 black"></i> <span class="black">{{ translate('Blog') }}</span>
    <span class="caret mr-auto"></span>
</a>

<div id="collapseBlog" class="pl-2 collapse">
    <ul class="mb-0" style="list-style: none">
        <li class="py-1">
            <a class="black theme_option_link" id="blog" href="#" data-menu="blog_menu">
                <span>{{ translate('Blog Option') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="single_blog_page" href="#" data-menu="blog_menu">
                <span>{{ translate('Single Blog Page') }}</span>
            </a>
        </li>
        <li class="py-1">
            <a class="black theme_option_link" id="sidebar_options" href="#" data-menu="blog_menu">
                <span>{{ translate('Sidebar Options') }}</span>
            </a>
        </li>
    </ul>
</div>

<a class="pl-3 py-2 black theme_option_link" id="page_404" href="#"><i class="icofont-ban"></i>
    <span>{{ translate('404 Page') }}</span></a>

<a class="pl-3 py-2 black theme_option_link" id="subscribe" href="#"><i class="icofont-eject"></i>
    <span>{{ translate('Subscribe') }}</span></a>

<a class="pl-3 py-2 black theme_option_link" id="social" href="#"><i class="icofont-users-social"></i>
    <span>{{ translate('Social') }}</span></a>

<a class="pl-3 py-2 black theme_option_link" id="footer" href="#"><i class="icofont-notepad"></i>
    <span>{{ translate('Footer') }}</span></a>

<a class="pl-3 py-2 black theme_option_link" id="custom_css" href="#"><i class="icofont-file-css"></i>
    <span>{{ translate('Custom Css') }}</span>
</a>
<a class="pl-3 py-2 black theme_option_link" id="custom_js" href="#"><i class="icofont-file-javascript"></i>
    <span>{{ translate('Custom Script') }}</span>
</a>
<!--GDPR-->
<a class="pl-3 py-2 black theme_option_link" id="gdpr" href="#"><i class="icofont-certificate"></i>
    <span>{{ translate('GDPR (Cookies Consent)') }}</span>
</a>
<!--End GDPR-->
