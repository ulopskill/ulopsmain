<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
           <!--  <a href="#" class="simple-text logo-mini">{{ _('UL') }}</a> -->
            <a href="#" class="simple-text logo-normal"><img src="assets/ulopslogo.jpeg" alt="" class="img-fluid"></a>

        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ _('Dashboard') }}</p>
                </a>
            </li>
           
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-atom"></i>
                    <p>Access Class</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-pin"></i>
                    <p>Categories</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ _('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>Payments</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-align-center"></i>
                    <p>Settings</p>
                </a>
            </li>
            <li @if ($pageSlug == 'rtl') class="active " @endif>
            
           
        </ul>
    </div>
</div>
