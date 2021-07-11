@extends('layouts.admin')
@section('title','Dasboard')
@section('header','Dasboard')
@section('content')
      <!-- Main Content -->
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-hotel"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Paket Travel</h4>
              </div>
              <div class="card-body">
                10
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="fas fa-dollar-sign"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Transaksi</h4>
              </div>
              <div class="card-body">
                42
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="fas fa-tasks"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Pending</h4>
              </div>
              <div class="card-body">
                1,201
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-check-circle"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Sukses</h4>
              </div>
              <div class="card-body">
                47
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-primary">View All</a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Author</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Introduction Laravel 5
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-weight-600"><img src="{{ url('assets/img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Laravel 5 Tutorial - Installation
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-weight-600"><img src="{{ url('assets/img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Laravel 5 Tutorial - MVC
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-weight-600"><img src="{{ url('assets/img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Laravel 5 Tutorial - Migration
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-weight-600"><img src="{{ url('assets/img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Laravel 5 Tutorial - Deploy
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-weight-600"><img src="{{ url('assets/img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Laravel 5 Tutorial - Closing
                        <div class="table-links">
                          in <a href="#">Web Development</a>
                          <div class="bullet"></div>
                          <a href="#">View</a>
                        </div>
                      </td>
                      <td>
                        <a href="#" class="font-weight-600"><img src="{{ url('assets/img/avatar/avatar-1.png') }}" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
