<div class="row ">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">

                </ol>
            </div>
            <h4 class="page-title">Create Home Page Section</h4>
        </div>
        <div class="card mb-md-0 mb-3">
            <div class="card-body ">
                @include('admin.widgets.FlashMessage')
                <form class="row g-3" method="POST" action="{{route('InAdmin.Home.Blocks.SectionCreateProcess')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-4">
                        <label class="form-label">Section Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-4">
                        <label class="form-label">Banner Title</label>
                        <input type="text" name="banner_title" class="form-control">

                    </div>
                    <div class="col-4">
                        <label for="example-color" class="form-label">Title Color</label>
                        <input class="form-control" id="example-color" type="color" name="color_code" value="#FF0000">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Link</label>
                        <input type="text" name="link" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Image (Size 295 x 672 )</label>
                        <input type="file" name="image" class="form-control" onchange="loadFile(event)">
                        <img id="output" class="mt-2" width="100" height="100"/>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </div>

    </div>
    </div>
@section('scripts')
 <script>
     $(document).ready(function() {
         $('.primary_select').niceSelect();
     });

     var loadFile = function(event) {
         var reader = new FileReader();
         reader.onload = function(){
             var output = document.getElementById('output');
             output.src = reader.result;
         };
         reader.readAsDataURL(event.target.files[0]);
     };
 </script>
@endsection
