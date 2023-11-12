<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
    <title>links</title>
</head>
<body>
        <div class="row">
            <div class="container mt-2">
              <div class="row">
                    <div class="col-lg-12 margin-tb">
                         <div class="pull-left mb-2" >
                             <h2 >Add  links</h2>
                        </div>
                    <div class="pull-right">
                         <a class="btn btn-primary"  href="{{  route('Links.index') }}"> Back</a>
                    </div>
                </div>
            </div>

                            <form action="{{route('Links.update',$link->id )}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                     <div class="panel panel-default" style="width: 500px; padding: 10px; margin: 10px">
                                                 <label>facebook </label>
                                                     <div class="input-group">
                                                        <input type="email" name="facebook" value="{{ $link->facebook }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                                <label>instagram </label>
                                                     <div class="input-group">
                                                        <input type="email" name="instagram" value="{{ $link->instagram }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                                <label>x </label>
                                                     <div class="input-group">
                                                        <input type="email" name="x" value="{{ $link->x }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                                 <label>linked_in </label>
                                                     <div class="input-group">
                                                        <input type="email" name="linked_in" value="{{ $link->linked_in }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                                <label>location </label>
                                                     <div class="input-group">
                                                        <input type="email" name="location" value="{{ $link->location }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                                <label>phone_number </label>
                                                     <div class="input-group">
                                                        <input type="number" name="phone_number" value="{{ $link->phone_number }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                                <label>email </label>
                                                     <div class="input-group">
                                                        <input type="email" name="email" value="{{ $link->email }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                 </div>
                            </div>
                            </form>
         </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>
</html>
