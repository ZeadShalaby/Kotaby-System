<!-- Modal Structure -->
<div class="modal fade" id="sidebarModal" tabindex="-1" role="dialog" aria-labelledby="sidebarModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-right" role="document">
        <div class="modal-content">
            <div class="modal-header custom-modal-header">
                <h5 class="modal-title" id="sidebarModalLabel">@lang('kotaby.settings')</h5>
                <button type="button" class="close custom-close-button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset('images/img/user.png') }}" alt="Profile Image" class="rounded-circle mb-3 mx-auto"
                    style="height: 100px;width: 100px;">
                <h5 class="mb-3">Nada Nasr</h5>
                <ul class="list-group small align-items-start text-left">
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="{{ route('users.index') }}">

                            <i class="fas fa-user icon-margin"></i>
                            <span>@lang('kotaby.profile') </span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="{{ route('books.index') }}" style="text-decoration: none">

                            <i class="fas fa-book icon-margin"></i>
                            <span>@lang('kotaby.mybooks')</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="{{ route('favourite.index') }}" style="text-decoration: none">

                            <i class="fas fa-star icon-margin"></i>
                            <span>@lang('kotaby.common')</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="{{ route('reviews.index') }}" style="text-decoration: none">

                            <i class="fas fa-star icon-margin"></i>
                            <span>@lang('kotaby.favourites')</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="{{ Auth::check() && Auth::user()->id ? route('users.edit', Auth::user()->id) : '#' }}">

                            <i class="fas fa-cog icon-margin"></i>
                            <span>@lang('kotaby.edit')</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex align-items-center cursor-pointer">
                        <a href="{{ route('users.logout') }}">
                            <i class="fas fa-sign-out-alt icon-margin"></i>
                            <span>@lang('kotaby.sign out')</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
