<div class="hor-menu hidden-sm hidden-xs">
<ul class="nav nav-tabs">
                    <li class="{{{ (General::classActivePath('settings.company.general') ? 'active' : '') }}}">
                        <a href="{{ route('settings.company.general') }}"  aria-expanded="false">
                        General Info </a>
                    </li>
                    <li class="{{{ (General::classActivePath('settings.company.legalentities') ? 'active' : '') }}}">
                        <a href="{{ route('settings.company.companyinfo') }}"  aria-expanded="true">
                        Legal Entities </a>
                    </li>

                    <li class="{{{ (General::classActivePath('settings.company.locations') ? 'active' : '') }}}">
                        <a href="{{ route('settings.company.locations') }}"  aria-expanded="true">
                        Locations </a>
                    </li>

                    <li class="{{{ (General::classActivePath('settings.company.businessunits') ? 'active' : '') }}}">
                        <a href="{{ route('settings.company.businessunits') }}"  aria-expanded="true">
                        Business Units </a>
                    </li>

                    <li class="{{{ (General::classActivePath('settings.company.department') ? 'active' : '') }}}">
                        <a href="{{ route('settings.company.department') }}"  aria-expanded="true">
                        Departments </a>
                    </li>

                    <li class="{{{ (General::classActivePath('settings.company.costcenters') ? 'active' : '') }}}">
                        <a href="{{ route('settings.company.costcenters') }}"  aria-expanded="true">
                        Cost Centers </a>
                    </li>
                    <li class="{{{ (General::classActivePath('settings.company.bands') ? 'active' : '') }}}">
                        <a href="{{ route('settings.company.bands') }}"  aria-expanded="true">
                        Bands
                        </a>
                    </li>

                    <li class="{{{ (General::classActivePath('settings.company.grades') ? 'active' : '') }}}">
                        <a href="{{ route('settings.company.grades') }}"  aria-expanded="true">
                        Pay Grades
                        </a>
                    </li>
                </ul>

  
</div>
