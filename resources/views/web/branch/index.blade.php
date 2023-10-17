@extends('layouts.web.default')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Them Branch </h5>
                <div class="card">
                    <div class="card-body">
                        <form  action="{{route('branch.add') }}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Ten Branch </label>
                                <input type="text" name="name" class="form-control">
                                {{-- <div id="namelHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Logo</label>
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" name="logo" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('hcss')
    <style>
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;

            .avatar-edit {
                right: 12px;
                z-index: 1;
                top: 10px;

                input {
                    display: none;

                    +label {
                        display: inline-block;
                        width: 34px;
                        height: 34px;
                        margin-bottom: 0;
                        border-radius: 100%;
                        background: #FFFFFF;
                        border: 1px solid transparent;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                        cursor: pointer;
                        font-weight: normal;
                        transition: all .2s ease-in-out;

                        &:hover {
                            background: #f1f1f1;
                            border-color: #d6d6d6;
                        }

                        &:after {
                            content: "\f040";
                            font-family: 'FontAwesome';
                            color: #757575;
                            position: absolute;
                            top: 10px;
                            left: 0;
                            right: 0;
                            text-align: center;
                            margin: auto;
                        }
                    }
                }
            }

            .avatar-preview {
                width: 192px;
                height: 192px;
                position: relative;
                border-radius: 100%;
                border: 6px solid #F8F8F8;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);

                >div {
                    width: 100%;
                    height: 100%;
                    border-radius: 100%;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                }
            }
        }
    </style>
@endpush
@push('footer_js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>
@endpush
