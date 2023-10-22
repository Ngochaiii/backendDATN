<form method="GET">
    @csrf
    <div class="row mb-3 d-flex align-items-center">
        <div class="col-md-2">
            <input type="text" name="description" value="{{ $filters['description'] }}" class="form-control"
                placeholder="Mô tả">
        </div>
        <div class="col-md-2">
            <input type="text" name="name" value="{{ $filters['name'] }}" class="form-control"
                placeholder="Tên sản phẩm">
        </div>
        <div class="col-md-2">
            <select class="form-control" name="brand_id">
                <option value="" selected>-Nhãn hàng-</option>
                @foreach ($brands as $brand)
                    <option @if (isset($filters['brand_id'])) selected @endif value="{{ $brand->brand_id }}">
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <select class="form-control" name="cate_id">
                <option value=""selected>-Danh mục-</option>
                @foreach ($categories as $category)
                    <option @if (isset($filters['cate_id'])) selected @endif value="{{ $category->cate_id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <input type="text" name="quantity" value="{{ $filters['quantity'] }}" class="form-control"
                placeholder="Số lượng sản phẩm">
        </div>
        <div class="col-md-2">
            <input type="text" name="price" value="{{ $filters['price'] }}" class="form-control"
                placeholder="Giá sản phẩm">
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
