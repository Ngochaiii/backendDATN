<form method="GET">
    @csrf
    <div class="row mb-3 d-flex align-items-center">
        <div class="col-md-2">
            <select class="form-control" name="status">
                <option disabled selected>-- Trạng thái --</option>
                {!! renderArrayOptions($actions, $filters['status']) !!}
            </select>
        </div>
    </div>
    <div class="row mb-4" style="justify-content: center;">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-search mr-1"></i> Tìm kiếm
        </button>
        <a href="{{ url()->current() }}" class="btn btn-defautl">
            <i class="fa fa-rotate-left mr-1"></i> Xóa tìm kiếm
        </a>
    </div>
</form>
