
        <ul class="ver-inline-menu tabbable margin-bottom-25">
            <li class="{{{ (General::classActivePath('settings.company') ? 'active open' : '') }}}">
                <a href="{{ route('settings.company.general') }}" aria-expanded="false">



                    <strong>Company Settings</strong>
                    <br/> General info, Legal entities, Locations, Business units and Department settings
                </a>

            </li>
            <li class="{{{ (General::classActivePath('settings.payroll') ? 'active open' : '') }}}">
            <a href="{{ route('settings.payroll.setup') }}" aria-expanded="false">
                    <strong>Payroll</strong>
                    <br> Setup, Leave encashment, Payment and Payslip settings
                </a>
            </li>
            <li class="{{{ (General::classActivePath('settings.leaves') ? 'active open' : '') }}}">
            <a href="{{ route('settings.leaves.plans') }}" aria-expanded="false">
                    <strong>Leave & Holidays</strong>
                    <br/> Leave plans, Initial adjustments, Notify and Holidays

                </a>
            </li>
            <li class="{{{ (General::classActivePath('settings.employee') ? 'active open' : '') }}}">
            <a href="{{ route('settings.employee.jobtitles') }}" aria-expanded="false">
                    <strong>Employee</strong>
                    <br/> Job titles, Probation/Notice period and Employee number settings

                </a>
            </li>
            <li class="{{{ (General::classActivePath('settings.timesheet.costing') ? 'active open' : '') }}}">
            <a href="{{ route('settings.costing.general') }}" aria-expanded="false">
                    <strong>Timesheet</strong>
                    <br/> Approval chain, Billing classification and Invoice settings
                </a>
            </li>
            <li class="{{{ (General::classActivePath('settings.expenses') ? 'active open' : '') }}}">
            <a href="{{ route('settings.expenses.policies') }}" aria-expanded="false">
                    <strong>Expenses</strong>
                    <br/> Expense policies and Expense type settings
                </a>
            </li>
            <li class="{{{ (General::classActivePath('settings.timeattendance') ? 'active open' : '') }}}">
            <a href="{{ route('settings.timeattendance.weeklyoffs') }}" aria-expanded="false">
                    <strong>Time & Attendance</strong>
                    <br/> Weekly offs, Shifts, Tracking policies, Capture scheme and other settings

                </a>
            </li>
            <li class="{{{ (General::classActivePath('settings.onboardingexit') ? 'active open' : '') }}}">
            <a href="{{ route('settings.onboardingexit.welcomescreen') }}" aria-expanded="false">
                    <strong>Onboarding & Exit</strong>
                    <br/> Employee onboarding and exit settings
                </a>
            </li>

            <li class="{{{ (General::classActivePath('settings.roles') ? 'active open' : '') }}}">
                <a href="{{ route('settings.roles.userroles') }}" aria-expanded="false">
                    <strong>Roles & Permissions</strong>
                    <br/> Manage roles and permissions
                </a>
            </li>

            <li class="{{{ (General::classActivePath('settings.integrations') ? 'active open' : '') }}}">
                <a href="{{ route('settings.integrations.index') }}" aria-expanded="false">
                    <strong>Integrations</strong>
                    <br/> Login Integrations
                </a>
            </li>

        </ul>
