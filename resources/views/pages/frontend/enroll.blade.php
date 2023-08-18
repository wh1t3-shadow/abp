@include('pages.frontend.head')

<br><br><br>
<div style="width: 50%; margin: 0 auto;">
    @if (session('submit'))
    <div class="alert alert-success">
      {{ session('submit') }}
    </div>
    @endif
<form action="{{ url('enroll-submit') }}" method="POST">
@csrf
    <div class="form-group">
        <label for="course">Course</label>
        <input type="email" class="form-control" id="course" aria-describedby="emailHelp" name="course" value="{{ $data->course_title }}" readonly required>
      </div>
      <br>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" required>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
      </div>
      <br>
    <div class="form-group">
        <label for="number">Number</label>
        <input type="text" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Enter number" name="number" required >
      </div>
      <br>



    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
<br><br><br>
@include('pages.frontend.footer')
