<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand">
        <img class="c-sidebar-brand-full" src="{{ asset('assets/brand/coreui-base-white.svg') }}" width="118"
            height="46" alt="CoreUI Logo">
        <img class="c-sidebar-brand-minimized" src="{{ asset('assets/brand/coreui-signet-white.svg') }}" width="118"
            height="46" alt="CoreUI Logo">
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('dashboard') }}">
                <i class="c-sidebar-nav-icon cil-square"></i> {{ __('Dashboard') }}
            </a>
        </li>
        <li class="c-sidebar-nav-title">{{ __('Theme') }}</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('posts.index') }}">
                <i class="c-sidebar-nav-icon cil-newspaper"></i> {{ __('Posts') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('categories.index') }}">
                <i class="c-sidebar-nav-icon cil-clipboard"></i> {{ __('Categories') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('tags.index') }}">
                <i class="c-sidebar-nav-icon cil-bookmark"></i> {{ __('Tags') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('projects.index') }}">
                <i class="c-sidebar-nav-icon cil-code"></i> {{ __('Projects') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('subscribers.index') }}">
                <i class="c-sidebar-nav-icon cil-contact"></i> {{ __('Subscribers') }}
            </a>
        </li>
        @can('manage.users')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.users.index') }}">
                <i class="c-sidebar-nav-icon cil-contact"></i> {{ __('Users') }}
            </a>
        </li>
        @endcan
        <li class="c-sidebar-nav-title">{{ __('Components') }}</li>
        {{-- <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href=" route('recycle') ">
                <i class="c-sidebar-nav-icon cil-trash"></i> {{ __('Recycle bin') }}
        </a>
        </li> --}}
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('telescope') }}" target="_blank">
                <i class="c-sidebar-nav-icon cil-life-ring"></i> {{ __('Telescope') }}
            </a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized">
    </button>
</div>