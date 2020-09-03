<div class="sidebar" data-color="orange">
    <div class="logo">
        <a href="https://eecegypt.com" class="simple-text logo-mini">
            EEC
        </a>
        <a href="https://eecegypt.com" class="simple-text logo-normal">
           EEC Group
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="{{url()->current() == route('admin.home') ? 'active' : ''}}">
                <a href="{{route('admin.home')}}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{url()->current() == route('categories.index') ? 'active' : ''}}">
                <a href="{{route('categories.index')}}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="{{url()->current() == route('experiences.index') ? 'active' : ''}}">
                <a href="{{route('experiences.index')}}">
                    <i class="now-ui-icons business_badge"></i>
                    <p>Experiences</p>
                </a>
            </li>
            <li class="{{url()->current() == route('locations.index') ? 'active' : ''}}">
                <a href="{{route('locations.index')}}">
                    <i class="now-ui-icons location_pin"></i>
                    <p>Locations</p>
                </a>
            </li>
            <li class="{{url()->current() == route('careers.index') ? 'active' : ''}}">
                <a href="{{route('careers.index')}}">
                    <i class="now-ui-icons business_briefcase-24"></i>
                    <p>Careers</p>
                </a>
            </li>

            <li class="{{url()->current() == route('applicants.index') ? 'active' : ''}}">
                <a href="{{route('applicants.index')}}">
                    <i class="now-ui-icons now-ui-icons users_circle-08"></i>
                    <p>Applicants</p>
                </a>
            </li>
        </ul>
    </div>
</div>
