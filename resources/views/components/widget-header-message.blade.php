<li class="nav-item dropdown">

    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-chat-left-text"></i>
        <span class="badge bg-success badge-number">{{ count($newMessages) }}</span>
    </a><!-- End Messages Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
        <li class="dropdown-header">
            You have {{ count($newMessages) }} new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        @foreach ($newMessages as $newMessage)
            <li class="message-item">
                <a href="#">
                    <img src="{{ url(data_get($newMessage, 'avatar')) }}" alt="" class="rounded-circle">
                    <div>
                        <h4>{{ data_get($newMessage, 'person') }}</h4>
                        <p>{{ data_get($newMessage, 'extract') }}</p>
                        <p>{{ data_get($newMessage, 'since') }}</p>
                    </div>
                </a>
            </li>
            <li>
                <hr class="dropdown-divider">
            </li>
        @endforeach


        <li class="dropdown-footer">
            <a href="#">Show all messages</a>
        </li>

    </ul><!-- End Messages Dropdown Items -->

</li><!-- End Messages Nav -->
