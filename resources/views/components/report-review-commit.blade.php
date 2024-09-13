<link rel="stylesheet" href="{{ asset('css/report.css') }}">

<div class="container">
    <div class="modal fade" id="rateModales" tabindex="-1" aria-labelledby="rateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rateModalLabel">@lang('kotaby.report')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <form action="{{ route('report.review.index', $reviewid) }}" method="POST">
                            {{ csrf_field() }}
                            <!---- content star ---->
                            <x-content-star-report />
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
