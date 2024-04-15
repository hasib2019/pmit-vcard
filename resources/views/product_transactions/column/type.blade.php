{{-- {{ $row->type == 1 ? 'Stripe' : 'PayPal' }} --}}
{{ $row->type == 1 ? 'Stripe' : ($row->type == 2 ? 'PayPal' : '') }}

@if ($row->status == App\Models\Product::PENDING)
    <div class="btn-group">
        <div>
            <div class="btn-group">
                <button type="button" class="btn btn-warning text-dark dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    {{ __('messages.common.pending') }}
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <form action="{{ route('update-product-status', ['id' => $row->id, 'status' => App\Models\Product::APPROVED]) }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">{{ __('messages.common.approve') }}</button>
                        </form>
                    </li>
                    <li>
                        <form action="{{ route('update-product-status', ['id' => $row->id, 'status' => App\Models\Product::REJECT]) }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">{{ __('messages.common.reject') }}</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@elseif ($row->status == App\Models\Product::REJECT)
    <span class="badge bg-light-danger">{{ __('messages.common.rejected') }}</span>
@elseif($row->status == App\Models\Product::APPROVED &&  $row->type == 3)
    <span class="badge bg-light-success">{{ __('messages.common.approved') }}</span>
@endif
