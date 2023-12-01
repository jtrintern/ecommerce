@extends('admin.index_master')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 font-weight-bolder d-flex justify-content-between">
                        <h6>Add Products</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2" style="margin: 20px 24px 20px 24px">
                        <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name" style="font-size:12px; color: #344767;">Product Name</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name" style="font-size:12px; color: #344767;">Category</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name" style="font-size:12px; color: #344767;">Price</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name" style="font-size:12px; color: #344767;">Stock</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" style="font-size:12px; color: #344767;">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-12 mt-2">
                                    <div class="form-group"
                                        style="border:1px solid #717E95; border-style: dashed; padding: 20px">
                                        <input style="width: 100%;" type="file" id="fileUpload" name="images[]" multiple
                                            accept="image/*">
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-12 mt-2 mb-3 add-image"
                                    onclick="document.getElementById('imgUpload').click()" style="cursor: pointer;">
                                    <div id="dropBox" class="form-group"
                                        style="border:1px solid #717E95; border-radius: 10px; border-style: dashed; padding: 20px 20px 0; margin:0;">
                                        <input type="file" id="imgUpload" multiple accept="image/*"
                                            onchange="filesManager(this.files)">
                                        <label class="button" for="imgUpload"><i class="fa-regular fa-image"></i> Add
                                            Images (0/9)</label>
                                        <div id="gallery"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button button-add"
                                        onclick="location.href='{{ route ('admin.add.product') }}'"
                                        class="btn btn-primary"
                                        style="background:#24263D; color: #FFF; width:100%; box-shadow: none; margin: 10px 0">Add
                                        Products</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
