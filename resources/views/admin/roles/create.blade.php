<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Role') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="container mt-4">
                  <x-message/>
                <form action="{{url('role')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Name</label>
                        <input  name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Role">
                      </div>
                    <h2>Group name</h2>
                      <div class="form-check">
                        <input class="form-check-input" name="permission_ids[]" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Post
                        </label>
                      </div>

                    <button type="submit" class="btn btn-primary mb-3">Create Role</button>
                  </form>



              </div>
            </div>
        </div>
    </div>
</x-app-layout>
