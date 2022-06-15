<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles List') }}
        </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="container mt-4">
                  <a href="{{url()->previous()}}" class="btn btn-secondary">Back</a>
                  <a href="{{url('user/create')}}" class="btn btn-light">Create User</a>

                  <x-message/>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @if ($users->Count())
                     @foreach ($users as $user )
                    <tr>
                     <td>
                         {{$user->id}}
                     </td>

                     <td>
                        {{$user->name}}
                    </td>

                    <td>
                        {{$user->email}}
                    </td>

                    <td>
                       <a href="" class="btn btn-info"> Edit</a>
                       <a href="" class="btn btn-danger"> Delete</a>
                    </td>
                     @endforeach

                     @endif
                    </tr>
                    </tbody>
                  </table>


              </div>
            </div>
        </div>
    </div>
</x-app-layout>
