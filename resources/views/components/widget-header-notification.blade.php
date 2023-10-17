<li class="nav-item dropdown">

    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number">{{ count($notifications) }}</span>
    </a><!-- End Notification Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
            You have {{ count($notifications) }} new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        @foreach ($notifications as $notification)
            <li class="notification-item">

                <x-icon :name="data_get($notification, 'icon')" :color="data_get($notification, 'color')"></x-icon>
                <div>
                    <h4>{{ data_get($notification, 'title') }}</h4>
                    <p>{{ data_get($notification, 'extract') }}</p>
                    <p>{{ data_get($notification, 'since') }}</p>
                </div>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
        @endforeach

  
        <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
        </li>

    </ul><!-- End Notification Dropdown Items -->

</li><!-- End Notification Nav -->
