@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8 py-3">
            <h3> Create Account </h3>
        </div>

        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">Enter account details</div>

                <div class="card-body">
                  

                    <form action="{{ route('accounts.store') }}" method="POST" enctype="multipart/form-data">
                     
                        @csrf

                        <div class="form-group">
                            <label>Code</label>
                            <input type="text" class="form-control w-50" name="code" placeholder="Code">
                        </div>

                         <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>

                        <div class="form-group">
                            <label>Tel</label>
                            <input type="text" class="form-control" name="tel" placeholder="Tel Contact">
                        </div>

                         <div class="form-group">
                            <label>Alt Contact</label>
                            <input type="text" class="form-control" name="alt_contact" placeholder="Alternate Contact">
                        </div>

                         <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" name="address" placeholder="Address"></textarea>
                        </div>


                         <div class="form-group">
                            <label>Image</label>
                             <input type="file" class="form-control-file" accept="image/*" name="image" capture>
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
