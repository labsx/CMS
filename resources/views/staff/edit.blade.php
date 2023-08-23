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

              <section class="vh-100" style="background-color: #eee;">
                  <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                          <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Fill up</p>
                
                                <form class="mx-1 mx-md-8" action="/edit/{{$user->id}}" method="POST">
                                  @csrf
                                  @method('PUT')
                
                                  <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                      <input type="text"  class="form-control" name="name" placeholder="Your Full Name" value="{{$user->name}}"/>
                                      <div>
                                          @error('name')
                                           <p style="font-size: x-small"  class=" text-danger mb-3 text-right">{{$message}}</p>
                                           @enderror
                                      </div>
                                    </div>
                                  </div>

                                  <div class="d-flex flex-row align-items-center mb-4">
                                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                      <div class="form-outline flex-fill mb-0">
                                        <input type="email" name="email" class="form-control"  placeholder="Email" value="{{$user->email}}"/>
                                        <div>
                                            @error('email')
                                             <p style="font-size: x-small"  class=" text-danger mb-3 text-right">{{$message}}</p>
                                             @enderror
                                        </div>
                                      </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                      <div class="form-outline flex-fill mb-0">
                                        <input type="password" name="password" class="form-control"  placeholder="Password" value="{{$user->password}}"/>
                                        <div>
                                            @error('password')
                                             <p style="font-size: x-small"  class=" text-danger mb-3 text-right">{{$message}}</p>
                                             @enderror
                                        </div>
                                      </div>
                                    </div>
                
                                   <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                     <button type="submit" class="btn btn-primary btn-lg">Update</button>
                                   </div>
                                  </form>
                               </div>
                              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                  class="img-fluid" alt="Sample image">                
                                   </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
               </div>
</x-layout>
   