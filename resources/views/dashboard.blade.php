<title>Dashboard</title>
@extends('layout')
@section('content')

<div class="dashboard-children active subjectRender">
  {{-- Heading --}}
  <div class="mb-3 d-flex justify-content-between align-items-center">
    <div class="">
      <h1 class="dashboard-heading">
        Dashboard
      </h1>
      <p class="dashboard-short-desc">Overview dashboard monitor</p>
    </div>
  </div>

  {{-- Box --}}
  <div class="row">
    <div class="col-md-3 mt-3">
      <div class="box bg-primary rounded">
        <div class="d-flex py-2">
          <div class="content ps-3 text-light">
            <div class="num fs-1 fw-bold">
              {{ count($num_of_lecturers) }}
            </div>
            <div class="module fs-5">Lecturers</div>
          </div>
          <div class="icon fs-1 ms-auto my-auto pe-3 text-light">
            <i class="fa-solid fa-user"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3">
      <div class="box bg-success rounded">
        <div class="d-flex py-2">
          <div class="content ps-3 text-light">
            <div class="num fs-1 fw-bold">
              {{ count($num_of_contacts) }}
            </div>
            <div class="module fs-5">Contacts</div>
          </div>
          <div class="icon fs-1 ms-auto my-auto pe-3 text-light">
            <i class="fa-regular fa-envelope-open"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3">
      <div class="box bg-warning rounded">
        <div class="d-flex py-2">
          <div class="content ps-3 text-light">
            <div class="num fs-1 fw-bold">
              {{ count($num_of_courses) }}
            </div>
            <div class="module fs-5">Courses</div>
          </div>
          <div class="icon fs-1 ms-auto my-auto pe-3 text-light">
            <i class="fa-solid fa-user"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-3">
      <div class="box bg-danger rounded">
        <div class="d-flex py-2">
          <div class="content ps-3 text-light">
            <div class="num fs-1 fw-bold">
              {{ count($num_of_subjects) }}
            </div>
            <div class="module fs-5">Subjects</div>
          </div>
          <div class="icon fs-1 ms-auto my-auto pe-3 text-light">
            {{-- <i class="fa-solid fa-user"></i> --}}
            <svg width="62" height="62" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12 7.5c.75-2.96 3.583-4.472 9.75-4.5a.747.747 0 0 1 .75.75v13.5a.75.75 0 0 1-.75.75c-6 0-8.318 1.21-9.75 3-1.424-1.781-3.75-3-9.75-3-.463 0-.75-.377-.75-.84V3.75A.747.747 0 0 1 2.25 3c6.167.028 9 1.54 9.75 4.5Z">
              </path>
              <path d="M12 7.5V21"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Change menu item active
    document.querySelector('#dashboard').classList.add('active');

</script>

@endsection