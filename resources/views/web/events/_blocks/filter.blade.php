<form method="GET">
    @csrf
    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" name="title" value="{{ $filters['title'] }}" class="form-control" placeholder="Tiêu đề">
        </div>
        
        <div class="col-md">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-search mr-1"></i> Tìm kiếm
            </button>
            <a href="{{ url()->current() }}" class="btn btn-defautl">
                <i class="fa fa-rotate-left mr-1"></i> Xóa tìm kiếm
            </a>
        </div>
    </div>
</form>