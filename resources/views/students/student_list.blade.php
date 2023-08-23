<x-layout>
    <div id="content-wrapper" class="d-flex flex-column mt-4">
        <div id="content">
            <nav class=" mb-4">
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                         
                              <div>
                                  @if (session()->has('message'))
                                      <div x-data="{ show: true }"
                                          x-init="setTimeout(() => show = false, 3000)"
                                          x-show="show"
                                          class="fixed bg-success text-white py-1 px-2 bottom-3 right-3 text-sm ">
                                          <p class="mt-3">{{session()->get('message')}}</p>
                                      </div>
                                  @endif
                              </div>
                          </div>

             <div class="row">
                <table class="table table-bordered">
                  </table><table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Guardian</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($students as $student)
                          <td>{{$student->name}}</td>
                          <td>{{$student->address}}</td>
                          <td>{{$student->contact}}</td>
                          <td>{{$student->age}}</td>
                          <td>{{$student->email}}</td>
                          <td>{{$student->guardian}}</td>
                          <td class=""><a class="btn btn-primary btn-sm col-11 mt-0" href="{{$student->id}}" role="button">Edit</a>           
                              <form action="{{$student->id}}" method="POST" class="mt-1 mb-0 ">
                                @csrf
                                @method ('delete')  
                                  <button type="submit" class="btn btn-danger btn-sm" role="button">Delete</button>
                              </form> 
                           </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                  <div class="">
                      {{$students->links()}}
                  </div>
        </div>
</x-layout>
     