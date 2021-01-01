@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h3>Contact List</h1>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">&nbsp</th>
                  <th scope="col">&nbsp</th>
                </tr>
              </thead>
              <tbody>

              @foreach ($contacts as $contact)
                <tr>
                  <th scope="row">{{$contact->id}}</th>
                  <td>{{$contact->fName}}</td>
                  <td>{{$contact->lName}}</td>
                  <td>{{$contact->email}}</td>

                  <td><a href="{{url('delete/' . $contact->id)}}" type="submit" class="btn btn-danger" name="Delete">Delete</a></td>

                  <td><a href="{{url('edit/' . $contact->id)}}" type="submit" class="btn btn-danger" name="Edit">Edit</a></td>

                </tr>

                @endforeach

              </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
