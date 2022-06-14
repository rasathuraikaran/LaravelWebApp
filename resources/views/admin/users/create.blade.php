<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create user') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="container mt-4">
                <form action="{{url('user')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Name</label>
                        <input  name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Email address</label>
                      <input  name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>


                    <button type="submit" class="btn btn-primary mb-3">Create user</button>
                  </form>



              </div>
            </div>
        </div>
    </div>
</x-app-layout>
