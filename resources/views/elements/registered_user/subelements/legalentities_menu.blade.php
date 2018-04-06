<div class="hor-menu hidden-sm hidden-xs">
<ul class="nav nav-tabs">

        <li class="{{{ (General::classActivePath('settings.company.legalentities.companyinfo') ? 'active' : '') }}}">
        <a href="{{ route('settings.company.companyinfo') }}"  aria-expanded="true">
            Company Info </a>
        </li>

        <li class="{{{ (General::classActivePath('settings.company.legalentities.itinfo') ? 'active' : '') }}}">
            <a href="{{ route('settings.company.itinfo') }}"  aria-expanded="true">
            IT Info </a>
        </li>
        <li class="{{{ (General::classActivePath('settings.company.legalentities.pfinfo') ? 'active' : '') }}}">
            <a href="{{ route('settings.company.pfinfo') }}"  aria-expanded="true">
            PF Info </a>
        </li>

        <li class="{{{ (General::classActivePath('settings.company.legalentities.esiinfo') ? 'active' : '') }}}">
            <a href="{{ route('settings.company.esiinfo') }}"  aria-expanded="true">
            ESI Info </a>
        </li>

        <li class="{{{ (General::classActivePath('settings.company.legalentities.ptinfo') ? 'active' : '') }}}">
            <a href="{{ route('settings.company.ptinfo') }}"  aria-expanded="true">
            PT Info </a>
        </li>
 </ul>
</div>
