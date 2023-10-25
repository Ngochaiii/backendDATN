<form method="GET">
    @csrf
    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" name="name" value="{{ $filters['name'] }}" class="form-control" placeholder="Tên sản phẩm">
        </div>
        <div class="col-md-2">
            <input type="text" name="price" value="{{ $filters['price'] }}" class="form-control" placeholder="giá">
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
