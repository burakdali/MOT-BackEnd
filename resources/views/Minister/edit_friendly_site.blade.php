<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
    <title>friendly site</title>
</head>
<body>
        <div class="row">
            <div class="container mt-2">
              <div class="row">
                    <div class="col-lg-12 margin-tb">
                         <div class="pull-left mb-2" >
                             <h2 >edit  links</h2>
                        </div>
                    <div class="pull-right">
                         <a class="btn btn-primary"  href="{{  route('Friendly_Site.index') }}"> Back</a>
                    </div>
                </div>
            </div>
                            <form action="{{route('Friendly_Site.update',$FriendlySite->id )}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                     <div class="panel panel-default" style="width: 500px; padding: 10px; margin: 10px">
                                                 <label>links </label>
                                                     <div class="input-group">
                                                        <input type="text" name="link" value="{{ $FriendlySite->link }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                                <label>image </label>
                                                     <div class="input-group">
                                                        <input type="file" name="image" value="{{ $FriendlySite->image }}" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                    </div>
                                                @foreach (config('app.languages') as $key=>$lang)
                                                    <h3>{{ $lang }} </h3>
                                                    <div class="form-group">
                                                            <label>name_{{ $key }} </label>
                                                            <div class="input-group">
                                                                <input type="text" name="{{$key}}[name]" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
                                                            </div>
                                                    </div>
                                                    <br>
                                                @endforeach
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
