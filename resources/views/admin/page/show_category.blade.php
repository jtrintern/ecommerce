@extends('admin.index_master')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 font-weight-bolder d-flex justify-content-between">
                        <h6>All Category</h6>
                    </div>
                    <div class="row" style="margin: 16px 0 16px 12px">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Category Name">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="button button-add" class="btn btn-primary" style="padding: 8px 14px; background: #344767; color: #FFFDF4;"
                                style="background:transparent; border: 1px solid #24263D; color: #24263D;">Add
                                Category</button>
                        </div>
                    </div>
                    <div class="card-body px-1 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                            style="padding-right:0">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                            style="padding-right:0">
                                            Category Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                                            style="padding-right:0">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">
                                                <span class="text-secondary text-xs font-weight-bold">1</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">The Armored
                                                Helicopter</span>
                                        </td>
                                        <td class="text-sm">
                                            <button type="button" rel="tooltip" class="btn btn-icon btn-simple"
                                                style="background-color:#FFC93F; color:#fff; padding: 10px 15px;"
                                                data-original-title="" title="">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-icon btn-simple"
                                                style="background-color:#DD322B; color:#fff;padding: 10px 15px;"
                                                data-original-title="" title="">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
