@extends('layout.main')
@section('container')

<div class="main-content app-content">
  <div class="container-fluid">
    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
      <div>
        <h1 class="page-title fw-medium fs-18 mb-2">Project Timeline</h1>
        <div class="">
          <nav>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{ route('timeline') }}">Timeline</a></li>
              <li class="breadcrumb-item"><a href="{{ route('timeline') }}">Main Project</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-12">
        <div class="card custom-card">
          <form action="/patch-timeline" method="POST">
            @csrf
            <div class="card-header justify-content-between">
              <div class="card-title">
                Create Timelines
              </div>
            </div>
            <div class="card-body">
              <div class="row gy-4">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Project Title">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="color" class="form-label">Color:</label>
                    <select class="form-select" name="color" aria-label="Default select example">
                        <option selected>Select Color
                        </option>
                        <option value="primary">primary</option>
                        <option value="secondary">secondary</option>
                        <option value="special">special</option>
                        <option value="success">success</option>
                        <option value="warning">warning</option>
                        <option value="info">info</option>
                        <option value="pink">pink</option>
                        <option value="purple">purple</option>
                        <option value="teal">teal</option>
                        <option value="danger">danger</option>
                    </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="4" placeholder="Project Short Description"></textarea>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="icon" class="form-label">Icon</label>
                    <textarea class="form-control" name="icon" id="icon" rows="4" placeholder="SVG Icon"></textarea>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="date" class="form-label">Type Date</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label for="time" class="form-label">Type Time</label>
                    <input type="time" class="form-control" name="time" id="time">
                </div>
              </div>
            </div>
            <div class="card-footer mt-2">
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-secondary me-md-2 btn-wave" type="button">Back</button>
                  <button class="btn btn-special btn-wave" type="submit">Add New Timeline</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection